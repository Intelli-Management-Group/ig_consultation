@extends('layout')
@section('content')
    <?php   

        if (isset($_SERVER['QUERY_STRING'])) {

            $languageParam = explode("=", $_SERVER['QUERY_STRING']);
        } else {
            $languageParam = [];
        }
        
        $language = '';
        
        if (isset($languageParam[1])){
            
            $language = $languageParam[1];
            
        }
        
        else{
            $language = 'english';
        }
    
    ?>
    
         <!-- Slider main -->
         <section class="slider">
    <div class="b-main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="650px" data-slider-arrows="true" data-slider-buttons="false">
        <div class="sp-slides">
            <!-- Slide 1-->
            <div class="sp-slide">
                <div class="b-main-slider__item b-main-slider__item_2">
                    <img class="sp-image" src="{{asset('images/home/banner_home_1.jpg')}}" alt="slider" width="c100%" />
                    <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400">
                        <div class="carousel-text">
                            <div class="slide-info-left">
                                <h2>Realize Your Dream Of<br/>Living In Canada</h2>
                                <h4>We provide professional advice working diligently with you every step of the way.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2-->
            <div class="sp-slide">
                <div class="b-main-slider__item b-main-slider__item_2">
                    <img class="sp-image" src="{{asset('images/home/banner_home_2.jpg')}}" alt="slider" />
                    <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400">
                        <div class="carousel-text">
                            <div class="slide-info-right">
                                <h2>A Team of Experienced and<BR>Dedicated Consultants</h2>
                                <h4>We are customer oriented and trustworthy. All consultations are free and confidential.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            <div class="sp-slide">
                <div class="b-main-slider__item b-main-slider__item_2">
                    <img class="sp-image" src="{{asset('images/home/banner_home_3.jpg')}}" alt="slider" />
                    <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400">
                        <div class="carousel-text">
                            <div class="slide-info-center">
                                <h2>Realistic Solutions Tailored to<BR>Your Immigration Plan</h2>
                                <h4>We assess your immigration case and offer strategic and effective solutions specifically for your unique needs.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end b-main-slider -->
</section>
                  <!-- Block-box -->
         <div class="block-box d-flex flex-md-column justify-content-between  flex-lg-row flex-sm-column">
            <div class="box-1 d-flex flex-lg-row flex-sm-column flex-md-column">
               <div class="box-span d-flex box-shadow">
                  <div class="box-icon-1"><img src="images/home/icon_book.png" alt=""></div>
                  <div class="box-text">
                      <a href="{{ url('/contactus') .'?'. http_build_query(['language' => $language]) }}"><div class="box-text-second">Appointment</div></a>
                      <div class="box-text-first">Book your appointment now and talk to our team of friendly professional consultants</div>
                  </div>
               </div>
               <div class="box-span d-flex box-shadow">
                  <div class="box-icon-1"><img src="images/home/icon_consultation.png" alt=""></div>
                  <div class="box-text-2">
                      <a href="#section-11"><div class="box-text-second">Consultation</div></a>
                      <div class="box-text-first">Tell us your situation and we will tailor a solution suited just for your immigration plans</div>
                  </div>
               </div>
            </div>
            <div class="box-2 d-flex">
               <div class="d-flex box-2-span align-items-center">
                  <div class="box-text-right">
                      Solutions Based on Your Assessment Results and Needs
{{--                      <p class="">--}}
{{--                          免費講座--}}
{{--                          <br/>加拿大移民須知線上分享會<br/>--}}
{{--                          <span style="font-size: 11pt;"> 2021年8月7日 （星期六）;--}}
{{--                          晚上 11點 – 12 點 （香港時間）</span>--}}
{{--                      </p>--}}
{{--                      <a href="{{ url('/webinar_registration') }}" class="text-white webinar-link">點擊此處登記<i class="fa fa-caret-right"></i> </a>--}}
                  </div>
               </div>
            </div>
         </div>
          <!-- Section 3 -->
         <section class="section-3">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3 col-md-12 col-sm-12">
                      <div class="box-1">
                          <h3>We offer an array of consultation services depending on your situation.</h3>

                      </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-1">
                         <div class="feature-back"></div>
                         <div>
                             <img src="{{asset('images/icons_service/icon_permanent.png')}}" alt="service">
                             <div class="features">

                             <h4>Study Permit For Students</h4>
                             <p>Want to study in one of the best education systems in the world?
                                 Studying in Canada can be a great way to gain world class education.</p>
                             </div>
                             <a href="{{ url('/Services-studypermit') .'?'. http_build_query(['language' => $language]) }}">Read More</a>
                         </div>

                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-2">
                         <img src="{{asset('images/icons_service/icon_visa.png')}}" alt="service">
                         <div class="features">

                         <h4>Express Entry For Professionals</h4>
                         <p>By utilizing your abilities, skills, and education, you can obtain your Permanent Residency sooner. Contact us for a risk free consultation.</p>
                         </div>
                         <a href="{{ url('/Services-express_entry') .'?'. http_build_query(['language' => $language]) }}">Read More</a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-3">
                         <img src="{{asset('images/icons_service/icon_pr.png')}}" alt="service">
                         <div class="features">
                             <h4>Provincial Nominee Program (PNP)</h4>
                             <p>
                                 Looking to move your business to Canada? We can help you navigate through all the procedures and help you with the right business acumen.
                             </p>
                         </div>
                         <a href="{{ url('/Services-PNP') .'?'. http_build_query(['language' => $language]) }}">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section 4 -->
         <section class="section-4">
            <div class="container">
               <div class="section-head">
                  <h2>Discover Some More Programs</h2>
                  <div class="line-2-red"></div>
               </div>

                <div class="row space-top-section-4">
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-1"></div>
                            <a href="{{ url('/Services-workpermit') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>Master's Degree Program</h5>
                                <p>Study, get a master's degree</p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-2"></div>
                            <a href="{{ url('/Services-prcard') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>Permanent Residence</h5>
                                <p>To apply, renew, replace, or update, we can help you</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-3"></div>
                            <a href="{{ url('/Services-workpermit') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>Work Permit</h5>
                                <p>Tell us your expertise and work experience, we will help you find the most suitable option</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row space-top-section-4">
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-4"></div>
                            <a href="{{ url('/Services-caregiver') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>Caregiver</h5>
                                <p>If you like to take care of people, this program is for you and obtain permanent residency
                                </p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-5"></div>
                            <a href="{{ url('/Services-LMIA') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>LMIA Immigration</h5>
                                <p>Employers in need of a temporary foreign worker will need a positive LMIA</p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-6"></div>
                            <a href="{{ url('/Services-citizenship') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>Citizenship Application</h5>
                                <p>Find out if you or your family members qualify for Canadian Citizenship and how to obtain it</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Section 11 -->
         <section class="section-11" id="section-11">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4">
                     <div class="block-l line-vertical">
                         <h3>We have a diverse team consisting of lawyers, immigration consultants, and case managers to provide the best professional service and solutions.
                         </h3>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="block-r">
                        <h3>Free Consultation and Assessment</h3>
                        <div class="line-2-white"></div>
                         <p>Fill out our Assessment Form and we’ll review your eligibility for the immigration programs.</p>
                        <div class="form">
                           <form action="{{ url('/contact_mail') }}" method="POST">
                              
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
                                    @error('fname')
                                    <div class="alert alert-danger">{{ $errors->first('fname')}}</div>
                                    @enderror
                                 </div>
                                  <div class="col-md-6">
                                      <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
                                  </div>
                              </div>
                               <div class="row mt-20">

                                 <div class="col-md-4">
                                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $errors->first('email')}}</div>
                                    @enderror
                                 </div>
                                 <div class="col-md-4">
                                    <input type="text" name="number" placeholder="Telephone" value="{{ old('number') }}">
                                    @error('number')
                                    <div class="alert alert-danger">{{ $errors->first('number')}}</div>
                                    @enderror
                                 </div>
                                  <div class="col-md-4">
                                   <input type="text" name="country" placeholder="Country of Residence" value="{{ old('country') }}">
                                    @error('country')
                                    <div class="alert alert-danger">{{ $errors->first('country')}}</div>
                                    @enderror
                                 </div>
                               </div>
                             <div class="row mt-20 text-white font-weight-light">
                                 <div class="col-md-12">
                                     How did you find us?
                                 </div>
                                 <div class="col-md-6">
                                     <input type="radio" name="referer" value="By Referer" onchange="yourFunction()">&nbsp;By referrer
                                     <div id="referer_name" style="display: none;">
                                     <input type="text" name="referer_name" placeholder="Referrer Name" value="{{ old('referer_name') }}">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <input type="radio" name="referer" value="Other" onchange="yourFunction()"> Other
                                     <div id="other" style="display: none;">
                                     <input type="text" name="other" placeholder="Fill in Here" value="{{ old('other') }}">
                                     </div>

                                 </div>
                                 <div class="col-md-12">
                                     @error('referer')
                                     <div class="alert alert-danger">{{ $errors->first('referer')}}</div>
                                     @enderror
                                 </div>
                             </div>

                            <div class="row mt-20">
                                 <div class="col-md-12">
                                    <textarea name="message" placeholder="How can we help you? Be as descriptive as possible." rows="5" cols="80">{{ old('message') }}</textarea>
                                    <br/>
                                    <input type="submit" value="Submit">
                                 </div>
                              </div>
                              </form>                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection