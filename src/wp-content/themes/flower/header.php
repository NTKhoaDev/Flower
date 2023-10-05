<!DOCTYPE html <?php language_attributes(); ?>>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="format-detection" content="telephone=no" />
        <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-16x16.png">
        <link rel="manifest" 
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/site.webmanifest">  
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/BebasNeue-Regular.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/BeVietnamPro-Regular.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/BeVietnamPro-Medium.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/BeVietnamPro-SemiBold.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/BeVietnamPro-Bold.woff2" as="font" type="truetype" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header>      
            <?php
                $logo = get_field( 'logo', 'options' );
            ?>      
                <div class="secondary-menu">
                    <div class="container-fluid">
                        <div class="container-inner">
                            <div class="secondary-menu-wrap">
                                <div class="menu-right">
                                    <nav class="menu">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'sub-menu',
                                                'menu_class' => 'menu-list',
                                            )
                                        );
                                    ?>
                                    </nav>
                                    <?php if ( !is_user_logged_in() ) : ?>
                                    <div class="login">
                                        <a href="<?php esc_url( home_url() ); ?>/my-account"><?php echo __('Login', 'flower'); ?></a>
                                        <span>/</span>
                                        <a href="<?php esc_url( home_url() ); ?>/my-account"><?php echo __('Register', 'flower'); ?></a>
                                    </div>
                                    <?php else : ?>
                                        <div class="login">
                                            <a href="<?php esc_url( home_url() ); ?>/my-account" class="customer-user"><?php echo esc_html( wp_get_current_user()->display_name ); ?></a>
                                            <span>/</span>
                                            <a href="<?php echo wc_logout_url(); ?>"><?php echo __('Log Out', 'flower'); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <form class="form-deskop form-search" action="<?php echo site_url(); ?>" method="get" id="search-deskop">
                                        <div class="form-control">
                                            <input class="input-search" type="text" name="s" placeholder="Search...">
                                        </div>
                                    </form>
                                    <div class="menu-icon">
                                        <div class="icon search">
                                            <span class="background"></span>
                                        </div>
                                        <div class="icon close">
                                            <span class="background"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="container-fluid">
                        <div class="container-inner">
                            <div class="logo">
                                <a href="<?php echo esc_attr( site_url() ); ?>">
                                    <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                                        alt="<?php echo esc_attr( $logo['title'] ); ?>">
                                </a>
                            </div>
                            <div class="menu-right">
                                <nav class="menu">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                            'menu_class' => 'menu-list',
                                        )
                                    );
                                ?>
                                </nav>
                                <div class="menu-icon">
                                    <div class="icon cart">
                                        <div class="cart-order"><?php echo WC()->cart->get_cart_contents_count() ?></div>
                                        <a href="<?php echo esc_url( home_url() ); ?>/cart" class="background"></a>
                                    </div>
                                    <div class="icon toggle-menu">
                                        <span class="background"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow"></div>
                <div class="menu-mobile">
                    <div class="container-fluid">
                        <div class="menu-top">
                            <div class="logo">
                                <a href="<?php echo esc_attr( site_url() ); ?>">
                                    <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                                    alt="<?php echo esc_attr( $logo['title'] ); ?>">
                                </a>
                            </div>
                            <div class="close-mobile">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/close-white.svg" alt="close">
                            </div>
                        </div>
                        <nav class="menu-primary">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'main-menu',
                                        'menu_class' => 'menu-primary-list',
                                    )
                                );
                            ?>
                        </nav>
                        <nav class="menu-secondary">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'sub-menu',
                                        'menu_class' => 'menu-secondary-list',
                                    )
                                );
                            ?>
                        </nav>
                        <?php if ( !is_user_logged_in() ) : ?>
                        <div class="login">
                            <a href="<?php esc_url( home_url() ); ?>/my-account"><?php echo __('Login', 'flower'); ?></a>
                            <span>/</span>
                            <a href="<?php esc_url( home_url() ); ?>/my-account"><?php echo __('Register', 'flower'); ?></a>
                        </div>
                        <?php else : ?>
                            <div class="login">
                                <a href="<?php esc_url( home_url() ); ?>/my-account" class="customer-user"><?php echo esc_html( wp_get_current_user()->display_name ); ?></a>
                                <span>/</span>
                                <a href="<?php echo wc_logout_url(); ?>"><?php echo __('Log Out', 'flower'); ?></a>
                            </div>
                        <?php endif; ?>
                        <form class="form-mobile form-search-mobile" action="<?php echo site_url(); ?>" method="get" id="search-mobile">
                            <div class="form-control">
                                <input class="input-search" type="text" name="s" placeholder="Search...">
                                <img class="icon-search" src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/search-grey.svg" alt="search">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
        </header>   

