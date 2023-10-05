<?php
    $title_editor = $module['title_editor'];
    $text_editor = $module['text_editor'];
?>

<div class="module-editor module-details">
    <div class="container-fluid">
        <?php if ( $title_editor ): ?>
        <div class="title"><?php echo esc_html(  $title_editor ); ?></div>
        <?php
            endif;
            if ( $text_editor ):
        ?>
        <div class="description">
            <?php echo apply_filters( 'the_content', $text_editor ); ?>
        </div>
        <?php endif; ?>
    </div>
</div>