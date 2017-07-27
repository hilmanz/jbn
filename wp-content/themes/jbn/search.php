
 
 <?php
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	get_header(); 
?>

<div id="page" class="<?php post_class(); ?>">

    <div id="slider">
        <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' );
        $url = $thumb['0'];
        ?>
        <div class="slider-wrapper"   <?php if(has_post_thumbnail()) : ?>
                      style="background-image:url(<?=$url?>);" <?php endif; ?> >
        </div>
    </div><!-- END #slider -->
    <div id="section-list" class="section-detail">
         <div class="container">
            <div class="titlebox">
                <h3><?php printf( __( 'Search Results for : %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single-content clearfix">
                            <div <?php post_class(); ?>>
                                <div class="blogSingle clearfix">
                                    <div class="theContent w900">
                                         <?php 
                                            if (have_posts()) :
                                             include(TEMPLATEPATH."/content-loop.php");
                                            
                                             ?>
                                        <?php else : ?>
                                                <div id="not-found" class="center">
                                                            <h1 class="title bold" style="font-size:120px">404</h1>
                                                            <h2>Nothing Found</h2>
                                                            <h3>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h3><br />
                                                             <div><?php get_search_form(); ?>  </div>     
                                                </div>
                                        <?php endif; ?>
                                    </div><!-- END .theContent -->
                                </div>
                            </div>
                    </div><!-- END .the-content -->
                </div><!-- END .col-md-8 -->
            </div><!-- END .row -->
         </div> <!-- END .container -->
    </div>  
</div><!-- END #page -->

<?php get_footer(); ?>