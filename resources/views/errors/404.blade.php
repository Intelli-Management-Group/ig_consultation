@extends('layout')
@section('content')
    <section class="error_section">
        <div class="banner-back">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-text">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h4 class="par-head-h4 pr-2 mt-0">404!</h4>
                    <p class="par-p pr-2">
                        Sorry, the page you are looking for could not be found
                    </p>
                    <div>
                        <a class="text-uppercase" href="{!! url('/') !!}" class="m-t">Go
                            back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
