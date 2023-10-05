<?php
    $image_content = get_field( 'image_content' );
    $image_single_top = get_field( 'image_single_top' );
    $image_single_bottom = get_field( 'image_single_bottom' );
    $select_location = get_field( 'select_location' );
    $color_gradient_first = get_field( 'color_gradient_first' );
    $color_gradient_secondary = get_field( 'color_gradient_secondary' );
    $color_gradient_last = get_field( 'color_gradient_last' );
    $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
    $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
    $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
    $characters = get_field( 'characters' );
    $title_turn = get_field( 'title_turn' );
    $title_content = get_field( 'title_content' );
    $des_content = get_field( 'des_content' );
    $title_big = get_field( 'title_big' );
?>

<div class="paper-wrap">
    <div class="container-fluid section">
        <div class="container-center <?php if ( $select_location == "left" ) : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="characters"><?php echo esc_html( $characters ); ?></div>
            <div class="row row-deskop">
                <div class="col-6 col-content">
                    <div class="col-inner">
                        <div class="background-grey"></div>
                        <div class="title-turn-plus">
                            <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                                <?php echo esc_html( $title_turn ); ?>
                            </div>
                            <span class="modal-plus" data-bs-toggle="modal" data-bs-target="#modalCollection">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.svg" alt="plus">
                            </span>
                        </div>
                        <div class="content">
                            <div class="title-letter">
                                <?php echo esc_html( $title_content ); ?>
                            </div>
                            <div class="description">
                                <?php echo esc_html( $des_content ); ?>
                            </div>
                        </div>
                        <div class="image image-content">
                            <img data-src="<?php echo esc_attr( $image_content['url'] ); ?>" src="<?php echo esc_attr( $image_content['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_content['title'] ); ?>" class="img-transition lazy absolute">
                        </div>
                        <div class="title-big">
                            <?php echo esc_html( $title_big ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-image">
                    <div class="image image-single image-single-top">
                        <img data-src="<?php echo esc_attr( $image_single_top['url'] ); ?>" src="<?php echo esc_attr( $image_single_top['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single_top['title'] ); ?>" class="img-transition lazy absolute">
                    </div>
                    <div class="image image-single image-single-bottom">
                        <img data-src="<?php echo esc_attr( $image_single_bottom['url'] ); ?>" src="<?php echo esc_attr( $image_single_bottom['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single_bottom['title'] ); ?>" class="img-transition lazy absolute">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-center container-mobile <?php if ( $select_location == "left" ) : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="row row-mobile">
                <div class="col-6 col-left">
                    <div class="image image-content">
                        <img data-src="<?php echo esc_attr( $image_content['url'] ); ?>" src="<?php echo esc_attr( $image_content['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_content['title'] ); ?>" class="lazy absolute">
                    </div>
                </div>
                <div class="col-6 col-right">
                    <div class="image image-single image-single-top">
                        <img data-src="<?php echo esc_attr( $image_single_top['url'] ); ?>" src="<?php echo esc_attr( $image_single_top['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single_top['title'] ); ?>" class="lazy absolute">
                    </div>
                    <div class="image image-single image-single-bottom">
                        <img data-src="<?php echo esc_attr( $image_single_bottom['url'] ); ?>" src="<?php echo esc_attr( $image_single_bottom['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single_bottom['title'] ); ?>" class="lazy absolute">
                    </div>
                </div>
            </div>
            <div class="content-mobile">
                <div class="title-turn-plus">
                    <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                        <?php echo esc_html( $title_turn ); ?>
                    </div>
                    <span class="modal-plus" data-bs-toggle="modal" data-bs-target="#modalCollection">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.svg" alt="plus">
                    </span>
                </div>
                <div class="content">
                    <div class="title-letter">
                        <?php echo esc_html( $title_content ); ?>
                    </div>
                    <div class="description">
                        <?php echo esc_html( $des_content ); ?>
                    </div>
                    <div class="title-big">
                        <?php echo esc_html( $title_big ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>