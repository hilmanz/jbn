<div id="tabWidget">
    <div class="tabs">		
        <ul class="tab-nav">
            <li><a href="#tabPopular">POPULAR</a></li>
            <li><a href="#tabTopreview">TOP REVIEW</a></li>
            <li><a href="#tabRecent">RECENT</a></li>
        </ul> 
        <div class="widgetPost" id="tabRecent">
          <?php $recent = new WP_Query("orderby=id&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>
                <div class="rowPost">
                    <a href="<?php the_permalink(); ?>" class="thumb small-thumb">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'small' ); ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="" class="thumb-image" />
                        <?php endif; ?>
                    
                    </a>
                    <div class="row-entry">
                         <div class="entry-meta">
                            <?php acit_posted_on(); ?> 
                         </div><!-- .entry-meta -->
                         <h4 class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div><!-- .row-entry -->
                </div>
            <?php endwhile; ?>
        </div><!-- .widgetPost -->
        
        <div class="widgetPost" id="tabPopular">
        
          <?php wpb_get_post_views(get_the_ID());?>
          <?php $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                <div class="rowPost">
                    <a href="<?php the_permalink(); ?>" class="thumb small-thumb">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'small' ); ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="" class="thumb-image" />
                        <?php endif; ?>
                    
                    </a>
                    <div class="row-entry">
                         <div class="entry-meta">
                            <?php acit_posted_on(); ?> 
                         </div><!-- .entry-meta -->
                         <h4 class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div><!-- .row-entry -->
                </div>
            <?php endwhile; ?>
        </div><!-- .widgetPost -->
        
        <div class="widgetPost" id="tabTopreview">
            <?php $mostcomment = new WP_Query('ignore_sticky_posts=1&orderby=comment_count&posts_per_page=3');
                while ($mostcomment->have_posts()) : $mostcomment->the_post(); { ?>
                <div class="rowPost">
                    <a href="<?php the_permalink(); ?>" class="thumb small-thumb">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'small' ); ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="" class="thumb-image" />
                        <?php endif; ?>
                    
                    </a>
                    <div class="row-entry">
                         <div class="entry-meta">
                            <?php acit_posted_on(); ?> 
                         </div><!-- .entry-meta -->
                         <h4 class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div><!-- .row-entry -->
                </div>
            <?php } endwhile; ?>
            
        </div><!-- .widgetPost -->
    </div><!-- end .tabs -->
</div><!-- end #tabWidget -->
                        