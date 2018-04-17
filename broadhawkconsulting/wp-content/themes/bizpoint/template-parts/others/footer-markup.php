<div class="bp-footer-bg <?php if ( is_front_page() ) : echo "mt-0"; endif; ?>">
    <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container'; endif; ?>">
        <div class="row">
            <?php if( get_theme_mod( 'bp_footer_layout', '1' ) == '1' ) : ?>
                <div class="col-md-12">
                    <footer id="colophon" class="site-footer">
                        <div class="site-info text-center">
                            <?php $theme_author_url = 'https://themes.salttechno.com'; ?>
                            <?php echo sprintf( wp_kses( __( 'BizPoint, a <a href="%s" target="_blank">WordPress theme by SaltTechno</a>.', 'bizpoint' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( $theme_author_url ) ); ?>
                        </div><!-- .site-info -->
                    </footer><!-- #colophon -->
                </div>
                <!-- /.col-md-12 -->
            <?php else : ?>
                <div class="col-md-6 text-center text-md-left">
                    <footer id="colophon" class="site-footer">
                        <div class="site-info">
                            <?php esc_html_e( 'BizPoint.', 'bizpoint' ) ?>
                        </div><!-- .site-info -->
                    </footer><!-- #colophon -->
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <footer id="colophon" class="site-footer">
                        <div class="site-info">
                            <?php $theme_author_url = 'https://themes.salttechno.com'; ?>
                            <?php echo sprintf( wp_kses( __( 'A <a href="%s" target="_blank">WordPress theme by SaltTechno</a>.', 'bizpoint' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( $theme_author_url ) ); ?>
                        </div><!-- .site-info -->
                    </footer><!-- #colophon -->
                </div>
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.bp-footer-bg -->
