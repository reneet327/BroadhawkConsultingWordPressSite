<?php
    $loading_img_url = get_template_directory_uri() . '/images/ripple.svg';
?>

<div class="bp-loading-wrap d-flex align-items-center justify-content-center">
    <img src="<?php echo esc_url( $loading_img_url ); ?>" class="loading-img" alt="<?php esc_attr_e( 'Loading', 'bizpoint' ); ?>" />
</div>
