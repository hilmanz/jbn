<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-content  boxPost boxed">
        <div class="blog-title">
                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div><!-- END .blog-title -->
        <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="thumb thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
        <?php else : ?>
                <a href="<?php the_permalink(); ?>" class="thumb thumbnail"><img src="<?php bloginfo('template_directory'); ?>/content/default_small.jpg" alt="image not available"  /></a>
        <?php endif; ?>
        <div class="entry-blog">
            <div class="blog-meta">
                <div class="entry-meta">
                      <p class="post-info">
                        <?php the_time('F j, Y g:i a'); ?>
                        | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php the_author(); ?>
                        </a> | Posted in
                        <?php
                                $categories = get_the_category();
                                $separator = ", ";
                                $output = '';
                    
                                if ($categories) {
                    
                                    foreach ($categories as $category) {
                    
                                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
                    
                                    }
                                    echo trim($output, $separator);
                                }
                         ?>
                      </p>
                      <span class="tag-post">
                        <?php if(has_tag()) : ?>
                         <?php the_tags(); ?>
                        <?php endif; ?>
                      </span>
                      <span class="total-comments">
                        <?php comments_number('0', '1', '%'); ?> comments</span>
                      </span>
                </div><!-- END .entry-meta -->
            </div><!-- END .blog-meta -->
            <div class="summary">
                <?php if ($post->post_excerpt != "" ) { ?>
                   <p><?php echo excerpt('20'); ?></p>
                <?php  }else {  echo content('20'); } ?>
            </div>
        </div><!-- END .entry-blog -->
    </div><!-- END .blog-content -->
</article>