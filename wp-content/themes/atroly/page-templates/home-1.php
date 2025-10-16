<?php
/**
 * Template Name: Home 1
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


<!-- hero section -->
<!-- < Hero Section -->
<section class="hero--three overflow-hidden">
    <!-- < hero content -->
    <div class="hero-content--wrap">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-10">
                    <div class="hero--content d-flex flex-column justify-content-start position-relative mb-50">
                        <h1 class="title text-start fw--400 wow animate__animated animate__fadeInUp splite-text"
                            data-splitting data-wow-delay="0.1">
                            Defending Your Rights Delivering
                            <span>
                                <video width="150" height="70" autoplay loop muted style="margin-bottom: -12px"
                                    class="d-inline-block rounded-pill object-fit-cover mx-3 video_wrap">
                                    <source src="assets/video/1.mp4" type="video/mp4">
                                </video>
                            </span>
                            Justice
                        </h1>

                        <div class="element--wrap position-absolute d-none d-md-inline-block">
                            <img class="left_image_bounce" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-element-3-2.png" alt="image">
                        </div>

                        <p class="subtitle fs--18 w--70 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            Welcome to LawHub, where our team of experienced attorneys is
                            dedicated to providing you with the best
                        </p>

                        <div
                            class="btn--wrap flex-column flex-sm-row d-flex gap--24 wow animate__animated animate__fadeInUp">
                            <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg">Book an appointment</a>
                            <a href="<?php echo home_url('practice-area'); ?>" class="btn btn-outline--base btn--lg text--base">Explore
                                Services</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-end g-4">
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member one overflow-hidden">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-4.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp">
                    <div class="team-member two overflow-hidden">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-5.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp">
                    <div class="team-member three overflow-hidden">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-3.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member four overflow-hidden">
                        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-6.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero content   -->

    <!-- < team group content -->
    <div class="team--group position-absolute">
        <div class="content--wrap">
            <h2 class="fs--18 fw--400 mb-2 wow animate__animated animate__fadeInUp">
                Our Team have handled so many clients so far
            </h2>
        </div>
        <div class="thumb--group d-flex position-relative">
            <div class="thumb one position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0s">
                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/g-team1.png" alt="image">
            </div>
            <div class="thumb two position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0.2s">
                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/g-team2.png" alt="image">
            </div>
            <div class="thumb three position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0.4s">
                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user/g-team3.png" alt="image">
            </div>
            <div class="thumb four position-relative radius--50 bg--base sdf flex-shrink-0 d-flex justify-content-center align-items-center wow animate__animated animate__fadeInRight"
                data-wow-delay="0.6s">
                <span class="text--white">+</span>
                <p class="text--white odometer" data-count="48"></p>
            </div>
        </div>
    </div>
    <!-- team group content  -->
</section>

<!--  Hero Section  -->


<!-- legal advisory section -->
<section class="legaladvisory--section overflow-hidden py-100 bg--base-three">
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
                                            <h2 class="title mb-30 fs--40 fw--400 text--white wow animate__animated animate__fadeInUp splite-text"
                                                data-splitting data-wow-delay="0.1s ">
                                                The Legal Advisory Is Our Expertise
                                            </h2>
                                            <p class="subtitle fs--18 w--90 text--white wow animate__animated animate__fadeInUp"
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
                            <p class="name text--white fs--18">Allison Torff</p>
                            <p class="position text--white fs--16">CEO, Factorix</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content--wrap wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <p class="text--white fs--18 mb-5 mt-4">
                        Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing
                        elit, sed do eiusm od tempor ut labore sed adipiscing do eiusm od
                        tempor ut sed do eiusm.
                    </p>

                    <div class="btn--wrap d-flex align-items-center gap--20">
                        <a href="<?php echo home_url('about'); ?>" class="btn btn--base btn--lg">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- practice area section -->
<section class="practicearea py-120 position-relative overflow-hidden">
    <div class="practicearea-bg--element position-absolute">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/practicearea-bg.png" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-content mb-40">
                    <div class="title-wrap">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title mb-40 fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text"
                                    data-splitting data-wow-delay="0.1s ">
                                    My Legal Practice Area
                                </h2>
                                <a href="<?php echo home_url('practice-area'); ?>"
                                    class="btn btn--base btn--lg wow animate__animated animate__fadeInUp"
                                    data-wow-delay="0.2s">All Practices Areas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon48.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Trusted Lawyer</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon49.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Business Consulting</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon50.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Legal Champion</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon51.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Dedicated Legalist</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon52.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Case Analysis</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="practice--card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="icon--wrap d-flex justify-content-center align-items-center fs--40 text--base">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon53.svg" alt="image">
                            </div>
                            <div class="content--wrap mb-60">
                                <a href="<?php echo home_url('practice-details'); ?>">
                                    <h3 class="title fs--22 fw--400">Discovery Caller</h3>
                                </a>
                                <p class="description">
                                    We can provide corporate governance, helping clients manage
                                    the responsibilities of running a corporation in financial
                                    field.
                                </p>
                            </div>
                            <div class="btn--wrap">
                                <a href="<?php echo home_url('practice-details'); ?>" class="">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- progress section -->
<!-- Progress Section with dark background -->
<section class="progress-section py-120 overflow-hidden bg--base-three">
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
                    <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg">Book a Appointment</a>
                    <a href="<?php echo home_url('practice-area'); ?>" class="btn btn-outline--base btn--lg text--base">Explore Service</a>
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



<!-- working process section -->
<section class="working-process position-relative overflow-hidden pt-120">
    <div class="container">
        <div class="row gy-5 justify-content-center align-items-center mb-60">
            <div class="section-content col d-flex flex-column align-items-center justify-content-center">
                <h2 class="title mb-30 fs--40 wow animate__animated animate__fadeInUp splite-text" data-splitting
                    data-wow-delay="0.1s">
                    Our Working Process
                </h2>
                <p class="subtitle text-center wow animate__animated animate__fadeInUp w--70" data-wow-delay="0.2s">
                    Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernaturaut odit aut fugit, sed quia.
                </p>
            </div>
        </div>
        <div class="row align-items-center">

            <!-- process list part -->
            <ul class="col-12 col-lg-6 g-40 process-list">
                <li class="row wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="col-auto">
                        <p class="markar-style text--white bg--base">1</p>
                    </div>
                    <div class="col">
                        <h3 class="title fs--22">
                            Understanding Your Case
                        </h3>
                        <p class="subtitle fs--16">
                            We begin with a confidential discussion to understand your legal issue, objectives, and the
                            outcome you’re seeking.
                        </p>
                    </div>
                </li>
                <li class="row wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="col-auto">
                        <p class="markar-style text--white bg--base">2</p>
                    </div>
                    <div class="col">
                        <h3 class="title fs--22">
                            Legal Research &amp; Document Review
                        </h3>
                        <p class="subtitle fs--16">
                            Our team carefully examines all relevant laws, case history, and supporting documents to
                            build a strong foundation.
                        </p>
                    </div>
                </li>
                <li class="row wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="col-auto">
                        <p class="markar-style text--white bg--base">3</p>
                    </div>
                    <div class="col">
                        <h3 class="title fs--22">
                            Strategic Guidance &amp; Planning
                        </h3>
                        <p class="subtitle fs--16">
                            You receive a clear, actionable legal roadmap tailored to your specific needs—whether for
                            negotiation, litigation, or settlement.
                        </p>
                    </div>
                </li>
            </ul>
            <!-- / process list part -->

            <!-- video part -->
            <div class="col-12 col-lg-6">
                <div class="chunk-video bg--black position-relative wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="content--wrap bg--img position-absolute" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/video-thumb.png">
                        <div class="popup-video-wrap">
                            <div class="waves-block position-relative">
                                <div class="waves waves-icon"></div>
                            </div>

                            <a class="play-video fs--24 popup_video" data-fancybox=""
                                href="https://www.youtube.com/watch?v=K5DoQnZA0oI" tabindex="0">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / video part -->

        </div>
    </div>
</section>



<!-- service section -->


<!-- partner section -->
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


<!-- testimonial section -->
<section class="testimonial-section overflow-hidden">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/testemonial-bg4.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- _lawyers -->
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
                        <a href="<?php echo home_url('lawyers/jone-doe'); ?>" class="text--white">
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
                        <a href="<?php echo home_url('lawyers/emma-stone'); ?>" class="text--white">
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
                        <a href="<?php echo home_url('lawyers/arjen-smit'); ?>" class="text--white">
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


<!-- priceplan section -->
<section class="priceplan--section pb-120 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                <h2 class="title text-center fs--40 fw--400 wow animate__animated animate__fadeInUp splite-text w--90 mb-80"
                    data-splitting data-wow-delay="0.2s">
                    Our Best Pricing Plan
                </h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="plan--card">
                    <div class="price-title--wrap">
                        <h3 class="title fs--22 fw--400">Basic Price</h3>
                        <div class="price d-flex gap--20 align-items-end">
                            <h3 class="fs--40 fw--400 m-0">$32</h3>
                            <p class="">/MO</p>
                        </div>
                    </div>

                    <ul class="item--wrap d-flex flex-column gap--24">
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Free consultation</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Legal advice and guidence</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-xmark text--black"></i>
                            <p>Negotiation and setlment</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Implementation services</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Case Evolution</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg w--70">GET START</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="plan--card active">
                    <div class="price-title--wrap">
                        <h3 class="title fs--22 fw--400">Basic Price</h3>
                        <div class="price d-flex gap--20 align-items-end">
                            <h3 class="fs--40 fw--400 m-0">$32</h3>
                            <p class="">/MO</p>
                        </div>
                    </div>

                    <ul class="item--wrap d-flex flex-column gap--24">
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Free consultation</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Legal advice and guidence</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-xmark text--black"></i>
                            <p>Negotiation and setlment</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Implementation services</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Case Evolution</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg w--70">GET START</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="plan--card">
                    <div class="price-title--wrap">
                        <h3 class="title fs--22 fw--400">Basic Price</h3>
                        <div class="price d-flex gap--20 align-items-end">
                            <h3 class="fs--40 fw--400 m-0">$32</h3>
                            <p class="">/MO</p>
                        </div>
                    </div>

                    <ul class="item--wrap d-flex flex-column gap--24">
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Free consultation</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Legal advice and guidence</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-xmark text--black"></i>
                            <p>Negotiation and setlment</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Implementation services</p>
                        </li>
                        <li class="d-flex align-items-center gap--8">
                            <i class="fa-solid fa-check text--base"></i>
                            <p>Case Evolution</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg w--70">GET START</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- _firststep section -->
<section class="firststep--section py-120 overflow-hidden position-relative bg--img z--1"
    data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/common/step-bg.png">
    <div class="firststep--section-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="content--wrap d-flex flex-column justify-content-center align-items-center">
                    <h3 class="title text--white wow animate__animated animate__fadeInUp text-center fs--40 fw--400 splite-text mb-4"
                        data-splitting data-wow-delay="0.1s">
                        Take the First Step Today
                    </h3>
                    <p class="subtitle text--white wow animate__animated animate__fadeInUp text-center fs-16 fw--400 mb-40"
                        data-wow-delay="0.2s">
                        We understand that navigating legal matters can raise various
                        questions. Below, we've compiled answers to some
                    </p>
                    <div>
                        <a href="<?php echo home_url('about'); ?>" class="btn btn--base btn--lg">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- blogs section -->
<section class="news-section overflow-hidden py-120">
    <div class="container">
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="row gy-5 justify-content-center align-items-center mb-40">
                    <div class="col d-flex flex-column align-items-center justify-content-center">
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
                    <a href="<?php echo home_url('blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.png" alt="image">
                    </a>
                </div>

                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-regular fa-calendar"></i> February 28,
                                2019</a>
                        </span>
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-solid fa-tag"></i> Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('blog-details'); ?>">
                            Family Law - Custody Battle Resoluton
                        </a>
                    </h3>
                    <p>
                        We are proud to have successfully represented numerous clients in
                        various legal matters. Below are some of our notable projects
                    </p>
                </div>
            </div>

            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog7.png" alt="image">
                    </a>
                </div>

                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-regular fa-calendar"></i> February 28,
                                2019</a>
                        </span>
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-solid fa-tag"></i> Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('blog-details'); ?>">
                            Estate Planning - Why Every Family Should Have a Will
                        </a>
                    </h3>
                    <p>
                        Creating a will isn’t just for the wealthy. A proper estate plan ensures your wishes are
                        respected and your loved ones are protected.
                    </p>
                </div>
            </div>


            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog8.png" alt="image">
                    </a>
                </div>

                <div class="chunk-blog__content">
                    <div class="chunk-blog__meta">
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-regular fa-calendar"></i> February 28,
                                2019</a>
                        </span>
                        <span>
                            <a href="<?php echo home_url('blog'); ?>"><i class="fa-solid fa-tag"></i> Family Law</a>
                        </span>
                    </div>

                    <h3 class="chunk-blog__title">
                        <a href="<?php echo home_url('blog-details'); ?>">
                            What to Expect During a Criminal Defense Case
                        </a>
                    </h3>
                    <p>
                        Facing criminal charges can be overwhelming. This article breaks down how a strong legal
                        strategy can make a difference.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<?php get_footer(); ?>