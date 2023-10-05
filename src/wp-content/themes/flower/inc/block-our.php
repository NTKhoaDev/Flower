<?php
    $rows = get_field( 'row' );
    $title_block = get_field( 'title_block' );
?>

<div class="our">
    <div class="container-fluid section">
        <div class="container-center">
            <?php if ( $title_block ) : ?>
            <h2 class="title-block title-block-bold"><?php echo esc_html( $title_block ); ?></h2>
            <?php
                endif;
                if ( is_array( $rows ) ) :
                foreach ( $rows as $row ) :
            ?>
            <div class="row">
                <?php
                $cols = $row['list'];
                    if ( is_array( $cols ) ) :
                        foreach ( $cols as $item ) :
                ?>
                <div class="col">
                    <a href="<?php echo esc_url( flower_get_link( $item['link'] ) ); ?>" class="col-inner">
                        <div class="content-wrap">
                            <div class="content">
                                <div class="title-our">
                                    <?php echo esc_html( $item['title'] ); ?>
                                </div>
                                <div class="description">
                                    <?php echo esc_html( $item['description'] ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img data-src="<?php echo esc_attr( $item['image']['url'] ); ?>" src="<?php echo esc_attr( $item['image']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $item['image']['title'] ); ?>" class="lazy absolute">
                        </div>
                    </a>
                </div>
                <?php endforeach; endif; ?>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>