<?php $logos = get_field( 'logo' ); ?>
<?php $select_location = get_field( 'select_location' ); ?>
<?php $title = get_field( 'title' ); ?>
<?php $description = get_field( 'description' ); ?>

<div class="partners">
    <div class="container-fluid section">
        <div class="container-center <?php if ( $select_location == 'left') : ?>left<?php else : ?>right<?php endif; ?>">
            <div class="title-partners">
                <?php echo esc_html( $title ); ?>
            </div>
            <div class="row row-out">
                <div class="col-5">
                    <div class="col-inner">
                        <div class="description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                    </div>
                </div>
                <?php if ( $logos ) : ?>
                <div class="col-7">
                    <div class="row row-inner">
                        <?php
                            foreach( $logos as $logo ) :
                        ?>
                        <div class="col-4">
                            <div class="col-inner">
                                <img class="lazy" data-src="<?php echo esc_url( $logo['url'] ) ?>" src="<?php echo esc_url( $logo['sizes']['medium'] ) ?>" alt="<?php echo esc_attr( $logo['title'] ); ?>">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>