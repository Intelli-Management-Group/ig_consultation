@extends('layout')
@section('content')

<section class="lmia-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Options available for Permanent Residence in Canada</h5>-->
                    <h2>LMIA</h2>
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
                        <h4 class="par-head-h4 mt-0">How does the LMIA process work?</h4>
                        <p class="par-p">
                            If a Canadian employer interested in hiring a Temporary Foreign Worker (TFW) to work in Canada, must submit a Labour Market Impact Assessment (LMIA) application to Employment and Social Development Canada (ESDC). If the employer receives a positive LMIA, then the TFW can apply to Immigration Refugees and Citizenship Canada (IRCC) for their work permit.
                        </p>
                        <p class="par-p">
                           The government assesses the likely impact of hiring the TFW on the Canadian job market. The positive LMIA shows that there is indeed a need for a foreign worker to fill the specific job applied for and there is no Canadian worker or permanent resident available to do the job.  
                        </p>
                        <h4 class="par-head-h4">How do I get an LMIA?</h4>
                        <p class="par-p">
                            An employer offers a job to a TFW after multiple attempts of hiring a Canadian citizen or permanent resident for the intended position. The employer must demonstrate all the hiring attempts and fulfill the requirements set out by ESDC/Service Canada.
                        </p>
                        <h4 class="par-head-h4">How to get LMIA for Express Entry</h4>
                        <p class="par-p">
                          Once an employer receives a positive LMIA, skilled foreign workers who are professionally qualified may use Express Entry to come work in Canada. 
                        </p>
                        <p class="par-p">
                           This process takes many stages which is why it is so important for applicants to consult an immigration professional.
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