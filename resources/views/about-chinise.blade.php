@extends('layout')
@section('content')

<section class="about-us-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <h2>加拿大諮詢專家</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="section-2 area">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="area-img" src="{{asset('images/about/about_canada.jpg') }}" alt="Intelli Management Consulting - Canadian Immigration">
            </div>
            <div class="col-md-7">
                <div class="section-title mt-0">我們是一家提供全方位服務的移民和商業諮詢公司，為客戶評估移民加拿大的最佳方式。</div>
                <div class="line-red"></div>
                <p class="section-paragraph space-20">我們的服務包括協助申請流程、提供專業解決方案，以及根據客戶的具體需求量身定制定居服務。我們的團隊以客戶為導向，努力為客戶提供順利過渡的服務，讓加拿大成為您的新家。
                    <br><br>
                    我們擁有豐富的商業經驗，可為新移民提供諮詢服務，如業務建立和推薦，以提高您在加拿大的成功幾率。我們還協助雇主申請勞動力市場影響評估 (LMIA)，並在所有適用行業尋找外國技術工人。
                    <br><br>
                    
                </p>
            </div>
        </div>
        <div class="row space-top-section-4">
            <div class="col-lg-6 col-md-12">
                <div class="d-flex">
                    <img src='{{asset("images/about/icon_how.png") }}' width="38" height="38"/>
                    <div class="item-text">
                        <h5>我們的工作方式</h5>
                        <p>我們的團隊將首先評估您移民加拿大的資格。我們的評估是誠實的，您將被告知您移民加拿大的實際可能性，以避免不切實際的希望和不必要的花費。 
                        </p>
                        <p>如果您還不具備移民加拿大的資格，也不必擔心。有幾種方法可以改善您的申請，使您有資格申請目前的加拿大移民程式之一。 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-flex">
                    <img src='{{asset("images/about/icon_consultant.png") }}' width="38" height="38"/>
                    <div class="item-text">
                        <h5>我们的移民顾问</h5>
                        <p>我們的移民顧問都是經驗豐富的專業人士。他們兢兢業業，確保萬無一失，以避免移民過程中可能出現的任何問題。他們還會根據您以及您家人的資質和資格制定最佳策略。 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
