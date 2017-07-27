<?php
// Add Shortcode
	function youtube_shortcode( $atts ) {
	
		// Attributes
		extract( shortcode_atts(
			array(
				'id' => '',
				'width' => '',
				'height' => '',
			), $atts )
		);
	
		// Code
	return '<iframe width="' . $width . '" height="' . $height . '" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>';
	
	}
	add_shortcode( 'youtube', 'youtube_shortcode' );
	
	function embosstitle_shortcode( $atts ) {
	
		// Attributes
		extract( shortcode_atts(
			array(
				'title' => '',
			), $atts )
		);
	
		// Code
	return '<h2 class="emboss-title"><span class="">' . $title . '</span></h2>';
	
	}
	add_shortcode( 'embosstitle', 'embosstitle_shortcode' );
	
	function lightbox_shortcode( $atts , $content = null ) {
		// Attributes
		extract( shortcode_atts(
			array(
				'id' => '',
				'title' => '',
				'class' => '',
			), $atts )
		);
	
		// Code
	return '<a href="#' . $id . '" class="button popup-with-zoom-anim showPopup ' . $class . '" data-effect="mfp-zoom-in">' . $title . '</a>
            <div id="' . $id . '" class="zoom-anim-dialog mfp-hide popupcontent">' . $content . '</div>';
	
	}
	add_shortcode( 'lightbox', 'lightbox_shortcode' );
?>