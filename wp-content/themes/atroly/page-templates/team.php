<?php
/**
 * Template Name: Team
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


<!--  team members -->
<section class="lawyers py-120 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center gy-4">

            <!--  lawyer card -->
            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-1.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Juvenile Crimes</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/jone-doe'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Jone Doe</h3>
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

            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer4.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Personal Injury</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/emma-stone'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Emma Stone</h3>
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

            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer3.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Domestic Violence</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/arjen-smit'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Arjen Smit</h3>
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

            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-7.png" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Juvenile Crimes</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/jone-doe'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Jane Doe</h3>
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

            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-4.jpg" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Juvenile Crimes</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/jone-doe'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Jane Smith</h3>
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
            <div class="col-sm-6 col-lg-4 wow animate__animated animate__fadeInUp">
                <div class="lawyers--card">
                    <div class="thumb--wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lawer/lawer-v1-3.jpg" alt="image">
                    </div>
                    <div class="content--wrap">
                        <p class="title fs--18 fw--700 text-center">Domestic Violence</p>
                    </div>
                    <div class="lawyer-name--wrap">
                        <a href="<?php echo home_url('/lawyers/jone-doe'); ?>" class="text--white">
                            <h3 class="name text--white fw--400 fs--28 m-0">Jone Cena</h3>
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

            <!-- / lawyer card -->
        </div>
    </div>
</section>
<?php get_footer(); ?>