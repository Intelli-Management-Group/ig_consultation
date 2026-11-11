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
                    <h2>Citizenship Application</h2>
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
                        <h4 class="par-head-h4 mt-0">In order to qualify for Canadian citizenship, individuals must meet the general eligibility requirements:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Be 18 years of age or older</li>
                                <li>Be a permanent resident (landed immigrant) in Canada</li>
                                <li>Should have lived in Canada for a total of 1095 days out of the five years before you apply</li>
                                <li>Know enough English or French to engage in a simple conversation</li>
                                <li>Have general knowledge about Canada's history, geography, government, and the rights and responsibilities of citizenship to pass a citizenship test (adults 65 years of age and over are exempt)</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">Benefits of a Canadian Citizenship:</h4>
                        <p class="par-p">
                            In addition to having the same benefits as a Permanent Resident, Canadian citizens will also enjoy the following benefits:
                        </p>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>More job options</li>
                                <p class="par-p mb-0">
                                   Canadian citizens are eligible for certain unelected government jobs that require citizenship, as well as, jobs requiring security clearances.
                                </p>
                                <li>Vote and Run for Political Office</li>
                                <p class="par-p mb-0">
                                    Canadian citizens have the right to vote in elections, playing an important role in influencing provincial and federal politics. Canadian citizens may hold political office and represent Canadian constituents on issues such as taxes, health care, education, etc.
                                </p>
                                <li>Can travel on a Canadian Passport</li>
                                <p class="par-p mb-0">
                                    Canadian passport allows Canadians to enter many countries without a visa for certain approved purposes. Canada also recognizes dual citizenship, allowing you to two passports if your country of birth also recognizes dual citizenship.
                                </p>
                                <li>Never have to worry about losing status</li>
                                <p class="par-p mb-0">
                                    Canadian citizens can spend as much time outside of Canada with no immigration consequences.  You will not lose your citizenship status, but you can voluntarily renounce it.  However, if you have been convicted in court of fraud on your PR or citizenship application, then your citizenship may be revoked.
                                </p>
                                <li>Do not need to renew their immigration documentation</li>
                                <p class="par-p mb-0">
                                   Canadian Citizenship Certificate is valid indefinitely and Canadian citizens who wish to travel internationally need only to renew their passports every 10 years
                                </p>
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