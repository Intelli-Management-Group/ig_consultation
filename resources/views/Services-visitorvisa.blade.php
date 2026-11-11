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
                    <h2>Visitor Visa</h2>
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
                        <h4 class="par-head-h4 mt-0">Who needs a visa to come to Canada?</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Anyone who does not have a passport from a visa-exempt country</li>
                                <li>Anyone who has never visited Canada before or doesn’t have a valid American visitor visa (from March 2016 onwards)</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">How to apply for a Canadian Visitor Visa?</h4>
                        <p class="par-p">
                            Our team can help you deal with all the bureaucracy and avoid any mistakes being made in the application.   Mistakes will decrease your chances of having your Canadian visa approved and cause unnecessary delays.  We will provide you with our full support and walk you through all the phases of the visa application process.
                        </p>
                        <h4 class="par-head-h4">How long does it take to obtain a Canadian Visitor Visa?</h4>
                        <div class="line-red-2 pr-line"></div>
                        <p class="par-p">
                            The processing times vary for each Canadian visa office and these times are subject to change depending on the number of applications received at any one time.  Speak with us and we can give you an approximate time.
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