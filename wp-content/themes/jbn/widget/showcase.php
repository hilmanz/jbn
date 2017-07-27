<?php 
     $showShowCase				= eurekaGetOption('eu_showShowCase');
     $showOurTeam				= eurekaGetOption('eu_showOurTeam');
     $ourTeamLimit				= eurekaGetOption('eu_ourTeamLimit');
     $ourTeamTitle				= eurekaGetOption('eu_ourTeamTitle');
     $ourTeamSubtitle			= eurekaGetOption('eu_ourTeamSubtitle');
				
     $showRecentWork			= eurekaGetOption('eu_showRecentWork');
     $recentWorkTItle			= eurekaGetOption('eu_recentWorkTItle');
	 $hpShowcase				= eurekaGetOption('mobile_hpShowcase');
?>

<?php if($showShowCase == 'Yes') :?>
<script>
$(window).load(function(){
  $('.ourteam').flexslider({
	animation: "slide",
	directionNav: false, 
  });
  $('.recentwork').flexslider({
	animation: "slide",
	directionNav: false, 
  });
});
</script>
<div class="section <?php echo $hpShowcase; ?>" id="showCase">
    <div class="wrapper">
        <div id="showCaseContainer" class="spacing-BT">
            <div class="entry center">
				<?php if($showOurTeam == 'Yes') :?>
                    <div class="blockside">
                        <div class="titleblock">
							<?php  if(empty($ourTeamTitle)) :  ?>
                            	<h3>OUR TEAM</h3>
                            <?php  else : ?>
                            	<h3><?php echo $ourTeamTitle; ?></h3>
                            <?php endif;  ?>
							<?php  if(empty($ourTeamSubtitle)) :  ?>
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus a orci hendrerit vehicula id at risus. Nam mauris lorem, accumsan non leo ut, adipiscing porta urna.</p>
                            <?php  else : ?>
                            	<p><?php echo $ourTeamSubtitle; ?></p>
                            <?php endif;  ?>
                        </div>
                        <div class="ourteam">
                          <ul class="slides">
							<?php $queryObject = new WP_Query( 'post_type=ourteam&showposts=10' );
                            if ($queryObject->have_posts()) { ?>
                                <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                                    <?php $ourteam_division 		 = get_post_meta( $post->ID, '_cmb_ourteam_division', true );
										  $ourteam_description		 = get_post_meta( $post->ID, '_cmb_ourteam_description', true );
										  $ourteam_facebook			 = get_post_meta( $post->ID, '_cmb_ourteam_facebook', true );
										  $ourteam_twitter	 		 = get_post_meta( $post->ID, '_cmb_ourteam_twitter', true );
										  $ourteam_pinterest 		 = get_post_meta( $post->ID, '_cmb_ourteam_pinterest', true );
										  $ourteam_linkedin			 = get_post_meta( $post->ID, '_cmb_ourteam_linkedin', true );
                                     ?>        
                                    <li>
                                        <div class="teambox">
                                            <a href="<?php echo get_post_type_archive_link( 'ourteam' ); ?>" class="teamThumb"><?php the_post_thumbnail( 'medium' ); ?></a>
                                            <div class="teambox-entry">
                                                <h4><a href="<?php echo get_post_type_archive_link( 'ourteam' ); ?>"><?php the_title(); ?></a></h4>
                                                <h5><?php echo $ourteam_division; ?></h5>
                                                <p><?php echo $ourteam_description; ?></p>
                                            </div>
                                            <div class="socialTeam">
												<?php  if(!empty($ourteam_facebook)) :  ?>
                                                	<a href="<?php echo $ourteam_facebook; ?>"><span class="icon-facebook-square">&nbsp;</span></a>
                                                <?php endif;  ?>
												<?php  if(!empty($ourteam_twitter)) :  ?>
                                                	<a href="<?php echo $ourteam_twitter; ?>"><span class="icon-twitter-square">&nbsp;</span></a>
                                                <?php endif;  ?>
												<?php  if(!empty($ourteam_pinterest)) :  ?>
                                                	<a href="<?php echo $ourteam_pinterest; ?>"><span class="icon-linkedin-square">&nbsp;</span></a>
                                                <?php endif;  ?>
												<?php  if(!empty($ourteam_linkedin)) :  ?>
                                               	 	<a href="<?php echo $ourteam_linkedin; ?>"><span class="icon-pinterest-square">&nbsp;</span></a>
                                                <?php endif;  ?>
                                            </div>
                                        </div><!-- END .teambox -->
                                    </li>
                                <?php } ?>
                            <?php } else { ?>   
                                <li>
                                    <div class="teambox">
                                        <a href="#" class="teamThumb"><img src="<?php bloginfo('template_directory'); ?>/content/team1.jpg" /></a>
                                        <div class="teambox-entry">
                                            <h4><a href="#">Martha Aulia R</a></h4>
                                            <h5>Founder</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur elit. Sed quis purus a orci hendrerit vehicula.</p>
                                        </div>
                                        <div class="socialTeam">
                                            <a href="#"><span class="icon-facebook-square">&nbsp;</span></a>
                                            <a href="#"><span class="icon-twitter-square">&nbsp;</span></a>
                                            <a href="#"><span class="icon-linkedin-square">&nbsp;</span></a>
                                            <a href="#"><span class="icon-pinterest-square">&nbsp;</span></a>
                                        </div>
                                    </div><!-- END .teambox -->
                                </li>
                            <?php } ?>
                          </ul>
                        </div><!-- END .ourteam -->
                    </div><!-- END .blockside -->
                <?php  endif; ?> 
				<?php if($showRecentWork == 'Yes') :?>
                    <div class="blockcontent">
                        <div class="recentwork" <?php if($showOurTeam == 'No') :?>style="max-width:none;"<?php  endif; ?> >
                            <div class="titleblock">
								<?php  if(empty($recentWorkTItle)) :  ?>
                                	<h3>RECENT WORK</h3>
                                <?php  else : ?>
                                    <h3><?php echo $recentWorkTItle; ?></h3>
                                <?php endif;  ?>
                            </div>
                          <ul class="slides">
							<?php $queryObject = new WP_Query( 'post_type=recentwork' );
							 $count = 1;
                            if ($queryObject->have_posts()) { ?>
                                <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                                    <?php $recentwork_description = get_post_meta( $post->ID, '_cmb_recentwork_description', true );
                                     ?>
                                        <?php  if ($count%4 == 1){  
											 echo "<li>";
										 }?>							
                                            <div class="workbox">
                                                <a href="<?php the_permalink(); ?>" class="workThumb"><?php the_post_thumbnail( 'workThumb' ); ?></a>
                                                <h4><?php the_title(); ?></h4>
                                            </div><!-- END .workbox -->
                                        <?php 
											if ($count%4 == 0){
												echo "</li>";
											}
										$count++; ?>
                                <?php } ?>
                            <?php } else { ?>   
                            <li>
                                <div class="workbox">
                                    <a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                    <h4>Jatim Raly</h4>
                                </div><!-- END .workbox -->
                                <div class="workbox">
                                    <a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                    <h4>Jatim Raly</h4>
                                </div><!-- END .workbox -->
                                <div class="workbox">
                                    <a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                    <h4>Jatim Raly</h4>
                                </div><!-- END .workbox -->
                                <div class="workbox">
                                    <a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                    <h4>Jatim Raly</h4>
                                </div><!-- END .workbox -->
                            </li>
                            <?php } ?>
                          </ul>
                        </div><!-- END .recentwork -->
                    </div><!-- END .blockcontent -->
                <?php  endif; ?> 
            </div><!-- END .entry -->
        </div><!-- END #headpromo -->
    </div><!-- END .wrapper -->
</div><!-- END .section -->
<?php  elseif ($showShowCase == 'No') :?>
<?php else : ?>
<script>
$(window).load(function(){
  $('.ourteam').flexslider({
	animation: "slide",
	directionNav: false, 
  });
  $('.recentwork').flexslider({
	animation: "slide",
	directionNav: false, 
  });
});
</script>
<div class="section" id="showCase">
    <div class="wrapper">
        <div id="showCaseContainer" class="spacing-BT">
            <div class="entry center">
            	<div class="blockside">
                	<div class="titleblock">
                    	<h3>OUR TEAM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus a orci hendrerit vehicula id at risus. Nam mauris lorem, accumsan non leo ut, adipiscing porta urna.</p>
                    </div>
                    <div class="ourteam">
                      <ul class="slides">
                        <li>
                        	<div class="teambox">
                          		<a href="#" class="teamThumb"><img src="<?php bloginfo('template_directory'); ?>/content/team1.jpg" /></a>
                                <div class="teambox-entry">
                                    <h4><a href="#">Martha Aulia R</a></h4>
                                    <h5>Founder</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit. Sed quis purus a orci hendrerit vehicula.</p>
                                </div>
                                <div class="socialTeam">
                                	<a href="#"><span class="icon-facebook-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-twitter-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-linkedin-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-pinterest-square">&nbsp;</span></a>
                                </div>
                          	</div><!-- END .teambox -->
                        </li>
                        <li>
                        	<div class="teambox">
                          		<a href="#" class="teamThumb"><img src="<?php bloginfo('template_directory'); ?>/content/team1.jpg" /></a>
                                <div class="teambox-entry">
                                    <h4><a href="#">Martha Aulia R</a></h4>
                                    <h5>Founder</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit. Sed quis purus a orci hendrerit vehicula.</p>
                                </div>
                                <div class="socialTeam">
                                	<a href="#"><span class="icon-facebook-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-twitter-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-linkedin-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-pinterest-square">&nbsp;</span></a>
                                </div>
                          	</div><!-- END .teambox -->
                        </li>
                        <li>
                        	<div class="teambox">
                          		<a href="#" class="teamThumb"><img src="<?php bloginfo('template_directory'); ?>/content/team1.jpg" /></a>
                                <div class="teambox-entry">
                                    <h4><a href="#">Martha Aulia R</a></h4>
                                    <h5>Founder</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit. Sed quis purus a orci hendrerit vehicula.</p>
                                </div>
                                <div class="socialTeam">
                                	<a href="#"><span class="icon-facebook-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-twitter-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-linkedin-square">&nbsp;</span></a>
                                	<a href="#"><span class="icon-pinterest-square">&nbsp;</span></a>
                                </div>
                          	</div><!-- END .teambox -->
                        </li>
                      </ul>
                    </div><!-- END .ourteam -->
                </div><!-- END .blockside -->
            	<div class="blockcontent">
                    <div class="recentwork">
                        <div class="titleblock">
                            <h3>RECENT WORK</h3>
                        </div>
                      <ul class="slides">
                        <li>
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        </li>
                        <li>
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        </li>
                        <li>
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        </li>
                        <li>
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        	<div class="workbox">
                          		<a href="#" class="workThumb"><img src="<?php bloginfo('template_directory'); ?>/content/minigallery/1.jpg" /></a>
                                <h4>Jatim Raly</h4>
                          	</div><!-- END .workbox -->
                        </li>
                      </ul>
                    </div><!-- END .recentwork -->
                </div><!-- END .blockcontent -->
            </div><!-- END .entry -->
        </div><!-- END #headpromo -->
    </div><!-- END .wrapper -->
</div><!-- END .section -->
<?php  endif; ?> 