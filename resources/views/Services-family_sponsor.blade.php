@extends('layout')
@section('content')
    <section class="family-back">
        <div class="banner-back">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-text">
                        <!--<h5>Sponsorship Programs</h5>-->
                        <h2>Family Sponsorship</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="content-wrap practice-single">
                        <div class="content-text">
                            <h3 class="font-head-it">Reunite your family through Canadian government’s Family Class Sponsorship programs</h3>
                            <h4 class="section-title">Available Sponsorship Programs</h4>
                            <div class="line-red-2 pr-line"></div>

                            <div class="accordion-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Spouse or Common Law Partner
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                <h4 class="mt-2">Requirements for the Sponsor:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsor must be at least 18 years of age</li>
                                                        <li>The sponsor must be a Canadian permanent resident living in Canada or a Canadian citizen</li>
                                                        <li>The sponsor cannot be in prison, bankrupt, under a removal order (if a permanent resident) or charged with a serious offence</li>
                                                        <li>The sponsor cannot have been sponsored to Canada as a spouse within the last 5 years</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for the Sponsored Person:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsored person must be at least 16 years of age</li>
                                                        <li>The sponsored person must not be too closely related by blood to the sponsor</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for the nature of the relationship:</h4>
                                                <p class="par-p mb-0">
                                                    The applicant must prove that the relationship between the sponsor and the sponsored person qualifies under one of three categories:
                                                </p>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>Spouse: This means that the Sponsor and the Sponsored Person are legally married</li>
                                                        <li>Common-law partner: In order to establish a common-law relationship, the Sponsor and the Sponsored Person must cohabit continuously for at least one year, excluding brief absences for business or family reasons</li>
                                                        <li>Conjugal partner: Conjugal partners can be of either opposite-sex or same-sex</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Dependent Children
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                <h4 class="mt-2">Requirements for the Sponsor:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsor must be 18 years of age</li>
                                                        <li>The sponsor must be a Canadian permanent resident living in Canada or a Canadian citizen</li>
                                                        <li>The sponsor cannot be in prison, bankrupt, under a removal order (if a permanent resident) or charged with a serious offence</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for the Sponsored Person:</h4>
                                                <p class="par-p mb-0">
                                                    The sponsored person must be in one of the following situations of dependency:
                                                </p>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>Less than 22 years of age and not a spouse or common-law partner</li>
                                                        <li>22 years of age or older and has depended substantially on the financial support of the parent since before the age of 22 and is unable to be financially self-supporting due to a physical or mental condition</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for nature of the relationship:</h4>
                                                <p class="par-p mb-0">
                                                    The sponsored person must be either:
                                                </p>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The biological child of the parent if the child has not been adopted by a person other than the spouse or common-law partner</li>
                                                        <li>The adopted child of the parent</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Parent and Grandparent Family Class Sponsorship
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4 class="mt-2">Requirements for the Sponsor:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsor must be the child or grandchild of the sponsored person</li>
                                                        <li>The sponsor must provide a written commitment of financial support</li>
                                                        <li>The sponsor must meet the minimum income threshold for this program</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for the Sponsored Person:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsored person must be the parent(s) or grandparent(s) of the sponsor</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Parent and Grandparent Super Visa Sponsorship
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4 class="mt-2">Requirements for the Sponsor:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsor and their relative must sign a sponsorship agreement that commits the sponsor to provide financial support to their relative, if necessary</li>
                                                        <li>The sponsor must promise to provide financial support for the relative and any other eligible relatives accompanying them for a period of 20 years</li>
                                                        <li>The sponsor must meet the minimum income threshold for this program</li>
                                                    </ul>
                                                </div>
                                                <h4 class="">Requirements for the Sponsored Person:</h4>
                                                <div class="par-list">
                                                    <ul class="list-left">
                                                        <li>The sponsored person must be the parent or grandparent of the sponsor</li>
                                                        <li>The sponsored person must be admissible to Canada as a visitor</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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