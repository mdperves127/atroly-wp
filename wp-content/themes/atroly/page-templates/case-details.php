<?php 
/**
 * Template Name: Case Details
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



<section class="chunk-case my-120">
    <div class="container">
        <div class="row gy-5">

            <!-- / post column -->
            <div class="col-lg-8">
                <div class="chunk-case__wrapper">

                    <article class="chunk-case__content">

                        <div class="chunk-case__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case-details.jpg" alt="case details">
                        </div>

                        <h2 class="chunk-case__details-title wow animate__animated animate__fadeInUp splite-text"
                            data-splitting>Serious Law, Simple Experience: Crafting a Clean & Confident Legal Website
                        </h2>

                        <hr>

                        <div class="chunk-case__text">

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


                            <h4>The most successful and well-known lawyers.
                            </h4>
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

                            <div class="row">
                                <div class="col-md-4 case-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case-details-1.jpg" alt="case details">
                                </div>
                                <div class="col-md-8">
                                    <h4>Story About Attorna</h4>
                                    <p>
                                        At Attorna, we understand that navigating the intricate landscape of legal
                                        challenges can be daunting. Our seasoned team of dedicated legal professionals
                                        is here to guide you through your legal journey with expertise and empathy.
                                    </p>
                                    <p>
                                        Founded on principles of integrity, diligence, and client-centricity, Attorna
                                        prides itself on delivering tailored legal solutions that prioritize your unique
                                        circumstances.
                                    </p>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/sign.png" alt="case sign">
                                    </div>
                                </div>
                            </div>

                            <h4>Problem
                            </h4>
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

                            <h4>Solution
                            </h4>
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
                        </div>

                    </article>

                </div>


            </div>

            <!-- / post column -->

            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="chunk-sidebar">
                    <!-- Meta -->

                    <div class="chunk-sidebar__widget chunk-dark-theme wow animate__animated animate__fadeInUp">
                        <!-- <div class="chunk-sidebar__widget-head"> -->
                        <!--     <h3 class="chunk-sidebar__widget-title">Get In Touch</h3> -->
                        <!-- </div> -->

                        <div class="chunk-sidebar__widget-content">

                            <div class="chunk-sidebar__meta-wrap">
                                <ul>
                                    <li>
                                        <span class="property">Client:</span>
                                        <span>Robert Downey, Jr.</span>
                                    </li>
                                    <li>
                                        <span class="property">Case Category:</span>
                                        <span>Banking and Finance</span>
                                    </li>
                                    <li>
                                        <span class="property">Time Frame:</span>
                                        <span>60 Days</span>
                                    </li>
                                    <li>
                                        <span class="property">Status:</span>
                                        <span>Win</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <!-- / Meta -->

                    <!--  Service list -->
                    <div class="chunk-sidebar__widget wow animate__animated animate__fadeInUp">
                        <div class="chunk-sidebar__widget-head">
                            <h3 class="chunk-sidebar__widget-title">All Service</h3>
                        </div>
                        <div class="chunk-sidebar__widget-content">
                            <ul>
                                <li>
                                    <a href="<?php echo home_url('practice-area'); ?>">Criminal Law</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('practice-area'); ?>">Human Right Lawyer</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('practice-area'); ?>">Residency or Temporary Stay VISA</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('practice-area'); ?>">Tributary and Customs Authority</a>
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