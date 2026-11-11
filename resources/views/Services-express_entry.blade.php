@extends('layout')
@section('content')

<section class="express-entry-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Options available for Permanent Residence in Canada</h5>-->
                    <h2>Express Entry</h2>
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
                        <h4 class="section-title mt-0">Federal Skilled Worker Program</h4>
                        <div class="line-red-2 pr-line"></div>
                        <p class="par-p">
                           The Federal Skilled Worker Program attracts the highly-skilled individuals to live and work in Canada as they become economically self-sufficient contributors to the Canadian economy.
                        </p>
                        <p class="par-p">
                            Under this program, the applicant must meet the minimum requirements for skilled work experience, language ability and education. Selection factors are based on age, education, work experience, a valid job offer, English / French skills, and adaptability.  Applicants who meet the specific requirements of a profession within the Skilled Worker Program will be selected from the Express Entry pool and invited to apply for permanent residency status. Permanent Residents are entitled to a number of benefits all Canadian citizens cherish.
                        </p>
                        <h4 class="section-title">Federal Skilled Trades Program</h4>
                        <div class="line-red-2 pr-line"></div>
                        <p class="par-p">
                            The Federal Skilled Trades Program allows individuals with either a job offer or educational qualification to work in a trade to immigrate to Canada.
                        </p>
                        <p class="par-p">
                            Under this program, candidates who qualify under a specific list of trades can apply for the Federal Skilled Trades Program. Applicants who meet the specific requirements will be invited to apply for Permanent Residency in Canada. The minimum requirements include meeting the required language levels, have at least 2 years of full-time work experience, and have a valid job offer.  There is no education requirement; however, it may increase your ranking in the Express Entry pool. Applicants who meet the specific requirements will be selected from the Express Entry pool and invited to apply for Permanent Residency status.
                        </p>
                        <h4 class="section-title">Canadian Experience Class</h4>
                        <div class="line-red-2 pr-line"></div>
                        <p class="par-p">
                            The Canadian Experience Class (CEC) is an immigration program that allows talented individuals who are already working in Canada to become permanent residents faster.
                        </p>
                        <p class="par-p">
                            Canadian Experience Class applicants will need to meet the minimum requirements including the required language levels, have at least 1 year of skilled work experience in Canada (managerial jobs, professional jobs, technical jobs and skilled trades).  There is no education requirement but it will improve your ranking in the Express Entry pool. Applicants who meet the specific requirements will be selected from the Express Entry pool and invited to apply for Permanent Residency status.
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