<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bizpoint
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bizpoint_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'bizpoint_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function bizpoint_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'bizpoint_pingback_header' );



if ( ! function_exists( 'bizpoint_comments' ) ) {
    function bizpoint_comments( $comment, $args, $depth ) {

    	?>
    	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

            <div class="media bizpoint-comment">
                <?php $avtr_url = get_avatar_url( $comment ); ?>
                <?php if (! empty( $avtr_url )) : ?>
                    <img class="comment-img" src="<?php echo esc_url( get_avatar_url( $comment ) ); ?>" alt="" width="60">
                <?php else : ?>
                    <img class="comment-img" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/default-img.png'; ?>" alt="" width="60">
                <?php endif; ?>
                <div class="media-body ml-3">
                    <h6 class="mt-0 mb-1 comment-author">
                        <?php echo get_comment_author_link(); ?>
                        <?php if ( $comment->comment_author_email == get_the_author_meta( 'email' ) ) : ?>
                            <small class="bizpoint-comment-by-author"><?php echo esc_html__( '&#8226; Post Author &#8226;', 'bizpoint' ) ?></small>
                        <?php endif; ?>
                    </h6>
                    <small class="date mb-3 d-block">
                        <?php
                            /* translators: 1: comment date. */
                            printf(esc_html__('%1$s at %2$s', 'bizpoint'), get_comment_date(),  get_comment_time())
                        ?>
                    </small>
                    <?php if ($comment->comment_approved == '0') : ?>
    					<em class="comment-awaiting"><?php esc_html_e('Comment is awaiting approval', 'bizpoint'); ?></em>
    					<br />
    				<?php endif; ?>
    				<?php comment_text(); ?>

                    <?php
                        $args['before'] = ''
                    ?>

                    <small class="reply">
    					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'bizpoint' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ), $comment->comment_ID ); ?>
    					<?php edit_comment_link( esc_html__( 'Edit', 'bizpoint' ), '<span class="" style="padding: 0 5px;">&middot;</span>' ); ?>
    				</small>
                </div>
            </div>

    	</li>

    	<?php
    }
}



/**
* Get header markup
*/
function bizpoint_get_header() {
	if( get_theme_mod( 'bp_header_layout' ) == '2' ) :
		get_template_part( 'template-parts/header-layouts/layout-2' );
	elseif( get_theme_mod( 'bp_header_layout' ) == '3' ) :
		get_template_part( 'template-parts/header-layouts/layout-3' );
	else :
		get_template_part( 'template-parts/header-layouts/layout-1' );
	endif;
}
add_action( 'bizpoint_header', 'bizpoint_get_header' );



/**
* Get footer markup
*/
function bizpoint_get_footer() {
	get_template_part( 'template-parts/others/footer-markup' );
}
add_action( 'bizpoint_footer', 'bizpoint_get_footer' );



/**
* Functions for customizer notices
*/
function bizpoint_is_not_home() {
	return !is_home();
}
function bizpoint_is_not_static_frontpage() {
	if( get_option( 'show_on_front' ) === 'page' ) {
		return false;
	}
	else {
		return true;
	}
}
function bizpoint_is_default_frontpage() {
	if( get_option( 'show_on_front' ) === 'page' ) {
		$current_frontpage = get_option( 'page_on_front' );
		$current_frontpage_template = get_page_template_slug( $current_frontpage );
		if( $current_frontpage_template === 'page-templates/full-width.php' ) {
			return false;
		}
		else {
			return true;
		}
	}
	else {
		return false;
	}
}

/**
* Add body class for loader
*/
function bizpoint_add_loading_class( $classes ) {
    if ( is_front_page() && !get_theme_mod( 'disable_loading_animation' ) ) {
        $classes[] = 'bp-loading-now';
    }
    return $classes;
}
add_filter( 'body_class', 'bizpoint_add_loading_class' );



/**
* Add Search Box to Navbar
*/
function bizpoint_add_search_form( $items, $args ) {
	if ( get_theme_mod( 'show_search_in_nav' ) ) {
	    if( $args->theme_location == 'menu-1' ){
			$items .= '<li class="menu-item">'
					. '<div class="bp-search-nav-icon">'
					. '<span class="dashicons dashicons-search bp-trigger-search-box"></span>'
					. '<div class="bp-nav-search-box bp-op-0">'
					. get_search_form( false )
					. '</div>'
					. '</div>'
					. '</li>';
	    }
	}
    return $items;
}
add_filter( 'wp_nav_menu_items', 'bizpoint_add_search_form', 10, 2 );



/**
* Return exerpt for frontpage
*/
function bizpoint_get_short_excerpt( $length = 40, $post_obj = null ) {
	global $post;
	if ( is_null( $post_obj ) ) {
		$post_obj = $post;
	}
	$length = absint( $length );
	if ( $length < 1 ) {
		$length = 40;
	}
	$source_content = $post_obj->post_content;
	if ( ! empty( $post_obj->post_excerpt ) ) {
		$source_content = $post_obj->post_excerpt;
	}
	$source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
	$trimmed_content = wp_trim_words( $source_content, $length, '...' );
	return $trimmed_content;
}


/**
* Greet theme users & guide them to help page
*/
function bizpoint_admin_notice(){
	if ( is_admin() ) {
		bizpoint_greet_user();
	}
}
$bp_intro_notice_dismissed = get_option( 'bizpoint-intro-dismissed' );
if( empty( $bp_intro_notice_dismissed ) ) {
	add_action('admin_notices', 'bizpoint_admin_notice');
}

function bizpoint_greet_user() {
	$help_url = esc_url( admin_url( 'themes.php?page=about-bizpoint' ) );
	echo '<div class="notice bizpoint-intro-notice notice-success is-dismissible">';
	echo wp_kses_post( __( '<p>Welcome! Thank you for choosing BizPoint. We are always here to help you. Go to \'BizPoint Help\' page to get any type of help.</p>', 'bizpoint' ) );
	echo "<p><a href='$help_url' class='button button-primary'>";
	esc_html_e( 'Get started with BizPoint', 'bizpoint' );
	echo '</a></p></div>';
}

// Enqueue dismiss script
function bizpoint_admin_scripts() {
	wp_enqueue_script( 'bizpoint-admin', get_template_directory_uri() . '/js/bizpoint-admin.js' );
}
$bp_intro_notice_dismissed = get_option( 'bizpoint-intro-dismissed' );
if( empty( $bp_intro_notice_dismissed ) ) {
	add_action( 'admin_enqueue_scripts' , 'bizpoint_admin_scripts' );
}


// Update option if notice dismissed
add_action( 'wp_ajax_bizpoint-intro-dismissed', 'bizpoint_dismiss_intro_notice' );
function bizpoint_dismiss_intro_notice() {
	update_option( 'bizpoint-intro-dismissed', 1 );
}

// Update option if recommendation notice dismissed
add_action( 'wp_ajax_bizpoint-recommended-dismissed', 'bizpoint_dismiss_recommended_notice' );
function bizpoint_dismiss_recommended_notice() {
	$dismissed_id = 'bp-default-dismiss-id';
	if ( isset( $_POST['bp_option'] ) ) {
		$dismissed_id = sanitize_text_field( wp_unslash( $_POST['bp_option'] ) );
	}
	update_option( $dismissed_id, 1 );
}



/**
* Add admin styles
*/
function bizpoint_admin_style( $hook ) {
	if ( 'appearance_page_about-bizpoint' != $hook ) {
		return;
	}
	wp_enqueue_style( 'bizpoint-admin', get_template_directory_uri() . '/css/bizpoint-admin.css' );
}
add_action( 'admin_enqueue_scripts' , 'bizpoint_admin_style' );



/**
* Add welcome page
*/
function bizpoint_add_welcome_page() {
    $_name = __( 'BizPoint Help' , 'bizpoint' );

    $theme_page = add_theme_page(
        $_name,
        $_name,
        'edit_theme_options',
        'about-bizpoint',
        'bizpoint_welcome_page'
    );
}
add_action( 'admin_menu', 'bizpoint_add_welcome_page', 1 );

function bizpoint_welcome_page() {
	include_once( get_template_directory() . '/inc/views/about.php' );
}


/**
* Demo Import
*/
function bizpoint_ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Demo Import 1',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/demo-1/bizpoint-content-demo-1.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-content/demo-1/bizpoint-widgets-demo-1.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-content/demo-1/bizpoint-customizer-demo-1.dat',
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'demo-content/demo-1/screenshot-demo-1.jpg',
	  'import_notice'                => __( 'Fresh WordPress installation is recommended for demo import. You might need to change some settings like Menu, Frontpage or customizer options if this is not fresh WordPress.', 'bizpoint' ),
      'preview_url'                  => 'https://bizpoint.themesease.com',
    ),
    array(
      'import_file_name'             => 'Demo Import 2',
	  'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/demo-2/bizpoint-content-demo-2.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-content/demo-2/bizpoint-widgtes-demo-2.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-content/demo-2/bizpoint-customizer-demo-2.dat',
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'demo-content/demo-2/screenshot-demo-2.jpg',
	  'import_notice'                => __( 'Fresh WordPress installation is recommended for demo import. You might need to change some settings like Menu, Frontpage or customizer options if this is not fresh WordPress.', 'bizpoint' ),
      'preview_url'                  => 'https://bp-demo-2.themesease.com/',
    ),
	array(
      'import_file_name'             => 'Demo Import 3',
	  'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/demo-3/bizpoint-content-demo-3.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-content/demo-3/bizpoint-widgtes-demo-3.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-content/demo-3/bizpoint-customizer-demo-3.dat',
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'demo-content/demo-3/screenshot-demo-3.jpg',
	  'import_notice'                => __( 'Fresh WordPress installation is recommended for demo import. You might need to change some settings like Menu, Frontpage or customizer options if this is not fresh WordPress.', 'bizpoint' ),
      'preview_url'                  => 'https://bp-demo-3.themesease.com/',
    ),
	array(
      'import_file_name'             => 'Demo Import 4',
	  'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/demo-4/bizpoint-content-demo-4.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-content/demo-4/bizpoint-widgtes-demo-4.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-content/demo-4/bizpoint-customizer-demo-4.dat',
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'demo-content/demo-4/screenshot-demo-4.jpg',
	  'import_notice'                => __( 'Fresh WordPress installation is recommended for demo import. You might need to change some settings like Menu, Frontpage or customizer options if this is not fresh WordPress.', 'bizpoint' ),
      'preview_url'                  => 'https://bp-demo-4.themesease.com/',
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'bizpoint_ocdi_import_files' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Set Front Page & Menu After Import
function bizpoint_ocdi_after_import_setup( $selected_import ) {

	update_option( 'bizpoint-demo-imported', 1 );

	$bp_menu_name = 'Main Menu - BizPoint Demo';
	$bp_front_page_name = 'Homepage - BizPoint Demo';
	$bp_blog_page_name = 'Blog - BizPoint Demo';

	if( 'Demo Import 1' === $selected_import['import_file_name'] ) {
		$bp_menu_name = 'Main Menu - BizPoint Demo 1';
		$bp_front_page_name = 'Homepage - BizPoint Demo 1';
		$bp_blog_page_name = 'Blog - BizPoint Demo 1';
	}
	elseif ( 'Demo Import 2' === $selected_import['import_file_name'] ) {
		$bp_menu_name = 'Main Menu - BizPoint Demo 2';
		$bp_front_page_name = 'Homepage - BizPoint Demo 2';
		$bp_blog_page_name = 'Blog - BizPoint Demo 2';
	}
	elseif ( 'Demo Import 3' === $selected_import['import_file_name'] ) {
		$bp_menu_name = 'Main Menu - BizPoint Demo 3';
		$bp_front_page_name = 'Homepage - BizPoint Demo 3';
		$bp_blog_page_name = 'Blog - BizPoint Demo 3';
	}
	elseif ( 'Demo Import 4' === $selected_import['import_file_name'] ) {
		$bp_menu_name = 'Main Menu - BizPoint Demo 4';
		$bp_front_page_name = 'Homepage – BizPoint Demo 4';
		$bp_blog_page_name = 'Blog - BizPoint Demo 4';
	}

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', $bp_menu_name, 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( $bp_front_page_name );
    $blog_page_id  = get_page_by_title( $bp_blog_page_name );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

	if( defined( 'ELEMENTOR_VERSION' ) ) {
		update_option( 'elementor_disable_color_schemes', 'yes' );
	    update_option( 'elementor_disable_typography_schemes', 'yes' );
	}

}
add_action( 'pt-ocdi/after_import', 'bizpoint_ocdi_after_import_setup' );

// Change One Click Demo Import Name
function bizpoint_ocdi_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Import BizPoint Demos' , 'bizpoint' );
	$default_settings['menu_title']  = esc_html__( 'Import BizPoint Demos' , 'bizpoint' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'pt-one-click-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'bizpoint_ocdi_plugin_page_setup' );


/**
* Return values of theme_mod
*/
function bizpoint_get_theme_mod( $bp_setting ) {
	return get_theme_mod( $bp_setting );
}
