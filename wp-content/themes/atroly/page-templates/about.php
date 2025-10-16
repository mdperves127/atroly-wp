<?php 
/**
 * Template Name: About
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


<!-- bradcrumb -->

<!-- Breadcrumb End Here -->


<!-- About section -->
<!-- < Hero Section -->
<section class="chunk-about position-relative z--1">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="chunk-about__left ">
                    <div class="about-thumb1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//common/about4.png" alt="image">
                    </div>
                    <div class="about-thumb2 top_image_bounce">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//common/about5.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="content--wrap z--1">
                    <div class="section-content">
                        <h2 class="title fs--40 wow animate__animated animate__fadeInUp splite-text" data-splitting
                            data-wow-delay="0.2s">
                            Your Legal Safety is Our Top Priority
                        </h2>
                        <p class="subtitle wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>
                    </div>

                    <div class="row wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <ul class="chunk-about__servicekey">
                            <li>Best Legal Services</li>
                            <li>Expert Lawyer</li>
                            <li>100% Success Rate</li>
                            <li>Affordable Cost Rate</li>
                        </ul>
                    </div>

                    <div class="btn--wrap d-flex gap--24 flex-column flex-sm-row wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <a href="<?php echo home_url('contact'); ?>" class="btn btn--base btn--lg w-sm--100">Book an Appointment</a>
                        <a href="<?php echo home_url('practice-area'); ?>" class="btn btn-outline--base btn--lg text--base w-sm--100">Explore
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Hero Section />-->


<!-- Progress section -->
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


<!-- Video section -->
<section class="chunk-about__video">
    <div class="video bg--img position-relative" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images//common/video-bg.jpg">

    <div class="popup-video-wrap">

        <div class="waves-block position-relative">
            <div class="waves"></div>
        </div>


        <a class="play-video popup_video" data-fancybox="" href="https://www.youtube.com/watch?v=K5DoQnZA0oI"
            tabindex="0">
            Play
        </a>
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
                    <div class="content--wrap bg--img position-absolute" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images//common/video-thumb.png">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images//partner/partner1.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images//partner/partner2.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images//partner/partner3.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images//partner/partner1.png" alt="image">
            </div>
            <div class="partner--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images//partner/partner3.png" alt="image">
            </div>
        </div>
    </div>
</section>


<!-- Testmonial Section -->
<!-- < testimonial-section -->
<section class="testimonial-section overflow-hidden about-page">
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
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images//user/user11.png" alt="image">
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
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images//user/user1.png" alt="image">
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
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images//user/user2.png" alt="image">
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
                                <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images//user/user3.png" alt="image">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//common/testemonial-bg5.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--  testimonial-section /> -->


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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//lawer/lawer-v1-1.png" alt="image">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//lawer/lawer4.png" alt="image">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//lawer/lawer3.png" alt="image">
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


<!-- FAQ Section -->
<!-- < faq-section -->
<section class="faq-section--two position-relative about-page">
    <div class="faq-bg--thumb position-absolute z--1 pe-4 pt-4 pb-4">
        <img class="fit--img" src="<?php echo get_template_directory_uri(); ?>/assets/images//common/faq-bg2.png" alt="image">
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
<?php get_footer(); ?>