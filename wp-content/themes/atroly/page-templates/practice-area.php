<?php
/**
 * Template Name: Practice Area
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
<!-- search offcanvas -->



<!-- Legal Solutions -->
<section class="solution--three py-120 position-relative">
    <div class="container">
        <div class="section-content row justify-content-between mb-50">
            <div class="col-lg-4">
                <h2 class="title mb-3 fs--40 wow animate__animated animate__fadeInUp splite-text" data-splitting
                    data-wow-delay="0.2s">
                    Comprehensive Legal Solutions
                </h2>
            </div>
            <div class="col-lg-7 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                <p>
                    We take pride in offering a comprehensive range of legal services to
                    address the diverse needs of our clients. Our team of skilled
                    attorneys is committed to providing expert guidance...
                </p>
            </div>
        </div>

        <div class="row gy-4 align-items-end">
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
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
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
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
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
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
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
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
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
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
            <div class="col-md-6 col-lg-4">
                <div class="solution-card--three gap--56 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
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
</section>


<!-- Video testimonial -->
<section class="chunk-video__section">
    <div class="video--two bg--black position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content--wrap bg--img position-absolute" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/video-bg.jpg">

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
            </div>
        </div>
    </div>
</div>

</section>


<!-- Expertise Progress Section -->
<!-- Progress Section with natural background -->
<section class="progress-section py-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-end">

            <div class="section-content col-lg-6 d-flex flex-column justify-content-center">
                <h2 class="title fs--40 mb-30 wow animate__animated animate__fadeInUp splite-text" data-wow-delay="0.1s"
                    data-splitting>
                    Check Out Our Expertise In Legal Area.
                </h2>

                <p class="fs--18 mb-40 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
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
                                    <p class="fs--18 mb-2">Legal Advice</p>

                                    <p class="item--label mb-3">
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
                                    <p class="fs--18 mb-2">
                                        Support Services
                                    </p>

                                    <p class="item--label mb-3">
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
                                    <p class="fs--18 mb-2">Solve Problem</p>

                                    <p class="item--label mb-3">
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



<!-- Testmonial Section -->
<!-- < testimonial-section -->
<section class="testimonial-section overflow-hidden practicearea-page">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/testemonial-bg2.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--  testimonial-section /> -->


<!-- CTA Section -->
<section class="appoint-now position-relative">
    <div class="thumb--elements">
        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/appoinment-element.png" alt="image">
    </div>

    <div class="container-fluid appoint--box__wrapper">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 px-0">
                    <div class="appoint--box section-content position-relative bg--black">
                        <div class="content--wrap">
                            <h3 class="title text--white fs--40 mb-30 wow animate__animated animate__fadeInUp splite-text"
                                data-wow-delay="0.2s" data-splitting>
                                Take the First Step Today
                            </h3>
                            <p class="subtitle text--white fs--18 mb-40">
                                We understand that navigating legal matters can raise various
                                questions. Below, we've compiled answers to some
                            </p>
                            <a href="<?php echo home_url('/contact'); ?>" class="btn btn--base btn--lg">Appoint Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>