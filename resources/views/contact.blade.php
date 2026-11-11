@extends('layout')

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

@section('content')
    <section class="contact-back">
        <div class="banner-back">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-text">
                        <h2>Risk Free Consultation Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section contact-form-back quick-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form-section ">
                        <h5 class="">Feel free to get in touch with us</h5>
                        <p>At Intelli Management Consulting, we value our client's confidentiality. In order to provide you with an accurate assessment of your options, please provide your contact information and one of our consulting experts will get in touch with you.</p>
                    </div>
                    <div class="contact-form-section mt-5">
                        <h5 class="">Contact Information</h5>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">Address</div>
                            <div class="table-item-right">130-7080 River Road, Richmond, BC, V6X 1X5 Canada</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">Phone </div>
                            <div class="table-item-right">1-778-297-7108</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">Email</div>
                            <div class="table-item-right">contact@intelliconsultation.com</div>
                        </div>
                        <div class="contact-table-wrap d-flex">
                            <div class="table-item">Opening</div>
                            <div class="table-item-right">Monday to Friday : 10:00am to 5:00 pm (PST)</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="w-75 mx-auto contact-form-section">
                        <h5 class="mb-3">Free Consultation and Assessment</h5>
                        <p class="mb-4">Fill out our Assessment Form and we'll review your eligibility for the immigration programs.</p>
                        <!-- Form -->

                        <form action="{{ url('/contact_mail') }}" method="POST">

                            <input type="text" name="fname" value="{{ old('fname') }}" placeholder="First Name">
                            @error('fname')
                                <div class="alert alert-danger">{{ $errors->first('fname') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="lname" value="{{ old('lname') }}" placeholder="Last Name" class="mt-20">
                            <br />
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" class="mt-20">
                            @error('email')
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="number" value="{{ old('number') }}" placeholder="Telephone" class="mt-20">
                            @error('number')
                                <div class="alert alert-danger">{{ $errors->first('number') }}</div>
                            @enderror
                            <br />
                            <input type="text" name="country" value="{{ old('country') }}" placeholder="Country of Residence" class="mt-20">
                            @error('country')
                                <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                            @enderror
                            <br />
                            <p class="mt-20">How did you find us?</p>

                            <input type="radio" name="referer" value="By Referer" {{ old('referer') == 'By Referer' ? 'checked' : '' }} onchange="yourFunction()"> By referrer
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="referer" value="Other" {{ old('referer') == 'Other' ? 'checked' : '' }} onchange="yourFunction()"> Other
                            <div id="referer_name" style="display: none;" class="mt-20">
                                <input type="text" name="referer_name" value="{{ old('referer_name') }}" placeholder="Referrer Name">
                            </div>
                            <div id="other" style="display: none;" class="mt-20">
                                <input type="text" name="other" value="{{ old('other') }}" placeholder="Fill in Here">
                            </div>

                            <textarea name="message" placeholder="How can we help you? Be as descriptive as possible." class="mt-20">{{ old('message') }}</textarea>
                            <br />

                            <div class="g-recaptcha mt-20" data-sitekey="6LffdvorAAAAAOLgOSgpKBksPY3ubFs0R4Oka1qB"></div>

                            <button type="submit" class="mt-20">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
