<?php /*Template Name: Capacity  */  ?>
<?php get_header(); ?>
    <div class="file">
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
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section" data-aos="fade-up" data-aos-duration="500">
                            <a><?php the_field('title_section') ?></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="warp-content">
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-left" data-aos-duration="500">
                                <div class="box-blue-radius">
                                    Attitude - Thái độ
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-left" data-aos-duration="700">
                                <div class="box-blue-radius">
                                    Skill - Kỹ năng
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-left" data-aos-duration="900">
                                <div class="box-blue-radius">
                                    Knowledge - Kiến thức
                                </div>
                            </div>
                            <div class="col-md-4 col-4" data-aos="fade-left" data-aos-duration="500">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid stars" alt="">
                            </div>
                            <div class="col-md-4 col-4 d-flex flex-row justify-content-center" data-aos="fade-left" data-aos-duration="700">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/two-stars.png" class="img-fluid stars" alt="">
                            </div>
                            <div class="col-md-4 col-4 d-flex flex-row justify-content-end" data-aos="fade-left" data-aos-duration="900">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/three-stars.png" class="img-fluid stars" alt="">
                            </div>
                            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="500">
                                <div class="stars-bar"></div>
                            </div>
                            <div class="col-md-4 col-4" data-aos="fade-left" data-aos-duration="500">
                                <div class="text">
                                    BAD
                                </div>
                            </div>
                            <div class="col-md-4 col-4 d-flex flex-row justify-content-center" data-aos="fade-left" data-aos-duration="00">
                                <div class="text">
                                    GOOD
                                </div>
                            </div>
                            <div class="col-md-4 col-4 d-flex flex-row justify-content-end" data-aos="fade-left" data-aos-duration="900">
                                <div class="text">
                                    EXECLLENT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-center" data-aos="fade-up" data-aos-duration="500">
                            <a><span>DANH SÁCH</span> NHÂN VIÊN</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="500">
                            <ul class="list-inline-item tab-title">
                                <li class="list-inline-item" data-id="1">Nhân Sự Văn Phòng</li>
                                <li class="list-inline-item active" data-id="2">Nhân Sự Công Trường</li>
                            </ul>
                        </div>
                        <?php $user_query = get_users(); $index=1;?>
                        <div class="col-md-12 slide" id="slide-1">
                            <!--Start Slider-->
                            <?php 
                                $term_user_list = [];
                                foreach ($user_query as $key => $value) {
                                    //var_dump($value);
                                    if( ($value->roles)[0] != "administrator") {
                                        $value->data->jobtype = get_field( 'department','user_'.$value->data->ID);
                                        $value->data->attitude = get_field( 'attitude','user_'.$value->data->ID);
                                        $value->data->skill = get_field( 'skill','user_'.$value->data->ID);
                                        $value->data->knowledge = get_field( 'knowledge','user_'.$value->data->ID);
                                        $term_user_list[] = $value->data;
                                    }
                                }
                                $nvvp = [];
                                foreach($term_user_list as $term_user){
                                    if($term_user->jobtype=="Nhân Viên Văn Phòng"){
                                        $nvvp[] = $term_user;
                                    }
                                }
                                $count1 = count($nvvp);
                            ?>
                            <div class="inside-slider slider" >
                                <?php foreach($nvvp as $user): ?>
                                <?php if($index==1 || $index - 1==8): echo
                                    '<div class="inside-item">
                                        <div class="row">';
                                endif; ?>
                                    <div class="col-md-3 ">
                                        <a href="<?php echo site_url().'/chi-tiet-danh-gia?userid='.$user->ID?>"><div class="employee-image">
                                            <img src="<?php the_field('avatar','user_'.$user->ID) ?>" alt="" class="img-fluid">
                                            <div class="info-employee">
                                                <div class="name">
                                                    <?php echo $user->display_name ?>
                                                </div>
                                                <div class="job">
                                                    <?php the_field('department','user_'.$user->ID) ?>
                                                </div>
                                            </div>
                                        </div></a>
                                        <div class="rate">
                                            <ul class="list-inline text-center">
                                                <?php $totalstar = round(($user->attitude + $user->skill + $user->knowledge)/3);?>
                                                <li class="list-inline-item">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                </li>
                                                <li class="list-inline-item">
                                                    <?php if($totalstar==2 || $totalstar==3): ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                    <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid" alt="">
                                                    <?php endif; ?>
                                                </li>
                                                <li class="list-inline-item">
                                                    <?php if($totalstar==3): ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                    <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid" alt="">
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                            <div class="text">
                                                <?php if($totalstar <= 1): ?>
                                                    Bad
                                                <?php elseif($totalstar > 1 && $totalstar <= 2): ?>
                                                    Good
                                                <?php else: ?>
                                                    Excellent
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php if($index==8 || $index == $count1 ): echo
                                    '   </div>
                                    </div>';
                                endif; ?>
                                <?php $index++;endforeach;?>
                            </div>
                            <!--End Slider-->
                            <div class="text-center">
                                <div class="inside-prev">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-prev.png" class="img-fluid" alt="">
                                </div>
                                <div class="paginate text-center">
                                </div>
                                <div class="inside-next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-next.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 slide active" id="slide-2">
                            <?php
                                $nvct = [];
                                foreach($term_user_list as $term_user){
                                    if($term_user->jobtype=="Nhân Viên Công Trường"){
                                        $nvct[] = $term_user;
                                    }
                                }
                                $count2=count($nvct);
                                $i=1;
                            ?>
                            <div class="outside-slider slider" data-aos="fade-up" data-aos-duration="500">
                                <?php foreach ($nvct as $user2): ?>
                                    <?php if($i==1 || $i-1==8 ): ?>
                                    <div class="outside-item">
                                    <div class="row">
                                    <?php endif; ?>
                                        <div class="col-md-3 ">
                                            <a href="<?php echo site_url().'/chi-tiet-danh-gia?userid='.$user2->ID?>"><div class="employee-image">
                                                <img src="<?php the_field('avatar','user_'.$user2->ID) ?>" alt="" class="img-fluid">
                                                <div class="info-employee">
                                                    <div class="name">
                                                        <?php echo $user2->display_name ?>
                                                    </div>
                                                    <div class="job">
                                                        <?php echo the_field('department','user_'.$user2->ID) ?>
                                                    </div>
                                                </div>
                                            </div></a>
                                            <div class="rate">
                                                <?php $avrgStar = round(($user2->attitude + $user2->skill + $user2->knowledge)/3)?>
                                                <ul class="list-inline text-center">
                                                    <li class="list-inline-item">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <?php if($avrgStar == 2 ||  $avrgStar == 3): ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                        <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid" alt=""> 
                                                        <?php endif; ?>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <?php if($avrgStar == 3): ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid" alt="">
                                                        <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid" alt="">
                                                        <?php endif; ?> 
                                                    </li>
                                                </ul>
                                                <div class="text">
                                                    <?php if($avrgStar <= 1): ?>
                                                        Bad
                                                    <?php elseif($avrgStar > 1 && $avrgStar <=2): ?>
                                                        Good
                                                    <?php else: ?>
                                                        Excellent
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php if($i==8 || $i==$count2): ?>
                                    </div>
                                    </div>
                                    <?php endif; ?>
                                <?php $i++;endforeach;?>
                            </div>
                            <div class="text-center">
                                <div class="outside-prev">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-prev.png" class="img-fluid" alt="">
                                </div>
                                <div class="paginate text-center">
                                </div>
                                <div class="outside-next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-next.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php get_footer( ); ?>