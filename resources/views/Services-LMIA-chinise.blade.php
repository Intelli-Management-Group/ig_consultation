@extends('layout')
@section('content')

<section class="lmia-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Options available for Permanent Residence in Canada</h5>-->
                    <h2>LMIA</h2>
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
                        <h4 class="par-head-h4 mt-0">How does the LMIA process work? LMIA 程式是如何運作的？</h4>
                        <p class="par-p">
                            如果雇主有意雇用臨時外籍工人（TFW）在加拿大工作，則必須向加拿大就業與社會發展部（ESDC）提交勞動力市場影響評估（LMIA）申請。如果雇主收到正面的 LMIA 
                            評估結果，臨時外籍工人就可以向加拿大移民難民和公民部（IRCC）申請工作許可
                        </p>
                        <p class="par-p">
                        政府會評估雇用 TFW 對加拿大就業市場可能產生的影響。正面的 LMIA 表明確實需要外籍工人來填補所申請的特定工作，而且沒有加拿大工人或永久居民可以勝任該工作。
                        </p>
                        <h4 class="par-head-h4"> 如何申請 LMIA？</h4>
                        <p class="par-p">
                        雇主必須證明多次嘗試雇用加拿大公民或永久居民擔任預定職位，而且沒有成功並並滿足 ESDC/Service Canada 規定的要求，才能向 TFW 提供工作。
                        </p>
                        <h4 class="par-head-h4">如何申請 LMIA 以獲得快速入境許可</h4>
                        <p class="par-p">
                        一旦雇主收到 LMIA 的肯定答復，具有專業資格的外國技術工人就可以通過快速通道來加拿大工作。
                        </p>
                        <p class="par-p">
                       這一過程需要經過多個階段，因此申請人諮詢移民專業人士非常重要
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