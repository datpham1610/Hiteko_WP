<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="recruitment single-recruitment">
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
                        <div class="col-md-3">
                            <div class="menu" data-aos="fade-up" data-aos-duration="500">
                                <?php the_field('menu1','options') ?>
                                <div class="arrows-down" data-new-id="1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled">
                                    <li class="active "><a href="">Cách Nộp Hồ Sơ</a></li>
                                </ul>
                            </div>
                            <div class=" menu2" data-aos="fade-up" data-aos-duration="700">
                                <?php the_field('menu2','options') ?>
                                <div class="arrows-down" data-new-id="2"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled hide">
                                    <?php $menuPossision =get_terms( array('taxonomy' => 'possision-cat','hide_empty' => false ));
                                          $i=0;
                                    ?>
                                    <?php foreach ($menuPossision as $menu): ?>
                                       <li class="<?php if($i==0): echo "active" ; endif?> " data-id="<?php echo $menu->term_id ?>"><a ><?php echo $menu->name ?></a></li>
                                   <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                            <div class="form-cv d-md-block d-none" data-aos="fade-up" data-aos-duration="1300">
                                <div class="title text-center">
                                    <?php the_field('title_form','options') ?>
                                </div>
                                <form>
                                    <?php echo do_shortcode(get_field('form','options')) ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div id="menu" class="menu-left">
                                <div class="row ">
                                    <div class="col-md-12 pb-md-5">
                                        <div class="job" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('possision') ?>
                                        </div>
                                        <div class="banner-recruit" data-aos="fade-up" data-aos-duration="500">
                                            <img src="<?php the_field('banner') ?>" class="img-fluid">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" data-aos="fade-up" data-aos-duration="500">
                                                <div class="left-cl">
                                                    <div class="range">
                                                        <?php the_field('range') ?>
                                                    </div>
                                                    <div class="date">
                                                        <?php echo get_the_date('d/m/Y') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('description_full') ?>
                                        </div>
                                        <div class="body" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('require') ?>
                                        </div>
                                        <div class="body" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('income') ?>
                                        <div class="body" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('recruitment') ?>
                                        </div>
                                        <div class="form-cv d-md-none d-block" data-aos="fade-up" data-aos-duration="1300">
                                            <div class="title text-center">
                                                <?php the_field('title_form','options') ?>
                                            </div>
                                            <form>
                                                <?php echo do_shortcode(get_field('form','options')) ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>