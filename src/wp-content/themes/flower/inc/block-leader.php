<?php
    $slides = get_field( 'slides' );
    $title_block = get_field( 'title_block' );
?>

<div class="leader">
    <div class="container-fluid section">
        <div class="container-center">
            <?php if ( $title_block ) : ?>
            <h2 class="title-block title-block-bold"><?php echo esc_html( $title_block ); ?></h2>
            <?php endif; ?>
            <div class="slide-wrap">
                <div class="box-shadow"></div>
                <div class="slide">
                    <?php
                        if ( is_array( $slides ) ) :
                        foreach ( $slides as $slide ) :
                    ?>
                    <div class="slide-item">
                        <div class="row">
                            <div class="col-7 col-image">
                                <div class="col-inner">
                                    <div class="image">
                                        <img data-src="<?php echo esc_attr( $slide['image']['url'] ); ?>" src="<?php echo esc_attr( $slide['image']['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['image']['title'] ); ?>" class="lazy absolute">
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 col-content">
                                <div class="col-inner">
                                    <div class="position">
                                        <?php echo esc_html( $slide['position'] ); ?>
                                    </div>
                                    <div class="name">
                                        <?php echo esc_html( $slide['name'] ); ?>
                                    </div>
                                    <div class="description">
                                        <?php echo esc_html( $slide['description'] ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>