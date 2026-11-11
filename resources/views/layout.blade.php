<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link rel="canonical" href="https://intelliconsultation.com" />
    <title>Intelli Consultation</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NYGV2P5P1F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NYGV2P5P1F');
    </script>
    @stack('scripts')

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('libs/slider-pro/slider-pro.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/forum.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" rel="stylesheet">

    <?php
    
    if (isset($_SERVER['QUERY_STRING'])) {
        $languageParam = explode('=', $_SERVER['QUERY_STRING']);
    } else {
        $languageParam = [];
    }
    
    $language = '';
    
    if (isset($languageParam[1])) {
        $language = $languageParam[1];
    } else {
        $language = 'english';
    }
    
    ?>

</head>

<body>
    <div class="l-theme">

        <div class="search-block-hidden">

            <div class="close-search"><i class="fas fa-times"></i></div>
        </div>
        <!-- Header -->
        <header class="header-top-absolute">
            <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
                <a class="navbar-brand  d-flex" href="{{ url('/') . '?' . http_build_query(['language' => $language]) }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
                <div class="d-flex ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->


                    <ul class="nav">
                        <li class="close-nav"><i class="fas fa-times"></i></li>
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link " href="{{ url('/') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Home' : '主頁' }}<span class="sr-only">(current)</span></a>
                        </li>
                        {{--                    <li class="nav-item {{ Request::segment(1) === 'webinar_registration' ? 'active' : null }}"> --}}
                        {{--                        <a class="nav-link " href="{{ url('/webinar_registration') .'?'. http_build_query(['language' => $language]) }}">Webinar Registration</a> --}}
                        {{--                    </li> --}}
                        <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                            <a class="nav-link " href="{{ url('/about') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'About Us' : '關於我們' }}</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'canada' ? 'active' : null }}">
                            <a class="nav-link" href="{{ url('/canada') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'About Canada' : '關於加拿大' }}</a>
                        </li>
                        <li
                            class="nav-item dropdown {{ (Request::segment(1) === 'Services-express_entry' ? 'active' : Request::segment(1) === 'Services-LMIA') ? 'active' : null }}
                    {{ (Request::segment(1) === 'Services-family_sponsor' ? 'active' : Request::segment(1) === 'Services-startup_visa') ? 'active' : null }}
                    {{ (Request::segment(1) === 'Services-PNP' ? 'active' : Request::segment(1) === 'Services-caregiver') ? 'active' : null }}
                    {{ (Request::segment(1) === 'Services-workpermit' ? 'active' : Request::segment(1) === 'Services-studypermit') ? 'active' : null }}
                    {{ (Request::segment(1) === 'Services-visitorvisa' ? 'active' : Request::segment(1) === 'Services-prcard') ? 'active' : null }}
                    {{ Request::segment(1) === 'Services-citizenship' ? 'active' : null }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $language == 'english' || $language == '' ? 'Our Services' : '服務範圍' }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-express_entry') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Express Entry' : '快速入境' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-LMIA') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'LMIA' : 'LMIA（勞動力市場評估）' }}</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-family_sponsor') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == ''
                                        ? 'Family
                                                                        Sponsorship'
                                        : '家庭團聚移民' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-startup_visa') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Start Up Visa' : '創業移民' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-PNP') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'PNP' : '省提名移民' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-caregiver') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Caregiver' : '護理人員移民' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-workpermit') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Work Permit' : '工作許可' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-studypermit') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Study Permit' : '留學簽證' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-visitorvisa') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Visitor Visa' : '旅遊簽證' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-prcard') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'PR Card' : '公關申請' }}</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/Services-citizenship') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == ''
                                        ? 'Citizenship
                                                                        Application'
                                        : '入籍申請' }}</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item {{ Request::segment(1) === 'News' ? 'active' : null }}"> --}}
                        {{-- <a class="nav-link" href="{!!url('/News')!!}">News</a> --}}
                        {{-- </li> --}}
                        <li class="nav-item dropdown {{ Request::segment(1) === 'News' ? 'active' : null }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $language == 'english' || $language == '' ? 'News' : '最新消息' }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="{{ url('/News') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'All News' : '所有新聞' }}</a>
                                </li>

                                <?php
                                $cats = \App\Models\BlogCategories::all();
                                ?>

                                @foreach ($cats as $c)
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="{{ url('/News-category/' . $c->catID) . '?' . http_build_query(['language' => $language]) }}">{!! $c->catTitle !!}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'contactus' ? 'active' : null }}">
                            <a class="nav-link" href="{{ url('/contactus') . '?' . http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Contact Us' : '聯絡我們' }}</a>
                        </li>
                        <li class="nav-item ">
                            <div class="switch">
                                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                                <label for="language-toggle"></label>
                                <span class="on">A</span>
                                <span class="off">文</span>
                            </div>
                        </li>

                    </ul>
                    <!-- </div> -->
                </div>
            </nav>
        </header>

        <main class="">
            @yield('content')
        </main>

        <!--Footer -->

        @if (basename($_SERVER['PHP_SELF']) != 'life_in_canada.php' && basename($_SERVER['PHP_SELF']) != 'thank_you.php')

            <section class="section-13 logo-back">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="text-block-section d-flex align-items-center">

                                @if ($language == 'english' || $language == '')
                                    <h5>Book a free consultation with us. We will help make the process quicker, more efficient,
                                        and
                                        stress-free for you.
                                    </h5>
                                @else
                                    <h5>與我們預約免費諮詢。我們將幫助您更快、更高效、更輕鬆地完成整個過程
                                    </h5>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-block-section d-flex align-items-center">
                                <a href="{{ url('/contactus') . '?' . http_build_query(['language' => $language]) }}" class="contact-link">
                                    @if ($language == 'english' || $language == '')
                                        Free Consultation
                                    @else
                                        免費諮詢
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h5 class="footer-head">
                                @if ($language == 'english' || $language == '')
                                    Call us: +1 (778) 297-7108
                                @else
                                    聯繫我們: +1 (778) 297-7108
                                @endif

                            </h5>
                            <p class="footer-company">Intelli Management Consulting Corp.</p>
                            <p class="footer-address">200-3071 No 5 Road, Richmond, BC, V6X 2T4 Canada
                            </p>
                        </div>
                        <div class="col-md-5">
                            <ul class="footer-nav">
                                <li>
                                    <a href="{{ url('/Privacy-policy') . '?' . http_build_query(['language' => $language]) }}" class="">{{ $language == 'english' || $language == '' ? 'Privacy Policy' : '隐私条款' }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/Terms-and-conditions') . '?' . http_build_query(['language' => $language]) }}" class="">{{ $language == 'english' || $language == '' ? 'Terms and Condition' : '附带条约' }}</a>
                                </li>
                            </ul>
                            </nav>
                            <h6 class="footer-alegada">Intelli Management Consulting Corp. © <?= date('Y') ?> - All rights
                                reserved.</h6>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
@else
    </div>

    <footer>
        <div class="container">
            <h6 class="footer-alegada text-right">Intelli Management Consulting Corp. © <?= date('Y') ?> - All rights
                reserved.</h6>
        </div>
    </footer>


    @endif

    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('js/popper.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" defer></script>
    <script src="{{ asset('js/custom.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" defer></script>
    <script src="{{ asset('libs/slider-pro/jquery.sliderPro.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}" defer></script>
    <script src="{{ asset('libs/owl-carousel/owl.carousel.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/bxslider/jquery.bxslider.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('js/isotope.pkgd.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/scrollreveal/scrollreveal.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/animate/wow.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/animate/jquery.shuffleLetters.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>
    <script src="{{ asset('libs/animate/jquery.scrollme.min.js') . '?ver=' . base64_encode(\Carbon\Carbon::now()->format('Y-m-d')) }}"></script>

    <script>
        $(document).ready(function() {
            const toggleBtn = $('#language-toggle');

            // Function to update query string parameters in the URL
            function updateQueryStringParameter(uri, key, value) {
                const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
                const separator = uri.indexOf('?') !== -1 ? "&" : "?";
                if (uri.match(re)) {
                    return uri.replace(re, '$1' + key + "=" + value + '$2');
                } else {
                    return uri + separator + key + "=" + value;
                }
            }

            // Update toggle button state based on URL
            const urlParams = new URLSearchParams(window.location.search);
            const langParam = urlParams.get('language');
            if (langParam === 'english') {
                toggleBtn.prop('checked', false);
            } else if (langParam === 'chinese') {
                toggleBtn.prop('checked', true);
            }

            // Listen for toggle button change
            toggleBtn.on('change', function() {
                // const language = toggleBtn.is(':checked') ? 'english' : 'chinese';
                const language = toggleBtn.is(':checked') ? 'chinese' : 'english';

                const baseUrl = window.location.origin + window.location.pathname;
                const newUrl = updateQueryStringParameter(baseUrl, 'language', language);
                // Update URL without reloading the page
                history.pushState({}, '', newUrl);
                window.location.href = newUrl;
                // Update page content based on language selection

            });


        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            // get the #section from the URL
            var hash = window.location.hash;
            // console.log(hash);
            $(hash).click();
        });

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
            }
            var $subMenu = $(this).next('.dropdown-menu');
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass('show');
            });


            return false;
        });


        $(".register-button").on('click', function() {
            $('html, body').animate({
                scrollTop: $("#webinar-form-section").offset().top
            }, 2000);
        })

        $("#webinar-register-form,#webinar-register-form-mobile").on("submit", function(e) {
            $(".alert-success,.alert-danger").addClass("d-none");
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "inc/functions.php",
                data: form_data,
                success: function(data) {
                    if (data == "success") {
                        $(".registration-form-section,.alert-danger").addClass("d-none");
                        $(".alert-success").removeClass("d-none");
                    } else if (data == "error") {
                        $(".alert-success").addClass("d-none");
                        $(".alert-danger").removeClass("d-none");
                    }
                }
            });
        })
    </script>
</body>

</html>
