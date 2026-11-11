@extends('layout')
@section('content')

<section class="pr-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                   <!--<h5>Become a Permanent Resident</h5>-->
                    <h2>PR 卡 - 永久居留申請</h2>
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
                        <h4 class="par-head-h4 mt-0">要獲得申請永久居民 (PR) 卡的資格，您必須</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>是加拿大永久居民</li>
                                <li>身在加拿大境內</li>
                                <li>未被下達有效的驅逐令</li>
                                <li>未被定罪</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">永久居民的好處</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>可在加拿大任何地方生活和工作</li>
                                <p class="par-p mb-0">
                                    獲得永久居民身份後，您可以在加拿大任何城市自由遷移和工作
                                </p>
                                <li>享受全民醫療保健和社會服務</li>
                                <p class="par-p mb-0">
                                    永久居民可享受免費的全民醫療保健服務，並可申請社會服務支持
                            </p>
                                <li>可擔保配偶和子女</li>
                                <p class="par-p mb-0">
                                	永久居民有權擔保其配偶和子女在加拿大生活、工作和學習                                </p>
                                <li>將來可以成為加拿大公民</li>
                                <p class="par-p mb-0">
                                	在申請加拿大公民之前，必須先獲得永久居民身份                                </p>
                            </ul>
                        </div>
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