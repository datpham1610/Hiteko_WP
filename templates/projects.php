<?php /* Template Name: Projects */ ?>
<?php get_header(); ?>
    <div class="projects">
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
                                <?php the_field('menu_left') ?>
                                <div class="arrows-down"><img src="assets/images/down.png" alt="" class="img-fluid"></div>
                                <?php $term = get_terms( array('taxonomy' => 'projects-cat','hide_empty' => false ));
                                $i=0;?>
                                <ul class="list-unstyled hide">
                                    <?php foreach ($term as $t): ?>
                                    <li class="<?php if($i==0): echo 'active'; endif ?> " data-id="<?php echo $t->term_id ?>"><a href=""><?php echo $t->name ?></a></li>
                                    <?php $i++;endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="title-section" data-aos="fade-left">
                                <a><span>DỰ ÁN</span> CHUNG CƯ CAO TẦNG</a>
                            </div>
                            <div class="description" data-aos="fade-up">
                                <?php the_field('description') ?>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="total-city" data-aos="fade-up">
                                        <div class="arrows-down"><img src="assets/images/down.png" alt="" class="img-fluid"></div>
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
                                <div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <img src="assets/images/project1.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="500">
                                    <div class="project-name">
                                        DỰ ÁN<br> CENTUM WEALTH COMPLEX
                                    </div>
                                    <div class="project-address utm-rg">
                                        Tên dự án: Chung Cư Cao Cấp Centum WealthĐịa điểm: 2A đường Phan Chu Trinh, phường Hiệp Phú, Quận 9, TPHCM.
                                    </div>
                                    <ul class="info-project list-unstyled">
                                        <li>Chủ đầu tư: Công ty TNHH Bách Phú Thịnh</li>
                                        <li>Hạng mục công việc: Xây dựngPhần Thân, Hoàn Thiện-Kết Cấu & Kiến Trúc</li>
                                    </ul>
                                    <div class="see-more">
                                        <a href="single-project.html" class="utm-b">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="700">
                                    <img src="assets/images/project1.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="700">
                                    <div class="project-name">
                                        DỰ ÁN<br> CENTUM WEALTH COMPLEX
                                    </div>
                                    <div class="project-address utm-rg">
                                        Tên dự án: Chung Cư Cao Cấp Centum WealthĐịa điểm: 2A đường Phan Chu Trinh, phường Hiệp Phú, Quận 9, TPHCM.
                                    </div>
                                    <ul class="info-project list-unstyled">
                                        <li>Chủ đầu tư: Công ty TNHH Bách Phú Thịnh</li>
                                        <li>Hạng mục công việc: Xây dựngPhần Thân, Hoàn Thiện-Kết Cấu & Kiến Trúc</li>
                                    </ul>
                                    <div class="see-more">
                                        <a href="single-project.html" class="utm-b">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="900">
                                    <img src="assets/images/project1.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="900">
                                    <div class="project-name">
                                        DỰ ÁN<br> CENTUM WEALTH COMPLEX
                                    </div>
                                    <div class="project-address utm-rg">
                                        Tên dự án: Chung Cư Cao Cấp Centum WealthĐịa điểm: 2A đường Phan Chu Trinh, phường Hiệp Phú, Quận 9, TPHCM.
                                    </div>
                                    <ul class="info-project list-unstyled">
                                        <li>Chủ đầu tư: Công ty TNHH Bách Phú Thịnh</li>
                                        <li>Hạng mục công việc: Xây dựngPhần Thân, Hoàn Thiện-Kết Cấu & Kiến Trúc</li>
                                    </ul>
                                    <div class="see-more">
                                        <a href="single-project.html" class="utm-b">Xem thêm</a>
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
                                <div class="text-project" data-aos="fade-right"><span>DỰ ÁN</span></div>
                                <div class="text-related" data-aos="fade-left"><span>LIÊN QUAN KHÁC</span></div>
                            </div>
                            <div class="project-related-slider slider" data-aos="fade-up">
                                <div class="project-related-item">
                                    <div class="blue-blur">
                                        <img src="assets/images/project2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            Dự Án
                                        </div>
                                        <div class="detail2">
                                            Khu Du Lịch Nghỉ Dưỡng
                                            Tri Việt - Hội An
                                        </div>
                                    </div>
                                </div>
                                <div class="project-related-item">
                                    <div class="blue-blur">
                                        <img src="assets/images/project3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            Dự Án
                                        </div>
                                        <div class="detail2">
                                            Khu Du Lịch Nghỉ Dưỡng
                                            Tri Việt - Hội An
                                        </div>
                                    </div>
                                </div>
                                <div class="project-related-item">
                                    <div class="blue-blur">
                                        <img src="assets/images/project4.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            Dự Án
                                        </div>
                                        <div class="detail2">
                                            Khu Du Lịch Nghỉ Dưỡng
                                            Tri Việt - Hội An
                                        </div>
                                    </div>
                                </div>
                                <div class="project-related-item">
                                    <div class="blue-blur">
                                        <img src="assets/images/project3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="detail-project">
                                        <div class="detail1">
                                            Dự Án
                                        </div>
                                        <div class="detail2">
                                            Khu Du Lịch Nghỉ Dưỡng
                                            Tri Việt - Hội An
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php get_footer(); ?>