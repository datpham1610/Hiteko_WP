<?php get_header() ?>
    <?php while(have_posts()):the_post(); ?>
        <div class="single">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php the_field('image_cover','options') ?>" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span><?php the_field('title_page','options') ?></span>
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
                                <?php the_field('menu1_post','options') ?>
                                <div class="arrows-down" data-new-id="1"><img src="<?php echo get_template_directory_uri();?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled hide">
                                    <?php 
                                    $cat = get_categories(array('hide_empty' => false)); 
                                    $a=0;?>
                                    <?php foreach ($cat as $category): ?>
                                    <li class="<?php if($a==0): echo 'active'; endif; ?> " data-id="<?php echo $category->term_id ?>"><a><?php echo $category->name ?></a></li>
                                    <?php $a++ ;endforeach; wp_reset_query();?>
                                </ul>
                            </div>
                            <div class=" menu2" data-aos="fade-up" data-aos-duration="700">
                                <?php the_field('menu2_post','options') ?>
                                <div class="arrows-down" data-new-id="2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled ">
                                    <?php     
                                        $post = query_posts(array( 
                                            'post_type' => 'business',
                                            'showposts' => -1,
                                            'order' => 'ASC'
                                        ));
                                        $i = 0;
                                    ?>
                                    <?php while(have_posts()):the_post(); ?>
                                    <li class="<?php if($i==0): echo'active'; endif; ?>" data-business-id="<?php echo get_the_ID() ?>"><a><?php the_title() ?> </a></li>
                                    <?php $i++ ;endwhile; wp_reset_query(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-section" data-aos="fade-left">
                                        <a><?php the_field('title') ?></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="heading">
                                        <div class="title-post" data-aos="fade-up" data-aos-duration="500">
                                            <?php the_field('description') ?>
                                        </div>
                                        <div class="date" data-aos="fade-up" data-aos-duration="500">
                                            <?php echo  'Ngày'.' '.get_the_date('d').' '.'tháng'.' '.get_the_date('m/Y'); ?>
                                        </div>
                                    </div>
                                    <div class="content" >
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section">
                                <div class="text-project"><span><?php echo get_field('related_post','options')['text1'] ?></span></div>
                                <div class="text-related"><span><?php echo get_field('related_post','options')['text2'] ?></span></div>
                            </div>
                            <div class="single-related-slider slider">
                                <?php
                                    $cat_id = get_the_category(get_the_ID());
                                    $post = query_posts(array( 
                                        'showposts' => -1,
                                        'order' => 'ASC',
                                    ));
                                    $i = 0;
                                ?>
                                <?php while(have_posts()):the_post(); ?>
                                <div class="single-related-item">
                                    <div class="blue-blur">
                                        <img src="<?php the_field('related_slide') ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="detail2">
                                            <?php echo  'Ngày'.' '.get_the_date('d').' '.'tháng'.' '.get_the_date('m/Y'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php get_footer(); ?>