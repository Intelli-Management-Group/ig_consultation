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
                    <h2>Caregiver</h2>
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
                        <h3 class="font-head-it">Immigrate by providing care for children, the elderly or those with medical needs</h3>
                                <h4 class="par-head-h4">Requirements:</h4>
                                <div class="par-list">
                                    <ul class="list-left">
                                        <li>Language test results, at least benchmark level 5</li>
                                        <li>Past experience or training</li>
                                        <li>Education: completed post-secondary education credential of at least 1 year in Canada or equivalent</li>
                                    </ul>
                                </div>
                                <h4 class="par-head-h4">Limitation:</h4>
                                <p class="par-p">
                                    Only process 5,500 applications each year (2,750 Home Child Care Provider Pilot; 2,750 Home Support Worker Pilot)
                                </p>
                                <h4 class="par-head-h4">Time:</h4>
                                <p class="par-p">
                                    24 months of work experience to qualify for PR
                                </p>
                                <h4 class="par-head-h4">Advantages / Outcome:</h4>
                                <div class="par-list">
                                    <ul class="list-left">
                                        <li>If there is no qualifying work experience, applicants can apply for Permanent Residence (PR) through Home Child Care Provider Pilot or Home Support Worker Pilot as long as other eligibility requirements are met </li>
                                        <li>Family members are eligible to come with applicant and can obtain work or study permits</li>
                                        <li>Access to Universal Healthcare</li>
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