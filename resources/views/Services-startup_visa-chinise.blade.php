@extends('layout')
@section('content')
<section class="business-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Business Immigration Programs</h5>-->
                    <h2>創業移民</h2>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="content-wrap practice-single">
                    <div class="content-text">
                        <h4 class="par-head-h4 mt-0">創業簽證計劃</h4>
                        <p class="par-p">
                        該計畫為初創企業提供了一個機會，不僅可以在加拿大開展新業務，還可以從政府指定的合格組織名單中獲得融資以及永久居留權。
                            <br><br>
                            如需瞭解更多資訊，請聯繫我們的團隊，以便我們幫助評估您的情況並為您制定全面的計畫
                        </p>
                        <p class="par-p bold">
                        我們可以提供以下幫助：
                        </p>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>尋找可購買的企業</li>
                                <li>制定專業的商業計畫</li>
                                <li>提供業務指導和可能的聯繫方式，幫助您在加拿大取得成功</li>
                            </ul>
                        </div>
                        <p class="par-p">
                        我們的首要任務是為客戶提供最直接、最具成本效益的途徑，幫助他們瞭解加拿大創業計畫，並根據我們的評估選擇最合適的企業。我們將幫助準備正確的檔，使商業構想從計畫變為現
實
                        </p>
                    </div>

                </div>
            </div>
            <!-- end col-md-9 -->
            <!--  col-md-3 -->
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                @include('sidebar')
            </div>
        </div>
    </div>
</section>

@endsection