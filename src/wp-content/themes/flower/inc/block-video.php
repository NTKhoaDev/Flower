<?php
    $background_video = get_field( 'background_video' );
    $link_video = get_field( 'link_video' );
    $type_video = get_field( 'type_video' );
    $file_video = get_field( 'file_video' );
    $title_video = get_field( 'title_video' );
    $des_video = get_field( 'des_video' );
    $caption_video = get_field( 'caption_video' );
?>

<div class="video">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <div class="title-video title-block title-block-bold">
                    <?php echo esc_html( $title_video ); ?>
                </div>
                <div class="des-video">
                    <?php echo esc_html( $des_video ); ?>
                </div>
            </div>
            <?php
                if ( $type_video == 'youtube') :
                if ( is_array( $background_video ) ) :
            ?>
            <div class="video-wrap background lazy" data-bg="<?php echo esc_attr( $background_video['url'] ); ?>">
                <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                    <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                        <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                    </a>
                </div>
            </div>
            <?php endif; else : ?>
            <?php if ( is_array( $file_video ) ) : ?>
            <div class="video-wrap">
                <video loop muted autoplay controls playsinline preload="auto" class="lazy absolute">
                    <source data-src="<?php echo esc_attr( $file_video['url'] ); ?>" alt="video" type="video/mp4">
                </video> 
            </div>
            <?php endif; endif; ?>
            <div class="caption-video">
                <?php echo esc_html( $caption_video ); ?>
            </div>
        </div>
    </div>
</div>