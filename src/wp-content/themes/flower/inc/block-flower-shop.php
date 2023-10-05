<?php $list = get_field( 'list' ); ?>

<div class="flower-shop">
    <div class="container-fluid section">
        <?php if ( is_array ( $list ) ) : ?>
        <div class="row">
            <?php
                foreach ( $list as $item ) :
                if ( $item['select_type'] == 'image' ):
            ?>
            <div class="col col-image">
                <div class="image">
                    <img data-src="<?php echo esc_attr( $item['image']['url'] ); ?>" src="<?php echo esc_attr( $item['image']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $item['image']['title'] ); ?>" class="lazy absolute">
                    <div class="content">
                        <a href="<?php echo flower_get_link($item['link']); ?>">
                            <div class="sub-title"><?php echo esc_html( $item['sub_title'] ); ?></div>
                            <div class="title"><?php echo esc_html( $item['title_bold'] ); ?></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <div class="col col-content">
                <div class="image">
                    <div class="characters">
                        <?php echo esc_html( $item['characters'] ); ?>
                    </div>
                    <div class="title-wrap">
                        <div class="sub-title">
                            <?php echo esc_html( $item['title_bold'] ); ?>
                        </div>
                        <a href="<?php echo flower_get_link($item['link']); ?>">
                            <div class="title-block title-block-bold">
                                <?php echo esc_html( $item['title_bold'] ); ?>
                            </div>
                            <div class="title-block">
                                <?php echo esc_html( $item['title_light'] ); ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>