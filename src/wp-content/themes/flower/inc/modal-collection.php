<?php
    $gallerys_popup = get_field( 'gallerys_popup', 'options' );
?>
<!-- The Modal -->
<div class="modal fade modal-collection" id="modalCollection">
    <div class="container-fluid">
        <div class="container-center">
            <div class="modal-dialog">
                <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <span class="close-modal close-modal-collection" data-bs-dismiss="modal">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/close-black.svg" alt="close">
                    </span>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <?php if ( is_array( $gallerys_popup ) ) : ?>
                    <div class="images-mansory">
                        <?php foreach ( $gallerys_popup as $gallery ) : ?>
                        <div class="image-mansory">
                            <img data-src="<?php echo esc_url( $gallery['url'] ); ?>" src="<?php echo esc_url( $gallery['sizes']['medium'] ); ?>" alt="<?php echo esc_url( $gallery['title'] ); ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
        
                </div>
            </div>
        </div>
    </div>
</div>