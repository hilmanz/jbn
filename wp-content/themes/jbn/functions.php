<?php

global $th_pre; // theme prefix for get option
global $th_messages;	// for handling messages

$th_pre	= "eureka_";

// defining file folder

	define('ADMINFUNC'		,STYLESHEETPATH.'/admin/');
	define('THEMEFUNC'		,STYLESHEETPATH.'/functions/');

// defining link
	define('THEMELINK'	,get_bloginfo("stylesheet_directory"));

//	odd even list post on category
	$odd_or_even = 'odd';

// including file system
	include(ADMINFUNC.'index.php');
	include(ADMINFUNC.'setting.php');
	//include(ADMINFUNC.'customcss.php');
	include(ADMINFUNC.'metabox.php');

// including built-in function file
	include(THEMEFUNC.'paging.php');
	include(THEMEFUNC.'pos-on.php');
	include(THEMEFUNC.'breadcrumbs.php');
	include(THEMEFUNC.'eu-functions.php');
	// include(THEMEFUNC.'carousel_logo.php');
	//include(THEMEFUNC.'slider.php');
	// include(THEMEFUNC.'career.php');
	include(THEMEFUNC.'event.php');
	//include(THEMEFUNC.'shortcode.php');
	//include(THEMEFUNC.'includes/defaults.php');
	//include(THEMEFUNC.'includes/functions.php');
	//include(THEMEFUNC.'includes/actions-filters.php');
	//include(THEMEFUNC.'bootstrap-shortcodes.php');
	//layout


// embedding with external scripts

	function jpeg_quality_callback($arg)
	{ return (int)100; }
	add_filter('jpeg_quality', 'jpeg_quality_callback');


// theme support
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(600,400);
	add_image_size( 'mediumThumb'		, 555, 420,true );
	add_image_size( 'mediumThumb2'		, 500, 300,true );
	add_image_size( 'landscape'			, 600, 250,true );
	add_image_size( 'small'				, 100, 100,true );
	add_image_size( 'smalllandscape'	, 190, 100,true );
	add_image_size( 'banner'			, 1280, 510,true );
	add_image_size( 'catthumb'			, 360, 165,true );

	function add_post_formats() {
		add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link', 'audio' ) );
	}
	add_action( 'after_setup_theme', 'add_post_formats', 20 );

// calling any action
	add_action('init'				,'eurekaThemeInit');
	add_action('admin_head'			,'eurekaAdminHead');
	add_action('admin_footer'		,'eurekaAdminFooter');
	add_action('wp_footer'			,'eurekaFooter');
	add_action('wp_print_scripts'	,'eurekaRegisterScript');
	add_action('wp_print_styles'	,'eurekaRegisterCSS');
	add_action("admin_print_scripts","eurekaAdminRegisterScript");
	add_action("admin_print_styles"	,"eurekaAdminRegisterCSS");
	add_action('after_setup_theme'	,'eurekaRegisterMenu');

// calling any filter
	add_filter('body_class'		,'eurekaBodyClass');
// calling init theme
	function eurekaThemeInit()
	{
		// for registering sidebar
		$args = array(
			'name'          => "Sidebar",
			'id'            => 'sidebar',
			'description'   => '',
			'before_widget' => '<div class="widget"><div class="widget-content">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="widget-title clearfix"><h4>',
			'after_title'   => '</h4></div>',
		);
		$subscribe = array(
			'name'          => "Subscribe Widget",
			'id'            => 'subscribewidget',
			'description'   => '',
			'before_widget' => '<div class="subscribewidget"><div class="subscribewidget-content">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="subscribewidget-title">',
			'after_title'   => '</h5>',
		);
		register_sidebar($args);
		register_sidebar($subscribe);

	}

// built-in functions

	// for registering menu
	function eurekaRegisterMenu()
	{
		register_nav_menu("main-menu","Main Menu");
		register_nav_menu("footer-menu","Footer Menu");
	}

	// register javascript link
	function eurekaRegisterScript()
	{
	}

	// register css link
	function eurekaRegisterCSS()
	{
	}

	// register admin javascript link
	function eurekaAdminRegisterScript()
	{
		wp_register_script('jpicker'		, THEMELINK.'/admin/js/jpicker.js',array('jquery'));
		wp_register_script('my-upload'		, THEMELINK.'/admin/js/script.php?upload=200', array('jquery','media-upload','thickbox'));

		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_enqueue_script('my-upload');
		wp_enqueue_script('jpicker');
	}

	// calling action for admin_head hook
	function eurekaAdminHead()
	{
		?>
        <script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/script.php?upload=30"></script>
        <?php
	}

	// calling action for admin_footer hook
	function eurekaAdminFooter()
	{

	}

	// register admin css link
	function eurekaAdminRegisterCSS()
	{
		wp_register_style('admin'			, THEMELINK.'/admin/css/admin.css');
		wp_register_style('jpicker'			, THEMELINK.'/admin/css/jPicker.css');
		wp_register_style('jpicker-sub'		, THEMELINK.'/admin/css/jPicker-sub.css');

		wp_enqueue_style('admin');
		wp_enqueue_style('jpicker');
		wp_enqueue_style('jpicker-sub');
	}

	// calling any function on footer
	function eurekaFooter()
	{

	}

	/* body_class filtering */
	function eurekaBodyClass($classes,$class = null)
	{
		global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

		if(is_search() || is_single()  || is_category() || is_tag()) :
			$classes[]	= "not-front";
		endif;

		if($is_lynx) 		$classes[] = 'lynx';
		elseif($is_gecko) 	$classes[] = 'gecko';
		elseif($is_opera) 	$classes[] = 'opera';
		elseif($is_NS4) 	$classes[] = 'ns4';
		elseif($is_safari) 	$classes[] = 'safari';
		elseif($is_chrome) 	$classes[] = 'chrome';
		elseif($is_IE) 		$classes[] = 'ie';
		else $classes[] = 'unknown';

		if($is_iphone) $classes[] = 'iphone';


		return $classes;
	}

	function eurekaGetOption($name,$type = 'text',$caption = null)
	{
		global $th_pre;

		$value	= stripslashes(get_option($th_pre.$name));

		if(!empty($value)) :
			switch($type) :

				case "image"	: return "<img src='".$value."' title='".$caption."' />";
								  break;

				case "page"		: $page	= get_page($value);
								  return $page;
								  break;

				case "text"		: return $value;
								  break;

			endswitch;
		endif;

		return '';
	}

	//comments

	if ( ! function_exists( 'wpdesigner_setup' ) ) :
	function wpdesigner_setup() {
		load_theme_textdomain( 'wpdesigner', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'wpdesigner' ),
		) );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		) );
		add_theme_support( 'custom-background', apply_filters( 'wpdesigner_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
	endif; // wpdesigner_setup
	add_action( 'after_setup_theme', 'wpdesigner_setup' );

	//COMMENT FORM FIELD
	add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
	function bootstrap3_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();

		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

		$fields   =  array(
			'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
						'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
			'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
						'<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
		);

		return $fields;
	}
	//COMMENT TEXT AREA
	add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
	function bootstrap3_comment_form( $args ) {
		$args['comment_field'] = '<div class="form-group comment-form-comment">
				<label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
				<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
			</div>';
		return $args;
	}
	//COMMENT BUTTON
	add_action('comment_form', 'bootstrap3_comment_button' );
	function bootstrap3_comment_button() {
		echo '<button class="button" type="submit">' . __( 'SUBMIT' ) . '</button>';
	}

	//WOOCOMMERCE

	add_theme_support( 'woocommerce' );

	add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

	function my_theme_wrapper_start() {
	  echo '<section id="main">';
	}

	function my_theme_wrapper_end() {
	  echo '</section>';
	}



?>
