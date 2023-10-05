<?php
    $select_location = get_field( 'select_location' );
    $select_type = get_field( 'select_type' );
    $link = get_field( 'link' );
    $image = get_field( 'image' );
    $link_video = get_field( 'link_video' );
    $file = get_field( 'file' );
    $color_gradient_first = get_field( 'color_gradient_first' );
    $color_gradient_secondary = get_field( 'color_gradient_secondary' );
    $color_gradient_last = get_field( 'color_gradient_last' );
    $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
    $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
    $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="blue-white">
    <div class="container-fluid section">
        <div class="container-<?php if ( $select_location == 'right' ) : ?>right<?php else : ?>left<?php endif; ?>">
            <div class="row">
                <div class="col-7 col-image">
                    <div class="col-inner">
                        <?php
                            if ( $select_type == 'image' ) :
                            if ( is_array( $image ) ) :
                        ?>
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $image['url'] ); ?>" src="<?php echo esc_attr( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="img-transition absolute lazy">
                        </div>
                        <?php endif; ?>
                        <?php elseif ( $select_type == 'youtube' ) : ?>
                        <?php if ( is_array( $image ) ) : ?>
                        <div class="image background lazy" data-bg="<?php echo esc_attr( $image['url'] ); ?>" style="background-image: url(<?php echo esc_attr( $image['url'] ); ?>);">
                            <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                                <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                                    <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                                </a>
                            </div>
                        </div>
                        <?php endif; else : ?>
                        <?php if ( is_array( $file ) ) : ?>
                        <div class="image">
                            <video loop muted autoplay controls playsinline preload="auto" class="lazy absolute">
                                <source data-src="<?php echo esc_attr( $file['url'] ); ?>" alt="video" type="video/mp4">
                            </video> 
                        </div>
                        <?php endif; endif; ?>
                    </div>
                </div>
                <div class="col-5 col-content">
                    <div class="col-inner">
                        <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                            <?php echo esc_html( $title ); ?>
                        </div>
                        <div class="content">
                            <div class="description">
                                <?php echo esc_html( $description ); ?>
                            </div>
                            <div class="btn-submit">
                                <a href="<?php echo esc_url( flower_get_link( $link ) ); ?>"><?php echo esc_html( flower_get_link_title( $link ) ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>