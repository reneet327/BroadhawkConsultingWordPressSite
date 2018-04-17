<?php
/**
 * Static Front Page template file
 */

?>

<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {

        get_header( 'front' ); ?>

        <div id="primary" class="content-area col-12 pl-0 pr-0">
            <main id="main" class="site-main">

                <?php get_template_part( 'template-parts/frontpage/cover' ); ?>
                <?php if( get_theme_mod( 'show_highlights' ) ) : get_template_part( 'template-parts/frontpage/highlights' ); endif; ?>
                <?php if( get_theme_mod( 'show_features' ) ) : get_template_part( 'template-parts/frontpage/features' ); endif; ?>
                <?php if( !get_theme_mod( 'hide_content' ) ) : get_template_part( 'template-parts/frontpage/content' ); endif; ?>
                <?php if( get_theme_mod( 'show_cta' ) ) : get_template_part( 'template-parts/frontpage/cta' ); endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

        <?php
        get_footer();

    }
    else {
        include( get_page_template() );
    }
}
