<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-content  boxPost boxed post post-aside">
        <p class="mini-meta"><a href="<?php the_permalink(); ?>"><?php the_author(); ?> @ <?php the_time('F j, Y'); ?></a></p>
        <?php the_content(); ?>
    </div><!-- END .blog-content -->
</article>