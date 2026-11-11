@extends('layout')
@section('content')

<section class="visitor-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                   <!-- <h5>Visit Canada</h5>-->
                    <h2> 旅遊簽證</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Blog header-->
<!--  Article -->
<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="content-wrap practice-single">
                    <div class="content-text">
                        <h4 class="par-head-h4 mt-0">哪些人需要簽證來加拿大？</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>沒有免簽證國家護照的任何人</li>
                                <li>從未訪問過加拿大或沒有有效美國訪問簽證（自 2016 年 3 月起）</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">如何申請加拿大訪問簽證？</h4>
                        <p class="par-p">
                       我們的團隊可以幫助您處理所有官僚手續，避免在申請過程中出現任何錯誤。錯誤會降低您的加拿大簽證獲批幾率，並造成不必要的延誤。我們將為您提供全力支持，並指導您完成簽證
                        申請過程的各個階段。
                        </p>
                        <h4 class="par-head-h4">申請加拿大訪問簽證需要多長時間？</h4>
                        <div class="line-red-2 pr-line"></div>
                        <p class="par-p">
                       每個加拿大簽證辦公室的審理時間都不盡相同，這些時間可能會根據同一時間收到的申請數量而發生變化。請與我們聯繫，我們會給您一個大概的時間                 </p>

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