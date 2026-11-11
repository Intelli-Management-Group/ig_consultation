@extends('layout')
@section('content')
    <?php 
    
        $languageParam = explode("=" , $_SERVER['QUERY_STRING']);
        
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
                                <h2>實現您在加拿大<br/>生活的夢想</h2>
                                <h4>我們與您一路前行，並在每一步提供專業建議</h4>
                                <!-- <h2>Realize Your Dream Of<br/>Living In Canada</h2>
                                <h4>We provide professional advice working diligently with you every step of the way.</h4> -->
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
                                <h2>我們團隊深耕行業多年且專注發展
                                    <!-- <BR>Dedicated Consultants -->
                                </h2>
                                <h4>以客戶為導向，建立信任， 所有諮詢都是免費且保密的。</h4>
                                <!-- <h2>A Team of Experienced and<BR>Dedicated Consultants</h2>
                                <h4>We are customer oriented and trustworthy. All consultations are free and confidential.</h4> -->
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
                            <h2>為您的移民計畫量身定制實用解決方案</h2>
                            <h4>我們專注評估您的移民案例，提供針對您獨特需求的戰略性和有效性解決方案。</h4>    
                            <!-- <h2>Realistic Solutions Tailored to<BR>Your Immigration Plan</h2>
                                <h4>We assess your immigration case and offer strategic and effective solutions specifically for your unique needs.</h4> -->
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
                     <a href="{{ url('/contactus') .'?'. http_build_query(['language' => $language]) }}"><div class="box-text-second">預約</div></a>
                      <div class="box-text-first">現在就預約，與我們親切的專業顧問團隊交談</div>                 
                      <!-- <a href="<?php echo URL('/contactus') ?>"><div class="box-text-second">Appointment</div></a>
                      <div class="box-text-first">Book your appointment now and talk to our team of friendly professional consultants</div> -->
                  </div>
               </div>
               <div class="box-span d-flex box-shadow">
                  <div class="box-icon-1"><img src="images/home/icon_consultation.png" alt=""></div>
                  <div class="box-text-2">
                     <a href="#section-11"><div class="box-text-second">諮詢服務</div></a>
                      <div class="box-text-first">因應您的個別情況，我們將為您量身定制適合您移民計劃的解決方案</div>
<!-- 
                      <a href="#section-11"><div class="box-text-second">Consultation</div></a>
                      <div class="box-text-first">Tell us your situation and we will tailor a solution suited just for your immigration plans</div> -->
                  </div>
               </div>
            </div>
            <div class="box-2 d-flex">
               <div class="d-flex box-2-span align-items-center">
                  <div class="box-text-right">
                      根據您的評估結果和需求提供解決方案
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
                          <h3>我們依據您的情況提供多元化的諮詢服務。</h3>
                          <!-- <h3>We offer an array of consultation services depending on your situation.</h3> -->

                      </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-1">
                         <div class="feature-back"></div>
                         <div>
                             <img src="{{asset('images/icons_service/icon_permanent.png')}}" alt="service">
                             <div class="features">
                             <h4>學生簽證</h4>
                             <p>想要在全球最優秀的教育系統之一學習嗎？選擇加拿大，體驗世界一流的教育。</p>
                             <!-- <h4>Study Permit For Students</h4>
                             <p>Want to study in one of the best education systems in the world?
                                 Studying in Canada can be a great way to gain world class education.</p> -->
                             </div>
                             <a href="{{ url('/Services-studypermit') .'?'. http_build_query(['language' => $language]) }}">更多</a>
                         </div>

                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-2">
                         <img src="{{asset('images/icons_service/icon_visa.png')}}" alt="service">
                         <div class="features">

                         <h4>專業人士快速通道</h4>
                         <p>利用您的能力、技能和教育背景，您可以更快地獲得永久居留權。請聯繫我們進行免費風險評估。</p>
                         </div>
                         <a href="{{ url('/Services-express_entry') .'?'. http_build_query(['language' => $language]) }}">更多</a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <div class="box-2 feature-3">
                         <img src="{{asset('images/icons_service/icon_pr.png')}}" alt="service">
                         <div class="features">
                            <h4>省提名計畫 (PNP)</h4>
                             <p>
                                想把您的業務遷移到加拿大嗎？我們將協助您輕鬆應對所有手續，提供正確的商業智慧，讓您移民之路無憂無慮。
                             </p>
                             <!-- <h4>Provincial Nominee Program (PNP)</h4>
                             <p>
                                 Looking to move your business to Canada? We can help you navigate through all the procedures and help you with the right business acumen.
                             </p> -->
                         </div>
                         <a href="{{ url('/Services-PNP') .'?'. http_build_query(['language' => $language]) }}">更多</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section 4 -->
         <section class="section-4">
            <div class="container">
               <div class="section-head">
                  <h2>更多計畫方案</h2>
                  <!-- <h2>Discover Some More Programs</h2> -->

                  <div class="line-2-red"></div>
               </div>

                <div class="row space-top-section-4">
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-1"></div>
                            <a href="{{ url('/Services-workpermit') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>碩士學位課程</h5>
                                <p>獲得碩士學位</p>
                                <!-- <h5>Master's Degree Program</h5>
                                <p>Study, get a master's degree</p> -->
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-2"></div>
                            <a href="{{ url('/Services-prcard') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>永久居民卡（楓葉卡）</h5>
                                <p>我們可以協助您申請、更換或更新永久居民卡</p>
                                <!-- <h5>Permanent Residence</h5>
                                <p>To apply, renew, replace, or update, we can help you</p> -->
                            </div></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-3"></div>
                            <a href="{{ url('/Services-workpermit') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                                <h5>工作許可證</h5>
                                <p>告訴我們您的專業知識和工作經驗，我們將協助您找到最適合的選擇</p>
                           
                                <!-- <h5>Work Permit</h5>
                                <p>Tell us your expertise and work experience, we will help you find the most suitable option</p> -->
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
                            <h5>照顧者計畫</h5>
                                <p>如果您喜歡照顧他人，這個計畫正是為您而設！透過這個計畫，您不僅可以盡情展現您的愛心，更可獲得永久居留權
                                </p>
                                <!-- <h5>Caregiver</h5>
                                <p>If you like to take care of people, this program is for you and obtain permanent residency
                                </p> -->
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-5"></div>
                            <a href="{{ url('/Services-LMIA') .'?'. http_build_query(['language' => $language]) }}"">
                            <div class="item-text">
                                <h5>勞動力市場影響評估移民</h5>
                                <p>尋求臨時外籍勞工？擁有符合LMIA資格的雇主，即刻滿足您的需求</p>
                                <!-- <h5>LMIA Immigration</h5>
                                <p>Employers in need of a temporary foreign worker will need a positive LMIA</p> -->
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="item-section-4 d-flex">
                            <div class="programe programe-6"></div>
                            <a href="{{ url('/Services-citizenship') .'?'. http_build_query(['language' => $language]) }}">
                            <div class="item-text">
                            <h5>加拿大公民申請</h5>
                                <p>您或您的家人是否符合加拿大公民資格？立即瞭解並掌握獲取方法</p>
                           
                                <!-- <h5>Citizenship Application</h5>
                                <p>Find out if you or your family members qualify for Canadian Citizenship and how to obtain it</p> -->
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
                         <h3>我們擁有一支由律師、移民顧問和案件經理組成的多元化團隊，提供最專業的服務和解決方案。
                         </h3>
                         <!-- <h3>We have a diverse team consisting of lawyers, immigration consultants, and case managers to provide the best professional service and solutions.
                         </h3> -->
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="block-r">
                        <h3>免費諮詢和評估</h3>
                        <!-- <h3>Free Consultation and Assessment</h3> -->
                        <div class="line-2-white"></div>
                        <p>我們會根據您填寫的評估表，判斷您移民的資質</p>
                        <!-- <p>Fill out our Assessment Form and we’ll review your eligibility for the immigration programs.</p> -->
                        <div class="form">
                           <form action="/contact_mail" method="POST">
                              
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="fname" value="{{ old('fname') }}" placeholder="名">
                                    @error('fname')
                                    <div class="alert alert-danger">{{ $errors->first('fname')}}</div>
                                    @enderror
                                 </div>
                                  <div class="col-md-6">
                                      <input type="text" name="lname" value="{{ old('lname') }}" placeholder="姓">
                                  </div>
                              </div>
                               <div class="row mt-20">

                                 <div class="col-md-4">
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="電郵">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $errors->first('email')}}</div>
                                    @enderror
                                 </div>
                                 <div class="col-md-4">
                                    <input type="text" name="number" value="{{ old('number') }}" placeholder="電話">
                                    @error('number')
                                    <div class="alert alert-danger">{{ $errors->first('number')}}</div>
                                    @enderror
                                 </div>
                                  <div class="col-md-4">
                                   <input type="text" name="country" value="{{ old('country') }}" placeholder="現居國家">
                                    @error('country')
                                    <div class="alert alert-danger">{{ $errors->first('country')}}</div>
                                    @enderror
                                 </div>
                               </div>
                             <div class="row mt-20 text-white font-weight-light">
                                 <div class="col-md-12">
                                 怎麼找到我們
                                 </div>
                                 <div class="col-md-6">
                                     <input type="radio" name="referer" value="By Referer" {{ old('referer') == 'By Referer' ? 'checked' : '' }} onchange="yourFunction()">&nbsp;推薦
                                     <div id="referer_name" style="display: none;">
                                     <input type="text" name="referer_name" value="{{ old('referer_name') }}" placeholder="Referrer Name">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <input type="radio" name="referer" value="Other" {{ old('referer') == 'Other' ? 'checked' : '' }} onchange="yourFunction()"> 其他
                                     <div id="other" style="display: none;">
                                     <input type="text" name="other" value="{{ old('other') }}" placeholder="Fill in Here">
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
                                    <textarea name="message" placeholder="我們該怎樣幫助你？ 盡可能具有描述性" rows="5" cols="80">{{ old('message') }}</textarea>
                                    <br/>
                                    <button type="submit">提交</button>
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