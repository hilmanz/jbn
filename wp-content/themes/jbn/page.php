<?php get_header(); ?>
<?php
if(have_posts()) :
    while(have_posts()) :
    the_post();
?>

<div id="page" class="<?php post_class(); ?>">

    <div id="slider">
         <div class="container">
            <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'landscape' );
            $url = $thumb['0'];
            ?>
            <div class="slider-wrapper">
                <?php if(has_post_thumbnail()) : ?>
                <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?=$url?>"/>
                <?php endif; ?>
            </div>
         </div> <!-- END .container -->
    </div><!-- END #slider -->
    <div id="section-list" class="section-detail">
         <div class="container">
            <div class="titlebox">
                <h3><?php the_title(); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single-content clearfix">
                            <div <?php post_class(); ?>>
                                <div class="theContent w900 clearfix">
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
