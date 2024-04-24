<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
        <div class="contact">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php the_field('image_cover') ?>" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span><?php the_field('title_page') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-center" data-aos="fade-up">
                            <a><?php the_field('section1_title') ?></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row my-md-5">
                        <div class="col-md-6">
                            <div class="name" data-aos="fade-up">
                                <?php echo get_field('section1_left')['name'] ?>
                            </div>
                            <div class="address" data-aos="fade-up">
                                <?php echo get_field('section1_left')['address'] ?>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="phone" data-aos="fade-up" data-aos-duration="500">
                                <?php echo get_field('section1_right')['icon1'] ?>
                                <?php echo get_field('section1_right')['text1'] ?>
                            </div>
                            <div class="mail" data-aos="fade-up" data-aos-duration="700">
                                <?php echo get_field('section1_right')['icon2'] ?>
                                <?php echo get_field('section1_right')['text2'] ?> 
                            </div>
                            <div class="website" data-aos="fade-up" data-aos-duration="900">
                                <span><img src="<?php echo get_field('section1_right')['icon3'] ?>" alt="" class="img-fluid"></span>
                                <div><?php echo get_field('section1_right')['text3'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="map" data-aos="fade-up" data-aos-duration="500">
                        <?php the_field('map') ?>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section" data-aos="fade-up" data-aos-duration="500">
                            <a><?php the_field('section2_title') ?></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="contact-us">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <form>
                                    <?php echo do_shortcode( '[contact-form-7 id="270" title="Contact form 1"]' ) ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>