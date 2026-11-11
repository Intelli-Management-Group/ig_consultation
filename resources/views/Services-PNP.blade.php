@extends('layout')
@section('content')

<section class="bcpnp-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Business Immigration Programs</h5>-->
                    <h2>Provincial Nominee Program (PNP)</h2>
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
                        <h4 class="par-head-h4 mt-0">Provincial Nominee Program (PNP) for Businesses</h4>
                        <p class="par-p">
                            Canada encourages applications for permanent residence from people with skills, education and work experience that will contribute to the Canadian economy. Each province has its own unique set of requirements for the Provincial Nominee Program (PNP) for Business applications.
                        </p>
                        <p class="par-p">
                            The PNP program involves multiple steps and differs from province to province. Some provinces may require candidates to first obtain a work permit to qualify for a nomination following an approval of the business venture, while others may not.
                        </p>
                        <h4 class="par-head-h4">Each province and territory has their own immigration programs and specific requirements targeting certain groups of nominees. For example, provinces and territories may target:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>students</li>
                                <li>business people</li>
                                <li>skilled workers</li>
                                <li>semi-skilled workers</li>
                            </ul>
                        </div>
                        <h4 class="par-head-h4">How to Apply </h4>
                        <p class="par-p">
                            How applicants can apply depends on which Provincial Nominee Program they are applying to.
                        </p>
                        <p class="par-p">
                            As part of the process, the applicant will have to pass a medical exam and get an up-to-date police certificate. All applicants must conduct these checks and examinations, no matter where they plan to live in Canada.
                        </p>

                        <h4 class="section-title mt-100">BCPNP Programs</h4>
                        <div class="line-red-2 pr-line"></div>
                        <div class="par-list">
                            <p class="par-p mb-0 color-blue">
                                Skill Immigration
                            </p>
                            <ul class="list-left">
                                <li class="color-black">
                                    This program is for skilled and semi-skilled workers in high-demand occupations in BC. The process utilizes a points-based invitation.
                                </li>
                            </ul>
                            <p class="par-p mb-0 color-blue">
                                Express Entry
                            </p>
                            <ul class="list-left">
                                <li class="color-black">
                                    Express Entry is a quicker way for eligible skilled workers to immigrate to BC. The client must also qualify for a federal economic immigration program. The process uses a points-based invitation system.
                                </li>
                            </ul>
                            <p class="par-p mb-0 color-blue">
                                Express Entry
                            </p>
                            <ul class="list-left">
                                <li class="color-black">
                                    The Entrepreneur Immigration program is for experienced entrepreneurs who want to actively manage a business in B.C. The process involves a points-based invitation system.
                                </li>
                                <li class="color-black">
                                    The Entrepreneur Immigration – Regional Pilot is for entrepreneurs who want to start a new business in participating regional communities across BC.
                                </li>
                                <li class="color-black">
                                    Other entrepreneur immigration programs are available for companies looking to expand into BC, and who need to get permanent residency for key employees.
                                </li>
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