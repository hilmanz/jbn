<?php
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	get_header(); 
?>
<div id="page" class="<?php post_class(); ?>">
    <div id="slider" >
  <div class="container">
    <div class="row">
    <div class="flexslider">
      <ul class="slides">

           <?php $queryObject = new WP_Query( 'post_type=slider&showposts=10' );
                // The Loop!
                if ($queryObject->have_posts()) { ?>
                    <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                        <?php $text_banner = get_post_meta( $post->ID, '_cmb_text_banner', true );
                              $slide_img = get_post_meta( $post->ID, '_cmb_slide_img', true );
                         ?>
                          <li>
                              <div class="slider-wrapper ">
                                  <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $slide_img; ?>"/>
                              </div>
                          </li>

                    <?php } ?>
                <?php } else { ?>
                  <li>
                      <div class="slider-wrapper ">
                        <img src="<?php bloginfo('template_directory'); ?>/content/slider/slider1.jpg"/>
                        <div class="slidecontent">
                          <h2>JBN</h2>
                          <div class="fl">
                            <p>  is a referrals club to develop every member’s business,
brand or portfolio through referrals, strategic information,
access to valuable contacts and best practices.</p>
                            <a href="<?php echo home_url( '/' ); ?>about" class="moredetail">MORE DETAILS</a>
                          </div>
                        </div>
                      </div>
                  </li>
                <?php } ?>
      </ul>
    </div>
  </div>
  </div>
</div><!-- END #slider -->
    <div id="section-list" class="section-detail">
         <div class="container">
            <div class="titlebox">
                <h3><?php  printf( __( '%s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="theContent clearfix">
                        <div class="w900">
                        <?php if (category_description( $category ) == '') : ?>
                        <?php else : ?>
                        <div class="catdesc"><?php echo category_description(); ?></div>
                        <?php endif; ?>
                        <?php 
                        if (have_posts()) : ?>
                        <?php include(TEMPLATEPATH."/content-loop.php"); ?>
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
         </div> <!-- END .container -->
    </div>  
</div><!-- END #page -->
<?php get_footer(); ?>