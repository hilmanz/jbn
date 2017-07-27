<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head --><head>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--Title-->
	<title>
		<?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );?>
	</title>
    <meta name="keywords" content="" />
    
    <?php
        if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
        wp_head();
    ?>
	<!--Stylesheets-->

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/magnific-popup/magnific-popup.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/flexslider/flexslider.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/superfish/css/superfish.css" media="screen">
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/eufont/eufont.css" type="text/css"  media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/SlickNav/slicknav.min.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" type="text/css"  media="all" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/modernizr.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.js"></script>
    <!--Favicon-->
    <link href="<?php bloginfo('template_directory'); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" sizes="32x32"> 
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.appear.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.easing.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.cookie.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.stellar.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/flexslider/jquery.flexslider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery.validate.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/superfish/js/superfish.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/superfish/js/hoverIntent.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/SlickNav/jquery.slicknav.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/vendor/custom.js"></script>
</head>             
<body <?php body_class(); ?>>

<section id="container">
    <header class="header">
		<?php include(TEMPLATEPATH.'/widget/menu.php');?>
    </header>
	<section id="main-content">
    	<section class="main-content">