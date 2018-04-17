<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bizp-panel' ); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title h3">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<small class="text-muted"><?php bizpoint_posted_on(); ?></small>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( is_singular() ) : ?>
			<?php if ( !get_theme_mod( 'bp_single_thumbnail' ) ) : ?>
				<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => '' ) ); ?>
			<?php endif; ?>
		<?php else : ?>
			<?php if( is_archive() ) : ?>
				<?php if ( !get_theme_mod( 'bp_archive_thumbnail' ) ) : ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="bizpoint-thumb-link">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
			<?php endif; ?>
			<?php if( is_home() ) : ?>
				<?php if ( !get_theme_mod( 'bp_home_thumbnail' ) ) : ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="bizpoint-thumb-link">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php
		if( is_singular() ) {
			get_template_part( 'template-parts/others/entry-content' );
		}
		else {
			if( is_archive() ) {
				if( !get_theme_mod( 'bp_archive_full_post' ) ) {
					get_template_part( 'template-parts/others/entry-summary' );
				}
				else {
					get_template_part( 'template-parts/others/entry-content' );
				}
			}
			if( is_home() ) {
				if( !get_theme_mod( 'bp_home_full_post' ) ) {
					get_template_part( 'template-parts/others/entry-summary' );
				}
				else {
					get_template_part( 'template-parts/others/entry-content' );
				}
			}
		}
	?>

	<footer class="entry-footer">
		<small class="text-muted"><?php bizpoint_entry_footer(); ?></small>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
