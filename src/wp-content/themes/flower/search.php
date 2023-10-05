<?php
    $keyword = (isset($_GET['s']))? trim($_GET['s']) : null;
    if ($keyword == "") {
        wp_redirect(site_url());
        exit();
    }
    get_header();

    $current_page = ( isset( $_GET['paging'] ) ) ? $_GET['paging'] : 1;
    $current_page = max( 1, $current_page );

?>

<div class="main-content">
    <div class="banner-single">
        <div class="container-fluid">
            <div class="image">
                <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-single.jpg" alt="banner-single" class="lazy absolute">
            </div>
        </div>
    </div>  

    <div class="search-page post-single">
        <div class="container-fluid section">
            <div class="container-center">
            <?php
                $search = new WP_Query(
                    array(
                        's'              => $keyword,
                        'post_type'      => array( 'post', 'product' ),
                        'posts_per_page' => 16,
                        'post_status'    => 'publish',
                        'paged'          => $current_page,
                    )
                );
            ?>  
                <div class="total-search">
                    <?php echo esc_html( $search->found_posts ); ?> <?php echo __("Search results with keyword", "flower"); ?> : "<strong><?php echo esc_html( $keyword ); ?> </strong>"
                </div>
                <div class="search-input">
                    <span><?php echo __( 'Search:', 'flower' ); ?></span>
                    <form class="form-search" action="<?php echo site_url(); ?>" method="get" id="search-show">
                        <div class="form-control">
                            <input class="input-search" type="text" name="s" placeholder="Search...">
                            <img class="icon-search" src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/search-grey.svg" alt="search">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <?php
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($search->have_posts()) : $search->the_post();
                            $item          = $search->post;
                            global $product;
                        ?>
                        <?php
                        if ($post->post_type == "post") {
                            $image_single  = get_field( 'image_single', $item->ID );
                            $terms = get_the_terms( $item->ID, 'category' );
                    ?>
                    <div class="col-4">
                        <a href="<?php echo esc_attr( get_permalink( $item->ID) ); ?>" class="col-inner">
                            <div class="image">
                                <img data-src="<?php echo esc_attr( $image_single['url'] ); ?>" alt="<?php echo esc_attr( $image_single['title'] ); ?>" class="absolute lazy">
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
                        } else if ($item->post_type == "product") :
                            global $product;
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'single-post-thumbnail' );
                            $image_hover = get_field( 'image_hover', $item->ID );
                    ?>
                    <div class="col-3">
                        <div class="slide-inner">
                            <div class="show">
                                <div class="image-wrap">
                                    <a href="<?php esc_url( the_permalink($item->ID) ); ?>">
                                        <div class="image">
                                            <img data-src="<?php echo esc_attr( $image[0] ); ?>" alt="product" class="lazy absolute">
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
                    <?php endif; ?>
                    <?php
                        endwhile; wp_reset_postdata()
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
                                'prev_text' => __( '<', 'mkcafe' ),
                                'next_text' => __( '>', 'mkcafe' ),
                                'current'   => $current_page,
                                'total'     => $search->max_num_pages,
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>