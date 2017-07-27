<?php
	// Create EVENT
	add_action( 'init', 'create_event' );
	function create_event() {
	  $labels = array(
		'name' => _x('Event', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'add_new' => _x('Add New Event', ' Event'),
		'add_new_item' => __('Add New  Event'),
		'edit_item' => __('Edit  Event'),
		'new_item' => __('New  Event'),
		'view_item' => __('View  Event'),
		'search_items' => __('Search  Event'),
		'not_found' =>  __('No Event found'),
		'not_found_in_trash' => __('No Event found in Trash'),
		'parent_item_colon' => ''
	  );

	  $supports = array('title','revisions');
	  register_post_type( 'event',
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
	function event_metabox( $meta_event ) {
			$prefix = '_cmb_'; // Prefix for all fields
			$meta_event[] = array(
				'id' => 'new_event',
				'title' => 'Add Event',
				'pages' => array('event'), // post type
				'context' => 'normal',
				'priority' => 'high',
				'show_names' => true, // Show field names on the left
				'fields' => array(
				array(
					'name' => 'Event Subtitle',
					'id' => $prefix . 'event_subtitle',
					'type' => 'text'
				),
					array(
						'name' => 'Event Description',
						'id' => $prefix . 'event_desc',
						'type' => 'wysiwyg'
					),
					array(
						'name' => 'Event Venue',
						'id' => $prefix . 'event_venue',
						'type' => 'text'
					),
					array(
						'name' => 'Event Date',
						'id' => $prefix . 'event_date',
						'type' => 'text'
					),
					array(
						'name' => 'Event Time',
						'id' => $prefix . 'event_time',
						'type' => 'text'
					),
					array(
						'name'    => 'Event Type',
						'id'      => $prefix . 'eventtype',
						'type'    => 'select',
						'options' => array(
							array( 'name' => 'Major Event', 'value' => 'Major Event', ),
							array( 'name' => 'Weekly Event', 'value' => 'Weekly Event', ),
						),
					),
					array(
						'name' => 'Event Poster Thumbnail',
						'desc' => 'Upload an image or enter an URL. 600x400 Pixel',
						'id'   => $prefix . 'eventthumb',
						'type' => 'file',
					),
					array(
						'name' => 'Event Poster',
						'desc' => 'Upload an image or enter an URL. 1200x800 Pixel',
						'id'   => $prefix . 'eventbanner',
						'type' => 'file',
					),
				),
			);

			return $meta_event;
		}

		add_filter( 'cmb_meta_boxes', 'event_metabox' );
		add_action( 'init', 'be_initialize_cmb_event_metabox', 9999 );
		function be_initialize_cmb_event_metabox() {
			if ( !class_exists( 'cmb_Meta_Box' ) ) {
				require_once( 'functions/init.php' );
			}
		}


?>
