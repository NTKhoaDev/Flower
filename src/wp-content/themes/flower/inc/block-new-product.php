<?php
    $title_block = get_field( 'title_block' );
?>

<div class="new-product product-section">
    <div class="container-fluid section">
        <div class="top">
            <div class="container-center">
                <div class="content-top">
                    <div class="title-medium">
                        <?php echo esc_html( $title_block ); ?>
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
            </div>
        </div>
        <div class="slide">
            <div class="container-right">
                <div class="slide-product">
                    <?php
                    $args = array( 
                        'post_type' => 'product',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                    ); 

                    $getposts = new WP_query( $args);
                    global $wp_query; $wp_query->in_the_loop = true;
                    while ($getposts->have_posts()) :
                    $getposts->the_post();
                    $item          = $getposts->post;
                    $image_hover = get_field( 'image_hover', $item->ID );
                    global $product;
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'single-post-thumbnail' );
                    $image_thumb = wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'thumbnail');
                    ?>

                    <div class="slide-item">
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
                                    <img class="lazy absolute" data-src="<?php echo esc_attr( $image_hover['url'] ); ?>" src="<?php echo esc_attr( $image_hover['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image_hover['title'] ); ?>">
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