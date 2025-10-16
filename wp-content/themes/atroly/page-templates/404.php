<?php 
/**
 * Template Name: 404
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


<section class="py-100 error-page">
    <div class="container">
        <div class="row gy-5 justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="mb-5 error-image wow animate__animated animate__fadeInUp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/404-portal.svg" alt="not found image">
                </div>

                <div class="text-center">
                    <h1 class="fs--40 fw--400 mb-30 wow animate__animated animate__fadeInUp splite-text" data-splitting
                        data-wow-delay="0.2s">Oops! Page Not Found</h1>
                    <p class="fs--18 fw--400 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        The page you are looking for does not exist. It might have been
                        moved or deleted.
                    </p>
                    <a href="<?php echo home_url(); ?>" class="btn btn--base btn--lg wow animate__animated animate__fadeInUp">
                        Back to Home Page
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  404 section /> -->
<?php get_footer(); ?>