<?php
    $blocks = get_field( 'blocks' );
?>

<div class="project">
    <div class="block-wrap">
        <?php
            if ( is_array( $blocks ) ) :
            foreach ( $blocks as $block ) :
            $select_location = $block['select_location'];
            $background_dark = $block['background_dark'];
            $color_gradient_first = $block['color_gradient_first'];
            $color_gradient_secondary = $block['color_gradient_secondary'];
            $color_gradient_last = $block['color_gradient_last'];
            $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
            $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
            $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
        ?>
        <div class="block-content 
            <?php if ( $select_location == 'left' ) : ?>left
            <?php else : ?>right
            <?php
                endif;
                if ( $background_dark == 'true' ) : ?>background-dark
            <?php endif; ?>">
            <div class="container-fluid">
                <div class="block-top">
                    <div class="background-top"></div>
                    <div class="row row-content">
                        <div class="col-6 col-content">
                            <div class="col-inner">
                                <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                                    <?php echo esc_html( $block['title_turn'] ); ?>
                                </div>
                                <div class="content">
                                    <div class="title-letter">
                                        <?php echo esc_html( $block['title'] ); ?>
                                    </div>
                                    <div class="description">
                                        <?php echo esc_html( $block['description'] ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-image">
                            <div class="col-inner">
                                <?php
                                    $select_type = $block['select_type'];
                                    if ( $select_type == 'image' ) :
                                    if ( is_array( $block['image'] ) ) :
                                ?>
                                <div class="image">
                                    <img data-src="<?php echo esc_attr( $block['image']['url'] ); ?>" src="<?php echo esc_attr( $block['image']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $block['image']['title'] ); ?>" class="img-transition absolute lazy">
                                </div>
                                <?php endif; ?>
                                <?php elseif ( $select_type == 'youtube' ) : ?>
                                <?php if ( is_array( $block['image'] ) ) : ?>
                                <div class="image background lazy" data-bg="<?php echo esc_attr( $block['image']['url'] ); ?>">
                                    <div id="<?php echo esc_attr( $block['link_video'] ); ?>" class="box-video absolute">
                                        <a href="#" class="btn-play" data-target="<?php echo esc_attr( $block['link_video'] ); ?>" data-video-id="<?php echo esc_attr( $block['link_video'] ); ?>">
                                            <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                                        </a>
                                    </div>
                                </div>
                                <?php endif; else : ?>
                                <?php if ( is_array( $block['file'] ) ) : ?>
                                <div class="image">
                                    <video loop muted autoplay controls playsinline preload="auto" class="lazy absolute">
                                        <source data-src="<?php echo esc_attr( $block['file']['url'] ); ?>" alt="video" type="video/mp4">
                                    </video> 
                                </div>
                                <?php endif; endif; ?>
                            </div>
                            <div class="characters"><?php echo esc_html( $block['characters'] ); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                    $gallerys = $block['gallerys'];
                    if ( is_array( $gallerys ) ) :
                ?>
                <div class="block-bottom">
                    <div class="gallerys product-section">
                        <div class="top">
                            <div class="container-center">
                                <div class="content-top">
                                    <div class="title-medium">
                                        <?php echo esc_html( $block['title_gallerys'] ); ?>
                                    </div>
                                    <div class="arrow arrows-wrap">
                                        <div class="arrow-left">
                                            <span class="background"></span>
                                        </div>
                                        <div class="arrow arrow-right">
                                            <span class="background"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="container-right">
                                <?php
                                    if ( is_array( $gallerys ) ):
                                ?>
                                <div class="slide">
                                    <div class="slide-gallerys">
                                        <?php foreach ( $gallerys as $gallery) : ?>
                                        <div class="slide-item">
                                            <button class="button" data-bs-toggle="modal" data-bs-target="#modalZoom">
                                                <div class="image-slide">
                                                    <img data-src="<?php echo esc_url( $gallery['url']); ?>" src="<?php echo esc_url( $gallery['sizes']['medium'] ); ?>" alt="<?php echo esc_url( $gallery['title']); ?>" class="lazy">
                                                </div>
                                            </button>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; endif; ?>
    </div>
    <div class="btn-submit btn-loadmore">
        <a href="#" id="load-more"><?php echo __( 'Load more', 'flower' ); ?></a>
    </div>
</div>