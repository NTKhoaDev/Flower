<?php
    $select_location = get_field( 'select_location' );
    $image = get_field( 'image' );
    $list = get_field( 'list' );
    $title_block = get_field( 'title_block' );
?>

<div class="vision">
    <div class="container-fluid section">
        <div class="container-center <?php if ( $select_location == "left" ) : ?>left<?php else : ?>right<?php endif; ?>">
            <?php if ( $title_block ) : ?>
            <h2 class="title-block title-block-bold"><?php echo esc_html( $title_block ); ?></h2>
            <?php endif; ?>
            <div class="row">
                <div class="col-6 col-image">
                    <div class="col-inner">
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $image['url'] ); ?>" src="<?php echo esc_attr( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['title'] ); ?>" class="lazy absolute">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-content">
                    <div class="col-inner">
                        <ul>
                            <?php
                                if ( is_array( $list ) ) :
                                    foreach ( $list as $item) :
                            ?>
                            <li>
                                <div class="count">
                                    <?php echo esc_html( $item['count'] ); ?>
                                </div>
                                <div class="vision-item">
                                    <div class="title-vision">
                                        <?php echo esc_html( $item['title'] ); ?>
                                    </div>
                                    <div class="description">
                                        <?php echo esc_html( $item['description'] ); ?>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>