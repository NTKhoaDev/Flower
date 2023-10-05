<?php
/*
 * Template Name: Home
 */

get_header();
?>

<div class="main-content" id="main">   
    <?php echo apply_filters( 'the_content', $post->post_content ); ?>
    <?php require get_template_directory() . '/inc/modal-collection.php'; ?>  
    <?php require get_template_directory() . '/inc/modal-zoom.php'; ?>  
</div>

<?php
get_footer();