<?php $contents = get_field( 'contents' ); ?>

<div class="faq editor">
    <div class="container-fluid section">
        <div class="container-center">
            <?php
                if ( is_array( $contents ) ) :
                foreach ( $contents as $content ) :
            ?>
            <div class="contents-wrap">
                <div class="question-wrap">
                    <div class="question">
                        <?php echo esc_html( $content['question'] ); ?>
                    </div>
                    <div class="icon background"></div>
                </div>
                <div class="contents">
                    <?php echo apply_filters( 'the_content', $content['answer'] ); ?>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>