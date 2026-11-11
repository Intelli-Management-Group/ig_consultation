<?php

namespace App\Console\Commands;

use App\Mail\WebinarReminderMail;
use App\Models\WebinarDetail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class WebinarReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webinar:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '24-hour reminder email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $users = WebinarDetail::get();
            foreach (!$users->isEmpty() ? $users : array() as $u){
                $subject = '線上分享會提醒：您參與的加拿大移民須知將於2021年8月7日在線上舉行';
                $email_data = array('name' =>  ($u->firstName." ".$u->lastName), 'email' => $u->email, 'subject' => $subject);
                Mail::to($u->email)->send(new WebinarReminderMail($email_data));
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
