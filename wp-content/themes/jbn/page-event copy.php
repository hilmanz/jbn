<?php
/**
 * Template Name: Event
 *
 */
get_header(); ?>
<?php
if(have_posts()) :
    while(have_posts()) :
    the_post();
?>

<div id="page" class="<?php post_class(); ?>">
  <div class="container">

        <div id="slider">
          <div class="flexslider">
            <ul class="slides">

                <?php $queryObject = new WP_Query( 'post_type=event' );
                              if ($queryObject->have_posts()) { ?>
                                  <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                                      <?php $event_subtitle = get_post_meta( $post->ID, '_cmb_event_subtitle', true );
                                            $event_desc	    = get_post_meta( $post->ID, '_cmb_event_desc', true );
                                            $event_venue    = get_post_meta( $post->ID, '_cmb_event_venue', true );
                                            $event_date	    = get_post_meta( $post->ID, '_cmb_event_date', true );
                                            $event_time     = get_post_meta( $post->ID, '_cmb_event_time', true );
                                            $eventtype      = get_post_meta( $post->ID, '_cmb_eventtype', true );
                                            $eventthumb	    = get_post_meta( $post->ID, '_cmb_eventthumb', true );
                                            $eventbanner		= get_post_meta( $post->ID, '_cmb_eventbanner', true );
                                       ?>
                                        <li>
                                            <div class="slider-wrapper ">
                                                <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $eventbanner; ?>"/>
                                                <div class="eventContent">
                                                  <div class="eventContainer">
                                                      <h2>UPCOMING<br>EVENTS</h2>
                                                      <div class="eventtype">
                                                        <span><?php echo $eventtype; ?></span>
                                                      </div>
                                                      <div class="eventdate">
                                                        <span><?php echo $event_date; ?></span>
                                                      </div>
                                                      <div class="eventbox">
                                                        <h3><?php the_title(); ?></h3>
                                                        <h4><?php echo $event_subtitle; ?></h4>
                                                        <span class="eventvenue"><?php echo $event_venue; ?></span>
                                                        <span class="eventtime"><?php echo $event_time; ?></span>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </li>
                                  <?php } ?>
                              <?php } else { ?>

                              <?php } ?>
            </ul>
          </div>
        </div><!-- END #slider -->
  </div>
</div><!-- END #page -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
