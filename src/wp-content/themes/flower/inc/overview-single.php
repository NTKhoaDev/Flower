<?php
    $posttags = get_the_tags($post->ID);
    $socials = get_field( 'socials', 'options' );
    $type_video = get_field( 'type_video', $post->ID );
    $link_video = get_field( 'link_video', $post->ID );
    $file_video = get_field( 'file_video', $post->ID );
    $background_video = get_field( 'background_video', $post->ID );
    $title_turn = get_field( 'title_turn', $post->ID );
    $title_small = get_field( 'title_small', $post->ID );
    $des = get_field( 'description', $post->ID );
    $color_gradient_first = get_field( 'color_gradient_first', $post->ID );
    $color_gradient_secondary = get_field( 'color_gradient_secondary', $post->ID );
    $color_gradient_last = get_field( 'color_gradient_last', $post->ID );
    $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
    $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
    $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
?>

<div class="overview-single">
    <div class="container-fluid section">
        <div class="background-top"></div>
        <div class="row">
            <div class="col-6 col-content">
                <div class="col-inner">
                    <div class="content-text content-top">
                        <div class="date">
                            <?php echo esc_html( get_the_date() ); ?>
                        </div>
                        <div class="title-post">
                            <?php echo esc_html( $post->post_title ); ?>
                        </div>
                        <?php if ( $posttags ) : ?>
                        <div class="tag">
                            <span><?php echo __("Tag: ", "flower"); ?></span>
                            <?php foreach ( $posttags as $tag ) : ?>
                            <span><?php echo esc_html( $tag->name ); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="share">
                            <span><?php echo __("Share: ", "flower"); ?></span>
                            <ul class="socials">
                                <?php
                                    if ( is_array( $socials ) ) :
                                    foreach ( $socials as $social ) :
                                ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_attr( $social['link_text'] ); ?>">
                                        <img src="<?php echo esc_attr( $social['icon']['url'] ); ?>" alt="<?php echo esc_attr( $social['icon']['title'] ); ?>">
                                    </a>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php if ( $title_turn && $title_small & $des ) : ?>
                    <div class="content-text content-bottom">
                        <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                            <?php echo esc_html( $title_turn ); ?>
                        </div>
                        <div class="content-primary">
                            <div class="title-letter">
                                <?php echo esc_html( $title_small ); ?>
                            </div>
                            <div class="description">
                                <?php echo esc_html( $des ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-video">
                <div class="col-inner">
                    <?php
                        if ( $type_video == 'youtube') :
                        if ( is_array( $background_video ) ) :
                    ?>
                    <div class="video-wrap background lazy" data-bg="<?php echo esc_attr( $background_video['url'] ); ?>" style="background-image: url(<?php echo esc_attr( $background_video['url'] ); ?>);">
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
                </div>
            </div>
        </div>
    </div>
</div>