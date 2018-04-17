<!-- Cover Section -->
<section class="bp-cover-section">
    <div class="cover-overlay">
        <div class="cover-content">
            <h1 class=""><?php echo wp_kses_post( get_theme_mod( 'cover_title', __( 'This is a customizer friendly front page.', 'bizpoint' ) ) ); ?></h1>
            <p class="pt-3"><?php echo wp_kses_post( get_theme_mod( 'cover_subtitle', __('BizPoint is a perfect WordPress theme for your business website. It is fast, secure, search engine friendly and easy to use. It is fully responsive and works well on any device. The theme is optimized for better performance.', 'bizpoint' ) ) ); ?></p>
            <?php if( !get_theme_mod( 'cover_btn_hide' ) ) : ?>
                <a href="<?php echo esc_url( get_theme_mod( 'cover_btn_link', 'https://downloads.wordpress.org/theme/bizpoint.zip' ) ); ?>" class="btn btn-primary mt-3"><?php echo esc_html( get_theme_mod( 'cover_btn_text', __( 'Download Now', 'bizpoint' ) ) ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Cover Section -->
