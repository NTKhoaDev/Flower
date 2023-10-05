<?php

/*
 * Template Name: My Account Page
 */

get_header();

?>
<div class="main-content">
    <div class="my-account">
        <div class="container-fluid">
            <div class="container-center">
                <?php
                    echo apply_filters('the_content', $post->post_content);
                ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();