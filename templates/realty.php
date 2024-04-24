<?php /* Template Name: Realty */ ?>
<?php get_header() ?>
        <div class="realty">
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
                            <div class="menu" data-aos="fade-up">
                                <?php the_field('title_menu_left') ?>
                                <div class="arrows-down"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled hide">
                                    <?php $menuRealty =get_terms( array('taxonomy' => 'realty-cat','hide_empty' => false ));
                                          $i=0;
                                    ?>
                                    <?php foreach ($menuRealty as $menu): ?>
                                       <li class="<?php if($i==0): echo "active" ; endif?> " data-id="<?php echo $menu->term_id ?>"><a ><?php echo $menu->name ?></a></li>
                                   <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="title-section">
                                <a><span>DANH SÁCH</span> BẤT ĐỘNG SẢN</a>
                            </div>
                            <div class="row warp-realty">
                                <?php $post = query_posts(array( 
                                    'post_type' => 'realty',
                                    'showposts' => -1,
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        array (
                                        'taxonomy' => 'realty-cat',
                                        'field' => 'term_id',
                                        'terms' => 2
                                            )       
                                        )
                                    )
                                );?>
                                <?php while(have_posts()):the_post(); ?>
                                <div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <?php the_post_thumbnail( 'full', ['class' => 'img-fluid'] ) ?>
                                </div>
                                <div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <div class="project-name">
                                       <?php the_title(); ?>
                                    </div>
                                    <div class="project-address utm-rg">
                                        <?php the_field('name') ?>
                                    </div>
                                    <ul class="info-project list-unstyled">
                                        <?php the_field('description') ?>
                                    </ul>
                                    <div class="see-more">
                                        <a href="<?php echo get_permalink() ?>" class="utm-b">Xem thêm</a>
                                    </div>
                                </div>
                                <?php endwhile;wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>