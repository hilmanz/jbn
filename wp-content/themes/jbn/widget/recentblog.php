<div class="row">
  <div class="col-md-4">
      <div class="titlebox">
        <h3>NEWS<br>&amp;<br>UPDATES</h3>
      </div>
  </div>
  <div class="col-md-8">
    <div class="latestpost">
            <?php  $recent = new WP_Query("orderby=id&showposts=8&cat=1");
                    while($recent->have_posts()) : $recent->the_post();
                    $id = $post->ID;
             ?>
              <div id="post-<?php echo $id ?>" class="pos-item ">
                      <div class="entry">
                          <div class="posmeta">
                          <span class="date"><?php the_time('jS F Y') ?></span>
                          <h3 class="contentTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          </div>
                      </div><!-- .entry -->
              </div><!-- END .pos-item -->
          <?php endwhile; ?>
    </div>
  </div>
</div>
