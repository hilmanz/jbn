
 <div  class="recent-post categorybox-1colom">
                    <h2 class="cat-title"><?php echo get_cat_name(1);?></h2>
      <?php $recent = new WP_Query("orderby=id&showposts=5"); while($recent->have_posts()) : $recent->the_post();?>
                <article class="postrow">
                    <div class="entry-content">
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div><!-- .mainEntry -->
                </article><!-- .post1colom -->
        <?php endwhile; ?>
</div><!-- #recent-post -->