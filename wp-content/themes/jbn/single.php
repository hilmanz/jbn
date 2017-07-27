
<?php  get_header(); ?>
<?php
if(have_posts()) :
    while(have_posts()) :
    the_post();
	observePostViews(get_the_ID());
?>

<?php fetchPostViews(get_the_ID()); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=219430164742384";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="<?php post_class(); ?>">
    <div id="section-list" class="section-detail">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-content clearfix">
                            <div <?php post_class(); ?>>
                                <div class="blogSingle  clearfix">
                                   <div class="entryContent">
                                    <div class="featureimg">
                                      <?php if(has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail( 'landscape' ); ?>
                                      <?php endif; ?>
                                    </div>
                                   <h3 class="the_title"><?php the_title(); ?></h3>
                                   <div class="entry-meta">
                                      <span class="date"><?php the_time('jS F Y') ?></span>
                                   </div><!-- .entry-meta -->
                                    <?php the_content(); ?>
                                   </div><!-- .entry-meta -->
                                   <div class="socialshare">
                                      <?php echo"<div id='custom-tweet-button'>";
                                      $twitter_href  = 'http://twitter.com/share?url=' . get_permalink();
                                      $twitter_href .= '&text=' . get_the_title();
                                      echo"<a title='".get_the_title()."' href='".$twitter_href."' target='_blank'><i class='icon-twitter'>&nbsp;</i></a>";
                                      echo'</div>'; ?>
                                        <div class="facebook_like_button_holder">
                                                  <i class='icon-facebook'>&nbsp;</i>
                                                  <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div><!-- END .the-content -->
                </div><!-- END .col-md-8 -->
            </div><!-- END .row -->
         </div> <!-- END .container -->
    </div>  
</div><!-- END #page -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>