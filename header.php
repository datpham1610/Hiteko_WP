<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hiteko</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="main home">
        <div class="goTop">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/goTop.png" alt="" class="img-fluid">
        </div>
        <?php if(is_front_page()):?>
        <div class="header">
            <div class="container">
                <div class="top">
                    <ul class="list-inline left" data-aos="fade-right">
                        <li class="list-inline-item lang">
                            <a href="">
                                VN
                            </a>
                        </li>
                        <li class="list-inline-item fb">
                            <a href="<?php the_field('link_fb','options') ?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="mailto:<?php the_field('mail_to','options') ?>">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-inline right d-flex flex-md-row" data-aos="fade-left">
                        <li class="list-inline-item">
                            <a href="tel:<?php the_field('phone','options') ?>" class="utm-b phone">
                                <div class="utm-rg">HOTLINE</div> <?php the_field('phone','options') ?>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="hammer">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hammer.png" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" class="img-fluid">
                            </a>
                        </li>
                        <?php if(!is_user_logged_in()): ?>
                        <li class="list-inline-item">
                            <a id='login-2'>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/user.png" class="img-fluid">
                            </a>
                        </li>
                        <?php else: ?>
                        <li class="list-inline-item">
                            <a href="<?php echo site_url(); ?>/wp-login.php?action=logout&redirect_to=<?php echo site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon_logOut.png" class="img-fluid">
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="logo" data-aos="fade-down">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php the_field('logo','options') ?>" class="img-fluid"></a>
                </div>
                <div class="menu" data-aos="fade-up">
                    <nav class="navbar navbar-expand-sm navbar-light">
                        <?php
                            wp_nav_menu( array(
                                'menu_id'           => 'menu-homepage', // Do not fall back to first non-empty menu.
                                'theme_location' => 'menu-3',
                                'menu_class'        => 'navbar-nav',
                                'container'     => '',
                            ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if(!is_front_page()):?>
            <script type="text/javascript">
                var show_menu2=true;                
            </script>
        <?php else: ?>
            <script type="text/javascript">
                var show_menu2=false;
            </script>
        <?php endif; ?>
        <div class="header-2 <?php if(!is_front_page()): echo'show'; endif; ?>">
            <div class="burger-menu">
                <div class="icon-burger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="close-menu">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div>
            <div class="menu-mobile">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php the_field('logo','options') ?>" alt="" class="img-fluid logo-mobile">
                </a>
                <?php
                    wp_nav_menu( array(
                        'menu_id'           => 'menu-mobile', // Do not fall back to first non-empty menu.
                        'theme_location' => 'menu-2',
                        'menu_class'        => 'list-unstyled my-md-5',
                        'container'     => '',
                    ) );
                ?>
                <ul class="list-inline menu-menu">
                    <li class="list-inline-item">
                        <a href="" class="hammer">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/hammer.png" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" class="search">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" alt="" class="img-fluid">
                        </a>
                    </li>
                    <?php if(!is_user_logged_in()): ?>
                    <li class="list-inline-item" id="login-3">
                        <a class="user">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/user.png" alt="" class="img-fluid">
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="list-inline-item">
                        <a class="logout" href="<?php site_url(); ?>/wp-login.php?action=logout">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon_logOut.png" alt="" class="img-fluid">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <nav class="navbar navbar-expand-sm bg-blue navbar-dark">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand logo" href="<?php echo get_home_url(); ?>">
                        <img src="<?php the_field('logo','options') ?>" alt="" class="img-fluid">
                    </a>
                    <!-- Links -->
                    <?php
                          wp_nav_menu( array(
                              'menu_id'           => 'menu-primary', // Do not fall back to first non-empty menu.
                              'theme_location' => 'menu-1',
                              'menu_class'        => 'navbar-nav menus',
                              'container'     => '',
                          ) );
                          ?>
                    <ul class="navbar-nav list-inline menu-right">
                        <li class="list-inline-item hammer utm-rg">
                            <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/hammer.png" alt="" class="img-fluid"></span>
                            Đấu thầu
                        </li>
                        <li class="list-inline-item search"><img src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" alt="" class="img-fluid"></li>
                        <?php if(!is_user_logged_in()): ?>
                        <li class="list-inline-item user" id="login">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/user.png" alt="" class="img-fluid">
                        </li>
                        <?php else: ?>
                        <li class="list-inline-item">
                            <a class="logout" href="<?php site_url(); ?>/wp-login.php?action=logout">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon_logOut.png" alt="" class="img-fluid">
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="list-inline-item lang">VN</li>
                    </ul>
                </div>
            </nav>
        </div>