<?php
/*
* Template Name: Checkout Page
*/

get_header();
?>
<div class="main-content">
    <div class="checkout-wrap">
        <div class="container-fluid section">
            <div class="container-center">
                <!-- <h2>check out</h2> -->
                <?php echo apply_filters('the_content', $post->post_content); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();