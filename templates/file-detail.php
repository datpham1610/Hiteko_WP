<?php /* Template Name: Single Capacity */ ?>
<?php get_header(); ?>
<?php $id_user = $_GET['userid'];?>
    <div class="file file-detail">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cover-file.png" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span>HỒ SƠ NĂNG LỰC</span>
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
                            <div class="title-section" data-aos="fade-left" data-aos-duration="500">
                                <a><span>ĐÁNH GIÁ</span> CHI TIẾT</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work.png" class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="500">
                                <div class="info-employee" data-aos="fade-up" data-aos-duration="500">
                                    <div class="name">
                                        <?php echo get_user_by('id',$id_user)->display_name; ?>
                                    </div>
                                    <div class="job">
                                        <?php the_field('department','user_'.$id_user) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="rate">
                                <?php $totalStar = round((get_field('attitude','user_'.$id_user) + get_field('skill','user_'.$id_user) + get_field('knowledge ','user_'.$id_user) )/3) ?>
                                <ul class="list-inline text-center" data-aos="fade-up" data-aos-duration="500">
                                    <li class="list-inline-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid rate-star" alt="">
                                    </li>
                                    <li class="list-inline-item">
                                        <?php if($totalStar == 2 || $totalStar == 3): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid rate-star" alt="">
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid rate-star" alt="">
                                        <?php endif; ?>
                                    </li>
                                    <li class="list-inline-item">
                                        <?php if($totalStar == 3): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid rate-star" alt="">
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid rate-star" alt="">
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                <div class="rate-text" data-aos="fade-up" data-aos-duration="500">
                                    <?php if($totalStar <= 1): ?>
                                        Bad
                                    <?php elseif($totalStar > 1 || $totalStar<=2 ): ?>
                                        Good
                                    <?php else: ?>
                                        Excellent
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row my-md-4">
                                <div class="col-md-5 offset-md-1" data-aos="fade-up" data-aos-duration="500">
                                    <div class="box-blue-text">
                                        Attitude - Thái độ
                                    </div>
                                </div>
                                <div class="col-md-5 d-md-flex flex-md-column justify-content-center" data-aos="fade-up" data-aos-duration="500">
                                    <ul class="list-inline text-center mb-0 list-star">
                                        <?php $attitude = get_field('attitude','user_'.$id_user) ?>
                                        <li class="list-inline-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($attitude == 2 || $attitude == 3): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($attitude == 3): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row my-md-4" data-aos="fade-up" data-aos-duration="700">
                                <div class="col-md-5 offset-md-1">
                                    <div class="box-blue-text">
                                        Skill - Kỹ năng
                                    </div>
                                </div>
                                <div class="col-md-5 d-md-flex flex-md-column justify-content-center" data-aos="fade-up" data-aos-duration="700">
                                    <ul class="list-inline text-center mb-0 list-star">
                                        <?php $skill = get_field('skill','user_'.$id_user); ?>
                                        <li class="list-inline-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($skill==2 || $skill==3): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($skill==3): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row my-md-4">
                                <div class="col-md-5 offset-md-1" data-aos="fade-up" data-aos-duration="700">
                                    <div class="box-blue-text">
                                        Knowledge - Kiến thức
                                    </div>
                                </div>
                                <div class="col-md-5 d-md-flex flex-md-column justify-content-center" data-aos="fade-up" data-aos-duration="700">
                                    <ul class="list-inline text-center mb-0 list-star">
                                        <?php $knowledge = get_field('knowledge','user_'.$id_user) ?>
                                        <li class="list-inline-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($knowledge == 2 || $knowledge ==3 ): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                        <li class="list-inline-item">
                                            <?php if($knowledge == 3): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star.png" class="img-fluid star-left" alt="">
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/one-star-null.png" class="img-fluid star-left" alt="">
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="cmt" data-aos="fade-up" data-aos-duration="500">
                                NHẬN XÉT:
                            </div>
                            <div class="comment">
                                <?php     
                                        $post = query_posts(array( 
                                            'post_type' => 'usercmt',
                                            'showposts' => -1,
                                            'order' => 'ASC',
                                            'meta_query' => [
                                                [
                                                    'key' => 'to',
                                                    'value' => $id_user
                                                ]
                                            ]
                                        ));
                                ?>
                                <?php while(have_posts()):the_post(); ?>
                                <div class="row mb-md-4">
                                    <div class="col-lg-2 col-md-2 col-2" data-aos="fade-up" data-aos-duration="500">
                                        <div class="image-yl">
                                            <img src="<?php the_field('avatar','user_'.get_field('from')) ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="500">
                                        <div class="comment-text">
                                            <?php the_field("comment"); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2 col-2 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="500">
                                        <?php if(current_user_can( 'administrator')): ?>
                                        <div class="hide-icon" id="hide-comment" data-hide-id="<?php echo get_the_ID(); ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hide-cmt.png" class="img-fluid" alt="">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="row">
                                <?php $current = wp_get_current_user(); ?>
                                <div class="col-lg-10 col-md-9" data-aos="fade-up" data-aos-duration="900">
                                    <input type="hidden" name="" id="comment-user" value="<?php echo $id_user; ?>">
                                    <input type="hidden" name="" id="current-user" value="<?php echo $current->ID  ?>">
                                    <textarea class="text-area-cmt form-control" id="text-comment" placeholder="Viết nhận xét"></textarea>
                                </div>
                                <div class="col-lg-2 col-md-3 d-md-flex flex-md-column justify-content-center" data-aos="fade-up" data-aos-duration="900">
                                    <button type="submit" class="btn-send" id="submit-comment">Gửi</button>
                                </div>
                            </div>
                            <div class="back-page" data-aos="fade-right" data-aos-duration="500">
                                <a href="https://hitekodemo.cf/ho-so-nang-luc/" class="utm-b">Quay Lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php get_footer(); ?>
