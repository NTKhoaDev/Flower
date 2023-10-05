<?php

get_header();
?>

<?php
    $posttags = get_the_tags($post->ID);
    $socials = get_field( 'socials', 'options' );
    $link_video = get_field( 'link_video', $post->ID );
    ?>
<div class="main-content" id="main">   
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php require get_template_directory() . '/inc/overview-single.php'; ?>
        <?php echo apply_filters( 'the_content', $post->post_content ); ?>
        <?php echo wp_link_pages(); ?>
        <div class="comment-wrapper">
            <div class="container-fluid">
                <div class="container-center">
                    <div class="list-comment">
                        <?php comments_template('/comments.php'); ?>
                    </div>
                    <?php comment_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();