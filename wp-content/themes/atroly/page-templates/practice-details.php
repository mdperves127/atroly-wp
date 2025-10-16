<?php
/**
 * Template Name: Practice Details
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

<!-- Breadcrumb End Here -->

<!-- practice details section -->
<section class="chunk-practice my-120">
    <div class="container">
        <div class="row gy-5">

            <!-- / post column -->
            <div class="col-lg-8">
                <div class="chunk-practice__wrapper">

                    <article class="chunk-practice__content">

                        <div class="chunk-practice__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/practice-details-thumb.jpg" alt="blog details">
                        </div>

                        <h2 class="chunk-practice__details-title wow animate__animated animate__fadeInUp splite-text"
                            data-splitting>Criminal Law</h2>

                        <hr>

                        <div class="chunk-practice__text">
                            <p>
                                Democracy must be built through open societies that share
                                information. when there is information, there is enlightenment. when
                                there is debate, there are solutions. when there is no sharing of
                                power, no rule of law, no accountability, there is abuse aliquip ex
                                commodo consequat.
                            </p>
                            <p>
                                The power of the lawyer is in the uncertainty of the law. lorem
                                ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>


                            <!-- 2 column text -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="practice-details-list">
                                        <div class="icon">
                                            <i class="fa-solid fa-scale-balanced"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Legal Champion</h5>
                                            <p class="mb-0">
                                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt
                                                ut labore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="practice-details-list">
                                        <div class="icon">
                                            <i class="fa-solid fa-scale-balanced"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Bloomberg Law</h5>
                                            <p class="mb-0">
                                                Consectetur adipiscing elit, sed do eiusm od tempor incididunt
                                                ut labore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / 2 column text -->

                            <h3>We Are Committed To Take Care of Clients Seriously
                            </h3>
                            <p>
                                Democracy must be built through open societies that share
                                information. when there is information, there is enlightenment. when
                                there is debate, there are solutions. when there is no sharing of
                                power, no rule of law, no accountability, there is abuse aliquip ex
                                commodo consequat.
                            </p>


                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/practice-details-thumb-2.jpg" alt="practice details">
                                </div>
                                <div class="col-md-6">
                                    <h5>Our Few Benefits</h5>
                                    <ul>
                                        <li>9/10 Average Satisfaction Rate</li>
                                        <li>96% Completitation Rate</li>
                                        <li>9/10 Average Satisfaction Rate</li>
                                    </ul>

                                </div>
                            </div>
                        </div>



                        <!-- FAQs -->
                        <div class="chunk-practice__footer col wow animate__animated animate__fadeInUp">
                            <div class="row justify-content-center position-relative">
                                <div class="col-12">
                                    <div class="accordion custom--accordion-two accordion-flush"
                                        id="accordionFlushExample">
                                        <div class="accordion-item wow animate__fadeInUp animate__animated"
                                            data-wow-delay="0.2s">
                                            <div class="accordion-header">
                                                <div class="bar"></div>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                                    aria-expanded="false" aria-controls="flush-collapse1">
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

                                        <div class="accordion-item wow animate__fadeInUp animate__animated"
                                            data-wow-delay="0.3s">
                                            <div class="accordion-header">
                                                <div class="bar"></div>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                                    aria-expanded="false" aria-controls="flush-collapse2">
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

                                        <div class="accordion-item wow animate__fadeInUp animate__animated"
                                            data-wow-delay="0.4s">
                                            <div class="accordion-header">
                                                <div class="bar"></div>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                                    aria-expanded="false" aria-controls="flush-collapse3">
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

                                        <div class="accordion-item wow animate__fadeInUp animate__animated"
                                            data-wow-delay="0.5s">
                                            <div class="accordion-header">
                                                <div class="bar"></div>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse4"
                                                    aria-expanded="false" aria-controls="flush-collapse4">
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
                        </div>
                        <!-- / FAQs -->
                    </article>

                </div>

            </div>

            <!-- / post column -->

            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="chunk-sidebar">
                    <!-- contact form -->
                    <div class="chunk-sidebar__widget chunk-dark-theme wow animate__animated animate__fadeInUp">
                        <div class="chunk-sidebar__widget-head">
                            <h3 class="chunk-sidebar__widget-title">Get In Touch</h3>
                        </div>

                        <div class="chunk-sidebar__widget-content">

                            <div class="chunk-sidebar__contact">
                                <form>
                                    <input data-wow-delay="0.2s" type="text" placeholder="Full Name">
                                    <input data-wow-delay="0.3s" type="Email" placeholder="Email ID">
                                    <textarea data-wow-delay="0.4s" rows="3" placeholder="Message" name="Message"
                                        id="Message"></textarea>
                                    <button class="btn btn--base btn--lg">Send A Message</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- / contact form -->

                    <!--  Service list -->
                    <div class="chunk-sidebar__widget wow animate__animated animate__fadeInUp">
                        <div class="chunk-sidebar__widget-head">
                            <h3 class="chunk-sidebar__widget-title">All Service</h3>
                        </div>
                        <div class="chunk-sidebar__widget-content">
                            <ul>
                                <li>
                                    <a href="<?php echo home_url('/practice-area'); ?>">Criminal Law</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/practice-area'); ?>">Human Right Lawyer</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/practice-area'); ?>">Residency or Temporary Stay VISA</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/practice-area'); ?>">Tributary and Customs Authority</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- / Service list -->

                </div>
                <!-- / sidebar -->

            </div>

        </div>

    </div>
</section>
<?php get_footer(); ?>