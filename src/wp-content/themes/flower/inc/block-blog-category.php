<?php
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="blog-category">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content">
                <div class="sub-title">
                    <?php echo esc_html( $title ); ?>
                </div>
                <div class="description">
                    <?php echo esc_html( $description ); ?>
                </div>
            </div>
        </div>
    </div>
</div>