<?php $link_related = get_field( 'link_related', 'options' ); ?>
<?php $title_related = get_field( 'title_related', 'options' ); ?>

<div class="related-products product-section">
    <div class="container-fluid section">
        <div class="top">
            <div class="container-center">
                <div class="content-top">
                    <div class="title-medium">
                        <?php echo esc_html( $title_related ); ?>
                    </div>
                    <div class="view-all">
                        <a href="<?php echo esc_url( flower_get_link( $link_related) ); ?>"><?php echo esc_html( flower_get_link_title( $link_related) ); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-wrap">
            <div class="container-center">
                <div class="row">
                <?php
                global $product; // If not set…
                $products = get_the_terms(get_the_id(), 'product_cat');
                if ($products):
                    $product_cate = $products[0]->name;
                    $args=array(
                        'post_type' => 'product',
                        'product_cat' => $product_cate,
                        'post__not_in' => array(get_the_id()),
                        'showposts'=> 4,
                        'caller_get_posts'=> 1
                    );
                    $getproducts = new wp_query($args);
                    if( $getproducts->have_posts() ):
                        while ($getproducts->have_posts()):
                            $getproducts->the_post();
                            $item          = $getproducts->post;
                            $image_hover = get_field( 'image_hover', $item->ID );
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'single-post-thumbnail' );
                            $image_thumb = wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'thumbnail');
                    ?>
                    <div class="col-3">
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
                    <?php
                    endwhile; endif; endif; wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>