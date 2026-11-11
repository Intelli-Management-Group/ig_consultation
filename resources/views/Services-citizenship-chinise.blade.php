@extends('layout')
@section('content')

<section class="citizenship-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Become a Canadian Citizen</h5>-->
                    <h2>入籍申請</h2>
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
                        <h4 class="par-head-h4 mt-0">要獲得加拿大公民身份，個人必須滿足一般資格要求：</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>年滿 18 周歲</li>
                                <li>是加拿大永久居民（落地移民</li>
                                <li>在申請前的五年中，應在加拿大居住滿 1095 天</li>
                                <li>掌握足夠的英語或法語，能夠進行簡單對話</li>
                                <li>對加拿大的歷史、地理、政府以及公民的權利和責任有一般的瞭解，能夠通過公民考試（65 歲及以上的成年人免考）</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">加拿大公民身份的好處：</h4>
                        <p class="par-p">
                        除了享有與永久居民相同的福利外，加拿大公民還可享受以下福利：                         </p>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>更多的工作選擇</li>
                                <p class="par-p mb-0">
                                加拿大公民有資格從事某些需要公民身份的非民選政府工作，以及需要安全審查的工作。
                                </p>
                                <li>投票和競選政治職位</li>
                                <p class="par-p mb-0">
                                    加拿大公民有權在選舉中投票，在影響省和聯邦政治方面發揮重要作用。加拿大公民可以擔任政治職務，在稅收、醫療保健、教育等問題上代表加拿大選民                                </p>
                                <li>可以持加拿大護照旅行</li>
                                <p class="par-p mb-0">
                                   加拿大護照允許加拿大人出於某些經批准的目的免簽證進入許多國家。加拿大還承認雙重國籍，如果您的出生國也承認雙重國籍，您就可以擁有兩本護照                                </p>
                                <li>不必擔心失去身份</li>
                                <p class="par-p mb-0">
                                    加拿大公民可以在加拿大境外逗留很長時間，而不會產生任何移民後果。您不會失去公民身份，但可以自願放棄。但是，如果您在申請永久居民身份或公民身份時被法
                                    庭判定犯有欺詐罪，那麼您的公民身份可能會被取消。                                </p>
                                <li>無需更新移民檔</li>
                                <p class="par-p mb-0">
                                    加拿大公民身份證是無限期有效的，進行國際旅行的加拿大公民只需每 10 年更新一次護照即可。                                </p>
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