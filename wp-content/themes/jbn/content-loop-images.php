<div class="loopContainer">
        <div class="row show-grid">
<?php
 global $wp_query;
if (have_posts()) :
	$postcount=0;
	while (have_posts()) : the_post();
		$postcount++;
	?>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="0.3s">
                <article class="postList">
                            <a href="<?php the_permalink(); ?>" class="thumb thumb-medium">
                                <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'landscape' ); ?>
                                <?php else : ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="" />
                                <?php endif; ?>
                            
                            </a>
                                <h3 class="caption-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </article>
            </div><!-- END .col-md-6 -->
	<?php
	endwhile; ?>

<?php else : ?>
		<div id="not-found" class="center">
					<h1 class="title bold" style="font-size:120px">404</h1>
					<h2>Nothing Found</h2>
					<h3>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h3><br />
					 <div><?php get_search_form(); ?>  </div>     
		</div>
<?php endif; ?>
        </div><!-- END .row -->

</div><!-- END .loopContainer -->
<?php  acit_pagination(); ?>