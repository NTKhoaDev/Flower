<?php
    $title_video = $module['title_video'];
    $link_video = $module['link_video'];
    $caption_video = $module['caption_video'];
    $background_video = $module['background_video'];
?>

<div class="module-video module-details">
    <div class="container-fluid">
        <?php if ( $title_video ): ?>
        <h2 class="title"><?php echo esc_html( $title_video ); ?></h2>
        <?php
            endif;
            if ( $link_video ):
        ?>
        <div class="video-wrap background lazy" data-bg="<?php echo esc_attr( $background_video['url'] ); ?>">
            <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                    <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                </a>
            </div>
        </div>
        <?php
            endif;
            if( $caption_video ):
        ?>
        <div class="caption">
            <?php echo esc_html( $caption_video ); ?>
        </div>
        <?php endif; ?>
    </div>
</div>