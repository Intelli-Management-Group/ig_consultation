@extends('layout')
@section('content')

<section class="studyvisa-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Study In Canada</h5>-->
                    <h2>Study Permit</h2>
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
                        <h4 class="section-title mt-0">Student Direct Stream</h4>
                        <div class="line-red-2 pr-line"></div>
                        <h4 class="par-head-h4">Requirements:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Legal resident living in: China, India, Morocco, Pakistan, Philippines, Senegal, Vietnam</li>
                                <li>Letter of Acceptance from a designated learning institution in Canada</li>
                                <li>Have a Guaranteed Investment Certificate (GIC) of $10,000 CAN</li>
                                <li>Language test result: IELTS 6.0 or higher</li>
                                <li>Visitor Visa</li>
                            </ul>
                        </div>
                        <h4 class="section-title">Regular Study Permit</h4>
                        <div class="line-red-2 pr-line"></div>
                        <h4 class="par-head-h4">Requirements:
                            <span class="par-p">(Minimum Funds)</span>
                        </h4>
                        <table>
                            <tr class="bg-grey ">
                                <td class="p-4">Persons coming to Canada</td>
                                <td class="p-4">Amount of funds required per year (doesn’t include tuition)</td>
                                <td class="p-4">Amount of funds required per month (additional to the tuition)</td>
                            </tr>
                            <tr class="table-bottom">
                                <td class="p-4">Student</td>
                                <td class="p-4">CAN $10,000</td>
                                <td class="p-4">CAN $833</td>

                            </tr>

                            <tr class="table-bottom">
                                <td class="p-4">First family member</td>
                                <td class="p-4">CAN $4,000</td>
                                <td class="p-4">CAN $333</td>
                            </tr>
                            <tr class="table-bottom">
                                <td class="p-4">Every additional accompanying family member</td>
                                <td class="p-4">CAN $3,000</td>
                                <td class="p-4">CAN $255</td>
                            </tr>

                        </table>
                        <h4 class="par-head-h4">Advantages / Outcome:</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>Valid for length of study program plus an extra 90 days (for preparation to leave or apply for extension of stay)</li>
                                <li>Allowed to work for up to 20 hours a week </li>
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