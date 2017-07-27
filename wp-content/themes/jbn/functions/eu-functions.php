<?php
	
	//remove link di comment
	remove_filter('comment_text', 'make_clickable', 9);
	remove_action('wp_head', 'wp_generator');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	remove_action ('wp_head', 'rsd_link');
	remove_action('wp_head', 'feed_links_extra', 3 );
	remove_action('wp_head', 'feed_links', 2 );
	
	function my_login_stylesheet() {
		wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/style-login.css' );
		wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/vendor/style-login.js' );
	}
	add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
	

	function dashboard_style() {
		wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/dashboard_style.css' );
	}
	add_action('admin_head', 'dashboard_style');
		function remove_footer_admin () {
		echo "BISNIS INSTAN";
	} 
	add_filter('admin_footer_text', 'remove_footer_admin');
	
	function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
	}
	add_filter('pre_site_transient_update_core','remove_core_updates');
	add_filter('pre_site_transient_update_plugins','remove_core_updates');
	add_filter('pre_site_transient_update_themes','remove_core_updates');
	


	function polylang_remove_comments_filter() {
	    global $polylang;
	    remove_filter('comments_clauses', array(&$polylang->filters, 'comments_clauses'));
	}
	add_action('wp','polylang_remove_comments_filter');
	
/*	
	//CUSTOM DASHBOARD PANEL
	add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
	 
	function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	
	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
	}
	
	function custom_dashboard_help() {
	echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
	}
*/	
	//CUSTOM SINGLE
	add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
	);
	//REMOVE SUBMENU
	function remove_submenus() {
	  global $submenu;
	
	  //Dashboard menu
	  unset($submenu['index.php'][10]); // Removes Updates
	  //Posts menu
	 // unset($submenu['edit.php'][5]); // Leads to listing of available posts to edit
	  //unset($submenu['edit.php'][10]); // Add new post
	 // unset($submenu['edit.php'][15]); // Remove categories
	  //unset($submenu['edit.php'][16]); // Removes Post Tags
	  //Media Menu
	  //unset($submenu['upload.php'][5]); // View the Media library
	  //unset($submenu['upload.php'][10]); // Add to Media library
	  //Links Menu
	  //unset($submenu['link-manager.php'][5]); // Link manager
	 // unset($submenu['link-manager.php'][10]); // Add new link
	 // unset($submenu['link-manager.php'][15]); // Link Categories
	  //Pages Menu
	  //unset($submenu['edit.php?post_type=page'][5]); // The Pages listing
	 // unset($submenu['edit.php?post_type=page'][10]); // Add New page
	  //Appearance Menu
	  unset($submenu['themes.php'][5]); // Removes 'Themes'
	//  unset($submenu['themes.php'][7]); // Widgets
	  unset($submenu['themes.php'][15]); // Removes Theme Installer tab
	  //Plugins Menu
	  unset($submenu['plugins.php'][5]); // Plugin Manager
	  unset($submenu['plugins.php'][10]); // Add New Plugins
	  unset($submenu['plugins.php'][15]); // Plugin Editor
	  //Users Menu
	  //unset($submenu['users.php'][5]); // Users list
	 // unset($submenu['users.php'][10]); // Add new user
	 // unset($submenu['users.php'][15]); // Edit your profile
	  //Tools Menu
	  unset($submenu['tools.php'][5]); // Tools area
	  unset($submenu['tools.php'][10]); // Import
	  unset($submenu['tools.php'][15]); // Export
	  unset($submenu['tools.php'][20]); // Upgrade plugins and core files
	  //Settings Menu
	  //unset($submenu['options-general.php'][10]); // General Options
	 // unset($submenu['options-general.php'][15]); // Writing
	 // unset($submenu['options-general.php'][20]); // Reading
	 // unset($submenu['options-general.php'][25]); // Discussion
	  //unset($submenu['options-general.php'][30]); // Media
	  //unset($submenu['options-general.php'][35]); // Privacy
	  //unset($submenu['options-general.php'][40]); // Permalinks
	 // unset($submenu['options-general.php'][45]); // Misc
	
	}
	add_action('admin_menu', 'remove_submenus');
	
	function wps_admin_bar() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_node('wp-logo');
		$wp_admin_bar->remove_node('about');
		$wp_admin_bar->remove_node('wporg');
		$wp_admin_bar->remove_node('documentation');
		$wp_admin_bar->remove_node('support-forums');
		$wp_admin_bar->remove_node('feedback');
		$wp_admin_bar->remove_node('view-site');
	}
	add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );
	//EXCERPT LENGTH
		function string_limit_words($string, $word_limit)
		{
		  $words = explode(' ', $string, ($word_limit + 1));
		  if(count($words) > $word_limit) {
		  array_pop($words);
		  //add a ... at last article when more than limit word count
		  echo implode(' ', $words)."..."; } else {
		  //otherwise
		  echo implode(' ', $words); }
		}
	//EXCERPT LIMIT
    	function excerpt($limit) {
		 $excerpt = explode(' ', get_the_excerpt(), $limit);
		 if (count($excerpt)>=$limit) {
		 array_pop($excerpt);
		 $excerpt = implode(" ",$excerpt).'...';
		 } else {
		 $excerpt = implode(" ",$excerpt);
		 } 
		 $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		 return $excerpt;
		}
	//EXCERPT CONTENT
		function content($limit, $tags = '<p><a>') {
		 $content = get_the_content();
		 // stripping preliminary content of tags.
		 $content = strip_tags($content, $tags);
		 $content = explode(' ', $content, $limit);
		 if (count($content)>=$limit) {
		 array_pop($content);
		 $content = implode(" ",$content).'...';
		 } else {
		 $content = implode(" ",$content);
		 }
		 $content = preg_replace('/\[.+\]/','', $content);
		 $content = apply_filters('the_content', $content);
		 $content = str_replace(']]>', ']]&gt;', $content);
		 // stripping THAT content of tags that may have been added
		 $content = strip_tags($content, $tags);
		 // and strip that of any inline styles
		 $content = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);
		 return $content;
		}
		
	//POPULAR POST
	function wpb_get_post_views($postID){
		$count_key = 'wpb_post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
		}
		return $count.' Views';
	}
	//POPULER
	function observePostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
	$count = 0;
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	}else{
	$count++;
	update_post_meta($postID, $count_key, $count);
	}
	}
	
	function fetchPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	return "0 View";
	}
	return $count.' Views';
	}

	//detect browser
	add_filter('body_class','browser_body_class');
	function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'firefox';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
	}
	
	//Custom Metabox
	add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
	function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}

function default_comments_on( $data ) {
    if( $data['post_type'] == 'success_story' ) {
        $data['comment_status'] = 1;
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'default_comments_on' );

function custom_posts_per_page( $query ) { 
    $houses_archive_posts_per_page = 8;
    $some_other_post_type_posts_per_page = 8;
	
    if ( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'perusahaan' && is_post_type_archive('perusahaan') ) 
        $query->query_vars['posts_per_page'] = $houses_archive_posts_per_page ;  
    else if ( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'bisnis' && is_post_type_archive('bisnis') ) 
	$query->query_vars['posts_per_page'] = $some_other_post_type_posts_per_page ;  
    return $query;  
}  
if ( !is_admin() ) 
    add_filter( 'pre_get_posts', 'custom_posts_per_page' ); 
	
	
?>
