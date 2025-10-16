<?php
/**
 * Template Name: FAQ
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



<!--  faq-section -->
<section class="faq-section py-100 position-relative">
    <div class="container">
        <div class="row gy-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-content-4 d-flex justify-content-center flex-column align-items-center mb-60">
                    <h2 class="title position-relative wow animate__animated animate__fadeInUp text-center fs--40 fw--400 splite-text"
                        data-splitting data-wow-delay="0.2s">
                        Do You Have Any Questions?
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/text-line.svg" class="position-absolute end-0 left_image_bounce"
                            style="bottom: -40px" alt="">
                    </h2>
                </div>
            </div>
        </div>

        <div class="row mb-50">
            <div class="col-12">
                <h3 data-splitting
                    class="wow animate__animated animate__fadeInUp mb-3 text--base fs--22 fw--400 splite-text">
                    Common Questions
                </h3>
                <p class="wow animate__animated animate__fadeInUp fs-18 fw--400" data-wow-delay="0.3s">
                    The power of the lawyer is in the uncertainty of the law. lorem ipsum
                    dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <!-- accordion -->
        <div class="row gy-5 justify-content-center position-relative mb-100">
            <div class="col-12">
                <div class="accordion custom--accordion1 accordion-flush" id="accordionFlushExample">
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


        <div class="row mb-50">
            <div class="col-12">
                <h3 data-splitting
                    class="wow animate__animated animate__fadeInUp mb-3 text--base fs--22 fw--400 splite-text">
                    Case Related Questions
                </h3>
                <p class="wow animate__animated animate__fadeInUp fs-18 fw--400" data-wow-delay="0.3s">
                    The power of the lawyer is in the uncertainty of the law. lorem ipsum
                    dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <!-- accordion -->

        <div class="row gy-5 justify-content-center position-relative mb-100">
            <div class="col-12">
                <div class="accordion custom--accordion1 accordion-flush" id="XaccordionFlushExampleX">
                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.2s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#Xflush-collapse1" aria-expanded="false"
                                aria-controls="Xflush-collapse1">
                                What documents should I bring for my first meeting?
                            </button>
                        </div>
                        <div id="Xflush-collapse1" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
                            <div class="accordion-body">
                                only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised
                                in the with the release of Letraset sheets containing
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.3s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#Xflush-collapse2" aria-expanded="false"
                                aria-controls="Xflush-collapse2">
                                How long will my case take to resolve?
                            </button>
                        </div>
                        <div id="Xflush-collapse2" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse3" aria-expanded="false"
                                aria-controls="Xflush-collapse3">
                                Will I have to go to court?
                            </button>
                        </div>
                        <div id="Xflush-collapse3" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse4" aria-expanded="false"
                                aria-controls="Xflush-collapse4">
                                What happens if we lose the case?
                            </button>
                        </div>
                        <div id="Xflush-collapse4" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse5" aria-expanded="false"
                                aria-controls="Xflush-collapse5">
                                Do you offer payment plans or flexible fees?
                            </button>
                        </div>
                        <div id="Xflush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse6" aria-expanded="false"
                                aria-controls="Xflush-collapse6">
                                Can you handle cases outside my city or state?
                            </button>
                        </div>
                        <div id="Xflush-collapse6" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
        <!-- /accordion -->


        <div class="row mb-50">
            <div class="col-12">
                <h3 data-splitting
                    class="wow animate__animated animate__fadeInUp mb-3 text--base fs--22 fw--400 splite-text">
                    Other Questions
                </h3>
                <p class="wow animate__animated animate__fadeInUp fs-18 fw--400" data-wow-delay="0.3s">
                    The power of the lawyer is in the uncertainty of the law. lorem ipsum
                    dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <!-- accordion -->

        <div class="row gy-5 justify-content-center position-relative">
            <div class="col-12">
                <div class="accordion custom--accordion1 accordion-flush" id="XaccordionFlushExampleX">
                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.2s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#Xflush-collapse1" aria-expanded="false"
                                aria-controls="Xflush-collapse1">
                                Do you provide legal assistance for businesses as well as individuals?
                            </button>
                        </div>
                        <div id="Xflush-collapse1" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
                            <div class="accordion-body">
                                only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised
                                in the with the release of Letraset sheets containing
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item wow animate__fadeInUp animate__animated" data-wow-delay="0.3s">
                        <div class="accordion-header">
                            <div class="bar"></div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#Xflush-collapse2" aria-expanded="false"
                                aria-controls="Xflush-collapse2">
                                How can I track the progress of my case?
                            </button>
                        </div>
                        <div id="Xflush-collapse2" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse3" aria-expanded="false"
                                aria-controls="Xflush-collapse3">
                                What should I do if I have an urgent legal matter outside office hours?
                            </button>
                        </div>
                        <div id="Xflush-collapse3" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse4" aria-expanded="false"
                                aria-controls="Xflush-collapse4">
                                Do you work with other lawyers or specialists if needed?
                            </button>
                        </div>
                        <div id="Xflush-collapse4" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse5" aria-expanded="false"
                                aria-controls="Xflush-collapse5">
                                Can you help me with legal paperwork or contracts only?
                            </button>
                        </div>
                        <div id="Xflush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
                                data-bs-target="#Xflush-collapse6" aria-expanded="false"
                                aria-controls="Xflush-collapse6">
                                Do you provide updates in person, by phone, or by email?
                            </button>
                        </div>
                        <div id="Xflush-collapse6" class="accordion-collapse collapse"
                            data-bs-parent="#XaccordionFlushExampleX">
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
        <!-- /accordion -->
    </div>
</section>

<?php get_footer(); ?>