<?php

get_header();
?>

<?php
    $link_404 = get_field( 'link_404', 'options' );
    $image_404 = get_field( 'image_404', 'options' );
?>
<div class="main-content">
    <div class="error-404">
        <div class="container-fluid background" data-bg="<?php echo esc_attr( $image_404['url'] ); ?>" style="background-image: url( <?php echo esc_url( $image_404['url'] ); ?> );">
            <div class="container-inner">
                <div class="btn-submit">
                    <a href="<?php echo esc_url( flower_get_link( $link_404 ) ); ?>"><?php echo esc_html( flower_get_link_title( $link_404) );; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
