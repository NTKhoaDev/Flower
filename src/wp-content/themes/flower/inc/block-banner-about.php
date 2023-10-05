<?php
    $image = get_field( 'image' );
    $btn_link = get_field( 'btn_link' );
    $position_content = get_field( 'position_content' );
    $sub_title = get_field( 'sub_title' );
    $title_bold = get_field( 'title_bold' );
    $title_light = get_field( 'title_light' );
    $color_text = get_field( 'color_text' );
    $color = ( $color_text != '' )? $color_text : '#FFFFFF';
?>

<div class="banner-collection banner">
    <div class="container-fluid">
        <div class="image">
            <img data-src="<?php echo esc_attr( $image['url'] ); ?>" src="<?php echo esc_attr( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="lazy absolute">
            <?php if ( $sub_title || $title_bold || $title_light || $btn_link ) : ?>
            <div class="opacity absolute"></div>
            <?php endif; ?>
            <div class="content-inner <?php if ( $position_content == "left" ) : ?>left<?php elseif ($position_content == "center" ) : ?>center<?php else : ?>right<?php endif; ?>" style="color: <?php echo esc_attr( $color ); ?>;">
                <div class="sub-title sub-title-video">
                    <?php echo esc_html( $sub_title ); ?>
                </div>
                <div class="title-block title-block-bold">
                    <?php echo esc_html( $title_bold ); ?>
                </div>
                <div class="title-block">
                    <?php echo esc_html( $title_light ); ?>
                </div>
                <?php if ( is_array( $btn_link ) ) : ?>
                <div class="btn-submit btn-submit-white">
                    <a href="<?php echo esc_url( flower_get_link( $btn_link ) ); ?>"><?php echo esc_html( flower_get_link_title( $btn_link ) ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>