<?php
	// Create GALLERY
	add_action( 'init', 'create_mygallery' );
	function create_mygallery() {
	  $labels = array(
		'name' => _x('Gallery', 'post type general name'),
		'singular_name' => _x('Gallery', 'post type singular name'),
		'add_new' => _x('Add New Gallery', ' Gallery'),
		'add_new_item' => __('Add New  Gallery'),
		'edit_item' => __('Edit  Gallery'),
		'new_item' => __('New  Gallery'),
		'view_item' => __('View  Gallery'),
		'search_items' => __('Search  Gallery'),
		'not_found' =>  __('No Gallery found'),
		'not_found_in_trash' => __('No Gallery found in Trash'),
		'parent_item_colon' => ''
	  );
	
	  $supports = array('title','revisions','thumbnail');
	  register_post_type( 'mygallery',
		array(
		  'labels' => $labels,
		  'public' => true,
		  'supports' => $supports,
			'has_archive' => true,
			'public' => true,
			'hierarchical' => false,
		)
	  );
	}
	
	// Metabox Slider
	function mygallery_metabox( $meta_mygallery ) {
			$prefix = '_cmb_'; // Prefix for all fields
			$meta_mygallery[] = array(
				'id' => 'new_mygallery',
				'title' => 'Add Gallery',
				'pages' => array('mygallery'), // post type
				'context' => 'normal',
				'priority' => 'high',
				'show_names' => true, // Show field names on the left
				'fields' => array(
					array(
						'name' => 'Deskripsi Gallery',
						'desc' => 'Deskripsi Gallery',
						'id' => $prefix . 'mygallery_desc',
						'type' => 'textarea'
					),
				),
			);
		
			return $meta_mygallery;
		}
		
		add_filter( 'cmb_meta_boxes', 'mygallery_metabox' );
		add_action( 'init', 'be_initialize_cmb_mygallery_metabox', 9999 );
		function be_initialize_cmb_mygallery_metabox() {
			if ( !class_exists( 'cmb_Meta_Box' ) ) {
				require_once( 'functions/init.php' );
			}
		}
		

?>
