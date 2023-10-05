<?php
    $color_text = get_field( 'color_text' );
    $color = ( $color_text != '' )? $color_text : '#FFFFFF';
    $background = get_field( 'background');
    $title_banner = get_field( 'title_banner');
?>  

<div class="banner-short">
    <div class="container-fluid">
        <div class="card-banner lazy background" style="background-image: url(<?php echo esc_url( $background['url'] ); ?>);" data-bg="<?php echo esc_url( $background['url'] ); ?>">
            <div class="opacity absolute"></div>
            <div class="content-banner" style="color: <?php echo esc_attr( $color ); ?>;">
                <div class="title-block title-block-bold title-banner"><?php echo esc_html( $title_banner ); ?></div>
            </div>
        </div>
    </div>
</div>