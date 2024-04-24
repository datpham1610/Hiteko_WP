<?php get_header() ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
                <div class="realty single-realty">
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
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-section">
                                        <div class="text-project" data-aos="fade-right">
                                            <span><?php the_field('project') ?></span>
                                        </div>
                                        <div class="text-related" data-aos="fade-left">
                                            <span><?php the_field('name') ?></span>
                                        </div>
                                    </div>
                                    <div class="single-realty-slider">
                                        <?php $images = get_field('slide_image') ?>
                                        <?php foreach($images as $img): ?>
                                        <div class="single-project-item">
                                            <div class="single-image" data-aos="fade-up" data-aos-duration="500">
                                                <img src="<?php echo $img['url'] ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="box-blue" data-aos="fade-up" data-aos-duration="700">
                                        <div class="title-single">
                                            <?php the_field('title_info') ?>
                                        </div>
                                        <div class="desciption-single">
                                            <?php the_field('content_info') ?>
                                        </div>
                                        <div class="title-single">
                                            <?php the_field('title_detail') ?>
                                        </div>
                                        <div class="row">
                                            <?php $a=1; ?>
                                            <?php if(have_rows('repeater')): ?>
                                                <?php while(have_rows('repeater')):the_row(); ?>
                                                    <?php if($a==1 || ($a-1)%3==0):?>
                                                    <?php echo '<div class="col-md-5">';endif ?>
                                                        <div class="text1-single">
                                                            <span><?php the_sub_field('text1') ?></span><br>
                                                            <?php the_sub_field('text2') ?> 
                                                        </div>
                                                    <?php if($a%3==0): echo 
                                                    '</div>
                                                    <div class="col-md-2"></div>';endif; ?>
                                                <?php $a++ ;endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="map" data-aos="fade-up">
                                        <iframe src="<?php the_field('map') ?>" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="title-section" data-aos="fade-up">
                                    <a><?php the_field('contact_with_us') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="contact-us">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <form>
                                            <?php echo do_shortcode( get_field('contact_form') ) ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
<?php get_footer() ?>