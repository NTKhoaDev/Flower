<?php
    $image = get_field( 'image' );
    $select_location = get_field( 'select_location' );
    $background_grey = get_field( 'background_grey' );
    $color_gradient_first = get_field( 'color_gradient_first' );
    $color_gradient_secondary = get_field( 'color_gradient_secondary' );
    $color_gradient_last = get_field( 'color_gradient_last' );
    $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
    $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
    $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
    $title = get_field( 'title' );
    $title_content = get_field( 'title_content' );
    $description = get_field( 'description' );
?>

<div class="about-us">
    <?php if ( $background_grey == true) : ?>
    <div class="block-grey"></div>
    <?php endif; ?>
    <div class="container-fluid section">
        <div class="container-center <?php if ( $select_location == 'left' ) : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="row">
                <div class="col-6 col-title-turn">
                    <div class="col-inner">
                        <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                            <?php echo esc_html( $title ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-contents">
                    <div class="col-inner">
                        <div class="title-letter">
                            <?php echo esc_html( $title_content ); ?>
                        </div>
                        <div class="description-editor">
                            <?php echo apply_filters( 'the_content', $description ); ?>
                        </div>
                        <?php if ( $image ) : ?>
                        <div class="image">
                            <img data-src="<?php echo esc_url( $image['url'] ); ?>" src="<?php echo esc_url( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="lazy absolute">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>