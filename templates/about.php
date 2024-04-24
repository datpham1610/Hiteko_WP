<?php /* Template Name: About */ ?>
<?php get_header() ?>
        <div class="about">
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
            <div class="section2" style="background: url(<?php the_field('section1_background') ?>) no-repeat;
                                    background-size: contain;
                                    background-position: right top;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="title-section2" data-aos="fade-right">
                                <?php the_field('section1_title') ?>
                            </div>
                        </div>
                    </div>
                    <div class="box-logo">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 pb-md-3">
                                <div class="holding utm-b" data-aos="fade-up">
                                    <?php echo get_field('content_left')['name'] ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-lg-1 pb-md-3">
                                <div class="values" data-aos="fade-up">
                                    <?php the_field('values_hiteko') ?>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-holding utm-rg" data-aos="zoom-in">
                                    <?php echo get_field('content_left')['text'] ?>
                                </div>
                                <div class="hiteko">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/hiteko.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-lg-1">
                                <?php if(have_rows('content_right')): ?>
                                    <?php while(have_rows('content_right')):the_row(); ?>
                                        <div class="content-values" data-aos="fade-up">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <span><img src="<?php the_sub_field('icon') ?>" alt="" class="img-fluid"></span>
                                                </div>
                                                <div class="col-md-9 pl-md-0">
                                                    <div class="consistant">
                                                      <?php the_sub_field('text') ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="container">
                    <div class="warp-img">
                        <div class="row">
                            <div class="col-md-7 pb-lg-5">
                                <div class="box-blue" data-aos="fade-up">
                                    <div class="title-section">
                                        <?php the_field('section2_title1') ?>
                                    </div>
                                    <div class="content utm-rg">
                                        <?php the_field('section2_content1') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 pb-lg-5"></div>
                            <div class="col-md-5 "></div>
                            <div class="col-md-7 pb-lg-5">
                                <div class="box-white" data-aos="fade-up">
                                    <div class="title-section">
                                        <?php the_field('section2_title2') ?>
                                    </div>
                                    <div class="content utm-rg">
                                        <?php the_field('section2_content2') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-right" data-aos="fade-up">
                            <img src="<?php the_field('section2_image_right') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="img-left" data-aos="fade-up">
                            <img src="<?php the_field('section2_image_left') ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 d-md-flex flex-column justify-content-center pr-md-0" data-aos="fade-right" data-aos-duration="900">
                            <div class="core-value text-lg-right text-center">
                                <?php the_field('section3_column1') ?>
                            </div>
                        </div>
                        <div class="col-lg-1 d-lg-block d-md-none px-lg-0"></div>
                        <div class="col-lg-3 col-md-12 d-lg-flex flex-lg-column justify-content-center" data-aos="fade-right" data-aos-duration="700">
                            <div class="content">
                                <div class="discipline text-center">
                                    <?php echo get_field('section3_column2')['text1'] ?>
                                </div>
                                <div class="clearly text-center">
                                    <?php echo get_field('section3_column2')['text2'] ?>
                                </div>
                                <div class="simplify text-center">
                                    <?php echo get_field('section3_column2')['text3'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 d-lg-block d-md-none"></div>
                        <div class="col-lg-4 d-lg-flex flex-md-column justify-content-center" data-aos="fade-right" data-aos-duration="500">
                            <div class="slogan">
                                <?php echo get_field('section3_column3')['slogan'] ?>
                            </div>
                            <div class="content-slogan ">
                                <?php echo get_field('section3_column3')['content_solgan'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section5">
                <div class="title-page text-center" data-aos="fade-up">
                    <a><?php the_field('section4_title') ?></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="board" data-aos="fade-up">
                                <img src="<?php the_field('section4_content') ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="title-section" data-aos="fade-left">
                                <a><?php the_field('section5_title') ?></a>
                            </div>
                            <div class="content">
                                <div class="row my-md-4">
                                    <div class="col-md-6">
                                        <div class="percent" data-aos="zoom-in"><?php the_field('section5_percent') ?></div>
                                    </div>
                                    <div class="col-md-6 pl-xl-0 d-md-flex flex-md-column justify-content-center">
                                        <div class="text utm-rg" data-aos="zoom-out">
                                            <?php the_field('section5_text') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" data-aos="fade-right">
                                        <img src="<?php the_field('section5_circlel') ?>" alt="" class="img-fluid circle-left">
                                    </div>
                                    <div class="col-6" data-aos="fade-left">
                                        <img src="<?php the_field('section5_circler') ?>" alt="" class="img-fluid circle-right">
                                    </div>
                                </div>
                                <div class="row my-md-4">
                                    <div class="col-md-6">
                                        <?php if(have_rows('section5_left')): ?>
                                            <?php while(have_rows('section5_left')):the_row(); ?>
                                            <div class="sub-content" data-aos="fade-up" data-aos-duration="500">
                                                <div class="sub-percent">
                                                    <?php the_sub_field('percent') ?>
                                                </div>
                                                <div class="sub-text">
                                                    <?php the_sub_field('text') ?>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if(have_rows('section5_right')): ?>
                                            <?php while(have_rows('section5_right')):the_row(); ?>
                                            <div class="sub-content" data-aos="fade-up" data-aos-duration="500">
                                                <div class="sub-percent-2">
                                                    <?php the_sub_field('percent') ?>
                                                </div>
                                                <div class="sub-text-2">
                                                    <?php the_sub_field('text') ?>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 py-lg-0 py-md-4">
                            <div class="title-section-2" data-aos="fade-down">
                                <a><?php the_field('section5_title2') ?></a>
                            </div>
                            <?php if(have_rows('section5_content')): ?>
                                <?php while(have_rows('section5_content')):the_row() ?>
                                <div class="content-blue" data-aos="fade-up" data-aos-duration="500">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php the_sub_field('content') ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section7">
                <div class="title-section text-center" data-aos="fade-up">
                    <a><?php the_field('section6_title') ?></a>
                </div>
                <div class="container">
                    <div class="employees">
                        <div class="row">
                            <div class="col-lg-5 col-md-12" data-aos="fade-left" data-aos-duration="500">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 pb-md-5">
                                        <div class="person-1">
                                            <img src="<?php echo get_field('section6_percent1')['image'] ?>" alt="" class="img-fluid">
                                            <div class="name-job text-center">
                                                <div class="name">
                                                    <?php echo get_field('section6_percent1')['name'] ?>
                                                </div>
                                                <div class="job">
                                                    <?php echo get_field('section6_percent1')['job'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 d-md-none d-lg-block"></div>
                                    <div class="col-lg-6 col-md-6 px-lg-0  d-md-flex flex-column justify-content-lg-end justify-content-md-center pb-md-5">
                                        <div class="info-person-1 ">
                                            <?php echo get_field('section6_percent1')['content'] ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 pb-md-5 col-md-6">
                                        <div class="person-1">
                                            <img src="<?php echo get_field('section6_percent2')['image'] ?>" alt="" class="img-fluid">
                                            <div class="name-job text-center">
                                                <div class="name">
                                                    <?php echo get_field('section6_percent2')['name'] ?>
                                                </div>
                                                <div class="job">
                                                    <?php echo get_field('section6_percent2')['job'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 d-md-none d-lg-block"></div>
                                    <div class="col-lg-6 px-md-0 d-md-flex flex-column justify-content -lg-end pb-md-5 col-md-6 justify-content-md-center">
                                        <div class="info-person-1 ">
                                            <?php echo get_field('section6_percent2')['content'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 pl-ld-5 col-md-12" data-aos="fade-left" data-aos-duration="700">
                                <div class="employ-slider slider">
                                    <?php if(have_rows('section6_slider')): ?>
                                        <?php $i=1; ?>
                                        <?php while(have_rows('section6_slider')):the_row(); ?>
                                        <?php if($i==1 || ($i-1)%6==0): ?>   
                                            <?php echo '<div class="employ-item">
                                                <div class="row">' ;  endif;  ?>
                                                    <div class="col-md-4 col-6">
                                                        <div class="person-2">
                                                            <img src="<?php the_sub_field('image') ?>" alt="" class="img-fluid">
                                                            <div class="name-job-2 text-center">
                                                                <div class="name-2">
                                                                    <?php the_sub_field('name') ?>
                                                                </div>
                                                                <div class="job-2">
                                                                    <?php the_sub_field('job') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php if($i%6==0): ?>    
                                            <?php echo '</div></div>'; endif;  ?>
                                        <?php $i++; endwhile;?>
                                    <?php endif; ?>
                                </div>
                                <div class="pagination text-center">
                                    <div class="employ-prev">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-prev.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="paginate"></div>
                                    <div class="employ-next">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-next.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="title-page" data-aos="fade-up" data-aos-duration="500">
                                <span><?php the_field('section7_title') ?></span>
                            </div>
                            <div class="brands" data-aos="fade-up" data-aos-duration="700">
                                <div class="brands-slider slider">
                                    <?php $image = get_field('section7_slider'); $a = 1;?>
                                    <?php foreach ($image as $img): ?>
                                    <?php if($a==0 || ($a-1)%12==0):
                                        echo '<div class="brands-item">
                                        <div class="row">'; endif; ?>
                                            <div class="col-md-4 col-6">
                                                <img src="<?php echo $img['url'] ?>" alt="" class="img-fluid">
                                            </div>
                                    <?php if($a%12==0):
                                       echo '</div>
                                    </div>'; endif; ?> 
                                    <?php $a++ ;endforeach; ?>
                                </div>
                                <div class="pagination d-md-flex flex-row justify-content-end">
                                    <div class="brands-prev">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-prev.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="paginate"></div>
                                    <div class="brands-next">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-next.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <div class="title-page-2" data-aos="fade-up" data-aos-duration="500">
                                <span><?php the_field('section7_title2') ?></span>
                            </div>
                            <div class="cn d-md-flex flex-md-column justify-content-center" data-aos="fade-up" data-aos-duration="700">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cn-left">
                                            <img src="<?php echo get_field('section7_left')['image'] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="text">
                                            <?php echo get_field('section7_left')['text'] ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cn-left">
                                            <img src="<?php echo get_field('section7_right')['image'] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="text">
                                            <?php echo get_field('section7_right')['text'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>