
<div class="featurearticle">
	<?php query_posts( array( 'post_type' => array( 'perusahaan', 'bisnis', 'success_story' ), 'meta_key' => '_cmb_featuredcontent', 'meta_value' => 'on', 'showposts' => 3) );
    if (have_posts()) : while (have_posts()) : the_post();  ?>
                <div class="col-md-4">
                <article class="postFeatured">
                    <div class="thumb small-thumb">
                        <?php if(has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'mediumThumb' ); ?></a>
                        <?php else : ?>
                           <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/content/default.jpg" alt="" /></a>
                        <?php endif; ?>
                            <span class="postcatlabel"><?php the_category(' ') ?></span>
                    
                    </div>
                    <div class="entry-content">
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                         <div class="entry-meta">
                            <span class="date"><?php the_time('jS F Y') ?></span>
                         </div><!-- .entry-meta -->
                         <p><?php if ($post->post_excerpt != "" ) { 
                                
                              $excerpt = get_the_excerpt();
                              echo string_limit_words($excerpt,15);
                            }
                            else { the_content_rss('', FALSE, '', 10); } ?>	
                         </p>	
                    </div><!-- .mainEntry -->
                </article><!-- .post1colom -->
                </div>
	<?php  endwhile;  endif; ?>
</div><!-- END .featurearticle -->