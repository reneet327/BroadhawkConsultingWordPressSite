<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation( array(
				'next_text'         => __( '<span class="btn btn-primary">Newer Posts</span>', 'bizpoint' ),
				'prev_text'         => __( '<span class="btn btn-primary">Older Posts</span>', 'bizpoint' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
