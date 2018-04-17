<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bizpoint
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main bizp-panel">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title h3"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bizpoint' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bizpoint' ); ?></p>

					<?php
						get_search_form();
					?>

					<h5 class="mt-4"><?php esc_html_e( 'You can try following links:', 'bizpoint' ); ?></h5>
					<nav class="">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            ) );
                        ?>
                    </nav>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
