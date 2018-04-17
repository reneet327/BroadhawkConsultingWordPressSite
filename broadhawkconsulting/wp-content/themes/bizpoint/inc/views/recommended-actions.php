<?php
    $bp_dismiss_optimize = get_option( 'bp-dismiss-optimize' );
    $bp_dismiss_hosting = get_option( 'bp-dismiss-hosting' );
    $bp_dismiss_subscribe = get_option( 'bp-dismiss-subscribe' );
    $bp_dismiss_request_feature = get_option( 'bp-dismiss-request-feature' );
?>

<div class="bp-section-wrap">
    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( 'Upgrade to Premium', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'We highly recommend upgrading your theme to the premium version. You get more customization options, better search engine optimization, premium support and much more. ', 'bizpoint' ); ?>
            </p>
            <a href="?page=about-bizpoint&tab=free_pro" class="button"><?php esc_html_e( 'Check Free Vs Premium', 'bizpoint' ); ?></a>
            <a href="https://themes.salttechno.com/wordpress-themes/bizpoint-premium" class="button button-primary ml-10" target="_blank"><?php esc_html_e( 'Learn More', 'bizpoint' ); ?></a>
        </div>
    </div>

    <?php if( empty( $bp_dismiss_optimize ) ) : ?>
        <div class="bp-col" data-bp-id="bp-dismiss-optimize">
            <div class="postbox">
                <h4 class="col-title"><?php esc_html_e( 'Optimize Your Website', 'bizpoint' ); ?></h4>
                <p>
                    <?php echo wp_kses_post( 'Our team has spent a lot of time on research and made a list of few most essential tips to optimize your WordPress website. Take a look at these tips and optimize your website for better performance.', 'bizpoint' ); ?>
                </p>
                <a href="https://themes.salttechno.com/2017/12/optimize-wordpress-website/" class="button" target="_blank"><?php esc_html_e( 'Learn More', 'bizpoint' ); ?></a>
                <a href="#" class="ml-10 bp-dismiss-link" id="bp-dismiss-optimize"><?php esc_html_e( 'Dismiss', 'bizpoint' ); ?></a>
            </div>
        </div>
    <?php endif; ?>

    <div class="bp-col">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( 'We would love your feedback!', 'bizpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( 'Please take a moment and leave us a short review. We really appreciate and value your experience with the theme. Your review will also help others to know more about BizPoint.', 'bizpoint' ); ?>
            </p>
            <a href="https://wordpress.org/support/theme/bizpoint#new-topic-0" target="_blank" class="button"><?php esc_html_e( 'Ask a support question', 'bizpoint' ); ?></a>
            <a href="https://wordpress.org/support/theme/bizpoint/reviews/#new-post" target="_blank" class="button button-primary ml-10"><?php esc_html_e( 'Rate us 5 Stars', 'bizpoint' ); ?></a>
        </div>
    </div>

    <?php if( empty( $bp_dismiss_hosting ) ) : ?>
        <div class="bp-col" data-bp-id="bp-dismiss-hosting">
            <div class="postbox">
                <h4 class="col-title"><?php esc_html_e( 'Get a managed WordPress hosting.', 'bizpoint' ); ?></h4>
                <p>
                    <?php echo wp_kses_post( '"Managed WordPress Hosting" provides great advantages over normal shared or dedicated hosting. You must consider at least giving it a try. It\'s unquestionably worth its cost.', 'bizpoint' ); ?>
                </p>
                <a href="https://themes.salttechno.com/2017/12/consider-using-managed-wordpress-hosting/" class="button" target="_blank"><?php esc_html_e( 'Why should you go for it?', 'bizpoint' ); ?></a>
                <a href="#" class="ml-10 bp-dismiss-link" id="bp-dismiss-hosting"><?php esc_html_e( 'Dismiss', 'bizpoint' ); ?></a>
            </div>
        </div>
    <?php endif; ?>

    <?php if( empty( $bp_dismiss_subscribe ) ) : ?>
        <div class="bp-col" data-bp-id="bp-dismiss-subscribe">
            <div class="postbox">
                <h4 class="col-title"><?php esc_html_e( 'Subscribe to our Newsletter', 'bizpoint' ); ?></h4>
                <p>
                    <?php echo wp_kses_post( 'Do you want to learn more about how can you optimize your website? Subscribe to our newsletter and get more knowledge about website optimization, traffic generation, discount coupons and more.', 'bizpoint' ); ?>
                </p>
                <a href="https://themes.salttechno.com/subscribe-to-our-newsletter/" class="button" target="_blank"><?php esc_html_e( 'Subscribe Now', 'bizpoint' ); ?></a>
                <a href="#" class="ml-10 bp-dismiss-link" id="bp-dismiss-subscribe"><?php esc_html_e( 'Dismiss', 'bizpoint' ); ?></a>
            </div>
        </div>
    <?php endif; ?>

    <?php if( empty( $bp_dismiss_request_feature ) ) : ?>
        <div class="bp-col" data-bp-id="bp-dismiss-request-feature">
            <div class="postbox">
                <h4 class="col-title"><?php esc_html_e( 'Request a Feature', 'bizpoint' ); ?></h4>
                <p>
                    <?php echo wp_kses_post( 'We want to improve this theme continuously and make it more and more useful for users like you. You can ask for a feature in the theme and we will consider working on it in future updates.', 'bizpoint' ); ?>
                </p>
                <a href="https://wordpress.org/support/theme/bizpoint#new-topic-0" class="button" target="_blank"><?php esc_html_e( 'Post your request', 'bizpoint' ); ?></a>
                <a href="#" class="ml-10 bp-dismiss-link" id="bp-dismiss-request-feature"><?php esc_html_e( 'Dismiss', 'bizpoint' ); ?></a>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- /.bp-section-wrap -->
