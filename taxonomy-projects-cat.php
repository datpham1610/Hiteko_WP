<?php get_header(); ?>
    <?php $taxonomy_id=get_queried_object()->term_id;?>
        <div class="projects">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php the_field('image_cover','projects-cat' . '_' .$taxonomy_id) ?>" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span><?php the_field('menu_left','projects-cat' . '_' .$taxonomy_id) ?></span>
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
                                <?php the_field('menu_left','projects-cat' . '_' .$taxonomy_id) ?>
                                <div class="arrows-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <?php $term = get_terms( array('taxonomy' => 'projects-cat','hide_empty' => false ));
                                $i=0;// var_dump($term);?>
                                <ul class="list-unstyled hide">
                                    <?php foreach ($term as $t): ?>
                                    <li class="<?php if($i==0): echo 'active'; endif ?> " data-id="<?php echo $t->term_id ?>"><a href="<?php echo get_term_link( $t->slug, 'projects-cat' ); ?>"><?php echo $t->name ?></a></li>
                                    <?php $i++;endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="title-section" data-aos="fade-left">
                                <a><?php the_field('title_text','projects-cat' . '_' .$taxonomy_id) ?></a>
                            </div>
                            <div class="description" data-aos="fade-up">
                                <?php the_field('description','projects-cat' . '_' .$taxonomy_id) ?>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="total-city" data-aos="fade-up">
                                        <div class="arrows-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                        <select name="" class="form-control city">
                                            <option value="">Chọn Thành Phố</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-5">
                                    <div class="total-city" data-aos="fade-up">
                                        <div class="arrows-down"><img src="assets/images/down.png" alt="" class="img-fluid"></div>
                                        <select name="" class="form-control city">
                                            <option value="">Sắp Xếp Dự Án Theo Thời Gian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-md-4">
                                    <div class="quality-projects utm-b" data-aos="fade-left">
                                        12 Dự Án
                                    </div>
                                </div>
                            </div>
                            <div class="row warp-realty">
                                <?php     
                                    $post = query_posts(array( 
                                        'post_type' => 'projects',
                                        'showposts' => -1,
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array (
                                            'taxonomy' => 'projects-cat',
                                            'field' => 'term_id',
                                            'terms' => $taxonomy_id
                                            )       
                                        )
                                    ));
                                ?>
                                <?php while(have_posts()):the_post(); ?>
                                <div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <?php the_post_thumbnail( 'full', ['class'=>'img-fluid'] ); ?>
                                </div>
                                <div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <div class="project-name">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="project-address utm-rg">
                                        <?php the_field('name') ?>
                                    </div>
                                    <ul class="info-project list-unstyled">
                                        <?php the_field('description2') ?>
                                    </ul>
                                    <div class="see-more">
                                        <a href="<?php echo get_the_permalink(); ?>" class="utm-b">Xem thêm</a>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
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
                                <div class="text-project" data-aos="fade-right"><span><?php echo get_field('related_text','projects-cat' . '_' .$taxonomy_id)['text1'] ?></span></div>
                                <div class="text-related" data-aos="fade-left"><span><?php echo get_field('related_text','projects-cat' . '_' .$taxonomy_id)['text2'] ?></span></div>
                            </div>
                            <div class="project-related-slider slider" data-aos="fade-up">
                                <?php     
                                    $post = query_posts(array( 
                                        'post_type' => 'projects',
                                        'showposts' => -1,
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array (
                                            'taxonomy' => 'projects-cat',
                                            'field' => 'term_id',
                                            'terms' => $taxonomy_id
                                            )       
                                        )
                                    ));
                                ?>
                                <?php while(have_posts()):the_post(); ?>
                                <div class="project-related-item">
                                    <div class="blue-blur">
                                        <?php the_post_thumbnail('full',['class'=>'img-fluid']); ?>
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            <?php the_title() ?>
                                        </div>
                                        <!--<div class="detail2">
                                            
                                        </div>-->
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>