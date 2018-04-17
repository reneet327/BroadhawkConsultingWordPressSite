<!-- Features Section -->
<section class="bp-section features-section">
    <header class="bp-section-header">
        <h3 class="section-title"><?php echo esc_html( get_theme_mod( 'features_title' ) ); ?></h3>
        <p class="section-subtitle">
            <?php echo esc_html( get_theme_mod( 'features_subtitle' ) ); ?>
        </p>
    </header>

    <?php
        // Get Features
        $feature_page_ids = get_theme_mod( 'feature_page_ids' );
    ?>

    <div class="container">
        <div class="row">
            <?php if( $feature_page_ids ) : ?>
                <?php foreach( $feature_page_ids as $feature_page_id ) : ?>
                    <?php $feature_page = get_post( $feature_page_id['feature_page'] ); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <?php if( get_theme_mod( 'feature_title_link' ) ) : ?>
                            <h6><a href="<?php echo esc_url( get_post_permalink( $feature_page, true ) ); ?>"><?php echo esc_html( $feature_page->post_title ); ?></a></h6>
                        <?php else : ?>
                            <h6><?php echo esc_html( $feature_page->post_title ); ?></h6>
                        <?php endif; ?>

                        <p class="text-muted"><?php echo esc_html( bizpoint_get_short_excerpt( 25, $feature_page ) ); ?></p>
                        <?php if( get_theme_mod( 'feature_read_more_link' ) ) : ?>
                            <small><a href="<?php echo esc_url( get_post_permalink( $feature_page, true ) ); ?>" class="card-link"><?php esc_html_e( 'Read More', 'bizpoint' ) ?></a></small>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Features Section -->
