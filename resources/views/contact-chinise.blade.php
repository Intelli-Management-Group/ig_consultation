@extends('layout')

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl=zh-TW" async defer></script>
@endpush

@section('content')
    <section class="contact-back">
        <div class="banner-back">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-text">
                        <h2> 無風險諮詢服務</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section contact-form-back quick-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form-section ">
                        <h5 class="">請隨時與我們聯繫</h5>
                        <p>我們非常重視為客戶保密。為了準確評估您的選擇，請提供您的聯繫資訊，我們的諮詢專家將與您聯繫。</p>
                    </div>
                    <div class="contact-form-section mt-5">
                        <h5 class="">聯繫資訊</h5>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">地址</div>
                            <div class="table-item-right">200-3071 No 5 Road, Richmond, BC, V6X 2T4 Canada</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">電話</div>
                            <div class="table-item-right">1-778-297-7108</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">電子郵件</div>
                            <div class="table-item-right">contact@intelliconsultation.com</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">營業時間</div>
                            <div class="table-item-right">星期一至星期五：上午 10:00 至下午 5:00（太平洋標準時間）</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="w-75 mx-auto contact-form-section">
                        <h5 class="mb-3">免費諮詢和評估</h5>
                        <p class="mb-4">我們會根據您填寫的評估表，判斷您移民的資質。</p>
                        <!-- Form -->

                        <form action="{{ url('/contact_mail') }}" method="POST">

                            <input type="text" name="fname" value="{{ old('fname') }}" placeholder="名">
                            @error('fname')
                                <div class="alert alert-danger">{{ $errors->first('fname') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="lname" value="{{ old('lname') }}" placeholder="姓" class="mt-20">
                            <br />
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="電郵" class="mt-20">
                            @error('email')
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="number" value="{{ old('number') }}" placeholder="電話" class="mt-20">
                            @error('number')
                                <div class="alert alert-danger">{{ $errors->first('number') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="country" value="{{ old('country') }}" placeholder="現居國家" class="mt-20">
                            @error('country')
                                <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                            @enderror
                            <br />
                            <p class="mt-20">怎麼找到我們</p>

                            <input type="radio" name="referer" value="By Referer" onchange="yourFunction()"> 推薦
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="referer" value="Other" onchange="yourFunction()"> 其他
                            <div id="referer_name" style="display: none;" class="mt-20">
                                <input type="text" name="referer_name" value="{{ old('referer_name') }}" placeholder="Referrer Name">
                            </div>
                            <div id="other" style="display: none;" class="mt-20">
                                <input type="text" name="other" value="{{ old('other') }}" placeholder="Fill in Here">
                            </div>

                            <textarea name="message" placeholder="我們該怎樣幫助你？ 盡可能具有描述性" class="mt-20">{{ old('message') }}</textarea>
                            <br />
                            <div class="g-recaptcha mt-20" data-sitekey="6LffdvorAAAAAOLgOSgpKBksPY3ubFs0R4Oka1qB"></div>

                            <button type="submit" class="mt-20">提交</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
