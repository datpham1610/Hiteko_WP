<div class="footer">
            <div class="bg-light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <img src="<?php the_field('logo','options') ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="name utm-b">
                                <?php the_field('name','options') ?>
                            </div>
                            <div class="address utm-rg">
                                <?php the_field('address','options') ?>
                            </div>
                            <div class="group utm-rg">
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('phone','options') ?>
                                </div>
                                <div class="mail">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <?php the_field('mail','options') ?>
                                </div>
                                <div class="website">
                                    <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/global.png" alt="" class="img-fluid"></span>
                                    <?php the_field('website','options') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="new-letter utm-b">
                                <?php the_field('title_newletter','options') ?>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Email Address" class="form-contro input-nl">
                            </div>
                            <div class="register utm-b">
                                <a href="">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="copy-right utm-rg">
                                Copyright © 2019 – All Rights Reserved
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="design-by utm-rg">
                                Designed by Comma
                            </div>
                        </div>
                        <div class="col-md-4 utm-rg d-md-flex flex-md-row justify-content-end">
                            <div class="term">
                                <?php the_field('text1','options') ?>
                            </div>
                            <div class="policy">
                                <?php the_field('text2','options') ?>
                            </div>
                            <div class="interest">
                                <?php the_field('text3','options') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(!is_user_logged_in()): ?>
            <div class="modal fade" id="loginModal">
                <div class="modal-dialog modal-lg d-flex flex-column justify-content-center">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header ">
                            <h4 class="modal-title ml-auto mr-auto">ĐĂNG NHẬP</h4>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form name="loginform" method="POST" id="loginform" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control text-right" placeholder="Tên Tài Khoản" name="log" id="" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-right" placeholder="Mật Khẩu"name="pwd" autocomplete="on">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <button type="submit" class="forgot-pw">Quên mật khẩu ?</button>
                                    </div>
                                    <div class="col-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" class="btn-login" name="wp-submit">Đăng Nhập</button>
                                    </div>
                                    <input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
                                    <input type="hidden" name="action" value="my_login_action" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="loading">
        <div class="loading-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
</body>
<?php wp_footer() ?>
</html>