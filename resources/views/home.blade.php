<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gadumi | Home</title>

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Outfit font -->
        <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            :root {
                --primary-new: #0b7cfe;
                --primary-new-2: rgb(0, 170, 255);
                --primary-new-lite: #6eaaf7;

                --success-new: rgb(20, 230, 140);
                --success-new-2: rgb(59, 255, 170);

                --warning-new: rgb(255, 120, 10);
                --warning-new-2: rgb(255, 139, 51);
            }
            html, body {
                overflow-x: hidden;
            }

            /*---------------Header-----------------*/
            .site-header {
                opacity: 1;
                background-color: rgb(255, 255, 255);
                background-size: auto;
                background-attachment: scroll;
                background-repeat: repeat;
                background-position: left top;
                border-radius: 0px;
                border-left: 1px solid rgb(235, 235, 235);
                border-right: 1px solid rgb(235, 235, 235);
                border-top: 1px solid rgb(235, 235, 235);
                border-bottom: 1px solid rgb(235, 235, 235);
                box-shadow: none;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 5000;
            }

            .site-logo {
                width: 40px;
                height: 40px;
                display: block;
            }

            .site-info .site-name h1 {
                font-size: 32px;
                line-height: 29px;
                color: var(--primary-new);
                font-weight: 800;
                user-select: none;
                font-family: outfit;
            }

            .site-info .site-name p {
                color: var(--primary-new-lite);
                font-size: 14px;
                line-height: 16px;
                user-select: none;
                font-family: outfit;
            }

            .main-nav-menu li a {
                color: #161823;
                font-size: 15px;
                line-height: 18px;
                font-weight: 600;
            }

            .main-nav-menu li a:hover {
                color: var(--primary-new-2);
            }

            .featured-menu {
                width: 100%;
            }

            @media (min-width: 768px) {
                .featured-menu {
                    width: auto;
                }
            }

            /*----------------/ Header----------------*/

            .btn.btn-primary-new {
                background-color: var(--primary-new);
                color: white;
                border-radius: 8px;
                padding: 3px 32px;
                font-weight: 600;
            }

            .btn.btn-primary-new:hover {
                background-color: var(--primary-new-2);
                color: white;
            }

            .btn.btn-success-new {
                background-color: var(--success-new);
                color: #161823;
                border-radius: 8px;
                padding: 3px 32px;
                font-weight: 600;
            }

            .btn.btn-success-new:hover {
                background-color: var(--success-new-2);
                color: #161823;
            }

            .btn.btn-warning-new {
                background-color: var(--warning-new);
                color: white;
                border-radius: 8px;
                padding: 3px 32px;
                font-weight: 600;
            }

            .btn.btn-warning-new:hover {
                background-color: var(--warning-new-2);
                color: white;
            }

            .btn.btn-primary-new-outline {
                background-color: white;
                color: var(--primary-new);
                border-radius: 8px;
                padding: 2px 32px;
                font-weight: 600;
                border: 2px solid var(--primary-new);
            }

            .btn.btn-primary-new-outline:hover {
                background-color: white;
                color: var(--primary-new);
                border-radius: 8px;
                padding: 2px 32px;
                font-weight: 600;
                border: 2px solid var(--primary-new);
            }

            .btn.btn-success-new-outline {
                background-color: white;
                color: var(--success-new);
                border-radius: 8px;
                padding: 2px 32px;
                font-weight: 600;
                border: 2px solid var(--success-new);
            }

            .btn.btn-success-new-outline:hover {
                background-color: white;
                color: var(--success-new);
                border-radius: 8px;
                padding: 2px 32px;
                font-weight: 600;
                border: 2px solid var(--success-new);
            }

            .btn.btn-cta {
                font-size: 17px;
                line-height: 20px;
                padding: 11px 38px;
            }
            .btn.btn-cta:hover {
                font-size: 17px;
                line-height: 20px;
                padding: 11px 38px
            }

            .section-hero {
                margin-top: 79px;
                /* height: 836px; */
                height: 572px;
                --left-offset: 0px;
            }

            @media(min-width: 485px) {
                .section-hero {
                    --left-offset: 16px;
                    /* height: 737px; */
                    height: 600px;
                }
            }

            @media(min-width: 533px) {
                .section-hero {
                    --left-offset: 40px;
                    height: 643px;
                }
            }

            @media(min-width: 576px) {
                .section-hero {
                    --left-offset: 20px;
                }
            }

            @media(min-width: 768px) {
                .section-hero {
                    --left-offset: 100px;
                    height: 677px;
                }
            }

            @media(min-width: 992px) {
                .section-hero {
                    height: 500px;
                    --left-offset: 0px;
                }
            }

            .section-hero .hero-image {
                height: 457px;
            }

            @media(min-width: 992px) {
                .section-hero .hero-image {
                    height: 100%;
                }
            }
            .section-hero .hero-image img.img-girl {
                width: 100%;
                max-width: 248px;
                height: auto;
                display: block;
                position: absolute;
                left: calc(129px + var(--left-offset));
                top: 42px;
                z-index: 2;
            }

            .section-hero .hero-image img.img-arrow {
                width: 207px;
                height: 400px;
                display: block;
                position: absolute;
                left: calc(85px + var(--left-offset));
                top: 133px;
                transform: rotate(179deg);
            }

            .section-hero .hero-image .hollow-el {
                max-width: 428px;
                width: 80%;
                height: 164px;
                display: block;
                position: absolute;
                left: calc(59px + var(--left-offset));
                top: 206px;
                opacity: 1;
                background-color: var(--primary-new);
                background-size: cover;
                background-attachment: scroll;
                background-repeat: repeat;
                background-position: left top;
                border-radius: 100px;
                border: none;
                box-shadow: none;
            }

            .section-hero .hero-image .text-el {
                color: var(--primary-new-lite);
                font-weight: 700;
                font-size: 18px;
            }

            .section-hero .hero-image .text-el.text-el-1 {
                width: 197px;
                height: 90px;
                display: block;
                position: absolute;
                left: calc(128px + var(--left-offset));
                top: 116px;
            }
            .section-hero .hero-image .text-el.text-el-2 {
                width: 148px;
                height: 53px;
                display: block;
                position: absolute;
                left: calc(396px + var(--left-offset));
                top: 149px;
            }

            .section-hero .hero-image .text-el.text-el-3 {
                width: 197px;
                height: 90px;
                display: block;
                position: absolute;
                left: calc(0px + var(--left-offset)) ;
                top: 193px;
            }

            .section-hero .hero-image .text-el.text-el-4 {
                width: 179px;
                height: 53px;
                display: block;
                position: absolute;
                left: calc(442px + var(--left-offset));
                top: 228px;
            }

            .section-hero .hero-image .text-el.text-el-5 {
                width: 179px;
                height: 53px;
                display: block;
                position: absolute;
                left: calc(52px + var(--left-offset));
                top: 284px;
            }

            .section-hero .hero-image .text-el.text-el-6 {
                width: 179px;
                height: 53px;
                display: block;
                position: absolute;
                left: calc(406px + var(--left-offset));
                top: 310px;
            }

            @media (max-width: 486px) {
                .section-hero .hero-image img.img-girl {
                    left: calc(60px + var(--left-offset));
                    top: 40px;
                }

                .section-hero .hero-image .text-el.text-el-1 {
                    left: calc(119px + var(--left-offset));
                    top: 73px;
                }

                .section-hero .hero-image .text-el.text-el-3 {
                    left: calc(17px + var(--left-offset));
                    top: 144px;
                }

                .section-hero .hero-image .text-el.text-el-4 {
                    left: calc(342px + var(--left-offset));
                }

                .section-hero .hero-image .text-el.text-el-2 {
                    left: calc(317px + var(--left-offset));
                }

                .section-hero .hero-image .text-el.text-el-6 {
                    left: calc(324px + var(--left-offset));
                }
            }

            .section-hero .hero-text {
                text-align: center;
            }

            .section-hero .hero-text .btn {
                margin-right: auto;
                margin-left: auto;
            }

            @media (min-width: 992px) {
                .section-hero .hero-text {
                    text-align: left;
                }

                .section-hero .hero-text .btn {
                    margin-right: initial;
                    margin-left: initial;
                }
            }

            .section-hero .hero-text h1 {
                font-size: 29px;
                line-height: 48px;
                font-weight: 700;
            }

            @media (min-width: 992px) {
                .section-hero .hero-text h1 {
                    font-size: 40px;
                }
            }

            .section-hero .hero-text p {
                font-size: 16px;
                line-height: 30px;
            }

            @media (min-width: 992px) {
                .section-hero .hero-text p {
                    font-size: 18px;
                }
            }

            .section-1 {

            }

            .section-title {
                font-weight: 700;
            }

            .section-1-desc {
                font-weight: 700;
            }

            @media (min-width: 992px) {
                .section-1 .row {
                    width: 80%;
                }
            }

            .section-1-text {
                /* width: 70%;
                margin-left: 70px;
                margin-top: -64px; */
            }
            @media (min-width: 786px) {
                .section-1-text {
                
                }
            }

            @media (min-width: 992px) {
                .section-1-text {
                    width: 70%;
                    margin-left: 70px;
                    margin-top: -64px;
                }
            }

            .section-1-text h1 {
                font-size: 32px;
                line-height: 38px;
                font-weight: 700;
            }

            .section-1-img {
                width: 236px;
                height: 506px;
                overflow: hidden;
                margin: auto;
            }

            .section-1-img img {
                width: 1051px;
                height: 736px;
            }

            @media (min-width: 992px) {
                .section-2 .row {
                    width: 80%;
                }
            }

            .section-2-img {
                max-width: 510px;
                height: auto;
                width: 100%;
                overflow: hidden;
                margin: auto;
                border-radius: 20px;
            }

            .section-2-img img {
                max-width: 510px;
                height: auto;
                width: 100%;
            }

            .section-2-text {
                text-align: center;
                margin-top: 3rem;
            }
            .section-2-text .btn {
                margin: auto;
            }

            @media (min-width: 992px) {
                .section-2-text {
                    text-align: left;
                    margin-top: 0;
                    margin-left: 70px;
                }

                .section-2-text .btn {
                    margin: 0;
                }
            }

            @media (min-width: 1200px) {
                .section-2-text {
                    width: 70%;
                    text-align: left;
                }
            }

            .section-2-text h1 {
                font-size: 32px;
                line-height: 38px;
                font-weight: 700;
            }

            .section-3 .image img {
                width: 45px;
                height: 45px;
            }

            .section-3 .box .text {
                margin-right: 48px;
            }

            .section-3 .box .text h3 {
                color: #161823;
                font-size: 18px;
                line-height: 21px;
                font-weight: 700;
            }

            .section-testimonials {
                background-color: rgb(235, 244, 255);
                padding-bottom: 96px !important;
            }

            .section-testimonials .boxes {
                justify-content: center
            }

            @media (min-width: 768px) {
                .section-testimonials .boxes {
                    justify-content: space-between;
                }
            }

            @media (min-width: 768px) {
                .section-testimonials .boxes {
                    width: 78%;
                }
            }

            .section-testimonials .box {
                opacity: 1;
                background-color: rgb(255, 255, 255);
                background-size: cover;
                background-attachment: scroll;
                background-repeat: repeat;
                background-position: left top;
                border-radius: 10px;
                border-left: 1px solid rgb(225, 225, 225);
                border-right: 1px solid rgb(225, 225, 225);
                border-top: 1px solid rgb(225, 225, 225);
                border-bottom: 1px solid rgb(225, 225, 225);
                box-shadow: 0px 2px 10px rgb(215 215 215);
                width: 220px;
                height: 296px;
                padding: 16px 16px 8px;
            }

            .section-testimonials .box .rating img {
                width: 20px;
                height: 20px;
            }

            .section-testimonials .box .name {
                color: #161823;
                font-size: 17px;
                line-height: 20px;
            }

            .section-testimonials .box .comment {
                color: #161823;
                font-size: 14px;
                line-height: 24px;
            }

            .section-testimonials .box .country .country-name {
                color: #161823;
                font-size: 14px;
                line-height: 16px;
            }

            .section-testimonials .box .country .country-flag img {
                width: 20px;
                height: 20px;
            }

            .section-call-to-action {
                opacity: 1;
                background-size: cover;
                background-attachment: scroll;
                background-image: linear-gradient(0deg, rgb(105, 0, 253) 0%, rgb(11, 124, 254) 100%);
                background-repeat: repeat;
                background-position: left top;
                border-radius: 0px;
                border: none;
                box-shadow: none;
                color: white;
                padding-bottom: 96px !important;
            }

            .offcanvas.offcanvas-start {
                width: 100%;
                transform: translateY(-100%);
                transition: none;
                border-right: none;
            }

            .navbar-toggler-new {
                background-color: rgba(236,244,255,255);
                border: none;
                padding: 10px 14px;
                border-radius: 14px;
                color: var(--primary-new);
            }

        </style>
    </head>
    <body>

        <!-- Header -->
        <header class="site-header">
            <div class="container">
                <div class="top-bar d-flex align-items-center flex-wrap py-2 gap-4">
                    <!-- Site Logo -->
                    <a href="{{ url('/') }}" class="flex-grow-1 text-decoration-none d-block">
                        <div class="site-info d-flex h-100 align-items-center gap-2">
                            <div class="site-logo d-flex align-items-center">
                                <img src="{{ asset('images/gadumi-logo.svg') }}" alt="Gadumi">
                            </div>
                            <div class="site-name">
                                <h1 class="m-0">Gadumi</h1>
                                <p class="m-0">Your English language course</p>
                            </div>
                        </div>
                    </a>
                    <!-- /Site Logo -->

                    <!-- Main Navigation Menu -->
                    <div class="main-nav-menu navbar navbar-expand-lg">
                        <button class="navbar-toggler-new d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainNavMenuOffCanvas" aria-controls="Toggle Mobile Menu">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- Desktop menu -->
                        <nav class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#howItsWorking" class="nav-link">How it's working</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#whyIsItWorth" class="nav-link">Why is it worth it</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#testimonials" class="nav-link">Feedback</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Mobile menu -->
                        <nav class="offcanvas offcanvas-start d-lg-none" id="mainNavMenuOffCanvas" tabindex="-1" aria-labelledby="Mobile Menu">
                            <div class="offcanvas-header p-0">
                                <header class="site-header">
                                    <div class="container">
                                        <div class="top-bar position-static w-100 d-flex align-items-center flex-wrap gap-4 align-items-center" style="padding-top: 1rem; padding-bottom: 1rem;">
                                            <!-- Site Logo -->
                                            <a href="{{ url('/') }}" class="flex-grow-1 text-decoration-none d-block">
                                                <div class="site-info d-flex h-100 align-items-center gap-2">
                                                    <div class="site-logo d-flex align-items-center">
                                                        <img src="{{ asset('images/gadumi-logo.svg') }}" alt="Gadumi" style="margin-bottom: 1px;">
                                                    </div>
                                                    <div class="site-name">
                                                        <h1 class="m-0">Gadumi</h1>
                                                        <p class="m-0">Your English language course</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- /Site Logo -->
                                            <button class="navbar-toggler-new" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainNavMenuOffCanvas" aria-controls="Toggle Mobile Menu" style="padding: 10px 16px;">
                                                <span class="fa fa-times"></span>
                                            </button>
                                        </div>
                                    </div>
                                </header>
                            </div>
                            <div class="offcanvas-body position-relative pt-1 pl-0" style="margin-top: 79px;">
                                <div class="container">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link" onclick="$('#mainNavMenuOffCanvas').offcanvas('hide'); setTimeout(() => document.querySelector('#howItsWorking').scrollIntoView({behavior: 'smooth'}), 1000);">How it's working</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link" onclick="$('#mainNavMenuOffCanvas').offcanvas('hide'); setTimeout(() => document.querySelector('#whyIsItWorth').scrollIntoView({behavior: 'smooth'}), 1000);">Why is it worth it</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link" onclick="$('#mainNavMenuOffCanvas').offcanvas('hide'); setTimeout(() => document.querySelector('#testimonials').scrollIntoView({behavior: 'smooth'}), 1000);">Feedback</a>
                                        </li>
                                        <li class="mt-4">
                                            <div class="featured-menu d-flex justify-content-center gap-3 flex-column">
                                                <a href="{{ url('/listing') }}" class="btn btn-primary-new btn-lg btn-cta">Start now!</a>
                                                <a href="#" class="btn btn-primary-new-outline btn-lg btn-cta">Log in</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- /Main Navigation Menu -->

                    <!-- Featured Navigation Menu -->
                    <div class="featured-menu d-none d-lg-flex justify-content-end gap-3">
                        <a href="{{ url('/listing') }}" class="btn btn-primary-new">Start now!</a>
                        <a href="#" class="btn btn-primary-new-outline">Log in</a>
                    </div>
                    <!-- /Featured Navigation Menu -->
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Hero Section -->
        <section class="section-hero mb-5 pb-4">
            <div class="container h-100 p-0 px-xxl-4">
                <div class="row h-100">
                    <div class="col-12 col-lg-6 px-0 px-xxl-5 d-none d-lg-block">
                        <div class="hero-image position-relative overflow-hidden">
                            <img class="img-girl" src="{{ asset('images/gadumi-hero-image.png') }}" alt="">
                            <img class="img-arrow" src="{{ asset('images/hero-img-arrow.svg') }}" alt="">
                            <div class="hollow-el"></div>
                            <div class="text-el text-el-1">Hello</div>
                            <div class="text-el text-el-2">Hi!</div>
                            <div class="text-el text-el-3">How are you?</div>
                            <div class="text-el text-el-4">Great.</div>
                            <div class="text-el text-el-5">See you!</div>
                            <div class="text-el text-el-6">Bye!</div>
                        </div>
                    </div>
                    <div class="hero-text col-12 col-lg-6 d-flex flex-column gap-3 justify-content-center px-4 px-sm-5">
                        <h1>Speak English fluently in no time</h1>
                        <img src="{{ asset('images/gadumi-mobile-hero.jpg') }}" class="d-lg-none" alt="">
                        <p>
                            <b>Master the English language</b> with a course created by foreign language lovers without having to pay the teacher for each hour of study.
                        </p>
                        <a href="{{ url('/listing') }}" class="btn btn-primary-new btn-cta btn-lg w-fit-content" style="width: fit-content">Get started now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Section 1 -->
        <section id="howItsWorking" class="section-1 mb-5">
            <div class="container">
                <h1 class="section-1-title text-center">Meet Gadumi</h1>
                <h2 class="section-1-desc text-center">a course created with ❤️ just for you</h2>
                <div class="row mx-auto mt-5">
                    <div class="col-md-7 d-none d-md-flex align-items-center">
                        <div class="section-1-text d-flex flex-column gap-3 justify-content-center">
                            <h1>It's always a good time to learn</h1>
                            <p>
                                Thanks to the short lessons of a few minutes, you will always find a moment to develop your language skills.
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="section-1-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/gadumi-mobile-app-screenshot.png') }}" alt="">
                        </div>
                    </div>

                    <!-- For Mobile -->
                    <div class="col-md-7 d-flex d-md-none align-items-center mt-5 text-center">
                        <div class="section-1-text d-flex flex-column gap-3 justify-content-center">
                            <h1>It's always a good time to learn</h1>
                            <p>
                                Thanks to the short lessons of a few minutes, you will always find a moment to develop your language skills.
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content mx-auto btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                    <!-- /For Mobile -->
                </div>
            </div>
        </section>
        <!-- /Section 1 -->

        <!-- Section 2 -->
        <section class="section-2 mb-5 pt-5">
            <div class="container">
                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <div class="section-2-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/gadumi-section-2-image.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="section-2-text d-flex flex-column gap-3 justify-content-center ml-5">
                            <h1>Your development is most important to us</h1>
                            <p>
                                Every week, the Gadumi team prepares new lessons for you, thanks to which you will learn the English language even better.
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section 2 -->

        <!-- Section 1 -->
        <section class="section-1 mb-5 pt-5">
            <div class="container">
                <div class="row mx-auto">
                    <div class="col-md-7 d-none d-md-flex align-items-center">
                        <div class="section-1-text d-flex flex-column gap-3 justify-content-center">
                            <h1>Learning feels like fun</h1>
                            <p>
                                You read, listen, repeat, click. When creating Gadumi, we remembered that learning should not only be effective, but also enjoyable.
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="section-1-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/gadumi-mobile-app-screenshot.png') }}" alt="">
                        </div>
                    </div>

                    <!-- For Mobile -->
                    <div class="col-md-7 d-flex d-md-none align-items-center mt-5 text-center">
                        <div class="section-1-text d-flex flex-column gap-3 justify-content-center">
                            <h1>Learning feels like fun</h1>
                            <p>
                                You read, listen, repeat, click. When creating Gadumi, we remembered that learning should not only be effective, but also enjoyable.
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content mx-auto btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                    <!-- /For Mobile -->
                </div>
            </div>
        </section>
        <!-- /Section 1 -->

        
        <!-- Section 2 -->
        <section class="section-2 mb-5 pt-5">
            <div class="container">
                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <div class="section-2-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/gadumi-section-2-img-2.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="section-2-text d-flex flex-column gap-3 justify-content-center ml-5">
                            <h1>Open up to new possibilities</h1>
                            <p>
                                Knowing English you gain access to unlimited knowledge from all over the world. Remember that most books and content on the Internet are written in English!
                            </p>
                            <a href="{{ url('/listing') }}" class="btn btn-success-new btn-lg w-fit-content btn-cta" style="width: fit-content">Learn English</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section 2 -->

        <!-- Section 3 -->
        <section id="whyIsItWorth" class="section-3 mb-5 pt-5">
            <div class="container px-4">
                <h1 class="section-title text-center">Why is it worth learning English with Gadumi?</h1>
                <div class="row mt-5">
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-hello.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>The most commonly used words</h3>
                            <p>along with photos and examples to help you remember them faster and better</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-abc.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Grammar lessons</h3>
                            <p>explaining how to build statements correctly</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-phone.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Always by your side</h3>
                            <p>course available on any device. Phone, tablet, laptop? You choose!</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-chat.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Real-life dialogues</h3>
                            <p>based on everyday situations such as shopping in a store or booking a ticket</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-card.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Flashcards</h3>
                            <p>which is one of the most popular methods for learning foreign languages</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex gap-3 mb-4">
                        <div class="image py-2">
                            <img src="{{ asset('images/gadumi-time.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Time doesn't matter</h3>
                            <p>learn English wherever you want, when you want and for as long as you want, 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section 3 -->

        <!-- section-testimonials -->
        <section id="testimonials" class="section-testimonials py-5">
            <div class="container">
                <h1 class="section-title text-center">What do users say about Gadumi?</h1>
                <div class="boxes d-flex align-items-center mt-5 mx-auto gap-4 flex-wrap">
                    <div class="box d-flex flex-column">
                        <div class="rating d-flex gap-1 align-items-center justify-content-center mb-2">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                        </div>
                        <h3 class="name">Adam K.</h3>
                        <p class="comment flex-grow-1">
                            Sample text, example text, example text, example text, sample text, sample text, sample text, sample text 
                        </p>
                        <div class="country d-flex align-items-center justify-content-end gap-2">
                            <div class="country-name">Poland</div>
                            <div class="country-flag d-flex align-items-center">
                                <img src="{{ asset('images/poland-flag.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex flex-column">
                        <div class="rating d-flex gap-1 align-items-center justify-content-center mb-2">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                        </div>
                        <h3 class="name">Adam K.</h3>
                        <p class="comment flex-grow-1">
                            Sample text, sample text, sample text, sample text, sample text, sample text, sample text, sample text, sample text 
                        </p>
                        <div class="country d-flex align-items-center justify-content-end gap-2">
                            <div class="country-name">Great Britain</div>
                            <div class="country-flag d-flex align-items-center">
                                <img src="{{ asset('images/great-britain-flag.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex flex-column">
                        <div class="rating d-flex gap-1 align-items-center justify-content-center mb-2">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                        </div>
                        <h3 class="name">Adam K.</h3>
                        <p class="comment flex-grow-1">
                            Sample text, example text, example text, example text, sample text, sample text, sample text, sample text 
                        </p>
                        <div class="country d-flex align-items-center justify-content-end gap-2">
                            <div class="country-name">Norway</div>
                            <div class="country-flag d-flex align-items-center">
                                <img src="{{ asset('images/norway-flag.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex flex-column">
                        <div class="rating d-flex gap-1 align-items-center justify-content-center mb-2">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                            <img src="{{ asset('images/rating-star.svg') }}" alt="">
                        </div>
                        <h3 class="name">Adam K.</h3>
                        <p class="comment flex-grow-1">
                            Sample text, text also sample testk testk text Sample text, sample, text, test, text, sample
                        </p>
                        <div class="country d-flex align-items-center justify-content-end gap-2">
                            <div class="country-name">Poland</div>
                            <div class="country-flag d-flex align-items-center">
                                <img src="{{ asset('images/poland-flag.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section-testimonials -->

        <!-- section-call-to-action -->
        <section class="section-call-to-action py-5">
            <div class="container text-center">
                <h1 class="section-title text-center">Try Gadumi absolutely for free</h1>
                <p class="text-center mb-4">You have nothing to lose. You can only gain.</p>
                <a href="{{ url('/listing') }}" class="btn btn-warning-new btn-cta btn-lg w-fit-content" style="width: fit-content; border-radius: 5px; padding: 16px 84px; border: 1px solid rgb(0, 115, 255); text-shadow: rgb(0 0 0) 0px 1px 1px;">Try Gadumi for free</a>
            </div>
        </section>
        <!-- /section-call-to-action -->

        <!-- footer -->
        <footer>
            <div class="container py-3">
                <div class="d-flex justify-content-center justify-content-sm-between align-items-center flex-wrap">
                    <div style="color:#666e7e; font-size: 14px; line-height: 16px;">© Gadumi Regulations Privacy policy Contact</div>
                    <div style="color: #161823; font-size: 14px; line-height: 16px;">Created with ❤️ by language lovers</div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </body>
</html>