<!doctype html>
<?php bizpoint_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php bizpoint_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php bizpoint_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php bizpoint_body_top(); ?>
	<div class="<?php if ( get_theme_mod( 'boxed_site' ) ) : echo 'container'; endif; ?> bp-content-bg">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bizpoint' ); ?></a>

			<?php bizpoint_header_before(); ?>

			<?php bizpoint_header(); ?>

			<?php bizpoint_header_after(); ?>

			<div id="content" class="site-content pt-0">
				<div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo ''; endif; ?>">
					<div class="row <?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'ml-0 mr-0'; endif; ?>">
