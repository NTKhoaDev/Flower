<?php
    $title = get_field( 'title' );
    $contents = get_field( 'contents' );
?>

<div class="terms-condition editor">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="title">
                <?php echo esc_html( $title ); ?>
            </div>
            <div class="contents">
                <?php echo apply_filters( 'the_content', $contents ); ?>
            </div>
        </div>
    </div>
</div>