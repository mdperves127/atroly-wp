<?php
/**
 * Template Name: Home 2
 */

get_header();
?>

<!-- hero section -->
<!-- < Hero Section -->
<section class="hero--two">
    <!-- < hero content -->
    <div class="hero-content--wrap">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-10">
                    <div class="hero--content d-flex flex-column justify-content-start position-relative">
                        <h1 class="title text-start wow animate__animated animate__fadeInUp splite-text" data-splitting
                            data-wow-delay="0.2s">
                            We Stand Always for Right Justice
                        </h1>

                        <div class="element--wrap position-absolute d-none d-md-inline-block">
                            <img class="left_image_bounce" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-element-1.png" alt="image">
                        </div>

                        <p class="subtitle fs--18 w--70 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit, sed. Beatae vitae
                            dicta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero content /> -->

    <div class="hero-bg--img wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-2.png" alt="image">
    </div>

    <!-- < follow content -->
    <div class="hero-follow--box position-absolute wow animate__animated animate__fadeInUp">
        <div class="content--wrap d-flex align-items-center gap--20">
            <p>Follow us on</p>
            <ul class="d-flex gap--20 icon--wrap">
                <li>
                    <a href="#" class="text--base-two fs--16"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#" class="text--base-two fs--16"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="#" class="text--base-two fs--16"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
            </ul>
            <p>Now</p>
        </div>
    </div>
    <!-- follow content />-->
</section>

<!--  Hero Section />-->


<!-- about section -->
<section class="law--firm pb-80">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="thumb--wrap position-relative">
                    <div class="thumb--one position-absolute z--1 top_image_bounce">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/firm-thamb1.png" alt="image">
                    </div>
                    <div class="thumb--two position-relative zm--1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/firm-thamb2.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content--wrap position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-content mb-50">
                                <div class="title-wrap">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-10 col-lg-12">
                                            <h2 class="title mb-4 fs--40 wow animate__animated animate__fadeInUp splite-text"
                                                data-splitting data-wow-delay="0.2s">
                                                We Are The Leading Law Firm Industry
                                            </h2>
                                            <div class="element--wrap position-absolute d-none d-md-inline-block">
                                                <img class="left_image_bounce"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-element-1.png" alt="image">
                                            </div>
                                            <p class="subtitle w--90 wow animate__animated animate__fadeInUp">
                                                It encompasses a wide range of principles and guidelines
                                                established by a government or other authoritative body.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-50 gy-4">
                        <div class="col-sm-6">
                            <div class="firm-content--box wow animate__fadeInUp animate__animated">
                                <div class="icon--wrap fs--30 text--base-two mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"
                                        fill="none">
                                        <mask id="mask0_1011_3459" style="mask-type: alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="45" height="45">
                                            <rect width="45" height="45" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_1011_3459)">
                                            <path
                                                d="M4.6875 38.4375V35.625H21.0938V14.7802C20.2453 14.5589 19.5031 14.1394 18.8672 13.5216C18.2312 12.9038 17.7967 12.1466 17.5636 11.25H11.3583L16.875 24.5733C16.8391 25.9795 16.2284 27.1755 15.0431 28.1611C13.8581 29.1467 12.4375 29.6395 10.7812 29.6395C9.125 29.6395 7.70438 29.1467 6.51938 28.1611C5.33438 27.1755 4.72375 25.9795 4.6875 24.5733L10.2042 11.25H6.5625V8.4375H17.5636C17.8545 7.36781 18.4513 6.47547 19.3538 5.76047C20.2566 5.04516 21.3053 4.6875 22.5 4.6875C23.6947 4.6875 24.7434 5.04516 25.6463 5.76047C26.5487 6.47547 27.1455 7.36781 27.4364 8.4375H38.4375V11.25H34.7958L40.3125 24.5733C40.2762 25.9795 39.6656 27.1755 38.4806 28.1611C37.2956 29.1467 35.875 29.6395 34.2188 29.6395C32.5625 29.6395 31.1419 29.1467 29.9569 28.1611C28.7716 27.1755 28.1609 25.9795 28.125 24.5733L33.6417 11.25H27.4364C27.2033 12.1466 26.7687 12.9038 26.1328 13.5216C25.4969 14.1394 24.7547 14.5589 23.9062 14.7802V35.625H40.3125V38.4375H4.6875ZM30.577 24.4833H37.8605L34.2188 15.6961L30.577 24.4833ZM7.13953 24.4833H14.423L10.7812 15.6961L7.13953 24.4833ZM22.5 12.1875C23.1516 12.1875 23.705 11.9597 24.1603 11.5041C24.6159 11.0487 24.8438 10.4953 24.8438 9.84375C24.8438 9.19219 24.6159 8.63875 24.1603 8.18344C23.705 7.72781 23.1516 7.5 22.5 7.5C21.8484 7.5 21.295 7.72781 20.8397 8.18344C20.3841 8.63875 20.1562 9.19219 20.1562 9.84375C20.1562 10.4953 20.3841 11.0487 20.8397 11.5041C21.295 11.9597 21.8484 12.1875 22.5 12.1875Z"
                                                fill="#F36047" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content--wrap">
                                    <h3 class="title fs--22 mb-2">Qualified Lawyers</h3>
                                    <p class="description">
                                        Legal solutions that prioritize your unique circumstances
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="firm-content--box wow animate__animated animate__fadeInUp">
                                <div class="icon--wrap fs--30 text--base-two mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"
                                        fill="none">
                                        <mask id="mask0_1011_3451" style="mask-type: alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="45" height="45">
                                            <rect width="45" height="45" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_1011_3451)">
                                            <path
                                                d="M12.5479 42.1875V27.9558L6.29199 17.8125L14.3868 4.6875H30.6131L38.7079 17.8125L32.452 27.9558V42.1875L22.5 38.8163L12.5479 42.1875ZM15.3604 38.2102L22.5 35.8341L29.6395 38.2102V30.9375H15.3604V38.2102ZM15.9553 7.5L9.58027 17.8125L15.9553 28.125H29.0446L35.4196 17.8125L29.0446 7.5H15.9553ZM20.5312 24.7861L14.542 18.8438L16.5468 16.8389L20.5312 20.8233L28.4531 12.8545L30.4579 14.8125L20.5312 24.7861Z"
                                                fill="#F36047" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content--wrap">
                                    <h3 class="title fs--22 mb-2">Award Winning Firm</h3>
                                    <p class="description">
                                        Law is a complex matter that can lead to significant
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ceo--info gap--20 mb-40 wow animate__animated animate__fadeInUp">
                        <div class="thumb--wrap flex-shrink-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user11.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <p class="name text--black">Allison Torff</p>
                            <p class="position">CEO, Factorix</p>
                        </div>
                    </div>

                    <div class="btn--wrap d-flex align-items-center gap--20 flex-column flex-sm-row">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base-two btn--lg w-sm--100">Book an Appointment</a>
                        <a href="<?php echo home_url('/practice-area'); ?>" class="btn btn-outline--base-two btn--lg w-sm--100">Explore
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- service section -->
<section class="service-section--two py-120">
    <div class="container section-content">
        <div class="row justify-content-between mb-60">
            <div class="title-wrap col-md-6">
                <h2 class="title mb-3 mb-sm-5 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text"
                    data-splitting data-wow-delay="0.2s">
                    Our Expert Legal Services
                </h2>
                <p class="subtitle wow animate__fadeInUp animate__animated fs--18">
                    We are proud to have successfully represented numerous clients in
                    various legal matters. Below are some of our notable projects
                </p>
            </div>
        </div>

        <div class="row service-slider--two">
            <!-- service card -->
            <div class="service-card--two">
                <div class="icon--wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/account_balance.png" alt="image">
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22">Business consulting</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-dark.png" alt="image">
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22">Only Skilled Attorney</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/gavel.png" alt="image">
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22">Strive For Excellence</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/dry.png" alt="image">
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22">Dedicated Legalist</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22 ">Business consulting</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22">Business consulting</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="service-card--two">
                <div class="icon--wrap">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <div class="content--wrap position-relative">
                    <h3 class="title fs--22 ">Business consulting</h3>
                    <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--two">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- feature section -->
<section class="why-choose--two position-relative z--1 pb-120">
    <div class="">
        <div class="row chunk-fluid__mr justify-content-start gy-4">
            <div class="col-lg">

                <div class="video bg--img position-relative" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/video-bg.png">

                    <div class="popup-video-wrap">
                        <div class="waves-block position-relative">
                            <div class="waves"></div>
                        </div>
                        <a class="play-video popup_video" data-fancybox=""
                            href="https://www.youtube.com/watch?v=K5DoQnZA0oI" tabindex="0">
                            Play
                        </a>
                    </div>
                </div>

                <div class="row chunk-fluid__ml pt-100">
                    <div class="col d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-content mb-40">
                                    <div class="title-wrap">
                                        <div class="row justify-content-between">
                                            <div class="col-xl-10 col-lg-12">
                                                <h2 class="title mb-4 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text"
                                                    data-splitting data-wow-delay="0.2s">
                                                    Why Choose Counselr
                                                </h2>
                                                <p class="subtitle w--90 animate__animated wow animate__fadeInUp"
                                                    data-wow-delay="0.2s">
                                                    We take great pride in being the top choice for
                                                    Counselr and businesses seeking exceptional legal
                                                    representation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4 mb-3 mb-sm-5">
                            <div class="service-key__wrapper wow animate__animated animate__fadeInUp"
                                data-wow-delay="0.2s">
                                <ul>
                                    <li>
                                        9/10 Average Satisfaction Rate
                                    </li>
                                    <li>
                                        9/10 Average Satisfaction Rate
                                    </li>
                                    <li>
                                        96% Competition Rate
                                    </li>
                                    <li>
                                        96% Competition Rate
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xxl-8 col-lg-12 col-md-6">
                                <div
                                    class="btn--wrap d-flex align-items-center justify-content-start gap--16 position-relative">
                                    <a href="<?php echo home_url('/about'); ?>" class="btn btn--base-two btn--lg">Red More About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 counter-box--wrapper">
                <div class="counter-box--two bg--base-two">
                    <h3 class="number text--white fs--72 odometer" data-count="406"></h3>
                    <p class="title text--white">Qualified Lawyers</p>
                </div>
                <div class="counter-box--two bg--base-two">
                    <h3 class="number text--white fs--72 odometer" data-count="124"></h3>
                    <p class="title text--white">Countries in Services</p>
                </div>
                <div class="counter-box--two bg--base-two">
                    <h3 class="number text--white fs--72 odometer" data-count="32"></h3>
                    <p class="title text--white">Cases Fully Dismiss</p>
                </div>
                <div class="counter-box--two bg--base-two">
                    <h3 class="number text--white fs--72 odometer" data-count="275"></h3>
                    <p class="title text--white">Ranked in Super Law</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- partner section -->
<section class="partner-section py-120 bg--pure-black">
    <div class="container">
        <div class="row mb-50 section-content">
            <div class="col-lg-12">
                <div class="row justify-content-between">
                    <div class="col-lg-4 title-wrap">
                        <h2 class="title mb-3 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text w--90 text--white"
                            data-splitting data-wow-delay="0.2s">
                            Check Our Best Clients &amp; Partners
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="subtitle wow animate__animated animate__fadeInUp mb-3 text--white"
                            data-wow-delay="0.3s">
                            We take great pride in being the top choice for Counselr and
                            businesses seeking exceptional legal representation.
                        </p>
                        <p class="subtitle wow animate__animated animate__fadeInUp text--white" data-wow-delay="0.3s">
                            We take great pride in being the top choice for Counselr and
                            businesses seeking exceptional legal representation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row partner-slider">
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/partner1.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/partner2.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/partner3.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/partner1.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/partner3.png" alt="image">
            </div>
        </div>
    </div>
</section>


<!-- solution section -->
<section class="solution--two homepage_two position-relative">
    <div class="container">
        <div class="row gy-5 justify-content-start">
            <div class="col-lg-7 col-md-12 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-content mb-40">
                            <div class="title-wrap">
                                <div class="row justify-content-between">
                                    <div class="col-xl-10 col-lg-12">
                                        <h2 class="title mb-3 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text"
                                            data-splitting data-wow-delay="0.2s">
                                            Comprehensive Legal Solutions
                                        </h2>
                                        <p class="subtitle w--90">
                                            We take pride in offering a comprehensive range of legal
                                            services to address the diverse needs of our clients.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="solution-slider--four mb-5">
                <div class="solution--card">
                    <div class="icon--wrap d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-2-white.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <h3 class="title fs--22 fw--400 text--white">
                            Corporate & Securities
                        </h3>
                        <p class="text--white">
                            We can provide corporate governance, helping clients manage the
                            responsibilities of running a
                        </p>
                    </div>
                    <div class="btn--wrap">
                        <a href="<?php echo home_url('/practice-details'); ?>" class="solution--btn text--white">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="solution--card">
                    <div class="icon--wrap d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-2-white.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <h3 class="title fs--22 fw--400 text--white">
                            Personal Statement
                        </h3>
                        <p class="text--white">
                            We can provide corporate governance, helping clients manage the
                            responsibilities of running a
                        </p>
                    </div>
                    <div class="btn--wrap">
                        <a href="<?php echo home_url('/practice-details'); ?>" class="solution--btn text--white">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="solution--card">
                    <div class="icon--wrap d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-2-white.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <h3 class="title fs--22 fw--400 text--white">
                            Corporate & Securities
                        </h3>
                        <p class="text--white">
                            We can provide corporate governance, helping clients manage the
                            responsibilities of running a
                        </p>
                    </div>
                    <div class="btn--wrap">
                        <a href="<?php echo home_url('/practice-details'); ?>" class="solution--btn text--white">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="solution--card">
                    <div class="icon--wrap d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-2-white.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <h3 class="title fs--22 fw--400 text--white">
                            Corporate & Securities
                        </h3>
                        <p class="text--white">
                            We can provide corporate governance, helping clients manage the
                            responsibilities of running a
                        </p>
                    </div>
                    <div class="btn--wrap">
                        <a href="<?php echo home_url('/practice-details'); ?>" class="solution--btn text--white">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row position-relative">
            <div class="col d-flex align-items-center justify-content-center gap-4">
                <button type="button" class="solution-prev" aria-disabled="true">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button type="button" class="solution-next" aria-disabled="true">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
</section>



<!-- FAQ Section -->
<!-- < faq-section -->
<section class="faq-section--two position-relative home_two">
    <div class="faq-bg--thumb position-absolute z--1 pe-4 pt-4 pb-4">
        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/faq-bg2.png" alt="image">
    </div>

    <div class="container">
        <div class="row gy-5 justify-content-end position-relative">
            <div class="col-lg-7">

                <div class="row mb-50 section-content">
                    <div class="col-12">
                        <h2 data-splitting class="title wow animate__animated animate__fadeInUp mb-4 splite-text">
                            FAQs Simplified Guide
                        </h2>
                        <p class="wow animate__animated animate__fadeInUp fs-18" data-wow-delay="0.3s">
                            We understand that navigating legal matters can raise various questions. Below, we've
                            compiled answers to some
                        </p>
                    </div>
                </div>
                <!-- accordion -->
                <div class="row justify-content-center position-relative">
                    <div class="col-12">
                        <div class="accordion custom--accordion-two accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.2s">
                                <div class="accordion-header">
                                    <div class="bar"></div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse1" aria-expanded="false"
                                        aria-controls="flush-collapse1">
                                        How do you bill for your legal services?
                                    </button>
                                </div>
                                <div id="flush-collapse1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised
                                        in the with the release of Letraset sheets containing
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.3s">
                                <div class="accordion-header">
                                    <div class="bar"></div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse2" aria-expanded="false"
                                        aria-controls="flush-collapse2">
                                        What is the typical legal process like?
                                    </button>
                                </div>
                                <div id="flush-collapse2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        In PPC advertising, advertisers bid on keywords relevant to
                                        their target audience. When users search for those keywords, the
                                        ad is displayed. Advertisers only pay when someone clicks on
                                        their ad, directing them to their website or landing page.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.4s">
                                <div class="accordion-header">
                                    <div class="bar"></div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse3" aria-expanded="false"
                                        aria-controls="flush-collapse3">
                                        How do I schedule an appointment with your office?
                                    </button>
                                </div>
                                <div id="flush-collapse3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        PPC offers instant visibility for your business, targeted reach,
                                        and complete control over your budget. It allows you to measure
                                        the effectiveness of your ads in real-time and make data-driven
                                        optimizations.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.5s">
                                <div class="accordion-header">
                                    <div class="bar"></div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse4" aria-expanded="false"
                                        aria-controls="flush-collapse4">
                                        Will my information remain confidential?
                                    </button>
                                </div>
                                <div id="flush-collapse4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        CPM advertising charges advertisers for every 1,000 impressions
                                        their ad receives, regardless of whether users click on it or
                                        not. It is particularly useful for brand awareness campaigns and
                                        reaching a broad audience.
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- / accordion -->


            </div>
        </div>
    </div>
</section>
<!--  faq-section /> -->



<!-- Testmonial Section -->
<!-- < testimonial-section -->
<section class="testimonial-section overflow-hidden homepage_two">
    <div class="container-fluid gx-0">
        <div class="row justify-content-center gx-0">
            <div class="col-lg-6 py-120 bg--black overflow-hidden wow animate__animated animate__fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="section-content mb-20">
                            <div class="title-wrap">
                                <div class="row justify-content-center gx-0">
                                    <div class="col-12 col-xl-10">
                                        <p class="subtitle text--white mx-auto mt-4 fs--14 text-center mb-4">
                                            Testimonials
                                        </p>
                                        <h2 class="title mb-0 fs--40 text-center text--white fw--400 wow animate__animated animate__fadeInUp splite-text"
                                            data-splitting data-wow-delay="0.1s">
                                            Praise From Happy Clients
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row testimonial-slider ">
                    <div class="testimonial-card d-flex flex-column justify-content-center align-items-center">
                        <p class="comment w--70">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                            <div class="thumb--wrap radius--50 overflow-hidden">
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user11.png" alt="image">
                            </div>

                            <div
                                class="content--wrap d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                                <h3 class="name">Aleesha Dennis</h3>
                                <p class="position">Addison Marketing Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card d-flex flex-column justify-content-center align-items-center">
                        <p class="comment w--70">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                            <div class="thumb--wrap radius--50 overflow-hidden">
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user1.png" alt="image">
                            </div>

                            <div
                                class="content--wrap d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                                <h3 class="name">Aleesha Dennis</h3>
                                <p class="position">Addison Marketing Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card d-flex flex-column justify-content-center align-items-center">
                        <p class="comment w--70">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                            <div class="thumb--wrap radius--50 overflow-hidden">
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user2.png" alt="image">
                            </div>

                            <div
                                class="content--wrap d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                                <h3 class="name">Aleesha Dennis</h3>
                                <p class="position">Addison Marketing Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card d-flex flex-column justify-content-center align-items-center">
                        <p class="comment w--70">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                            <div class="thumb--wrap radius--50 overflow-hidden">
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user3.png" alt="image">
                            </div>

                            <div
                                class="content--wrap d-flex flex-column justify-content-center align-items-center flex-shrink-0">
                                <h3 class="name">Aleesha Dennis</h3>
                                <p class="position">Addison Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow animate__animated animate__fadeInUp">
                <div class="thumb--wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/testemonial-bg6.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--  testimonial-section /> -->


<!-- blogs section -->
<section class="news-section overflow-hidden homepage_two py-120">
    <div class="container section-content">
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="row gy-5 justify-content-center align-items-center mb-40">
                    <div class="col title-wrap d-flex flex-column align-items-center justify-content-center">
                        <h2 class="title mb-30 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text"
                            data-splitting data-wow-delay="0.1s">
                            Our Latest News
                        </h2>
                        <p class="subtitle text-center wow animate__animated animate__fadeInUp w--80"
                            data-wow-delay="0.2s">
                            We take pride in offering a comprehensive range of legal services to address the diverse
                            needs of our clients.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row chunk-blog__gridview gap-4 px-3">

            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('/blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.png" alt="image">
                    </a>
                </div>

                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('/blog-details'); ?>">
                            Family Law - Custody Battle Resoluton
                        </a>
                    </h3>

                    <div class="chunk-blog__meta date">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">February 28,
                                2019</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('/blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog10.jpg" alt="image">
                    </a>
                </div>
                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('/blog-details'); ?>">
                            Estate Planning - Why Every Family Should Have a Will
                        </a>
                    </h3>

                    <div class="chunk-blog__meta date">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">February 28,
                                2019</a>
                        </span>
                    </div>
                </div>
            </div>


            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('/blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog11.jpg" alt="image">
                    </a>
                </div>
                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('/blog-details'); ?>">
                            What to Expect During a Criminal Defense Case
                        </a>
                    </h3>

                    <div class="chunk-blog__meta date">
                        <span>
                            <a href="<?php echo home_url('/blog'); ?>">February 28,
                                2019</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- appoint section -->
<section class="appoint-now homepage_two position-relative">
    <div class="thumb--elements">
        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/appoinment-element.png" alt="image">
    </div>

    <div class="container-fluid appoint--box__wrapper">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 px-0">
                    <div class="appoint--box section-content position-relative bg--base-two">
                        <div class="content--wrap">
                            <h3 class="title text--white fs--40 mb-30 wow animate__animated animate__fadeInUp splite-text"
                                data-wow-delay="0.2s" data-splitting>
                                Take the First Step Today
                            </h3>
                            <p class="subtitle text--white fs--18 mb-40">
                                We understand that navigating legal matters can raise various
                                questions. Below, we've compiled answers to some
                            </p>
                            <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base bg--black btn--lg">Appoint Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>