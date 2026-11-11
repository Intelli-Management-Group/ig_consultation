@extends('layout')
@section('content')

<section class="about-us-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <h2>Canada-Based Consultation Experts</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="section-2 area">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="area-img" src="{{asset('images/about/about_canada.jpg') }}" alt="Intelli Management Consulting - Canadian Immigration">
            </div>
            <div class="col-md-7">
                <div class="section-title mt-0">We are a full-service immigration and business consulting firm, we assess the best possible way for our client to immigrate to Canada.</div>
                <div class="line-red"></div>
                <p class="section-paragraph space-20">Our services include assisting in the application process, offering expert solutions, and tailoring to the specific needs of the client for settlement services. Our team is customer-oriented and strives to provide a smooth transition in making Canada your new home.
                    <br><br>
                    With our extensive business experience, we offer consulting service for new immigrants such as business set-up and referrals to improve your probability of success in Canada. We also assist employers in the application of the Labour Market Impact Assessment (LMIA) and searching for the foreign skilled worker in all applicable sectors.
                    <br><br>
                    
                </p>
            </div>
        </div>
        <div class="row space-top-section-4">
            <div class="col-lg-6 col-md-12">
                <div class="d-flex">
                    <img src='{{asset("images/about/icon_how.png") }}' width="38" height="38"/>
                    <div class="item-text">
                        <h5>How do we work?</h5>
                        <p>Our team will first assess your qualification of immigrating to Canada. Our assessment is honest and you will be informed about your realistic probability of immigrating to Canada in order to avoid false hope and spending money unnecessarily. 
                        </p>
                        <p>In case you do not qualify to immigrate to Canada yet, do not worry. There are several ways to improve your application and become eligible for one of the current Canadian immigration processes. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-flex">
                    <img src='{{asset("images/about/icon_consultant.png") }}' width="38" height="38"/>
                    <div class="item-text">
                        <h5>Our Immigration Consultants</h5>
                        <p>Our immigration consultants are experienced professionals. They are diligent in making sure that no mistakes are made in order to avoid any problems that may arise during the immigration process. They also build the best strategy taking into consideration your qualifications and eligibility, as well as, your family’s qualifications. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection