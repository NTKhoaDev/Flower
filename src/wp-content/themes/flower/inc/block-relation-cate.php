<?php
    $title = get_field( 'title' );
?>

<div class="relation-cate product-section post-single">
    <div class="container-fluid section">
        <div class="content-top">
            <div class="title-medium">
                <?php echo esc_html( $title ); ?>
            </div>
            <div class="arrow arrows-wrap">
                <div class="arrow-left">
                    <span class="background"></span>
                </div>
                <div class="arrow arrow-right">
                    <span class="background"></span>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-relation">
                <?php
                    $categories = get_the_category($post->ID);

                    if ($categories) 
                    {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                
                        $args=array(
                        'category__in' => $category_ids,
                        'post__not_in' => array (get_the_ID()),
                        'posts_per_page' => 10,
                        'caller_get_posts'=> 1,
                        'no_found_rows'   =>true
                        );
                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) 
                        {
                            while ($my_query->have_posts())
                            {
                                $my_query->the_post();
                                $item          = $my_query->post;
                                $image_single  = get_field( 'image_single', $item->ID );
                                $terms = get_the_terms( $item->ID, 'category' );
                                ?>
                                <div class="slide-item">
                                    <a href="<?php echo esc_attr( get_permalink( $item->ID) ); ?>" class="col-inner">
                                        <div class="image">
                                            <img data-src="<?php echo esc_attr( $image_single['url'] ); ?>" src="<?php echo esc_attr( $image_single['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_single['title'] ); ?>" class="absolute lazy">
                                            <div class="content">
                                                <div class="cate-wrap">
                                                    <?php foreach ( $terms as $term ) : ?>
                                                    <div class="cate">
                                                        <?php echo esc_html( $term->name ); ?>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="title-post">
                                                    <?php echo esc_html( $item->post_title ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>