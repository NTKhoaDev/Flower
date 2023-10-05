<?php
    $list = get_field( 'list' );
    $title_primary = get_field( 'title_primary' );
?>

<div class="why">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="title-why">
                <?php echo esc_html( $title_primary ); ?>
            </div>
            <div class="row">
                <?php
                    if ( is_array( $list ) ) :
                    foreach ( $list as $item ) :
                ?>
                <div class="col">
                    <div class="col-inner">
                        <div class="icon">
                            <img class="lazy" data-src="<?php echo esc_attr( $item['icon']['url'] ); ?>" src="<?php echo esc_attr( $item['icon']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $item['icon']['title'] ); ?>">
                        </div>
                        <div class="title-item">
                            <?php echo esc_html( $item['title_item'] ); ?>
                        </div>
                        <div class="description">
                            <?php echo esc_html( $item['description'] ); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>