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
                    <h2>PR Card – Permanent residency Application</h2>
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
                        <h4 class="par-head-h4 mt-0">To be eligible to apply for a Permanent Resident (PR) Card you must:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Be a permanent resident of Canada</li>
                                <li>Be physically present in Canada</li>
                                <li>Not be under an effective removal order</li>
                                <li>Not be convicted of an offense</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">Benefits of a Permanent Resident:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Can live and work anywhere in Canada</li>
                                <p class="par-p mb-0">
                                    Upon receiving PR status, you are free to relocate and work in any city in Canada
                                </p>
                                <li>Access to Universal Health Care and Social Services</li>
                                <p class="par-p mb-0">
                                    Permanent residents will be entitled to free universal health care services and may apply for social service supports                                </p>
                                <li>Can sponsor your spouse and children</li>
                                <p class="par-p mb-0">
                                   Permanent residents are entitled to sponsor their spouse and children to live, work, and study in Canada
                                </p>
                                <li>Can become a Canadian Citizen in the future</li>
                                <p class="par-p mb-0">
                                   Having PR status is a requirement before applying for Canadian Citizenship
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