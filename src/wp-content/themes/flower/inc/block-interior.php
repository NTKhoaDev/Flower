<?php
    $image = get_field( 'image' );
    $btn_link = get_field( 'btn_link' );
    $select_location = get_field( 'select_location' );
    $background_grey = get_field( 'background_grey' );
    $description_design = get_field( 'description_design' );
    $sub_title = get_field( 'sub_title' );
    $title_bold = get_field( 'title_bold' );
    $title_light = get_field( 'title_light' );
    $characters = get_field( 'characters' );
?>

<div class="interior">
    <?php if ( $background_grey == true) : ?>
    <div class="background-grey"></div>
    <?php endif; ?>
    <div class="container-fluid section">
        <div class="container-<?php if ( $select_location == 'right' ) : ?>right<?php else : ?>left<?php endif; ?>">
            <div class="title-wrap title-top">
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
            <div class="row">
                <div class="col-6 col-content">
                    <div class="col-inner">
                        <div class="characters">
                            <?php echo esc_html( $characters ); ?>
                        </div>
                        <div class="title-wrap title-bottom">
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
                        <?php if ( $description_design && is_array ( $btn_link ) ) : ?>
                        <div class="des-wrap">
                            <div class="description">
                                <?php echo esc_html( $description_design ); ?>
                            </div>
                            <?php if ( is_array ( $btn_link ) ) : ?>
                            <div class="btn-submit">
                                <a href="<?php echo esc_url( flower_get_link( $btn_link ) ); ?>"><?php echo esc_html( flower_get_link_title( $btn_link ) ); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-image">
                    <div class="characters">
                        <?php echo esc_html( $characters ); ?>
                    </div>
                    <div class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $image['url'] ); ?>" src="<?php echo esc_attr( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="img-transition lazy absolute">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
