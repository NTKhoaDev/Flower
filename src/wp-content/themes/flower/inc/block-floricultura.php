<?php
    $image_big = get_field( 'image_big' );
    $image_small = get_field( 'image_small' );
    $btn_link = get_field( 'btn_link' );
    $select_location = get_field( 'select_location' );
    $description_floricultura = get_field( 'description_floricultura' );
    $background_grey = get_field( 'background_grey' );
    $characters = get_field( 'characters' );
    $sub_title = get_field( 'sub_title' );
    $title_bold = get_field( 'title_bold' );
    $title_light = get_field( 'title_light' );

?>

<div class="floricultura">
    <?php if ( $background_grey == true) : ?>
    <div class="background-grey"></div>
    <?php endif; ?>
    <div class="container-fluid section">
        <div class="container-<?php if ( $select_location == 'left' ) : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="row row-deskop">
                <div class="col-6 col-image-big">
                    <div class="col-inner">
                        <div class="characters">
                            <?php echo esc_html( $characters ); ?>
                        </div>
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $image_big['url'] ); ?>" src="<?php echo esc_attr( $image_big['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_big['title'] ); ?>" class="img-transition lazy absolute">
                        </div>
                        <div class="des-wrap">
                            <div class="description">
                                <?php echo esc_html( $description_floricultura ); ?>
                            </div>
                            <?php if ( is_array ( $btn_link ) ) : ?>
                            <div class="btn-submit">
                                <a href="<?php echo esc_url( flower_get_link( $btn_link ) ); ?>"><?php echo esc_html( flower_get_link_title( $btn_link ) ); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-image-small">
                    <div class="col-inner">
                        <div class="image-wrap">
                            <div class="image">
                                <img data-src="<?php echo esc_attr( $image_small['url'] ); ?>" src="<?php echo esc_attr( $image_small['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_small['title'] ); ?>" class="img-transition lazy absolute">
                            </div>
                        </div>
                        <div class="title-wrap">
                            <div class="sub-title">
                                <?php echo esc_html( $sub_title ); ?>
                            </div>
                            <div class="title-block title-block-bold">
                                <?php echo esc_html( $title_bold ); ?>
                            </div>
                            <div class="title-block">
                                <?php echo esc_html( $title_light ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-center">
            <div class="row row-mobile">
                <div class="col-7">
                    <div class="characters">
                        <?php echo esc_html( $characters ); ?>
                    </div>
                    <div class="image">
                        <img data-src="<?php echo esc_attr( $image_big['url'] ); ?>" src="<?php echo esc_attr( $image_big['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_big['title'] ); ?>" class="img-transition lazy absolute">
                    </div>
                </div>
                <div class="col-5">
                    <div class="image">
                        <img data-src="<?php echo esc_attr( $image_small['url'] ); ?>" src="<?php echo esc_attr( $image_small['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_small['title'] ); ?>" class="img-transition lazy absolute">
                    </div>
                </div>
            </div>
            <div class="content-mobile">
                <div class="title-wrap">
                    <div class="sub-title">
                        <?php echo esc_html( $sub_title ); ?>
                    </div>
                    <div class="title-block title-block-bold">
                        <?php echo esc_html( $title_bold ); ?>
                    </div>
                    <div class="title-block">
                        <?php echo esc_html( $title_light ); ?>
                    </div>
                </div>
                <div class="des-wrap">
                    <div class="description">
                        <?php echo esc_html( $description_floricultura ); ?>
                    </div>
                    <?php if ( is_array ( $btn_link ) ) : ?>
                    <div class="btn-submit">
                        <a href="<?php echo esc_url( flower_get_link( $btn_link ) ); ?>"><?php echo esc_html( flower_get_link_title( $btn_link ) ); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>