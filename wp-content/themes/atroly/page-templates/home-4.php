<?php

/**
 * Template Name: Home 4
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

                        <button class="btn btn--base search--btn text--white radius--0" type="submit">
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

<!-- / Header -->

<!-- Homepage Four Hero  -->
<section class="homepage_four chunk-banner">

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
        <div class="chunk-hero__slide container-fluid " data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/index5-bg.png">
            <div class="container">
                <div class="row gy-4 pt-lg-0 pt-60 justify-content-between">
                    <div class="col-lg-7 d-flex flex-column align-items-center justify-content-center">
                        <h1 data-splitting data-wow-delay="0.2s"
                            class="fs--72 fw--400 text-white wow animate__animated animate__fadeInUp splite-text lh-sm">
                            <span>Defending Your Rights Delivering</span>

                            <video width="150" height="70" autoplay loop muted style="margin-bottom: -12px"
                                class="d-inline-block rounded-pill object-fit-cover mx-3">
                                <source src="assets/video/1.mp4" type="video/mp4">
                            </video>
                            <span>Justice</span>
                        </h1>
                        <p data-splitting data-wow-delay="0.3s"
                            class="text-white fs--18 fw--400 mt-30 wow animate__animated animate__fadeInUp splite-text">
                            Welcome to LawHub, where our team of experienced attorneys is
                            dedicated to providing you with the best
                        </p>

                        <div data-wow-delay="0.3s"
                            class="w-100 mt-40 flex-column flex-sm-row d-flex align-items-center gap--24 wow animate__animated animate__fadeInUp">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base btn--lg w-sm--100">Book an Appointment</a>
                            <a href="<?php echo home_url('/practice-area'); ?>"
                                class="btn btn-outline--base btn--lg text--base w-sm--100">Explore
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center justify-content-end">
                        <div class="banner-image">
                            <img class="wow animate__animated animate__fadeInUp"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/index4-hero.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / slider slide 1 -->

        <!--  slider slide 2 -->
        <div class="container-fluid chunk-hero__slide" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/case/case-details.jpg">
            <div class="container">
                <div class="row gy-4 pt-lg-0 pt-60 justify-content-between">
                    <div class="col-lg-7 d-flex flex-column align-items-center justify-content-center">
                        <h1 data-splitting data-wow-delay="0.2s"
                            class="fs--72 fw--400 text-white wow animate__animated animate__fadeInUp splite-text lh-sm">
                            We Stand Always for Right Justice
                        </h1>
                        <p data-splitting data-wow-delay="0.3s"
                            class="text-white fs--18 fw--400 mt-30 wow animate__animated animate__fadeInUp splite-text">
                            Welcome to LawHub, where our team of experienced attorneys is
                            dedicated to providing you with the best
                        </p>

                        <div data-wow-delay="0.3s"
                            class="w-100 mt-40 flex-column flex-sm-row d-flex align-items-center gap--24 wow animate__animated animate__fadeInUp">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base btn--lg w-sm--100">Book an Appointment</a>
                            <a href="<?php echo home_url('/practice-area'); ?>"
                                class="btn btn-outline--base btn--lg text--base w-sm--100">Explore
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center justify-content-end">
                        <div class="banner-image">
                            <img class="wow animate__animated animate__fadeInUp"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/index4-hero.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  / slider slide 2 -->
    </div>
    <!-- / slider container -->
</section>

<!-- Legal Advisory  -->
<section class="legaladvisory--section overflow-hidden py-120">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="content--wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-content mb-60">
                                <div class="title-wrap">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-10 col-lg-12">
                                            <h2 class="title mb-30 fs--40 wow animate__animated animate__fadeInUp splite-text"
                                                data-splitting data-wow-delay="0.1s ">
                                                The Legal Advisory Is Our Expertise
                                            </h2>
                                            <p class="subtitle fs--18 w--90 wow animate__animated animate__fadeInUp"
                                                data-wow-delay="0.2s">
                                                Qnsectetur adipiscing elit, sed do eiusm onsectetur
                                                adipiscing elit, eiusm od tempor ut labore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ceo--info d-flex gap--20 align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.2s">
                        <div class="thumb--wrap flex-shrink-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user11.png" alt="image">
                        </div>
                        <div class="content--wrap">
                            <p class="name  fs--18">Allison Torff</p>
                            <p class="position fs--16">CEO, Factorix</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content--wrap wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <p class="fs--18 mb-5 mt-4">
                        Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing
                        elit, sed do eiusm od tempor ut labore sed adipiscing do eiusm od
                        tempor ut sed do eiusm.
                    </p>

                    <div class="btn--wrap d-flex align-items-center gap--20">
                        <a href="<?php echo home_url('/about'); ?>" class="btn btn--base btn--lg">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Legal Advisory  -->

<!-- YOUR BUSINESS  -->
<section class="business-section py-120 bg--base-five">
    <div class="container">
        <div class="row justify-content-center gy-5">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
                <p class=" mb-30 text--base wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    YOUR BUSINESS IS SAFE WITH BERNSTEIN
                </p>

                <h2 class="fs--40 mb-4 text--white wow animate__animated animate__fadeInUp splite-text"
                    data-wow-delay="0.3s" data-splitting>
                    Committed to Your <span class="text--base">Business</span>
                </h2>

                <p class="fs--18 fw--500 text--white wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    We’re experienced attorneys who can handle a broad range of complex
                    legal issues for businesses, governmental entities, organizations,
                    professionals, at the local, regional, and national levels.
                </p>

                <div class="row gap--60 mt-40 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">

                    <ul class="chunk-business__iconlist">
                        <li>
                            <div class="li-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/idea.png" alt="icon">
                            </div>
                            <h3 class="li-title">Ideating in Law</h3>
                            <p class="li-content">
                                Assertively iterate resource maximizing products after
                            </p>
                        </li>

                        <li>
                            <div class="li-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/right.png" alt="icon">
                            </div>
                            <h3 class="li-title">The Right People</h3>
                            <p class="li-content">
                                Competently parallel task fully researched data and
                            </p>
                        </li>
                        <li>
                            <div class="li-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/open-business.png" alt="icon">
                            </div>
                            <h3 class="li-title">Business Open</h3>
                            <p class="li-content">
                                Efficiently innovate open source infrastructures via inexpensive materials for work.
                            </p>
                        </li>
                        <li>
                            <div class="li-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law.png" alt="icon">
                            </div>
                            <h3 class="li-title">Justice Served</h3>
                            <p class="li-content">
                                Synergistically deliver performance based methods of
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="text-center col-lg-5 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="business-section-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/index5-business.png" alt="businesses">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / YOUR BUSINESS  -->


<!-- Areas of practice -->
<section class="py-120">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center mb-60">
                <p class="fs--16 text--base wow animate__animated animate__fadeInUp mb-30" data-wow-delay="0.2s">
                    AREAS OF PRACTICE
                </p>
                <h2 class="title fs--40 text--black wow animate__animated animate__fadeInUp splite-text" data-splitting
                    data-wow-delay="0.3s">
                    Different Case, Need Different Services.
                </h2>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col">
                <div class="chunk-aop__slider">

                    <div class="chunk-aop__card">
                        <div class="chunk-aop__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/justice-scale.svg" alt="icon">
                        </div>
                        <div class="chunk-aop__content">
                            <h3>
                                <a href="<?php echo home_url('/practice-details'); ?>">
                                    Strive For Excellence
                                </a>
                            </h3>
                            <p>
                                Assertively iterate resource maximizing products after leading
                                edge intellectual capital.
                            </p>
                            <a class="chunk-aop__btn" href="<?php echo home_url('/practice-details'); ?>">
                                <span class="chunk-aop__btn-text">Learn more</span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="chunk-aop__card">
                        <div class="chunk-aop__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/gavel.svg" alt="icon">
                        </div>

                        <div class="chunk-aop__content">
                            <h3>
                                <a href="<?php echo home_url('/practice-details'); ?>">
                                    Legal Defence
                                </a>
                            </h3>
                            <p>
                                Assertively iterate resource maximizing products after leading
                                edge intellectual capital.
                            </p>
                            <a class="chunk-aop__btn" href="<?php echo home_url('/practice-details'); ?>">
                                <span class="chunk-aop__btn-text">Learn more</span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="chunk-aop__card">
                        <div class="chunk-aop__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/law-book.svg" alt="icon">
                        </div>
                        <div class="chunk-aop__content">
                            <h3>
                                <a href="<?php echo home_url('/practice-details'); ?>">
                                    Family Law Services
                                </a>
                            </h3>
                            <p>
                                Assertively iterate resource maximizing products after leading
                                edge intellectual capital.
                            </p>
                            <a class="chunk-aop__btn" href="<?php echo home_url('/practice-details'); ?>">
                                <span class="chunk-aop__btn-text">Learn more</span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="chunk-aop__card">
                        <div class="chunk-aop__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/auction.svg" alt="icon">
                        </div>
                        <div class="chunk-aop__content">
                            <h3>
                                <a href="<?php echo home_url('/practice-details'); ?>">
                                    Only Skilled Attorney
                                </a>
                            </h3>
                            <p>
                                Assertively iterate resource maximizing products after leading
                                edge intellectual capital.
                            </p>
                            <a class="chunk-aop__btn" href="<?php echo home_url('/practice-details'); ?>">
                                <span class="chunk-aop__btn-text">Learn more</span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="chunk-aop__card">
                        <div class="chunk-aop__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/gavel.svg" alt="icon">
                        </div>
                        <div class="chunk-aop__content">
                            <h3>
                                <a href="<?php echo home_url('/practice-details'); ?>">
                                    Legal Defence
                                </a>
                            </h3>
                            <p>
                                Assertively iterate resource maximizing products after leading
                                edge intellectual capital.
                            </p>
                            <a class="chunk-aop__btn" href="<?php echo home_url('/practice-details'); ?>">
                                <span class="chunk-aop__btn-text">Learn more</span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- / Areas of practice -->

<!-- Progress section -->
<!-- Progress Section with dark background -->
<section class="progress-section py-120 overflow-hidden bg--base-five">
    <div class="container">
        <div class="row align-items-end gap-4 gap-lg-0">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h3 class="fs--40 fw--400 mb-30 text--white wow animate__animated animate__fadeInUp splite-text"
                    data-wow-delay="0.1s" data-splitting>
                    When You Are Ready Give Call Our Legal Team
                </h3>

                <p class="fs--18 fw--400 mb-40 text--white wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    We’re experienced attorneys who can handle a broad range of complex
                    legal issues for businesses, governmental entities, organizations,
                    professionals, at the local, regional, and national levels.
                </p>

                <div class="d-flex gap--24 flex-column flex-sm-row wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.3s">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base btn--lg">Book a Appointment</a>
                    <a href="<?php echo home_url('/practice-area'); ?>" class="btn btn-outline--base btn--lg text--base">Explore Service</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div
                    class="progress--wrap d-flex flex-column justify-content-start align-items-start w--100 mb-30 gap--16 wow animate__animated animate__fadeInUp">
                    <div class="progress-bar--wrap w--100">
                        <div class="progress--bar">
                            <div class="item--wrap grid-x">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fs--18 fw--400 text--white mb-2">Legal Advice</p>

                                    <p class="item--label text--white mb-3">
                                        <span class="item--value"></span>
                                    </p>
                                </div>
                                <div class="item--bar">
                                    <div class="value--progress" data-progress="70"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="progress--wrap d-flex flex-column justify-content-start align-items-start w--100 mb-30 gap--16 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.1s">
                    <div class="progress-bar--wrap w--100">
                        <div class="progress--bar">
                            <div class="item--wrap grid-x">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fs--18 fw--400 text--white mb-2">
                                        Support Services
                                    </p>

                                    <p class="item--label text--white mb-3">
                                        <span class="item--value"></span>
                                    </p>
                                </div>
                                <div class="item--bar">
                                    <div class="value--progress" data-progress="90"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="progress--wrap d-flex flex-column justify-content-start align-items-start w--100 gap--16 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="progress-bar--wrap w--100">
                        <div class="progress--bar">
                            <div class="item--wrap grid-x">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fs--18 fw--400 text--white mb-2">Solve Problem</p>

                                    <p class="item--label text--white mb-3">
                                        <span class="item--value"></span>
                                    </p>
                                </div>
                                <div class="item--bar">
                                    <div class="value--progress" data-progress="40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / Progress section -->

<!-- Lawyers section -->
<section class="lawyers pt-120 overflow-hidden">
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

<!-- Partner section -->
<section class="partner-section py-120 overflow-hidden">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="section-content row justify-content-between">
                    <div class="col-lg-4">
                        <h2 class="title mb-3 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text w--90"
                            data-splitting data-wow-delay="0.1s">
                            Check Our Best Clients &amp; Partners
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="subtitle wow animate__animated animate__fadeInUp fs--18 mb-3" data-wow-delay="0.2s">
                            We take great pride in being the top choice for Counselr and
                            businesses seeking exceptional legal representation.
                        </p>
                        <p class="subtitle wow animate__animated animate__fadeInUp fs--18" data-wow-delay="0.3s">
                            Adipiscing elit, sed do euismod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitacion ullamco.
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

<!-- / Partner section -->

<!-- Video section -->
<section class="video-testimonial">
    <div class="chunk-video__three bg--img position-relative" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/video-bg.jpg">

    <div class="popup-video-wrap">

        <div class="waves-block  position-relative">
            <div class="waves "></div>
        </div>

        <a class="play-video fs--24 popup_video" data-fancybox="" href="https://www.youtube.com/watch?v=K5DoQnZA0oI"
            tabindex="0">
            <i class="fa-solid fa-play"></i>
        </a>
    </div>

</div>

</section>
<!-- / Video section -->

<!--  Faq-section  -->
<section class="faq-section py-100 position-relative">
    <div class="container">
        <div class="row gy-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-content-4 d-flex justify-content-center flex-column align-items-center mb-60">
                    <h2 class="title position-relative wow animate__animated animate__fadeInUp text-center fs--40 mb-4 splite-text"
                        data-splitting data-wow-delay="0.2s">
                        FAQ Simplified Guide
                    </h2>
                    <p class="subtitle wow animate__animated animate__fadeInUp text-center fs-16 fw--400 "
                        data-wow-delay="0.3s">
                        We understand that navigating legal matters can raise various questions. Below, we've compiled
                        answers to some
                    </p>
                </div>
            </div>
        </div>

        <!-- accordion -->
        <div class="row gy-5 justify-content-center position-relative">
            <div class="col-12">
                <div class="accordion custom--accordion4 accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.2s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
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
                                data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
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
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
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
                                data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
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

                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.6s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                How long will it take for you to respond to my inquiry?
                            </button>
                        </div>
                        <div id="flush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                CPM advertising charges advertisers for every 1,000 impressions
                                their ad receives, regardless of whether users click on it or
                                not. It is particularly useful for brand awareness campaigns and
                                reaching a broad audience.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.7s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                How do I know if I have a valid case?
                            </button>
                        </div>
                        <div id="flush-collapse6" class="accordion-collapse collapse"
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
</section>
<!-- / Faq-section  -->

<!-- Testimonial section -->
<section class="testimonial-section homepage_four py-120 overflow-hidden bg--base-five">
    <div class="container gx-0">
        <div class="row justify-content-center align-items-center gy-4 gx-3">
            <div class="col-lg-1 col-auto order-2 order-lg-1">
                <button type="button" class="me-auto testimonial-prev">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
            </div>
            <div
                class="col-lg-10 order-1 order-lg-2  bg--base-five overflow-hidden wow animate__animated animate__fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="section-content mb-3">
                            <div class="title-wrap">
                                <div class="row justify-content-center gx-0">
                                    <div class="col-12 col-xl-10">
                                        <p class="subtitle text--white mx-auto text-center mb-4">
                                            Testimonials
                                        </p>
                                        <h2 class="title mb-3 fs--40 text-center text--white wow animate__animated animate__fadeInUp splite-text"
                                            data-splitting data-wow-delay="0.1s">
                                            Praise From Happy Clients
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row testimonial-slider__index4">
                    <div class="testimonial-card d-flex flex-column justify-content-center align-items-center">
                        <p class="comment w--80">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center gap--24 align-items-center flex-shrink-0">
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
                        <p class="comment w--80">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center gap--24 align-items-center flex-shrink-0">
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
                        <p class="comment w--80">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center gap--24 align-items-center flex-shrink-0">
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
                        <p class="comment w--80">
                            “ Im so happy with the team at PowerLeagal Law Firm!! The entire
                            staff is so welcoming, professional and are all outstanding
                            advocates. I’m especially grateful for my handling attorney, Matt
                            Khan.
                        </p>

                        <div
                            class="user--info d-flex flex-column justify-content-center gap--24 align-items-center flex-shrink-0">
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
            <div class="col-auto col-lg-1 order-3">
                <button type="button" class="ms-auto testimonial-next">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- / Testimonial section -->

<!-- Blogs section -->
<section class="news-section news-section-three overflow-hidden  py-120">
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

<!-- / Blogs section -->
<?php 
get_footer();
?>