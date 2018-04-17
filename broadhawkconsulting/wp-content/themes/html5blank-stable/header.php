<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Cusom font -->
		<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
		<!-- Icons -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <!--Corporate Logo  -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src='http://rtgrafix.com/broadhawkconsulting/wp-content/uploads/2018/04/FBLogo.jpg' alt='corporate logo' width='250'/></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <div class="nav navbar-nav navbar-right">
					<!-- Dynamic Navwalker nav bar -->



            <?php
							wp_nav_menu( array(
							    'theme_location'    => 'primary',
							    'depth'             => 2,
							    'container'         => 'div',
							    'container_class'   => 'collapse navbar-collapse',
							    'container_id'      => 'bs-example-navbar-collapse-1',
							    'menu_class'        => 'nav navbar-nav',
							    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							    'walker'            => new WP_Bootstrap_Navwalker(),
							) );
          ?>
				</div>
        </div>
      </div>
    </nav>
  </header>
