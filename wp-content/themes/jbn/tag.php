<?php
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	get_header(); 
?>
<div id="slider">
    <div class="flexslider">
      <ul class="slides">
        <li>
            <div class="slider-wrapper">
				<img src="<?php bloginfo('template_directory'); ?>/content/jenisbisnis.jpg"/>
                <div class="slidecontent">
                <h4><?php echo tag_description(); ?></h4>
                </div>
            </div>
        </li>
      </ul>
    </div>
</div><!-- END #slider -->
<div id="body">
    <div class="titlebox">
        <div class="container">
        	<div class="row">
       		 <h3><?php  printf( __( '%s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h3>
        	</div>
        </div><!-- END .container -->
    </div>
    <section class="section">
        <div class="container" id="tagcontainer">
            <div class="row">
                <div class="col-md-12">
                    <div class="theContent clearfix">
                        <div class="w900">
                        <?php 
						if (have_posts()) :
						 include(TEMPLATEPATH."/content-loop2.php");
						
						 ?>
						<?php else : ?>
                                <div id="not-found" class="center">
                                            <h1 class="title bold" style="font-size:120px">404</h1>
                                            <h2>Nothing Found</h2>
                                            <h3>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h3><br />
                                             <div><?php get_search_form(); ?>  </div>     
                                </div>
                        <?php endif; ?>
                    </div>
                    </div><!-- END .the-content -->
                </div><!-- END .col-md-8 -->
            </div><!-- END .row -->
        </div><!-- END .container -->
    </section><!-- END .section -->
</div>  <!-- END #body -->
<?php get_footer(); ?>