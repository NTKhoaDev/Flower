<?php
    $id_form = get_field( 'id_form' );
    $list_contact = get_field( 'list_contact' );
    $color_gradient_first = get_field( 'color_gradient_first' );
    $color_gradient_secondary = get_field( 'color_gradient_secondary' );
    $color_gradient_last = get_field( 'color_gradient_last' );
    $color_first = ( $color_gradient_first != '' )? $color_gradient_first : '#000000';
    $color_secondary = ( $color_gradient_secondary != '' )? $color_gradient_secondary : '#000000';
    $color_last = ( $color_gradient_last != '' )? $color_gradient_last : '#000000';
    $title_turn = get_field( 'title_turn' );
    $link_map = get_field( 'link_map' );
?>

<div class="contact">
    <div class="container-fluid section">
        <div class="content">
            <div class="container-center">
                <div class="row">
                    <div class="col-6 col-content">
                        <div class="col-inner">
                            <div class="title-turn" data-splitting="chars" style="background-image: linear-gradient(<?php echo esc_attr( $color_first ); ?> 0%, <?php echo esc_attr( $color_secondary ); ?> 50%, <?php echo esc_attr( $color_last ); ?> 100%);">
                                <?php echo esc_html( $title_turn ); ?>
                            </div>
                            <ul>
                                <?php
                                    if ( is_array( $list_contact ) ) :
                                    foreach ( $list_contact as $item ) :
                                    $details = $item['contact_details'];
                                ?>
                                <li>
                                    <div class="title-top">
                                        <div class="icon">
                                            <img src="<?php echo esc_attr( $item['icon']['url'] ); ?>" alt="<?php echo esc_attr( $item['icon']['url'] ); ?>">
                                        </div>
                                        <div class="title">
                                            <?php echo esc_html( $item['title'] ); ?>
                                        </div>
                                    </div>
                                    <div class="note">
                                        <?php echo esc_html( $item['note'] ); ?>
                                    </div>
                                    <?php
                                        if ( is_array( $details ) ) :
                                        foreach ( $details as $detail ) :
                                    ?>
                                    <p>
                                        <?php echo esc_html( $detail['detail'] ); ?>
                                    </p>
                                    <?php endforeach; endif; ?>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-form">
                        <div class="col-inner">
                            <div class="form-contact">
                                <?php echo do_shortcode('[contact-form-7 id="' . $id_form . '" title="Contact Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="<?php echo esc_attr( $link_map ); ?>" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>