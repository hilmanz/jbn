<div class="row">
<div class="col-md-8">
    <div class="latestevent">
      <?php $queryObject = new WP_Query( 'post_type=event&showposts=1' );
        if ($queryObject->have_posts()) { ?>
          <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
              <?php $event_subtitle   = get_post_meta( $post->ID, '_cmb_event_subtitle', true );
                    $event_desc	      = get_post_meta( $post->ID, '_cmb_event_desc', true );
                    $event_venue      = get_post_meta( $post->ID, '_cmb_event_venue', true );
                    $event_date       = get_post_meta( $post->ID, '_cmb_event_date', true );
                    $event_time       = get_post_meta( $post->ID, '_cmb_event_time', true );
                    $eventtype        = get_post_meta( $post->ID, '_cmb_eventtype', true );
                    $eventthumb       = get_post_meta( $post->ID, '_cmb_eventthumb', true );
                    $eventbanner      = get_post_meta( $post->ID, '_cmb_eventbanner', true );
               ?>
                 <div class="eventposter">
                     <a href="<?php the_permalink(); ?>"><img src="<?php echo $eventthumb; ?>" alt="<?php the_title(); ?>" /></a>
                 </div><!-- END .teambox -->
          <?php } ?>
          <?php } else { ?>

      <?php } ?>
    </div>
  </div>
  <div class="col-md-4">
      <div class="titlebox">
        <h3>UPCOMING <br>&amp;<br>EVENTS</h3>
      </div>
      <div class="catevent">
        <a href="<?php echo home_url( '/' ); ?>major-events">MAJOR EVENT</a>
        <a href="<?php echo home_url( '/' ); ?>weekly-events" class="current">WEEKLY EVENT</a>
      </div>
      <a href="<?php echo home_url( '/' ); ?>upcoming-events" class="moredetail">MORE EVENTS</a>
  </div>
</div>
