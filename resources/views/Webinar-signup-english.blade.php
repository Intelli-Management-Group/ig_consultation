@extends('layout')
@section('content')
    <section class="event-back">
        <div class="banner-back">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-text">
                        <h2>Seminar Registration</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2 area about-event">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="col-sm-12">
                    <div class="row">


                    <h3 class="font-head-it pr-2 mb-0">By Intelli Management Consulting Corp.</h3>
                    <div class="section-title mt-0">
                        Life In Canada
                    </div>
                    <p class="section-paragraph space-20 text-justify">
                        Canada's unique environment, excellent education system, vibrant multicultural atmosphere,
                        stable economic development, and various business opportunities make it one of the most
                        suitable countries in the world to live in, as well as one of the best destinations for immigrants.
                        Intelli Management Consulting Corp. is pleased to host an expert panel that includes a
                        corporate banker, an experienced lawyer, and an immigration consultant, all providing insights
                        into the living environment, residential conditions, and the wealth of business opportunities in
                        Canada. This seminar will address important considerations before immigrating to Canada, as
                        well as how to efficient settle down in, ensuring a thorough and detailed understanding of the
                        country you might wish to call home in the future. We invite everyone to submit questions
                        related to moving to Canada prior to the seminar, and our team of experts will provide
                        thorough explanations and analyses.
                    </p>
                        <h6 class="color-blue w-100 mb-0 mt-2">Topics of Discussion: </h6>
                        <ul class="list-left col-sm-6 res-margin">
                            <li>
                                Life in Canada
                            </li>
                            <li>
                                Career and Educational Environment in Canada
                            </li>
                            <li>
                                Economic and Business Opportunities in Canada
                            </li>
                        </ul>
                        <ul class="list-left col-sm-6">
                            <li>
                                Introduction of British Columbia
                            </li>
                            <li>
                                Business, Career, and Immigration Opportunities in British Columbia
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="event-img img-margin" src="{{asset('images/webinar_registration/imc_webinar_immigration.jpg') }}" alt="Intelli Management Consulting - Canadian Immigration" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3 -->
    <section class="section-3 color-white event-desc-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <table width="100%" class="event-table">
                        <tr>
                            <td class="pt-0">
                                <img src=" {{ asset('images/webinar_registration/icons/calendar-check.svg') }}" height="25" class="white-filter"/>
                            </td>
                            <td class="pt-0">

                                <span class="title"> 時間</span><br/>
                                <p>
                                    <b>2024 年 4 月 13 日 （星期六）</b><br/>
                                    下午 2 點 – 5 點<br/>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=" {{ asset('images/webinar_registration/icons/map-marker-alt-01.svg') }}" height="25" class="white-filter"/>
                            </td>
                            <td>
                                <span class="title">地點</span><br/>
                                大瀚環球商務中心市政府中心 Globaltown Business Center <br/>
                                地址: 110 台灣台北市信義區忠孝東路四段 560 號 8 樓

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src=" {{ asset('images/webinar_registration/icons/ticket-alt-01.svg') }}" width="25" class="white-filter"/>
                            </td>
                            <td>
                                <span class="title">費用</span><br/>
                                免費
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="host-container">
                        <p class="title">主辦單位</p>
                        <p>英達利集團<br/>Intelli Management Consulting Corp.</p><br/>
                        
                        <p class="title">主持</p>
                        <p>Ms. Eva Liu<br/>IG 區域業務發展經理</p><br/>
                        
                        <p class="title">語言</p>
                        中文
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p class="title">客座演講者</p>
                    <p>George Qiao (CFA, CFP, MA, 加拿大豐業銀行小型企業高 级顧問)</p>
                    <p>Christopher Chen (加拿大和美國律師、美國註冊會計師)
</p>
                    <p>Cathy Liu（溫楓曼國際顧問 有限公司董事，移民顧問）</p>
                </div>

            </div>
        </div>
    </section>
    <!-- Section 10 -->
    <section class="section-10 contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-r">
                        <h2 class="color-blue text-center mb-4">報名參加英達利新生活專題講座</h2>
                        <div class="line-2"></div>

                        <p class="text-center mb-5">
                            請填寫以下資料參與我們的講座，登記成功後您將收到確認郵件。
                        </p>

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="form">
                            <form action="/save-webinar-data" method="POST">
                                
                                <div class="row">
                                    <div class="col-md-6 mt-20">
                                        <input type="text" name="lname" value="{{ old('lname') }}" placeholder="姓氏*">
                                        @error('lname')
                                        <div class="alert alert-danger">{{ $errors->first('lname')}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-20">
                                        <input type="text" name="fname" value="{{ old('fname') }}" placeholder="名字*">
                                        @error('fname')
                                        <div class="alert alert-danger">{{ $errors->first('fname')}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row font-weight-light">
                                    <div class="col-md-6 mt-20">
                                        <input type="text" name="email" value="{{ old('email') }}" placeholder="電子郵箱*">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $errors->first('email')}}</div>
                                        @enderror
                                    </div>
                                     <div class="col-md-6 mt-20">
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="電話*">
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $errors->first('phone')}}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mt-20">
                                        <input type="text" name="country" value="{{ old('country') }}" placeholder="國籍*">
                                        @error('country')
                                        <div class="alert alert-danger">{{ $errors->first('country')}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-20">
                                        <input type="text" name="city" value="{{ old('city') }}" placeholder="現居城市*">
                                        @error('city')
                                        <div class="alert alert-danger">{{ $errors->first('city')}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-20 font-weight-light">
                                    <div class="col-md-12 font-weight-bold">
                                        您是從什麼途徑得知此次活動?*
                                    </div>
                                    <div class="col-xl-2 col-lg-12" style="padding: 15px;">
                                        <input type="radio" name="referer" value="Facebook" {{ old('referer') == 'Facebook' ? 'checked' : '' }} onchange="changeReferralWebinar()"> Facebook
                                    </div>
                                    <div class="col-xl-2 col-lg-12" style="padding: 15px;">
                                        <input type="radio" name="referer" value="Search Engine" {{ old('referer') == 'Search Engine' ? 'checked' : '' }} onchange="changeReferralWebinar()"> 搜索引擎
                                    </div>
                                    <div class="col-xl-8 col-lg-12">
                                        <input type="radio" name="referer" value="Referral" {{ old('referer') == 'Referral' ? 'checked' : '' }} onchange="changeReferralWebinar()"> 親友推薦 &nbsp;&nbsp;
                                        <input type="text" name="referer_name" value="{{ old('referer_name') }}" placeholder="親友名字" style="width:auto" id="referer_name">
                                    </div>

                                    <div class="col-md-12">
                                        @error('referer')
                                        <div class="alert alert-danger">{{ $errors->first('referer')}}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row font-weight-light  mt-20">
                                    <div class="col-md-4 font-weight-bold">
                                        您想了解更多以下哪一個類別的資訊？
                                    </div>
                                   <div class="col-md-3">
                                        <select name="info_category" style="width: 100%; height: 50px; border: 1px solid #dbdbdb; background-color: rgb(242, 242, 242);">
                                            <option value="移民方案" {{ old('info_category') == '移民方案' ? 'selected' : '' }}>移民方案</option>
                                            <option value="留學規劃" {{ old('info_category') == '留學規劃' ? 'selected' : '' }}>留學規劃</option>
                                            <option value="商業發展" {{ old('info_category') == '商業發展' ? 'selected' : '' }}>商業發展</option>
                                            <option value="就業前景" {{ old('info_category') == '就業前景' ? 'selected' : '' }}>就業前景</option>
                                            <option value="加拿大風土民情" {{ old('info_category') == '加拿大風土民情' ? 'selected' : '' }}>加拿大風土民情</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-20">
                                    <div class="col-md-12">
                                        <textarea name="message" rows="5" cols="80" placeholder="您有什麼問題想演講嘉賓在會議中為您解答？">{{ old('message') }}</textarea>
                                    </div>
                                </div>

                                <div class="row mt-20 font-weight-light">
                                    <div class="col-md-12 font-weight-bold">
                                        您想收到由我們公司提供的最新加拿大移民資訊嗎?
                                    </div>
                                    <div class="col-md-6" style="padding: 15px;">
                                        <input type="radio" name="signup" value="1" {{ old('signup', '1') == '1' ? 'checked' : '' }}> 是
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="signup" value="0" {{ old('signup') == '0' ? 'checked' : '' }}> 否
                                    </div>
                                    <div class="col-md-12">
                                        @error('signup')
                                        <div class="alert alert-danger">{{ $errors->first('signup')}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" value="提交">
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
