<div class="loopContainer">
<?php
 global $wp_query;
if (have_posts()) :
	$postcount=0;
	while (have_posts()) : the_post();
		$postcount++;
	?>
        <div class="row show-grid">
            <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                <article class="postList">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>" class="thumb thumb-medium">
                                <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'mediumThumb' ); ?>
                                <?php else : ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="" />
                                <?php endif; ?>
                            
                            </a>
                        </div><!-- END .col-md-4 -->
                        <div class="col-md-8">
                            <div class="entry">
                                <h3 class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <div class="entry-meta">
                                    <span class="date"><?php the_time('jS F Y') ?></span>
                                 </div><!-- .entry-meta -->
                                  <p><?php if ($post->post_excerpt != "" ) { 
                                          
                                        $excerpt = get_the_excerpt();
                                        echo string_limit_words($excerpt,30);
                                      }
                                      else { the_content_rss('', FALSE, '', 30); } ?> 
                                   </p>  
                            </div><!-- .entry -->
                        </div><!-- END .col-md-8 -->
                    </div><!-- END .row -->
                </article>
            </div><!-- END .col-md-6 -->
        </div><!-- END .row -->
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

</div><!-- END .loopContainer -->
<?php  acit_pagination(); ?>