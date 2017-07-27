<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-content  boxPost boxed post post-gallery">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
        <?php the_content(); ?>
    </div><!-- END .blog-content -->
</article>