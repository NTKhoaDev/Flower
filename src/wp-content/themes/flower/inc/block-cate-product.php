<?php
    $link_view = get_field( 'link_view' );
    $cate_name = get_field( 'cate_name' );
    $term = get_term($cate_name);
?>

<div class="cate-product product-section">
    <div class="container-fluid section">
        <div class="top">
            <div class="container-center">
                <div class="content-top">
                    <div class="title-medium">
                        <?php echo esc_html( $term->name ); ?>
                    </div>
                    <div class="view-all">
                        <a href="<?php echo esc_url( flower_get_link( $link_view) ); ?>"><?php echo esc_html( flower_get_link_title( $link_view) ); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container-center">
                <div class="row">
                    <?php
                    $tax_query[] = array(
                        'taxonomy' => 'product_cat',
                        'field' => 'term_id',
                        'terms' => $cate_name,
                    );
                    $args = array( 
                        'post_type' => 'product',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'order' => 'desc',
                        'tax_query' => $tax_query
                    ); 
                    ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php 
                        while ($getposts->have_posts()) : $getposts->the_post();
                        $item          = $getposts->post;
                        $image_hover = get_field( 'image_hover', $item->ID );
                        global $product;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'single-post-thumbnail' );
                        $image_thumb = wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'thumbnail');
                    ?>

                    <div class="col-4">
                        <div class="slide-inner">
                            <div class="show">
                                <div class="image-wrap">
                                    <a href="<?php esc_url( the_permalink($item->ID) ); ?>">
                                        <div class="image">
                                            <img data-src="<?php echo esc_attr( $image[0] ); ?>" src="<?php echo esc_attr( $image_thumb ); ?>" alt="product" class="lazy absolute">
                                            <?php if ( $product->is_on_sale() ) : ?>
                                            <span><?php echo __( 'Sale!', 'flower '); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="content-wrap">
                                    <div class="cate-product">
                                        <?php echo apply_filters( 'the_content', $product->get_categories() ); ?>
                                    </div>
                                    <div class="name-title">
                                        <a href="<?php esc_url( the_permalink($item->ID) ); ?>">
                                            <?php echo esc_html( $item->post_title ); ?>
                                        </a>
                                    </div>
                                    <div class="price-product">
                                        <span class="price"><?php echo apply_filters( 'the_content', $product->get_price_html() ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="hover">
                                <a href="<?php esc_url( the_permalink($item->ID) ); ?>">
                                    <img class="absolute" src="<?php echo esc_attr( $image_hover['url'] ); ?>" alt="<?php echo esc_attr( $image_hover['title'] ); ?>">
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>