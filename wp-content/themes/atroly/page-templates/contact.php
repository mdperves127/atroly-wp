<?php 
/**
 * Template Name: Contact
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


<section class="contact--section py-120">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-8">
                <div>
                    <h2 class="title position-relative wow animate__animated animate__fadeInUp fs--40 splite-text"
                        data-splitting data-wow-delay="0.2s">
                        Book an Appointment
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/text-line.svg" style="bottom: -40px" class="left_image_bounce"
                            alt="image">
                    </h2>
                </div>

                <form>
                    <div class="contact--from-wrap">
                        <h3 class="fs--22 wow animate__animated animate__fadeInUp splite-text" data-splitting
                            data-wow-delay="0.3s">
                            Your Information
                        </h3>
                        <div class="row">
                            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                <input type="text" name="name" class="form--control ps-0" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                                <input type="text" name="email" class="form--control ps-0" placeholder="Email ID">
                            </div>
                            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                                <input type="text" name="phone" class="form--control ps-0" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                                <select name="services" class="form--control ps-0" required>
                                    <option disabled selected>Required Services</option>
                                    <option value="criminal-law">Criminal Law</option>
                                    <option value="family-law">Family Law</option>
                                    <option value="corporate-law">Corporate Law</option>
                                    <option value="immigration-law">Immigration Law</option>
                                    <option value="intellectual-property">Intellectual Property Law</option>
                                </select>
                            </div>
                        </div>
                        <h3 class="fs--22 wow animate__animated animate__fadeInUp splite-text" data-splitting
                            data-wow-delay="0.4s">
                            Drop Us a Line
                        </h3>
                        <div class="row">
                            <div class="col-md-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.10s">
                                <textarea name="message" placeholder="Type here " id="message"
                                    class="form--control ps-0 h-auto" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap--52 wow animate__animated animate__fadeInUp flex-wrap"
                            data-wow-delay="0.2s">
                            <button class="btn btn--base btn--lg">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Contact support cards -->
            <div class="col-md-4 contact-card__wrapper">
                <div class="contact-support-card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <span class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <h3>Location</h3>
                    <ul>
                        <li>New York, NY <br>Address: 123 Madison Avenue, New York, NY 10016</li>
                        <li>Los Angeles, <br> CAAddress: 456 Sunset Boulevard, Los Angeles, CA 90028</li>
                    </ul>
                </div>
                <div class="contact-support-card wow animate__animated animate__fadeInUp " data-wow-delay="0.3s">
                    <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <h3>Contact Us Via Our Email or Phone</h3>
                    <ul>
                        <li><a href="mailto:contact@atroly.com">contact@atroly.com</a></li>
                        <li><a href="tel:+88011665165156">+880 116 651 65156</a></li>
                    </ul>
                </div>
            </div>
            <!-- / Contact support cards -->
        </div>
    </div>
</section>

<!-- Embeded map section -->
<section class="chunk-map">
    <div class="container-fluid g-0 mb-0 wow animate__animated animate__fadeInUp">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d301.74120428372!2d90.40252770258428!3d23.731037205732008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ee26277f91%3A0x9833622160bfb5cf!2sSupreme%20Court%20of%20Bangladesh!5e0!3m2!1sen!2sbd!4v1755098792041!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<!-- / Embeded map section -->

<?php get_footer(); ?>