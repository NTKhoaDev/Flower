<?php
    $title_image = $module['title_image'];
    $image_single = $module['image'];
    $caption_image = $module['caption_image'];
?>

<div class="module-images module-details">
    <div class="container-fluid">
        <?php if ( $title_image ): ?>
        <h2 class="title"><?php echo esc_html( $title_image ); ?></h2>
        <?php
            endif;
            if ( is_array( $image_single ) ):
        ?>
        <div class="image-full">
            <img data-src="<?php echo esc_attr( $image_single['url'] ); ?>" src="<?php echo esc_attr( $image_single['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single['title'] ); ?>" class="lazy">
        </div>
        <?php
            endif;
            if( $caption_image ):
        ?>
        <div class="caption">
            <?php echo esc_html( $caption_image ); ?>
        </div>
        <?php endif; ?>
    </div>
</div>