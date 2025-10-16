<?php
/**
 * Template Name: Home 3
 *
 * @package atroly
 */

get_header();

?>


<!-- search offcanvas -->
<div class="offcanvas chunk-search-offcanvas offcanvas-centered text-bg-light" tabindex="-1" id="offcanvas-center">

    <div class="offcanvas-body position-relative">

        <!-- search form -->
        <div class="container-fluid offcanvas--search-form">
            <div class="row">
                <div class="col">
                    <form id="chunk-search-form">
                        <input class="form--control w--100 radius--0" name="search" type="text"
                            placeholder="Search Here" id="search">

                        <button class="btn btn--base-four search--btn text--white radius--0" type="submit">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /search form -->
    </div>
</div>
<!-- / search offcanvas -->


<!-- Homepage three Hero  -->
<section class="homepage_three chunk-banner">

    <!-- slider buttons -->
    <button type="button" class="me-auto chunk-hero__prev">
        <i class="fa-solid fa-arrow-left-long"></i>
    </button>
    <button type="button" class="me-auto chunk-hero__next">
        <i class="fa-solid fa-arrow-right-long"></i>
    </button>
    <!-- / slider buttons -->

    <!-- slider container -->
    <div class="chunk-hero__slider">

        <!-- slider slide 1 -->
        <div class="chunk-hero__slide container-fluid " data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/hero/bg-4.png">

            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-flex flex-column align-items-center justify-content-center py-40 mb-60">
                        <p data-wow-delay="0.1s"
                            class="wow animate__animated animate__fadeInUp text-left text--dl-grey w-100 mb-30">
                            LAW FIRM WITH TRADITION
                        </p>
                        <h1 data-splitting data-wow-delay="0.2s"
                            class="banner-title-3 fs--72 text--black wow animate__animated animate__fadeInUp splite-text lh-sm">
                            <span class="pe-5 align-middle">We practice law <video width="200" height="60" autoplay loop
                                    muted style="margin-bottom: -12px"
                                    class="d-inline-block rounded-pill object-fit-cover video-banner">
                                    <source src="assets/video/1.mp4" type="video/mp4">
                                </video> since 18th century.</span>


                        </h1>
                        <p data-splitting data-wow-delay="0.3s"
                            class="text--dark-grey fs--18 mt-30 wow animate__animated animate__fadeInUp splite-text">
                            It follows from this that benefits. Among the numerous fault of those
                            who pass their, there is Among the neither know how to bestow
                        </p>

                        <div data-wow-delay="0.3s"
                            class="flex-column flex-sm-row w-100 mt-40 d-flex align-items-center gap--24 wow animate__animated animate__fadeInUp">
                            <a href="<?php echo home_url('/contact'); ?>" class="w-sm--100 btn btn--base-four btn--lg">Book an Appointment</a>
                            <a href="<?php echo home_url('/practice-area'); ?>"
                                class="w-sm--100 btn btn-outline--base-four btn--lg text--dl-grey">Explore
                                Service</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- / slider slide 1 -->

        <!--  slider slide 2 -->
        <div class="chunk-hero__slide container-fluid " data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/hero/bg-4.png">

            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-flex flex-column align-items-center justify-content-center py-40 mb-60">
                        <p data-wow-delay="0.1s"
                            class="wow animate__animated animate__fadeInUp text-left text--dl-grey w-100 mb-30">
                            LAW FIRM WITH TRADITION
                        </p>
                        <h1 data-splitting data-wow-delay="0.2s"
                            class="banner-title-3 fs--72 text--black wow animate__animated animate__fadeInUp splite-text lh-sm">
                            <span class="pe-5">We practice law <video width="200" height="60" autoplay loop muted
                                    style="margin-bottom: -12px"
                                    class="d-inline-block rounded-pill object-fit-cover video-banner">
                                    <source src="assets/video/1.mp4" type="video/mp4">
                                </video> since 18th century.</span>


                        </h1>
                        <p data-splitting data-wow-delay="0.3s"
                            class="text--dark-grey fs--18 mt-30 wow animate__animated animate__fadeInUp splite-text">
                            It follows from this that benefits. Among the numerous fault of those
                            who pass their, there is Among the neither know how to bestow
                        </p>

                        <div data-wow-delay="0.3s"
                            class="flex-column flex-sm-row w-100 mt-40 d-flex align-items-center gap--24 wow animate__animated animate__fadeInUp">
                            <a href="<?php echo home_url('/contact'); ?>" class="w-sm--100 btn btn--base-four btn--lg">Book an Appointment</a>
                            <a href="<?php echo home_url('/practice-area'); ?>"
                                class="w-sm--100 btn btn-outline--base-four btn--lg text--dl-grey">Explore
                                Service</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--  / slider slide 2 -->
    </div>
    <!-- / slider container -->
</section>
<!-- Homepage three Hero  -->

<!-- Foundation -->
<section class="py-120 homepage_three employment-wrap overflow-hidden">

    <div class="container position-relative z--1">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-5 text-center">
                <p class="text--base wow animate__animated animate__fadeInUp mb-30 " data-wow-delay="0.2s">
                    FOUNDED IN 1993 WITH TRUST
                </p>
                <h2 class="fs--40  wow animate__animated animate__fadeInUp splite-text" data-wow-delay="0.3s"
                    data-splitting>
                    Employment Law Firm of the Year in Melbourne
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col"></div>
            <ul class="chunk-counter__wrapper">
                <li>
                    <div class="icon mb-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/clock.png" alt="icon">
                    </div>
                    <div>
                        <h3 class="amount odometer fs--40 mb-2" data-count="406"></h3>
                        <p>Qualified Lawyers</p>
                    </div>
                </li>

                <li>
                    <div class="icon mb-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/bubble.png" alt="icon">
                    </div>
                    <div>
                        <h3 class="amount odometer fs--40  mb-2" data-count="224"></h3>
                        <p>Ranked in Super Law</p>
                    </div>
                </li>

                <li>
                    <div class="icon mb-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/balance.png" alt="icon">
                    </div>
                    <div>
                        <h3 class="amount odometer fs--40  mb-2" data-count="32"></h3>
                        <p>Cases Fully Dissmiss</p>
                    </div>
                </li>

                <li>
                    <div class="icon mb-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/teamwork.png" alt="icon">
                    </div>
                    <div>
                        <h3 class="amount odometer fs--40  mb-2" data-count="124"></h3>
                        <p>Countries in Services</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</section>
<!-- / Foundation -->

<!-- Get to know us -->
<section class="py-80 know-us-section bg--base-4l">
    <div class="container">
        <div class="row gx-md-5 gy-4">
            <div class="col-md-5 user-founded-image position-relative ">
                <div class="user-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/user-1.png" alt="image">
                </div>
                <div class="years-of-ex bg-white rounded-4 shadow text-center">
                    <img class="position-absolute end-0 top-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/sm-shapge.svg" alt="image">

                    <h3 class=" odometer fs--72" data-count="18"></h3>
                    <p>
                        Years of Experience
                    </p>
                </div>
            </div>


            <div class="col-xl-6 col-md-7">
                <p class="  text--base wow animate__animated animate__fadeInUp mb-30" data-wow-delay="0.2s">
                    GET TO KNOW US
                </p>
                <h2 class="fs--40 wow animate__animated animate__fadeInUp splite-text mb-20" data-wow-delay="0.3s"
                    data-splitting>
                    Welcome To Harper &amp; Russo Law Farm
                </h2>

                <p data-wow-delay="0.3s" class="wow animate__animated animate__fadeInUp">
                    It follows from this that benefits. Among the numerous fault of those
                    who pass their, there is Among the neither know how to bestow
                </p>

                <div class="row mt-40">
                    <div class="col-6 wow animate__animated animate__fadeInUp">
                        <div class="mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law.svg" alt="icon">
                        </div>
                        <p class="fs--18 fw--500 text--base-four mb-2 wow animate__animated animate__fadeInUp splite-text"
                            data-splitting>
                            Qualified Lawyers
                        </p>
                        <p>
                            Legal solutions that prioritize your unique circumstances
                        </p>
                    </div>
                    <div class="col-6 wow animate__animated animate__fadeInUp">
                        <div class="mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/winning.svg" alt="icon">
                        </div>
                        <p class="fs--18 fw--500 text--base-four mb-2 wow animate__animated animate__fadeInUp splite-text"
                            data-splitting>
                            Award Winning Firm
                        </p>
                        <p>
                            Law is a complex matter that can lead to significant
                        </p>
                    </div>
                </div>
                <div class="mt-40 wow animate__animated animate__fadeInUp">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base-four btn--lg">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Get to know us -->

<!-- Legal solutions slider -->
<section class="legal-solutions py-120 position-relative">
    <div class="container">
        <div class="section-content row justify-content-between mb-50">
            <div class="col-lg-4">
                <h2 class="title mb-3 fs--40 wow animate__animated animate__fadeInUp splite-text" data-splitting
                    data-wow-delay="0.2s">
                    Comprehensive Legal Solutions
                </h2>
            </div>
            <div class="col-lg-7 fs--18 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                <p>
                    We take pride in offering a comprehensive range of legal services to
                    address the diverse needs of our clients. Our team of skilled
                    attorneys is committed to providing expert guidance...
                </p>
            </div>
        </div>

        <div class="row align-items-center">

            <!-- / legal solutions slider -->
            <div class="legal-solutions__slider">

                <div>
                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-dark.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Trusted Lawyer</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>

                </div>

                <div>

                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/account_balance.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Business Consulting</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/account_balance.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Business Consulting</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>

                </div>

                <div>

                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/account_balance.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Business Consulting</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/gavel.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Legal Champion</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>

                </div>


                <div>
                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/dry.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Dedicated Legalist</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/legend_toggle.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Case Analysis</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="icon--wrap radius--8 fs--30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/assignment_add.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>">
                                <h3 class="title fs--22">Discovery Caller</h3>
                            </a>
                            <p>
                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                                labore.
                            </p>
                        </div>
                        <div class="btn--wrap">
                            <a href="<?php echo home_url('/practice-details'); ?>" class="btn style--three">Read More <i
                                    class="fa-solid fa-arrow-right-long z--1"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / legal solutions slider -->

        <div class="row position-relative pt-60">
            <div
                class="col d-flex align-items-center justify-content-center gap-4 wow animate__animated animate__fadeInUp">
                <button type="button" class="legal-prev" aria-disabled="true">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button type="button" class="legal-next" aria-disabled="true">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- / Legal solutions slider -->


<!-- Expert section -->
<section class="expert-section bg--base-4l">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-md-6 bg--base-4l pushed-margin-content position-relative z-1 d-flex flex-column justify-content-center py-100">
                <p class="fs--16 fw--400 text--base wow animate__animated animate__fadeInUp mb-30 splite-text"
                    data-wow-delay="0.2s" data-splitting>
                    WHAT WE ARE EXPERT
                </p>
                <h2 class="fs--40 text--base-four wow animate__animated animate__fadeInUp splite-text mb-3"
                    data-wow-delay="0.3s" data-splitting>
                    We are here for provide high quality legal consultancy.
                </h2>

                <p data-wow-delay="0.3s" class="text--dark-grey fs--18 mt-30 wow animate__animated animate__fadeInUp">
                    Lorem ipsum is simply dummy text of the printing and typesetting
                    industry lorem industry dummy text.
                </p>
                <div class="mt-5 award-container wow animate__animated animate__fadeInUp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/win.png" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/win2.png" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/win3.png" alt="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/win4.png" alt="image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="lawyer-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/lawyer.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Expert section -->


<!-- Lawyers section -->
<section class="lawyers py-120 overflow-hidden">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="row section-content justify-content-between">
                    <div class="col-lg-4">
                        <h2 class="title mb-3 fs--40 wow animate__animated animate__fadeInUp splite-text w--90"
                            data-splitting data-wow-delay="0.1s">
                            The Best Lawyers In Our House
                        </h2>
                    </div>
                    <div class="col-lg-7">
                        <p class="subtitle wow animate__animated animate__fadeInUp mb-3" data-wow-delay="0.2s">
                            Adipiscing elit, sed do euismod tempor incidunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitacion ullamco do euismod tempor incidunt quis nostrud
                            exercitacion Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center gy-3">
            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-1.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 text-center">Juvenile Crimes</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/jone-doe'); ?>" class="text--white">
                            <h3 class="name text--white fs--28 m-0">Jone Doe</h3>
                        </a>
                    </div>
                    <ul class="social-icon--wrap position-absolute d-flex flex-column gap--12">
                        <a href="http://facebook.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-facebook-f"></i>
                            </li>
                        </a>
                        <a href="http://linkedin.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer4.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 text-center">Personal Injury</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/emma-stone'); ?>" class="text--white">
                            <h3 class="name text--white fs--28 m-0">Emma Stone</h3>
                        </a>
                    </div>
                    <ul class="social-icon--wrap position-absolute d-flex flex-column gap--12">
                        <a href="http://facebook.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-facebook-f"></i>
                            </li>
                        </a>
                        <a href="http://linkedin.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer3.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 text-center">Domestic Violence</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/arjen-smit'); ?>" class="text--white">
                            <h3 class="name text--white fs--28 m-0">Arjen Smit</h3>
                        </a>
                    </div>
                    <ul class="social-icon--wrap position-absolute d-flex flex-column gap--12">
                        <a href="http://facebook.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-facebook-f"></i>
                            </li>
                        </a>
                        <a href="http://linkedin.com">
                            <li class="d-flex justify-content-center align-items-center radius--8 fs--20">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / Lawyers section -->


<!-- Why choose section -->
<section class="why-choose bg--base-four  z--1">
    <div class="bg-thumb--wrap zm--1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/why-choose-bg.jpg" alt="image">
    </div>

    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-9">
                <div class="content--wrap bg--white z--1">
                    <div class="section-content mb-60">
                        <div class="title-wrap">
                            <div class="row justify-content-between">
                                <div class="col-xl-10 col-lg-12">
                                    <h2 class="title mb-3 fs--40 wow animate__animated animate__fadeInUp splite-text"
                                        data-splitting data-wow-delay="0.2s">
                                        Why Choose Counselr
                                    </h2>
                                    <p class="subtitle wow animate__animated animate__fadeInUp " data-wow-delay="0.3s">
                                        We take great pride in being the top choice for Counselr and
                                        businesses seeking exceptional legal representation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mb-3 mb-sm-5">
                        <div class="service-key__wrapper wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
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
                                <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base-four btn--lg">Book an Appointment</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- / Why choose section -->

<!-- Case study -->
<section class="py-120 case-study__index3 overflow-hidden">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center fs--40 wow animate__animated animate__fadeInUp splite-text" data-splitting
                    data-wow-delay="0.2s">
                    Our Success Stories
                </h2>
            </div>
        </div>
        <div class="row mt-1 case-study__slider">
            <!-- card column -->
            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case1.jpg" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                Serious Law, Simple Experience: Crafting a Clean &amp; Confident Legal Website
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case2.png" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                Case Closed: A Bold Digital Identity for a Litigation Powerhouse
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case3.png" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                A Site That Commands Respect — Just Like the Firm Behind It
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case4.jpg" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                Modernizing Trust: Redesigning a Law Firm Website for Credibility and Clarity
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case5.jpg" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                Law Made Accessible: A Website Built for Clients, Not Just Lawyers
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="chunk-case__card wow me-4 mt-4 animate__animated animate__fadeInUp">
                    <div class="chunk-case__thumb">
                        <a href="<?php echo home_url('/case-details'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case6.jpg" alt="case thumbnail">
                        </a>
                    </div>

                    <div class="chunk-case__content">

                        <h3 class="chunk-case__title">
                            <a href="<?php echo home_url('/case-details'); ?>">
                                Modernizing Trust: Redesigning a Law Firm Website for Credibility and Clarity
                            </a>
                        </h3>
                        <p>
                            We are proud to have successfully represented numerous clients in
                            various legal matters. Below are some of our notable projects
                        </p>
                    </div>
                </div>

            </div>
            <!-- /  card column -->

        </div>

        <div class="row position-relative pt-60">
            <div
                class="col d-flex align-items-center justify-content-center gap-4 wow animate__animated animate__fadeInUp">
                <button type="button" class="case-prev" aria-disabled="true">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button type="button" class="case-next" aria-disabled="true">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- / Case study -->

<!-- Location -->
<section class="position-relative location-section mb-100 overflow--hidden">
    <div class="container-fluid">
        <div class="row g-3 g-sm-5">
            <div class="col-md-6 embed-map">
                <div class="start-0 top-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48810.389150081726!2d-98.39815052143486!3d29.41226796714458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2sbd!4v1725450102690!5m2!1sen!2sbd"
                        width="980" height="550" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-column justify-content-center content__wrap p-4 p-md-0">
                <div class="row">
                    <div class="col-xl-10 col-12 ps-5 pt-5">
                        <div class="mb-20 pin-icon bg--base-four d-inline-flex px-5 py-4">
                            <span class="text--white fs--36">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                        </div>
                        <p class="text--base wow animate__animated animate__fadeInUp mb-30 splite-text"
                            data-wow-delay="0.2s" data-splitting>
                            CONTACT AND LOCATION
                        </p>
                        <h2 class="fs--40 fw--400 text--black wow animate__animated animate__fadeInUp splite-text mb-5"
                            data-wow-delay="0.3s" data-splitting>
                            We are here for you 24 hours a day, 7 days a week
                        </h2>

                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap--24">
                                    <div class="text--base-four fs--24">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div>
                                        <a href="tel:+01800010001" class="icon-link fs--18 fw--500 ">01800010001</a>
                                        <p class="fs--14 text--dl-grey">Dhaka Office</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap--24">
                                    <div class="text--base-four fs--24">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div>
                                        <a href="mailto:contact@attornafirm.co"
                                            class="icon-link fs--18 fw--500 ">contact@attornafirm.co</a>
                                        <p class="fs--14 fw--400 text--dl-grey">Dhaka Office</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap--24">
                                    <div class="text--base-four fs--24">
                                        <i class="fa-regular fa-clock"></i>
                                    </div>
                                    <div>
                                        <p class="fs--18 fw--500 text--dl-grey">
                                            Mon - Fri 9.00-18.00
                                        </p>
                                        <p class="fs--14 fw--400 text--dl-grey">Dhaka Office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Location -->

<!-- faq section -->
<!-- < faq-section -->
<section class="faq-section--two position-relative index3">
    <div class="faq-bg--thumb position-absolute z--1 p-4">
        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/faq-bg2.png" alt="image">
    </div>

    <div class="container">
        <div class="row gy-5 justify-content-start position-relative">
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


<!-- blogs section -->
<!-- < blogs Section -->
<section class="news-section pb-120">

    <div class="container">
        <div class="row justify-content-center mb-40">

            <div class="col-md-6 align center">
                <div class="section-content-4 d-flex justify-content-start flex-column align-items-start">
                    <h2 class="title wow animate__animated animate__fadeInUp mb-30 text-start fs--40  splite-text"
                        data-splitting data-wow-delay="0.2s">Our Latest News</h2>
                    <p class="subtitle wow animate__animated animate__fadeInUp text-start text--dark-grey fs--18"
                        data-wow-delay="0.3s">
                        We take pride in offering a comprehensive range of legal services to
                        address the diverse needs of our clients.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <div>
                    <a class="btn btn-lg btn--base-four" href="<?php echo home_url('/blog'); ?>">See More</a>
                </div>
            </div>
        </div>



        <div class="row g-4">
            <div class="col-md-6">
                <a href="<?php echo home_url('/blog-details'); ?>" class="blog-card--two position-relative z--1">
                    <div class="thumb">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.png" alt="image">
                    </div>
                    <div class="blog-content position-absolute">
                        <h3 class="title fs--28 fw--400 text--white">Family Law - Custody Battle Resoluton</h3>
                        <p class="fs--16 mb-30 text--white">We are proud to have successfully represented
                            numerous
                            clients in
                            various legal matters. Below are some of our notable projects</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="<?php echo home_url('/blog-details'); ?>" class="blog-card--two position-relative z--1">
                    <div class="thumb">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.png" alt="image">
                    </div>
                    <div class="blog-content position-absolute">
                        <h3 class="title fs--28 fw--400 text--white">Principle of precedent to establish</h3>
                        <p class="fs--16 mb-30 text--white">We are proud to have successfully represented
                            numerous
                            clients in
                            various legal matters. Below are some of our notable projects</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<!--  blogs Section /> -->


<?php
get_footer();
?>