<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
        <div class="homepage">
            <div class="section1">
                <div class="img-size">
                    <img src="<?php the_field('section1_banner') ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="section2">
                <div class="section2-1" style="background: url(<?php the_field('section2_bg') ?>) no-repeat;-webkit-background-size: 100%;
                    background-size: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-section-2" data-aos="fade-right">
                                    <?php the_field("section2_title") ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="500">
                                <div class="title utm-b">
                                   <?php the_field('section2_sub') ?>
                                </div>
                                <div class="content utm-rg">
                                    <?php the_field('section2_content') ?>
                                </div>
                                <div class="see-more">
                                    <a href="<?php the_field('link_section2') ?>">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1 col-md-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="title-2 utm-b">
                                    <?php the_field('section2_sub2') ?>
                                </div>
                                <div class="content-2 utm-b">
                                    <ul class="list-unstyled">
                                        <?php if(have_rows('section2_content2')): ?>
                                            <?php while(have_rows('section2_content2')):the_row(); ?>
                                                <li><img src="<?php the_sub_field('img') ?>" class="img-fluid">
                                                    <?php the_sub_field('text') ?>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
                <div class="section2-2" id="count-percent" data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <?php if(have_rows('section2_percent')): ?>
                                <?php while(have_rows('section2_percent')):the_row(); ?>
                                    <div class="col-lg col-md-4">
                                <div class="percent text-center" data-value=<?php the_sub_field('percent') ?>>
                                </div>
                                <div class="text-percent text-center utm-rg">
                                    <?php the_sub_field('text') ?>
                                </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section-3 text-center" data-aos="fade-up" data-aos="1000">
                            <a><?php the_field('section3_title') ?></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="project-slider slider" data-aos="fade-up" data-aos="1500">
                         <?php
                            $term_id = get_field('project'); 
                            $post = query_posts(array( 
                            'post_type' => 'projects',
                            'showposts' => -1,
                            ) );
                            while (have_posts()) : the_post();
                        ?>
                            <div class="project-slider-item">
                                
                                    <div class="blur">
                                        <a href="<?php echo get_the_permalink(); ?>"><img src="<?php the_field('slide') ?>" alt="" class="img-fluid"></a>
                                        <div class="content-project">
                                            <div class="project utm-b"><?php the_field('project') ?></div>
                                            <div class="name-project utm-rg">
                                                <?php the_field('description') ?>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <div class="slicknext">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/next.png" alt="" class="img-fluid">
                        </div>
                        <div class="slickprev">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/prev.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section4">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="img-left">
                            <img src="<?php echo get_field('section4_image')['image'] ?>" class="img-fluid">
                            <div class="logo-ab">
                                <img src="<?php echo get_field('section4_image')['logo'] ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-flex flex-md-column justify-content-end" data-aos="fade-left">
                        <div class="title-section-4">
                            <span><?php the_field('section4_title') ?></span>
                        </div>
                        <div class="content-4 utm-rg">
                            <?php the_field('section4_content') ?>
                        </div>
                        <div class="see-more">
                            <a href="<?php the_field('link_section4') ?>" class="utm-b">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section5">
                <div class="title-section-5">
                    <div class="row">
                        <div class="col-md-6 text-center" data-aos="fade-up">
                            <?php the_field('section5_title') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="document-slider slider" data-aos="fade-up">
                         <?php
                            $term_id = get_field('project'); 
                            $post = query_posts(array( 
                            'post_type' => 'business',
                            'showposts' => -1,
                            ) );
                            while (have_posts()) : the_post();
                        ?>
                            <div class="document-slider-item">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 change col-md-12">
                                        <div class="img-document">
                                            <?php the_post_thumbnail( 'full',['class'=>'img-fluid'] ) ?>
                                            <div class="box-blue">
                                                <div class="title utm-b"><?php the_field('text_slide') ?></div>
                                                <div class="content utm-rg">
                                                    <?php if(have_rows("total_file")): ?>
                                                        <?php while(have_rows('total_file')):the_row(); ?>
                                                            <div class="sub-doc"><?php the_sub_field('title_file') ?><a href="<?php the_sub_field('file') ?>"></a></div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="see-more">
                                                    <a href="<?php the_field('link_for_this','options')?>#menu-2">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query() ?>
                        </div>
                        <div class="pagi-slide">
                            <div class="row">
                                <div class="col-md-5 offset-md-7">
                                    <img class="slick-next" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-next.png" class="img-fluid" />
                                    <div class="pagingInfo utm-rg"></div>
                                    <img class="slick-prev" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-prev.png" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section6">
                <div class="container">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="title-section-6" data-aos="fade-right" data-aos-duration="500">
                                    <?php the_field('section6_title') ?>
                                </div>
                                 <?php
                                    $term_id = get_field('project'); 
                                    $post = query_posts(array( 
                                    'showposts' => 1,
                                    ) );
                                    while (have_posts()) : the_post();
                                ?>
                                <div class="content" data-aos="fade-up" data-aos-duration="700">
                                    <div class="size-img">
                                        <?php the_post_thumbnail('full',['class'=>'img-fluid']) ?>
                                    </div>
                                    <div class="date text-center utm-rg">
                                        <?php echo get_the_date('F d, Y') ?>
                                    </div>
                                    <div class="title text-center utm-b">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="content utm-rg text-justify">
                                        <?php echo wp_trim_words( get_the_content(),25 ) ?>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query() ?>
                            </div>
                            <div class="col-md-5">
                                 <?php
                                    $term_id = get_field('project'); 
                                    $post = query_posts(array( 
                                    'showposts' => 1,
                                    'offset' => 1
                                    ) );
                                    while (have_posts()) : the_post();
                                ?>
                                <div class="content" data-aos="fade-up" data-aos-duration="500">
                                    <div class="size-img">
                                        <?php the_post_thumbnail('full',['class'=>'img-fluid']) ?>
                                    </div>
                                    <div class="date text-center utm-rg">
                                        <?php echo get_the_date('F d, Y') ?>
                                    </div>
                                    <div class="title text-center utm-b">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="content utm-rg text-justify">
                                        <?php echo wp_trim_words( get_the_content(),25 ) ?>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query() ?>
                                <div class="see-more ">
                                    <a href="<?php the_field('link_section6') ?>" class="utm-b">Xem thêm</a>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section7" id="section7">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="wrapper-tab">
                                <!-- Nav tabs -->
                                <?php if(!is_user_logged_in()): ?>
                                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-duration="500">
                                    <li class="nav-item custom">
                                        <a class="nav-link active text-center utm-b" data-toggle="tab" href="#home"><?php the_field('tab1_section_7') ?></a>
                                    </li>
                                    <li class="nav-item custom">
                                        <a class="nav-link text-center utm-b <?php if(!is_user_logged_in()): echo 'show-login'; endif; ?>" data-toggle="tab" href="#menu1"><?php the_field('tab2_section_7') ?></a>
                                    </li>            
                                </ul>
                                <?php else: ?>
                                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-duration="500" >
                                    <li class="nav-item custom">
                                        <a class="nav-link active text-center utm-b" data-toggle="tab" href="#home"><?php the_field('tab2_section_7') ?></a>
                                    </li>
                                    <li class="nav-item custom">
                                        <a class="nav-link text-center utm-b" data-toggle="tab" href="#menu1"><?php the_field('tab1_section_7') ?></a>
                                    </li>            
                                </ul>
                                <?php endif; ?>
                                <!-- Tab panes -->
                                 <?php if(is_user_logged_in()): ?>
                                <div class="tab-content" data-aos="fade-up" data-aos-duration="600" >
                                        <?php if(is_user_logged_in()): ?>
                                        <div class="tab-pane active container " id="home">
                                            <div class="row">
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-1 order-md-2">
                                                    <div class="bg-blue">
                                                        <div class="title-section-7">
                                                            <span><?php the_field('section7_title_1') ?></span>
                                                        </div>
                                                        <div class="content">
                                                            <div class="list-action utm-rg">
                                                            <?php if(wp_get_current_user()->roles[0] != 'administrator'): ?>
                                                                <?php $post = query_posts(array(
                                                                    'post_type' => 'daily_to_do_list',
                                                                    'showposts' => 7,
                                                                    'meta_query' => array(
                                                                        array (
                                                                        'key' => 'name',
                                                                        'value' => wp_get_current_user()->ID,       
                                                                        )
                                                                    )
                                                                ));?>
                                                            <?php else: ?>
                                                                <?php $post = query_posts(array(
                                                                    'post_type' => 'daily_to_do_list',
                                                                    'showposts' => 7,
                                                                    'meta_query' => array(
                                                                        array (
                                                                        'key' => 'check',
                                                                        'value' => 100,
                                                                        'compare' => '!='       
                                                                        )
                                                                    )
                                                                ));?>       
                                                            <?php endif; ?>
                                                            <?php if(wp_get_current_user()->roles[0]!='administrator'): ?>
                                                                <?php while(have_posts()):the_post(); ?>
                                                                <div><?php echo get_the_title().' - '. get_field('check').'%'; ?></div>
                                                                <?php endwhile; ?>
                                                            <?php else: ?>
                                                                <?php while(have_posts()):the_post(); 
                                                                    $user_name = get_user_by( 'id', get_field('name'))->display_name;
                                                                ?>
                                                                <div><?php echo $user_name .' - '.get_the_title() .' - '.get_field('check').'%'; ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            </div>
                                                            <?php if(wp_get_current_user()->roles[0]=='administrator'): ?>
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/admin#content-2" title="">Xem chi tiết</a>
                                                                </div>
                                                            <?php elseif($post == []): ?>
                                                                Không có dữ liệu
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/noi-bo-hiteko/#content-2">Tạo to do list</a>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/noi-bo-hiteko/#content-2">Xem chi tiết</a>
                                                            </div>
                                                            <?php endif; wp_reset_query();?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-2 order-md-1">
                                                    <div class="bg-blue-2">
                                                        <div class="row">
                                                            <div class="col-md-9 d-md-flex flex-column justify-content-end">
                                                                <div class="title-section-7">
                                                                    <span><?php the_field('section7_title_2') ?></span><br>
                                                                    <a class="utm-b"><?php the_field('setion7_title_lesson') ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 px-0">
                                                                <a href="https://hitekodemo.cf/noi-bo-hiteko/"><div class="wrapper-infor">
                                                                    <div class="person">
                                                                        <?php $user = wp_get_current_user();?>
                                                                        <img src="<?php the_field('avatar','user_'.$user->ID) ?>" alt="" class="img-fluids">
                                                                    </div>
                                                                    <div class="name-card">
                                                                        <div class="name utm-b"><?php echo $user->display_name ?></div>
                                                                        <div class="job utm-i"><?php the_field('department','user_'.$user->ID) ?></div>
                                                                    </div>
                                                                </div></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="content utm-rg">
                                                                    <?php the_field('section7_lesson_learn') ?>
                                                                </div>
                                                                <?php if(!is_user_logged_in()): ?>
                                                                <div class="login utm-b" id="login">
                                                                    <a href="">Đăng nhập</a>
                                                                </div>
                                                                <?php elseif(wp_get_current_user()->roles[0]=='administrator'):?>
                                                                <div class="login utm-b">
                                                                    <a class="link" href="https://hitekodemo.cf/admin/">Xem chi tiết</a>
                                                                </div>
                                                                <?php else: ?>
                                                                <div class="login utm-b">
                                                                    <a class="link" href="<?php the_field('section7_link') ?>">Xem chi tiết</a>
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="tab-pane container" id="menu1">
                                            <div class="row">
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-1 order-md-2">
                                                    <div class="bg-blue">
                                                        <div class="title-section-7">
                                                            <?php the_field('section7_title') ?>
                                                        </div>
                                                        <div class="info">
                                                            <div class="utm-b name"><?php the_field('section7_name') ?></div>
                                                            <div class="utm-i job"><?php the_field('section7_possision') ?></div>
                                                        </div>
                                                        <div class="content utm-rg">
                                                            <?php the_field('section7_info') ?>
                                                        </div>
                                                        <div class="see-more utm-b">
                                                            <a href="<?php the_field('section7_link_capicity') ?>">Xem thêm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-2 order-md-1">
                                                    <div class="img-tab">
                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tab-1.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <?php else: ?>
                                <div class="tab-content" data-aos="fade-up" data-aos-duration="600" id="section7">
                                        <div class="tab-pane active container" id="home">
                                            <div class="row">
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-1 order-md-2">
                                                    <div class="bg-blue">
                                                        <div class="title-section-7">
                                                            <?php the_field('section7_title') ?>
                                                        </div>
                                                        <div class="info">
                                                            <div class="utm-b name"><?php the_field('section7_name') ?></div>
                                                            <div class="utm-i job"><?php the_field('section7_possision') ?></div>
                                                        </div>
                                                        <div class="content utm-rg">
                                                            <?php the_field('section7_info') ?>
                                                        </div>
                                                        <div class="see-more utm-b">
                                                            <a href="<?php the_field('section7_link_capicity') ?>">Xem thêm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-2 order-md-1">
                                                    <div class="img-tab">
                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tab-1.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if(is_user_logged_in()): ?>
                                        <div class="tab-pane  container " id="menu1">
                                            <div class="row">
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-1 order-md-2">
                                                    <div class="bg-blue">
                                                        <div class="title-section-7">
                                                            <span>TO DO LIST</span>
                                                        </div>
                                                        <div class="content">
                                                            <div class="list-action utm-rg">
                                                            <?php if(wp_get_current_user()->roles[0] != 'administrator'): ?>
                                                                <?php $post = query_posts(array(
                                                                    'post_type' => 'daily_to_do_list',
                                                                    'showposts' => 7,
                                                                    'meta_query' => array(
                                                                        array (
                                                                        'key' => 'name',
                                                                        'value' => wp_get_current_user()->ID,       
                                                                        )
                                                                    )
                                                                ));?>
                                                            <?php else: ?>
                                                                <?php $post = query_posts(array(
                                                                    'post_type' => 'daily_to_do_list',
                                                                    'showposts' => 7,
                                                                    'meta_query' => array(
                                                                        array (
                                                                        'key' => 'check',
                                                                        'value' => 100,
                                                                        'compare' => '!='       
                                                                        )
                                                                    )
                                                                ));?>       
                                                            <?php endif; ?>
                                                            <?php if(wp_get_current_user()->roles[0]!='administrator'): ?>
                                                                <?php while(have_posts()):the_post(); ?>
                                                                <div><?php echo get_the_title().' - '. get_field('check').'%'; ?></div>
                                                                <?php endwhile; ?>
                                                            <?php else: ?>
                                                                <?php while(have_posts()):the_post(); 
                                                                    $user_name = get_user_by( 'id', get_field('name'))->display_name;
                                                                ?>
                                                                <div><?php echo $user_name .' - '.get_the_title() .' - '.get_field('check').'%'; ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            </div>
                                                            <?php if(wp_get_current_user()->roles[0]=='administrator'): ?>
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/admin#content-2" title="">Xem chi tiết</a>
                                                                </div>
                                                            <?php elseif($post == []): ?>
                                                                Không có dữ liệu
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/noi-bo-hiteko/#content-2">Tạo to do list</a>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="see-list utm-b">
                                                                <a class="link" href="https://hitekodemo.cf/noi-bo-hiteko/#content-2">Xem chi tiết</a>
                                                            </div>
                                                            <?php endif; wp_reset_query();?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 px-0 col-md-12 order-lg-2 order-md-1">
                                                    <div class="bg-blue-2">
                                                        <div class="row">
                                                            <div class="col-md-9 d-md-flex flex-column justify-content-end">
                                                                <div class="title-section-7">
                                                                    <span>LESSON LEARN</span><br>
                                                                    <a class="utm-b">Lorem ipsum dolor sit amet</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 px-0">
                                                                <a href="https://hitekodemo.cf/noi-bo-hiteko/"><div class="wrapper-infor">
                                                                    <div class="person">
                                                                        <?php $user = wp_get_current_user();?>
                                                                        <img src="<?php the_field('avatar','user_'.$user->ID) ?>" alt="" class="img-fluids">
                                                                    </div>
                                                                    <div class="name-card">
                                                                        <div class="name utm-b"><?php echo $user->display_name ?></div>
                                                                        <div class="job utm-i"><?php the_field('department','user_'.$user->ID) ?></div>
                                                                    </div>
                                                                </div></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="content utm-rg">
                                                                    <p>
                                                                        “Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation Ut wisi enim
                                                                    </p>
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                                                                        UY laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation Ut wisi enim”
                                                                    </p>
                                                                </div>
                                                                <?php if(!is_user_logged_in()): ?>
                                                                <div class="login utm-b" id="login">
                                                                    <a href="">Đăng nhập</a>
                                                                </div>
                                                                <?php elseif(wp_get_current_user()->roles[0]=='administrator'):?>
                                                                <div class="login utm-b">
                                                                    <a class="link" href="https://hitekodemo.cf/admin/">Xem chi tiết</a>
                                                                </div>
                                                                <?php else: ?>
                                                                <div class="login utm-b">
                                                                    <a class="link" href="<?php the_field('section7_link') ?>">Xem chi tiết</a>
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                </div>  
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>