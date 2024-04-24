<?php /* Template Name: Recruitment */ ?>
<?php get_header() ?>
        <div class="recruitment">
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
                                <?php the_field('menu1') ?>
                                <div class="arrows-down" data-new-id="1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled hide">
                                    <li class="active"><a href="<?php the_field('link') ?>"><?php the_field('title') ?></a></li>
                                </ul>
                            </div>
                            <div class=" menu2" data-aos="fade-up" data-aos-duration="700">
                                <?php the_field('menu2') ?>
                                <div class="arrows-down" data-new-id="2"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled ">
                                    <?php $menuPossision =get_terms( array('taxonomy' => 'possision-cat','hide_empty' => false ));
                                          $i=0;
                                    ?>
                                    <?php foreach ($menuPossision as $menu): ?>
                                       <li class="<?php if($i==0): echo "active" ; endif?> " data-id="<?php echo $menu->term_id ?>"><a ><?php echo $menu->name ?></a></li>
                                   <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div id="menu-1" class="menu-left show-menu">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-section-1" data-aos="fade-up">
                                            <?php the_field('title_section') ?>
                                        </div>
                                        <div class="content-section-1 " data-aos="fade-up" data-aos-duration="700">
                                            <?php the_field('content_section') ?>
                                            <div class="see-more">
                                                <a href="<?php the_field('link_share') ?>" class="utm-b"><?php the_field('share') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu-2" class="menu-left">
                                <div class="row">
                                <?php $post = query_posts(array( 
                                    'post_type' => 'possision',
                                    'showposts' => -1,
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        array (
                                        'taxonomy' => 'possision-cat',
                                        'field' => 'term_id',
                                        'terms' => 22
                                            )       
                                        )
                                    )
                                );?>
                                <?php while(have_posts()):the_post(); ?> 
                                    <div class="col-md-4 pb-md-5" data-aos="fade-up" data-aos-duration="500">
                                        <div class="thumbnail-2">
                                            <?php the_post_thumbnail( 'full',['class' => 'img-fluid'] ) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-8 pb-md-5" data-aos="fade-up" data-aos-duration="500">
                                        <div class="heading">
                                            <div class="job">
                                                <?php the_field('possision') ?>
                                            </div>
                                            <div class="range">
                                                <?php the_field('range') ?>
                                            </div>
                                            <div class="date">
                                               <?php echo get_the_date('d/m/Y') ?>
                                            </div>
                                        </div>
                                        <div class="body">
                                                <?php the_field('description') ?>
                                        </div>
                                        <div class="see-more-2">
                                            <a href="<?php echo get_the_permalink() ?>" class="utm-b" tabindex="0">Xem thêm</a>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_query(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>