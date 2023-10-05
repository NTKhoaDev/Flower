<?php

get_header();
?>

<div class="main-content" id="main">   
    <div class="details-products">
        <div class="container-fluid section">
            <div class="container-center">
                <?php echo do_shortcode('[product_page id="' . $post->ID . '"]'); ?>
            </div>
        </div>
    </div>
    <?php require get_template_directory() . '/inc/block-related-products.php'; ?>
</div>

<?php
get_footer();