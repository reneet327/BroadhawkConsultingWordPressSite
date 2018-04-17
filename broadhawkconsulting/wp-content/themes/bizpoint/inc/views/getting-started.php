<?php
if( isset( $_POST['disable_elementor_default_settings'] ) ) {
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
}
?>

<div class="bp-section-wrap">
    <p class="bp-intro-para">
        <?php esc_html_e( 'Getting started with BizPoint is as easy as step 1, 2, 3 and 4. We have mentioned these steps below so that beginners can understand them easily. Refresh this page if you think you have completed the step but it is not updated here.', 'bizpoint' ); ?>
    </p>
    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '1. Install & Activate Required Plugins', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'It is highly recommended that you install all of the mentioned plugins so that it will be easy for you to setup your website quickly.', 'bizpoint' ); ?>
            </p>
            <h4><?php esc_html_e( 'Recommended Plugins:', 'bizpoint' ); ?></h4>
            <ul>
                <li><?php esc_html_e( 'Kirki Toolkit', 'bizpoint' ); ?></li>
                <li><?php esc_html_e( 'Elementor', 'bizpoint' ); ?></li>
                <li><?php esc_html_e( 'Contact Form 7', 'bizpoint' ); ?></li>
                <li><?php esc_html_e( 'One Click Demo Import', 'bizpoint' ); ?></li>
            </ul>

            <?php if ( class_exists( 'Kirki' ) && defined( 'ELEMENTOR_VERSION' ) && defined( 'WPCF7_VERSION' ) && class_exists( 'OCDI_Plugin' ) ) : ?>
                <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'All above plugins are already active. You have completed step 1.', 'bizpoint' ); ?></h5>
            <?php else: ?>
                <a href="?page=tgmpa-install-plugins" class="button"><?php esc_html_e( 'Install & Activate Now', 'bizpoint' ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.bp-col -->
    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '2. Import Demo Content', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'We have made it really easy to import demo site content on your website. You must have installed "One Click Demo Import" plugin to complete this step.', 'bizpoint' ); ?>
            </p>
            <p>
                <strong><em><?php esc_html_e( 'You can skip this step if you want to create something totally different than our demos.', 'bizpoint' ) ?></em></strong>
            </p>
            <?php $bizpoint_demo_imported = get_option( 'bizpoint-demo-imported' ); ?>
            <?php if( ! empty( $bizpoint_demo_imported ) ) : ?>
                <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'You have imported demo content. Step 2 is complete. If you want, you can import another demo.', 'bizpoint' ); ?></h5>
            <?php endif; ?>
            <?php if ( class_exists( 'Kirki' ) && defined( 'ELEMENTOR_VERSION' ) && defined( 'WPCF7_VERSION' ) && class_exists( 'OCDI_Plugin' ) ) : ?>
                <a href="?page=pt-one-click-demo-import" class="button"><?php esc_html_e( 'Import Demo', 'bizpoint' ); ?></a>
            <?php else: ?>
                <h5 class="step-not-completed"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You need to complete step 1 before importing demo content.', 'bizpoint' ); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.bp-col -->

    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '3. Change Elementor Settings', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'Elementor sets some default fonts & colors globally. These global settings will overwrite default theme settings. We recommend disabling them. You can enable them later if you want.', 'bizpoint' ); ?>
            </p>
            <?php
                $disabled_elementor_default_settings = false;
                if( ( get_option( 'elementor_disable_color_schemes' ) == 'yes' ) && ( get_option( 'elementor_disable_typography_schemes' ) == 'yes' ) ) {
                    $disabled_elementor_default_settings = true;
                }
            ?>
            <?php if ( defined( 'ELEMENTOR_VERSION' ) ) : ?>
                <?php if( $disabled_elementor_default_settings ) : ?>
                    <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Elementor default settings are disabled. Step 3 is complete.', 'bizpoint' ); ?></h5>
                <?php else : ?>
                    <form id="elementor_default_settings" action="#" method="post">
                        <input type="hidden" name="disable_elementor_default_settings" value="yes">
                        <button type="submit" class="button"><?php esc_html_e( 'Disable Default Fonts & Colors', 'bizpoint' ); ?></button>
                    </form>
                <?php endif; ?>
            <?php else: ?>
                <h5 class="step-not-completed"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You need Elementor page builder for this. You have not completed step 1.', 'bizpoint' ); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.bp-col -->

    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '4. Customize As Per Your Choice', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'You can easily customize your website\'s look with a live preview. BizPoint is fully integrated with WordPress\' built-in Customizer. Give it a try now!', 'bizpoint' ); ?>
            </p>
            <a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Go to the Customizer', 'bizpoint' ); ?></a>
        </div>
    </div>
    <!-- /.bp-col -->
</div>
<!-- /.bp-section-wrap -->
