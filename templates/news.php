<?php /* Template Name: News */ ?>
<?php get_header() ?>
        <div class="news">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php the_field('image_cover') ?>" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span><?php the_field("title_page") ?></span>
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
                            <div class="menu">
                                <?php the_field('tab1') ?>
                                <div class="arrows-down" data-new-id="1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled hide">
                                    <?php 
                                    $cat = get_categories(array('hide_empty' => false)); 
                                    $a=0;?>
                                    <?php foreach ($cat as $category): ?>
                                    <li class="<?php if($a==0): echo 'active'; endif; ?> " data-id="<?php echo $category->term_id ?>"><a><?php echo $category->name ?></a></li>
                                    <?php $a++ ;endforeach; wp_reset_query();?>
                                </ul>
                            </div>
                            <div class="menu2" >
                                <?php the_field('tab2') ?>
                                <div class="arrows-down" data-new-id="2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid">
                                </div>
                                <ul class="list-unstyled">
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
                            <div id="menu-1" class="menu-left show-menu">
                                <div class="list-news-slider slider" >
                                   <?php $post = query_posts(array( 
                                        'showposts' => -1,
                                        'order' => 'ASC',
                                        'cat' => 4
                                        )
                                    ); 
                                    $index=1;
                                    while(have_posts()):the_post(); ?>
                                            <?php if($index==1 || ($index - 1)%4==0): echo '<div class="list-news-item">
                                            <div class="row">';endif; ?>
                                        <div class="col-md-6 pb-md-5">
                                            <div class="img-news">
                                                <?php the_post_thumbnail( 'full', ['class'=>'img-fluid'] ) ?>
                                            </div>
                                            <div class="heading">
                                                <div class="date">
                                                    <?php echo get_the_date( 'F d, Y' ) ?>
                                                </div>
                                                <div class="title">
                                                    <?php the_title(); ?>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="see-more">
                                                <a href="<?php echo get_the_permalink(); ?>" class="utm-b">Xem thêm</a>
                                            </div>
                                        </div>
                                            <?php if($index %4 ==0): echo'
                                                </div>
                                            </div>'; endif; ?>
                                        <?php 
                                            $index++;
                                            endwhile;
                                            wp_reset_query(); ?>
                                </div>
                                <div class="text-center">
                                    <div class="news-prev">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/circle-prev.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="paginate">
                                    </div>
                                    <div class="news-next">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/circle-next.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="menu-2" class="menu-left">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-section">
                                            <div class="text-project" data-aos="fade-left" data-aos-duration="500">
                                                <span><?php the_field('sub_title') ?></span>
                                            </div>
                                            <div class="text-related" data-aos="fade-right" data-aos-duration="500">
                                                <span><?php the_field('title_section') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php     $post = query_posts(array( 
                                                'post_type' => 'business',
                                                'showposts' => -1,
                                                'order' => 'ASC',
                                                // 'tax_query' => array( 
                                                //     array(
                                                //         'taxonomy' => 'category', 
                                                //         'field'    => 'slug',
                                                //         'terms'    => 'interior'
                                                //     ),
                                                // ) 
                                        ));
                                        $a1=0;
                                    ?>
                                    <?php while(have_posts()):the_post(); ?>
                                    <?php var_dump( get_the_category( get_the_ID())); ?>
                                    <div class="col-md-12 business-hide <?php if($a==0): echo 'show-for-business';endif; ?>" id="business-<?php echo get_the_ID() ?>">
                                        <?php if(have_rows('total_file')): ?>
                                            <?php while(have_rows('total_file')):the_row(); ?>
                                            <div class="title-download">
                                                <?php the_sub_field('title_file') ?>
                                                <a href="<?php the_sub_field('file') ?>">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.png" alt=""class="img-fluid download">
                                                </a>
                                            </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php $a1++;endwhile;wp_reset_query(); ?>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    
</script>
<?php get_footer() ?>