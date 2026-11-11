<?php

namespace App\Http\Controllers;
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

use App\Mail\WebinarMail;
use App\Models\WebinarDetail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;


class MailController extends Controller
{   
    public function isInputSafe($string){
    
        if (empty($string)){
            return false;
        }
        
        $originalString = $string;
        
        $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        
        $string = strip_tags($string);
        
        $string = preg_replace('/[^\w\s\.\,\!\?\-]/', '', $string);
    
        $string = trim(preg_replace('/\s+/', ' ', $string));
        
        $spamKeywords = ["youtube" , "unsubscribe" , "facebook" , "https" , "http" , "//" , "@" , "www" , ".com" , "SEO"];    
        
        $string = strtolower($string); // Convert to lowercase for comparison
        
        foreach ($spamKeywords as $keyword) {
            if (strpos($string, strtolower($keyword)) !== false) {
                return false; // Contains spam
            }
        }
        
        return true;
        
        
    }
    
    public function isValidEmail($email) {
        
        if (empty($email)){
            return false;
        }
    
        $sanitized = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
        return filter_var($sanitized, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    public function isValidPhone($phone) {
        
        if (empty($phone)){
            return false;
        }
        
        $pattern = '/^(\d{3}-?\d{3}-?\d{4})$/';
        return preg_match($pattern, $phone) === 1;
    }
    
    public function contactMail(Request $request) {
        try {
            $element_array = array(
                'fname' => 'required',
                'email' => ['required', 'email:rfc,dns'],
                'number' => ['required', 'digits:10'],
                'country' => 'required',
                'referer' => 'required'
            );
            $validator = Validator::make($request->all(), $element_array, [
                'fname.required' => 'Please enter first name ',
                'email.required' => "Please enter unique email address",
                'number.required' => "Please enter valid number",
                'country.required' => "Please enter country",
                'referer.required' => "Please select one option",

            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            
            // Verify reCAPTCHA
            $recaptchaResponse = $request->input('g-recaptcha-response');
            if (empty($recaptchaResponse)) {
                return redirect()->back()->withErrors(['g-recaptcha-response' => 'Please complete the reCAPTCHA verification.'])->withInput();
            }
            
            $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $recaptchaResponse
            ]);
            $response = curl_exec($ch);
            curl_close($ch);
            
            $responseKeys = json_decode($response);
            
            if (!$responseKeys->success) {
                return redirect()->back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
            }
            
            $name = $request->input('fname') . ' ' . $request->input('lname');
            $number = $request->input('number');
            $country = $request->input('country');
            $referer = $request->input('referer');
            $message = $request->input('message');
            
            if ($referer == "By Referer") {
                $referer_name = $request->input('referer_name');
            } else {
                $referer_name = $request->input('other');
            }
            $mailid = $request->input('email');
            
            $subject = 'Inquiry';
            $data = array('name' => $name, 'number' => $number, 'country' => $country, 'email' => $mailid, 'subject' => $subject, 'find' => $referer, 'Referer Name' => $referer_name, 'message' => $message);
            // Mail::send('contact@intelliconsultation.com', $data, function ($message) use ($data) {
            // Mail::send('l.k.aariwala@gmail.com', $data, function ($message) use ($data) {});
            
            if (
                $this->isInputSafe($subject) &&
                $this->isInputSafe($name) &&
                $this->isInputSafe($country) &&
                $this->isInputSafe($referer) &&
                $this->isInputSafe($referer_name) &&
                $this->isInputSafe($number) &&
                
                $this->isValidPhone($number) &&
                $this->isValidEmail($mailid)
            ) {
            
                Mail::to(env("MAIL_FROM_ADDRESS"))->send(new ContactMail($data));
            }
            
            
            return redirect()->back()->with('Successfully Send Your Mail Id.');
            // return redirect()->back()->with('message','Successfully Send Your Mail Id.');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveWebinarDetail(Request $request)
    {
        try {
            $element_array = array(
                'fname' => 'required',
                'lname' => 'required',
                'email' => ['required', 'email:rfc,dns','unique:webinar_details'],
                'referer' => 'required',
                'country' => 'required',
                'city' => 'required',

            );
            $validator = Validator::make($request->all(), $element_array, [
                'fname.required' => 'Please enter first name ',
                'lname.required' => 'Please enter last name ',
                'email.required' => "Please enter email address",
                'email.unique' => "You are already register for this event",
                'referer.required' => "Please select one option",
                'country.required' => "Please enter country",
                'city.required' => "Please enter city",
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $data = new WebinarDetail();
            $data->firstName = $request->input("fname");
            $data->lastName = $request->input("lname");
            $data->email = $request->input("email");
            $data->country = $request->input("country");
            $data->city = $request->input("city");
            $data->referer = $request->input("referer");
            $data->refererName = ($data->referer == "Referral" ? ($request->input("referer_name") ?? null) : "");
            $data->description = $request->input("message");
            $data->receiveUpdate	 = $request->input("signup");
            $data->save();

            $subject = '加拿大移民須知線上分享會確認信';
            $email_data = array('name' =>  ($data->firstName." ".$data->lastName), 'email' => $data->email, 'subject' => $subject);
              if (
                $this->isInputSafe($data->firstName) &&
                $this->isInputSafe($data->lastName) &&
                $this->isInputSafe($subject) &&

                $this->isValidEmail($data->email)
            ) {
                Mail::to($data->email)->send(new WebinarMail($email_data));
            }
            return redirect()->back()->with('success', '登記成功！有關活動資料已轉發到您登記的電郵。');;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
