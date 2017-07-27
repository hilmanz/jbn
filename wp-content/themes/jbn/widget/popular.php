<div class="recentpost">
		<h3 class="orange">ARTIKEL TERPOPULER</h3>
        
          <?php
		query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&showposts=5');
		?>
		<?php while(have_posts()) : the_post(); ?>
						 <article class="post">
							<div class="entries">
								 <div class="entry-meta">
									<span class="date"><?php the_time('jS F Y') ?></span>
								 </div><!-- .entry-meta -->
								<h5 class="cat">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
							</div><!-- .entries -->
						</article><!-- .post -->
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
            
</div><!-- .recentpost -->