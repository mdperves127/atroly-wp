<?php 
/**
 * Template Name: Gallery
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



<!-- gallery  -->
<section class="py-120 gallery__image-filter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center fs--40 wow animate__animated animate__fadeInUp splite-text mb-4" data-splitting
                    data-wow-delay="0.2s">
                    Stay Tuned For More Of Our Activities.
                </h2>

                <ul class="d-flex justify-content-center align-items-center gap--16 mt-25 flex-wrap">
                    <li>
                        <button class="filter-button min-w--auto btn btn--md active" data-filter="All">ALL</button>
                    </li>
                    <li>
                        <button class="filter-button min-w--auto btn btn--md" data-filter="Family">Family</button>
                    </li>
                    <li>
                        <button class="filter-button min-w--auto btn  btn--md"
                            data-filter="Employment">Employment</button>
                    </li>
                    <li>
                        <button class="filter-button min-w--auto btn  btn--md" data-filter="Business">Business</button>
                    </li>
                    <li>
                        <button class="filter-button min-w--auto btn  btn--md" data-filter="Normal">Normal</button>
                    </li>
                </ul>
            </div>
        </div>

        <div id="gallery" class="row image-gallery-wrap gy-4 mt-40">
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.1s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Family"
                data-wow-delay="0.2s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Business"
                data-wow-delay="0.3s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.4s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Normal"
                data-wow-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.6s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.7s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/7.png" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.8s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/8.jpg" alt="image">
            </div>
            <div class="col-6 col-lg-4 text-center image wow animate__animated animate__fadeInUp filter Employment"
                data-wow-delay="0.9s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/9.jpg" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center fs--40  wow animate__animated animate__fadeInUp splite-text"
                    data-wow-delay="0.2s" data-splitting>
                    The Most Successful and Well-known Lawyers.
                </h2>
            </div>
        </div>
    </div>

    <div class="lawyers-slider pb-100">
        <div class="image wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/slider-1.png" alt="slider">
        </div>
        <div class="image active wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/slider-1.png" alt="slider">
        </div>
        <div class="image wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/slider-3.png" alt="slider">
        </div>
        <div class="image wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/slider-3.png" alt="slider">
        </div>
    </div>

</section>
<?php get_footer(); ?>