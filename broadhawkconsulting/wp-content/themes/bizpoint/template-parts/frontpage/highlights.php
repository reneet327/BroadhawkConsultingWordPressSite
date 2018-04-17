<!-- Highlight Section -->
<section class="bp-section high-section">
    <header class="bp-section-header">
        <h3 class="section-title"><?php echo esc_html( get_theme_mod( 'highlight_title' ) ); ?></h3>
        <p class="section-subtitle">
            <?php echo esc_html( get_theme_mod( 'highlight_subtitle' ) ); ?>
        </p>
    </header>

    <?php
        // Get Highlights
        $high_page_1_id = get_theme_mod( 'high_page_1' );
        $high_page_2_id = get_theme_mod( 'high_page_2' );
        $high_page_3_id = get_theme_mod( 'high_page_3' );
        $high_page_1 = get_post( $high_page_1_id );
        $high_page_2 = get_post( $high_page_2_id );
        $high_page_3 = get_post( $high_page_3_id );
    ?>

    <div class="container">
        <div class="row">
            <?php if( $high_page_1_id ) : ?>
                <div class="col-sm-4">
                    <div class="card">
                        <?php echo get_the_post_thumbnail( $high_page_1, 'medium', array( 'class' => 'card-img-top bp-high-img' ) ); ?>
                        <div class="card-body">
                            <?php if( get_theme_mod( 'highlight_title_link' ) ) : ?>
                                <h6 class="card-title"><a href="<?php echo esc_url( get_post_permalink( $high_page_1, true ) ); ?>"><?php echo esc_html( $high_page_1->post_title ); ?></a></h6>
                            <?php else : ?>
                                <h6 class="card-title"><?php echo esc_html( $high_page_1->post_title ); ?></h6>
                            <?php endif; ?>
                            <p class="card-text text-muted"><?php echo esc_html( bizpoint_get_short_excerpt( 15, $high_page_1 ) ); ?></p>
                            <?php if( get_theme_mod( 'highlight_read_more_link' ) ) : ?>
                                <small><a href="<?php echo esc_url( get_post_permalink( $high_page_1, true ) ); ?>" class="card-link"><?php esc_html_e( 'Read More', 'bizpoint' ) ?></a></small>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $high_page_2_id ) : ?>
                <div class="col-sm-4">
                    <div class="card">
                        <?php echo get_the_post_thumbnail( $high_page_2, 'medium', array( 'class' => 'card-img-top bp-high-img' ) ); ?>
                        <div class="card-body">
                            <?php if( get_theme_mod( 'highlight_title_link' ) ) : ?>
                                <h6 class="card-title"><a href="<?php echo esc_url( get_post_permalink( $high_page_2, true ) ); ?>"><?php echo esc_html( $high_page_2->post_title ); ?></a></h6>
                            <?php else : ?>
                                <h6 class="card-title"><?php echo esc_html( $high_page_2->post_title ); ?></h6>
                            <?php endif; ?>
                            <p class="card-text text-muted"><?php echo esc_html( bizpoint_get_short_excerpt( 15, $high_page_2 ) ); ?></p>
                            <?php if( get_theme_mod( 'highlight_read_more_link' ) ) : ?>
                                <small><a href="<?php echo esc_url( get_post_permalink( $high_page_2, true ) ); ?>" class="card-link"><?php esc_html_e( 'Read More', 'bizpoint' ) ?></a></small>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $high_page_3_id ) : ?>
                <div class="col-sm-4">
                    <div class="card">
                        <?php echo get_the_post_thumbnail( $high_page_3, 'medium', array( 'class' => 'card-img-top bp-high-img' ) ); ?>
                        <div class="card-body">
                            <?php if( get_theme_mod( 'highlight_title_link' ) ) : ?>
                                <h6 class="card-title"><a href="<?php echo esc_url( get_post_permalink( $high_page_3, true ) ); ?>"><?php echo esc_html( $high_page_3->post_title ); ?></a></h6>
                            <?php else : ?>
                                <h6 class="card-title"><?php echo esc_html( $high_page_3->post_title ); ?></h6>
                            <?php endif; ?>
                            <p class="card-text text-muted"><?php echo esc_html( bizpoint_get_short_excerpt( 15, $high_page_3 ) ); ?></p>
                            <?php if( get_theme_mod( 'highlight_read_more_link' ) ) : ?>
                                <small><a href="<?php echo esc_url( get_post_permalink( $high_page_3, true ) ); ?>" class="card-link"><?php esc_html_e( 'Read More', 'bizpoint' ) ?></a></small>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Highlight Section -->
