<?php

get_header();
?>

<div class="main-content product-cate" id="main">   
    <?php echo apply_filters( 'the_content', $post->post_content ); ?>

    <?php
        $current_page = ( isset( $_GET['paging'] ) ) ? $_GET['paging'] : 1;
        $current_page = max( 1, $current_page );
        $current_category = ( isset( $_GET['category'] ) ) ? $_GET['category'] : "";
    ?>
    <div class="shop">
        <div class="container-fluid section">
            <div class="container-center">
                <div class="shop-products">
                    <div class="products-wrap">
                        <ul class="nav-tabs list-category">
                            <li class="nav-item category-item">
                                <a class="nav-link <?php if ($current_category == "") : ?>active<?php endif; ?>" href="<?php echo get_permalink( $post ); ?>">
                                    <?php echo __( 'All', 'flower' ); ?>
                                </a>
                            </li>
                            <?php
                                $args       = array(
                                    'taxonomy' => 'product_cat',
                                    'child_of'   => 0,
                                    'parent'     => '',
                                    'hide_empty' => 1,
                                );
                                $categories = get_categories( $args );
                                if ( is_array( $categories ) ) {
                                    foreach ( $categories as $category ) {
                            ?>
                    
                            <li class="nav-item category-item">
                                <a class="nav-link <?php if ( $category->slug == $current_category ) : ?>active<?php endif; ?>" data-id="<?php echo esc_attr( $category->slug ); ?>" href="?category=<?php echo esc_attr( $category->slug ); ?>">
                                    <span class="cate"><?php echo esc_html( $category->name ); ?></span>
                                </a>
                            </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                        <div class="tab-contents" id="myTabContent">
                            <div class="tab-pane-content">
                                <div class="row row-products" id="list-post">
                                    <?php
                                        $args = array(
                                            'post_status'    => 'publish',
                                            'post_type'      => 'product',
                                            'posts_per_page' => 12,
                                            'oderby'         => 'id',
                                            'order'          => 'desc',
                                            'paged'          => $current_page,
                                        );
                                        
                                        
                                        if (isset($_GET['category']) && $_GET['category'] !="") {
                                            $args['tax_query'] =  array(
                                                array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => $_GET['category'],
                                                )
                                            );
                                                
    
                                        }
                                        
                                        ?>
                                    <?php
                                        $getposts = new WP_query( $args );
                                    ?>
                                    <?php
                                    if ( $getposts->have_posts() ) :
                                        while ( $getposts->have_posts() ) :
                                            $getposts->the_post();
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
                                                    <img class="lazy absolute" data-src="<?php echo esc_attr( $image_hover['url'] ); ?>" alt="<?php echo esc_attr( $image_hover['title'] ); ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                    endif; wp_reset_postdata()
                                ?>
                                </div>
            
                                <div class="pagination-wrap">
                                    <div class="pagination">
                                        <?php
                                            $big = 999999999;
                                            echo paginate_links(
                                                array(
                                                    'base'      => add_query_arg( 'paging', '%#%' ),
                                                    'format'    => '?paging=%#%',
                                                    'show_all'  => false,
                                                    'type'      => 'list',
                                                    'end_size'  => 1,
                                                    'mid_size'  => 2,
                                                    'prev_text' => __( '<', 'flower' ),
                                                    'next_text' => __( '>', 'flower' ),
                                                    'current'   => $current_page,
                                                    'total'     => $getposts->max_num_pages,
                                                )
                                            );
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();