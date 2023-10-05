<?php
    $select_location = get_field( 'select_location' );
    $image = get_field( 'image' );
    $image_des = get_field( 'image_description' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="summy-single">
    <div class="container-fluid section">
        <div class="background-white"></div>
        <div class="container-<?php if ( $select_location == 'left' ) : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="content-top">
                <div class="title-letter">
                    <?php echo esc_html( $title ); ?>
                </div>
                <div class="description-editor">
                    <?php echo apply_filters( 'the_content', $description ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-7 col-image">
                    <div class="col-inner">
                        <?php if ( is_array( $image ) ) : ?>
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $image['url'] ); ?>" src="<?php echo esc_attr( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="img-transition absolute lazy">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-5 col-content">
                    <div class="col-inner">
                        <div class="title-letter">
                            <?php echo esc_html( $title ); ?>
                        </div>
                        <div class="description-editor">
                            <?php echo apply_filters( 'the_content', $description ); ?>
                        </div>
                        <div class="image-des">
                            <?php if ( is_array( $image_des ) ) : ?>
                            <div class="image-des-inner">
                                <img data-src="<?php echo esc_attr( $image_des['url'] ); ?>" src="<?php echo esc_attr( $image_des['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_des['title'] ); ?>" class="img-transition absolute lazy">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>