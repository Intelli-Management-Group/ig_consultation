@extends('layout')
@section('content')

<section class="caregiver-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Options available for Permanent Residence in Canada</h5>-->
                    <h2> 護理人員移民</h2>
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
                        <h3 class="font-head-it">通過照顧兒童、老人或有醫療需求的人移民</h3>
                                <h4 class="par-head-h4">要求：</h4>
                                <div class="par-list">
                                    <ul class="list-left">
                                        <li>語言測試成績，至少達到基準 5 級</li>
                                        <li>過去的經驗或培訓</li>
                                        <li>教育：在加拿大完成至少 1 年的大專教育或同等學歷</li>
                                    </ul>
                                </div>
                                <h4 class="par-head-h4">限制：</h4>
                                <p class="par-p">
                                每年僅處理 5,500 份申請（2,750 份家庭托兒所提供者試點申請；2,750 份家庭支持工作者試點申請
                                </p>
                                <h4 class="par-head-h4">時間：</h4>
                                <p class="par-p">
                                24 個月的工作經驗才有資格獲得 PR
                                </p>
                                <h4 class="par-head-h4">優勢/結果：</h4>
                                <div class="par-list">
                                    <ul class="list-left">
                                        <li>如果沒有合格的工作經驗，只要符合其他資格要求，申請人可以通過家庭托兒所提供者試點專案或家庭支持工作者試點專案申請永久居留權（PR）</li>
                                        <li>家庭成員有資格與申請人同行，並可獲得工作或學習許可</li>
                                        <li>享受全民醫療保健</li>
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