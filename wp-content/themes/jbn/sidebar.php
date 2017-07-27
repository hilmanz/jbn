
<div id="sidebar">
   <div  class="recent-post">
    <?php 
      if ( in_category( array( 'pengumuman' ) )) { ?>
          <h2 class="widget-title"><?php echo get_cat_name(3);?></h2>
           <?php $recent = new WP_Query("orderby=id&showposts=5&cat=3"); while($recent->have_posts()) : $recent->the_post();?>
                    <article class="postrow">
                        <div class="entries-content">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-meta">
                                <a href="<?php the_permalink(); ?>" class="read"><i class="icon-book4"></i> BACA</a> /
                                <span class="date"><?php the_time('jS F Y') ?></span>
                             </div><!-- .entry-meta -->
                        </div><!-- .mainEntry -->
                    </article><!-- .post1colom -->
            <?php endwhile; ?>
     <?php }elseif ( in_category( array( 'announcement' ) )) { ?>
          <h2 class="widget-title"><?php echo get_cat_name(61);?></h2>
          <?php $recent = new WP_Query("orderby=id&showposts=5&cat=61"); while($recent->have_posts()) : $recent->the_post();?>
                    <article class="postrow">
                        <div class="entries-content">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-meta">
                                <a href="<?php the_permalink(); ?>" class="read"><i class="icon-book4"></i> BACA</a> /
                                <span class="date"><?php the_time('jS F Y') ?></span>
                             </div><!-- .entry-meta -->
                        </div><!-- .mainEntry -->
                    </article><!-- .post1colom -->
            <?php endwhile; ?>
     <?php }elseif ( in_category( array( 'siaran-pers' ) )) { ?>
          <h2 class="widget-title"><?php echo get_cat_name(12);?></h2>
          <?php $recent = new WP_Query("orderby=id&showposts=5&cat=12"); while($recent->have_posts()) : $recent->the_post();?>
                    <article class="postrow">
                        <div class="entries-content">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-meta">
                                <a href="<?php the_permalink(); ?>" class="read"><i class="icon-book4"></i> BACA</a> /
                                <span class="date"><?php the_time('jS F Y') ?></span>
                             </div><!-- .entry-meta -->
                        </div><!-- .mainEntry -->
                    </article><!-- .post1colom -->
            <?php endwhile; ?>
     <?php }elseif ( in_category( array( 'press-releases') )) { ?>
          <h2 class="widget-title"><?php echo get_cat_name(48);?></h2>
          <?php $recent = new WP_Query("orderby=id&showposts=5&cat=48"); while($recent->have_posts()) : $recent->the_post();?>
                    <article class="postrow">
                        <div class="entries-content">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-meta">
                                <a href="<?php the_permalink(); ?>" class="read"><i class="icon-book4"></i> BACA</a> /
                                <span class="date"><?php the_time('jS F Y') ?></span>
                             </div><!-- .entry-meta -->
                        </div><!-- .mainEntry -->
                    </article><!-- .post1colom -->
            <?php endwhile; ?>
     <?php  }else{ ?>
          <?php 
           $currentlang = pll_current_language();
          if ($currentlang == 'en') { ?>
          <h2 class="widget-title"><?php echo get_cat_name(21);?></h2>
          <?php } elseif ($currentlang== 'id') { ?>
          <h2 class="widget-title"><?php echo get_cat_name(1);?></h2>
          <?php } ?>
          <?php $recent = new WP_Query("orderby=id&showposts=5&cat=1"); while($recent->have_posts()) : $recent->the_post();?>
                    <article class="postrow">
                        <div class="entries-content">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-meta">
                                <a href="<?php the_permalink(); ?>" class="read"><i class="icon-book4"></i> BACA</a> /
                                <span class="date"><?php the_time('jS F Y') ?></span>
                             </div><!-- .entry-meta -->
                        </div><!-- .mainEntry -->
                    </article><!-- .post1colom -->
            <?php endwhile; ?>
   <?php   }  ?>
  </div><!-- #recent-post -->
  <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
  <?php endif; ?>
    
</div>
<!-- END #SIDEBAR -->
 