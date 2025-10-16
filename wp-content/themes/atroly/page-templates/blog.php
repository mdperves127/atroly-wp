<?php 
/**
 * Template Name: Blog Grid
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



<!-- blog section -->

<section class="news-section overflow-hidden py-120">
    <div class="container">
        <div class="row gy-5 mb-80 justify-content-center">
            <div class="col-lg-12">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <h2 class="title mb-3 fw--400 wow animate__animated animate__fadeInUp splite-text w--90"
                            data-splitting data-wow-delay="0.2s">
                            Our Latest News For Law
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="subtitle wow animate__animated animate__fadeInUp mb-3" data-wow-delay="0.3s">
                            Welcome to our blog, where we aim to provide valuable insights,
                            expert advice, and informative articles on various legal matters
                            related
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="chunk-blog__gridview row gap-4 px-3">

            <!--  blog card  -->
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.png" alt="image">
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
            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog2.png" alt="image">
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

            <div class="chunk-blog__card wow animate__animated animate__fadeInUp">
                <div class="chunk-blog__thumb">
                    <a href="<?php echo home_url('blog-details'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog4.png" alt="image">
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
            <!-- / blog card  -->

            <div class="col-12 chunk-pagination wow animate__animated animate__fadeInUp">
                <div class="chunk-pagination__wrap">
                    <nav>
                        <ul>
                            <li><a href="<?php echo home_url('blog'); ?>"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li><a class="active" href="<?php echo home_url('blog'); ?>">1</a></li>
                            <li><a href="<?php echo home_url('blog'); ?>">2</a></li>
                            <li><a href="<?php echo home_url('blog'); ?>">3</a></li>
                            <li><a href="<?php echo home_url('blog'); ?>"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- / blog section -->



<?php get_footer(); ?>