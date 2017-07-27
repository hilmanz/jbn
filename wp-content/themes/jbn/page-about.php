<?php
/**
 * Template Name: About
 *
 */
get_header(); ?>
<?php
if(have_posts()) :
    while(have_posts()) :
    the_post();
?>

<div id="page" class="<?php post_class(); ?>">

    <div id="slider">
         <div class="container">
            <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original' );
            $url = $thumb['0'];
            ?>
            <div class="slider-wrapper">
                <?php if(has_post_thumbnail()) : ?>
                <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?=$url?>"/>
                <?php endif; ?>
            </div>
         </div> <!-- END .container -->
    </div><!-- END #slider -->

    <div id="sectionabout" class="section sectionGrey">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="theContent clearfix">
                      <div class="row">
                        <div class="col-md-5">
                         <div class="titlebox-about">
                             <h3><?php the_title(); ?></h3>
                         </div>
                        </div><!-- END . col-md-4 -->
                        <div class="col-md-7">
                            <div id="entry">
                              <p>
                                If you're serious about business, you won't be a stranger to the many networking 
                                events that Jakarta has to offer. Jakarta Business Networkers (JBN) was created 
                                to give networkers a chance to gain new contacts, new knowledge and most 
                                importantly, new business referrals, which eventually convert into revenue. 
                                JBN helps business owners to grow their companies through referrals from other 
                                members; through our sessions we have helped our members to do so, finding 
                                clients and build strategic alliances.
                              </p>
                            </div>
                        </div>
                      </div><!-- END .row -->
                   </div>
                </div><!-- END .col-md-8 -->
            </div><!-- END .row -->
         </div> <!-- END .container -->
    </div>   <!-- END #sectionrecent -->
    <div id="section-list" class="section-detail">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-content clearfix">
                            <div <?php post_class(); ?>>
                                <div class="theContent clearfix">
                                    <?php the_content(); ?>
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
