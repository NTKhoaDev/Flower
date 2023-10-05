<?php

/*
 * Template Name: Cart Page
 */

get_header();

?>
<div class="main-content">
    <div class="cart-wrap">
        <div class="container-fluid section">
            <div class="container-center">
                
                <?php
                echo apply_filters('the_content', $post->post_content);
                ?>
                
            </div>

        </div>
    </div>
</div>

<?php get_footer();