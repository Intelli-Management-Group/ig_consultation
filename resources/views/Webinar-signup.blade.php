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
                        加拿大新生活專題講座
                    </div>
                    <p class="section-paragraph space-20 text-justify">
                        加拿大獨特的生活環境、優質的教育、豐
                        富多彩的文化氛圍、穩定的經濟發展和各
                        類商業機會，使加拿大成為全球最適合居
                        住的國家，以及全球最佳移民聖地之一。
                        但您對這個聽起來很熟悉，卻是很陌生的
                        國度有多了解? 英達利集團 (Intelli
                        Management Consulting Corp.) 很榮幸邀請
                        到銀行高级企業顧問，資深律師及移民專
                        家與大家一起深入了解加拿大的生活環
                        境、居住條件以及豐富的商業機會，探討
                        準備移民加拿大前要注意的事項，及抵達
                        後在衣食住行方面應當如何安排，讓您對
                        加拿大有全面詳細了解。歡迎大家在分享
                        會前提出有關移居加拿大的任何相關問
                        題，我們的專家團隊將為您分析說明。

                    </p>
                        <h6 class="color-blue w-100 mb-0 mt-2">活動主題 </h6>
                        <ul class="list-left col-sm-6 res-margin">
                            <li>
                                加拿大生活
                            </li>
                            <li>
                                加拿大經濟、商業環境
                            </li>
                            <li>
                                加拿大就業、學習環境
                            </li>
                        </ul>
                        <ul class="list-left col-sm-6">
                            <li>
                                卑詩省介紹
                            </li>
                            <li>
                                卑詩省就業、移民機會
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
                                
                                <div class="row font-weight-light mt-20">
                                    <div class="col-md-4 font-weight-bold">
                                        您想了解更多以下哪一個類別的資訊？
                                    </div>
                                   <div class="col-md-3">
                                      
                                    
                                        <select name="category" style="width: 100%; height: 50px; border: 1px solid #dbdbdb; background-color: rgb(242, 242, 242);">
                                            <option value="移民方案" {{ old('category') == '移民方案' ? 'selected' : '' }}>移民方案</option>
                                            <option value="留學規劃" {{ old('category') == '留學規劃' ? 'selected' : '' }}>留學規劃</option>
                                            <option value="商業發展" {{ old('category') == '商業發展' ? 'selected' : '' }}>商業發展</option>
                                            <option value="就業前景" {{ old('category') == '就業前景' ? 'selected' : '' }}>就業前景</option>
                                            <option value="加拿大風土民情" {{ old('category') == '加拿大風土民情' ? 'selected' : '' }}>加拿大風土民情</option>
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
