<?php
    $select_image = get_field( 'select_image' );
    $image_one = get_field( 'image_one' );
    $image_two = get_field( 'image_two' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="description-single">
    <div class="container-fluid section">
        <div class="content-top">
            <div class="container-center">
                <div class="title-letter">
                    <?php echo esc_html( $title ); ?>
                </div>
                <div class="description-editor">
                    <?php echo apply_filters( 'the_content', $description ); ?>
                </div>
            </div>
        </div>
        <div class="content-image">
            <div class="row">
                <?php if ( $select_image == 'two' ) : ?>
                <div class="col-6">
                    <div class="image">
                        <img data-src="<?php echo esc_attr( $image_one['url']); ?>" src="<?php echo esc_attr( $image_one['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_one['title']); ?>" class="img-transition absolute lazy">
                    </div>
                </div>
                <div class="col-6">
                    <div class="image">
                        <img data-src="<?php echo esc_attr( $image_two['url']); ?>" src="<?php echo esc_attr( $image_two['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_two['title']); ?>" class="img-transition absolute lazy">
                    </div>
                </div>
                <?php else : ?>
                <div class="col-12">
                    <div class="image">
                        <img data-src="<?php echo esc_attr( $image_one['url']); ?>" data-src="<?php echo esc_attr( $image_one['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_one['title']); ?>" class="img-transition absolute lazy">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>