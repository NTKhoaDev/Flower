<?php
    $logo = get_field( 'logo', 'options' );
    $socials = get_field( 'socials', 'options' );
    $info_company = get_field( 'info_company', 'options' );
    $title_menu_product = get_field( 'title_menu_product', 'options' );
    $title_menu_information = get_field( 'title_menu_information', 'options' );
    $copy_right = get_field( 'copy_right', 'options' );
?>

<footer>
    <div class="container-fluid">
        <div class="container-inner">
            <div class="logo">
                <a href="<?php echo esc_attr( site_url() ); ?>">
                    <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                        alt="<?php echo esc_attr( $logo['title'] ); ?>">
                </a>
            </div>
            <div class="row">
                <div class="col-4 col-info">
                    <div class="info-footer">
                        <?php foreach ( $info_company as $info_item ) : ?>
                        <p>
                            <?php echo esc_html( $info_item['info_item'] ); ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                    <ul class="socials socials-deskop">
                        <?php
                            if ( is_array( $socials ) ) :
                            foreach ( $socials as $social ) :
                        ?>
                        <li class="social-item">
                            <a href="<?php echo esc_attr( $social['link_text'] ); ?>">
                                <img src="<?php echo esc_attr( $social['icon']['url'] ); ?>" alt="<?php echo esc_attr( $social['icon']['title'] ); ?>">
                            </a>
                        </li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="title-menu-wrap">
                        <div class="title-menu"><?php echo esc_html( $title_menu_product ); ?></div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/down-white.svg" alt="icon-down">
                    </div>
                    <nav class="menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'products-menu',
                                'menu_class' => 'menu-list',
                            )
                        );
                    ?>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="title-menu-wrap">
                        <div class="title-menu"><?php echo esc_html( $title_menu_information ); ?></div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/down-white.svg" alt="icon-down">
                    </div>
                    <nav class="menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'information-menu',
                                'menu_class' => 'menu-list',
                            )
                        );
                    ?>
                    </nav>
                </div>
                <div class="col-2 col-email">
                    <a href="#">
                        <img src="<?php echo esc_attr( get_template_directory_uri()); ?>/assets/images/email.svg" alt="email">
                        <span><?php echo __("Send email with us", "flower"); ?></span>
                    </a>
                </div>
            </div>
            <ul class="socials socials-mobile">
                <?php
                    if ( is_array( $socials ) ) :
                    foreach ( $socials as $social ) :
                ?>
                <li class="social-item">
                    <a href="<?php echo esc_attr( $social['link'] ); ?>">
                        <img src="<?php echo esc_attr( $social['icon']['url'] ); ?>" alt="<?php echo esc_attr( $social['icon']['title'] ); ?>">
                    </a>
                </li>
                <?php endforeach; endif; ?>
            </ul>
            <div class="copyright"><?php echo esc_html( $copy_right ); ?></div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
