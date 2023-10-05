<div class="blog-post post-single">
    <div class="container-fluid section">
        <div class="wrapper">
            <?php
                $args     = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'order'          => 'DESC',
                    'orderby'        => 'id'
                );
                $getposts = new WP_query( $args );

                $list = array();
            
            if ( $getposts->have_posts() ) :
            while ( $getposts->have_posts() ) :
                $getposts->the_post();
                $item          = $getposts->post;
                $image_single  = get_field( 'image_single', $item->ID );
                $terms = get_the_terms( $item->ID, 'category' );

                $list[] = [
                    'item' => $item,
                    'image_single' => $image_single,
                    'terms' => $terms,
                ];

            endwhile;
            endif;
            wp_reset_postdata();
            ?>

            <?php $list_data = array_chunk( $list, 9 ); ?>

            <?php foreach ( $list_data as $row ) : ?>
            <div class="row">
                <div class="col-7">
                    <a href="<?php echo esc_attr( get_permalink( $row[0]['item']->ID ) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[0]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[0]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[0]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[0]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[0]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php if ( isset($row[1]) ) : ?>
                <div class="col-5">
                    <a href="<?php echo esc_attr( get_permalink( $row[1]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[1]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[1]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[1]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[1]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[1]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[2]) ) :
                ?>
                <div class="col-6">
                    <a href="<?php echo esc_attr( get_permalink( $row[2]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[2]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[2]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[2]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[2]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[2]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[3]) ) :
                ?>
                <div class="col-6">
                    <a href="<?php echo esc_attr( get_permalink( $row[3]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[3]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[3]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[3]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[3]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[3]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[4]) ) :
                ?>
                <div class="col-4">
                    <a href="<?php echo esc_attr( get_permalink( $row[4]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[4]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[4]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[4]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[4]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[4]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[5]) ) :
                ?>
                <div class="col-4">
                    <a href="<?php echo esc_attr( get_permalink( $row[5]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[5]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[5]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[5]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[5]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[5]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[6]) ) :
                ?>
                <div class="col-4">
                    <a href="<?php echo esc_attr( get_permalink( $row[6]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[6]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[6]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[6]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[6]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[6]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[7]) ) :
                ?>
                <div class="col-5">
                    <a href="<?php echo esc_attr( get_permalink( $row[7]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[7]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[7]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[7]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[7]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[7]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                endif;
                if ( isset($row[8]) ) :
                ?>
                <div class="col-7">
                    <a href="<?php echo esc_attr( get_permalink( $row[8]['item']->ID) ); ?>" class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $row[8]['image_single']['url'] ); ?>" src="<?php echo esc_attr( $row[8]['image_single']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $row[8]['image_single']['title'] ); ?>" class="absolute lazy">
                            <div class="content">
                                <div class="cate-wrap">
                                    <?php foreach ( $row[8]['terms'] as $term ) : ?>
                                    <div class="cate">
                                        <?php echo esc_html( $term->name ); ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="title-post">
                                    <?php echo esc_html( $row[8]['item']->post_title ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
            <div class="btn-submit">
                <a href="#" id="loadmore"><?php echo __( 'Load more', 'flower' ); ?></a>
            </div>
        </div>
    </div>
</div>
