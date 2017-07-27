<?php
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	get_header(); 
?>

<div id="page" class="<?php post_class(); ?>">
    <div id="slider">
        <div class="slider-wrapper">
            <div class="slidecontent">
			<h1 class="center"><span class=""><?php  printf( __( '%s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></span></h1>
            <a href="#footer" class="scrolldown"><i class="icon-chevron-down"></i></a>
            </div>
        </div>
    </div><!-- END #slider -->
    <div id="section-list" class="section">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="theContent clearfix">
                        <div class="w900">
                			<?php include(TEMPLATEPATH."/content-loop.php");?>
                        </div>
                    </div>
                </div><!-- END .col-md-12 -->
            </div><!-- END .row -->
         </div> <!-- END .container -->
    </div>  
</div><!-- END #page -->
<?php get_footer(); ?>