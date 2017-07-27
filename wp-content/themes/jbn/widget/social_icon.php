
 <?php  $socialwidget	= eurekaGetOption('social_socialwidget');?>
<?php $socialwidgetfoot			= eurekaGetOption('social_socialwidgetfoot'); ?>
 <?php if($socialwidgetfoot == 'Yes') :?>
 	<?php  $showSocialTopm	= eurekaGetOption('mobile_showSocialTopm');?>
    <ul class="social-icons" id="<?php echo $showSocialTopm; ?>">
        <?php 
                $facebook_link		= eurekaGetOption('social_facebook');
                $twitter_link		= eurekaGetOption('social_twitter');
                $googleplus_link	= eurekaGetOption('social_googleplus');
                $linkedin_link		= eurekaGetOption('social_linkedin');
                $vimeo_link			= eurekaGetOption('social_vimeo');
                $youtube_link		= eurekaGetOption('social_youtube');
                $instagram_link		= eurekaGetOption('social_instagram');
                $flickr_link		= eurekaGetOption('social_flickr');
                $github_link		= eurekaGetOption('social_github');
                $wordpress_link		= eurekaGetOption('social_wordpress');
                $tumblr_link		= eurekaGetOption('social_tumblr');
                $blogger_link		= eurekaGetOption('social_blogger');
                $socialimg1			= eurekaGetOption('social_socialimg1');
                $socialurl1			= eurekaGetOption('social_socialurl1');
                $socialimg2			= eurekaGetOption('social_socialimg2');
                $socialurl2			= eurekaGetOption('social_socialurl2');
                $socialimg3			= eurekaGetOption('social_socialimg3');
                $socialurl3			= eurekaGetOption('social_socialurl3');
                $showfacebook		= eurekaGetOption('social_showfacebook');
                $showtwitter		= eurekaGetOption('social_showtwitter');
                $showgoogleplus		= eurekaGetOption('social_showgoogleplus');
                $showlinkedin		= eurekaGetOption('social_showlinkedin');
                $showyoutube		= eurekaGetOption('social_showyoutube');
                $showinstagram		= eurekaGetOption('social_instagram');
                $showflickr			= eurekaGetOption('social_showflickr');
                $showgithub			= eurekaGetOption('social_showgithub');
                $showwordpress		= eurekaGetOption('social_showwordpress');
                $showtumblr			= eurekaGetOption('social_showtumblr');
                $showfeed			= eurekaGetOption('social_showfeed');
         ?>
		<?php if($showfacebook == 'Yes') :?>
			 <?php if(empty($facebook_link)) :?>
               <li><a href="#"><span class="icons icon-facebook">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $facebook_link; ?>" target="_blank"><span class="icons icon-facebook">&nbsp;</span></a></li>
             <?php  endif; ?>  
        <?php  endif; ?> 
		<?php if($showtwitter == 'Yes') :?>
			 <?php if(empty($twitter_link)) :?>
               <li><a href="#"><span class="icons icon-twitter">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $twitter_link; ?>" target="_blank"><span class="icons icon-twitter">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showgoogleplus == 'Yes') :?>
			 <?php if(empty($googleplus_link)) :?>
               <li><a href="#"><span class="icons icon-google-plus">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $googleplus_link; ?>" target="_blank"><span class="icons icon-google-plus">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showlinkedin == 'Yes') :?>
			 <?php if(empty($linkedin_link)) :?>
               <li><a href="#"><span class="icons icon-linkedin">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $linkedin_link; ?>" target="_blank"><span class="icons icon-linkedin">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showinstagram == 'Yes') :?>
			 <?php if(empty($instagram_link)) :?>
               <li><a href="#"><span class="icons icon-instagram">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $instagram_link; ?>" target="_blank"><span class="icons icon-instagram">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showyoutube == 'Yes') :?>
			 <?php if(empty($youtube_link)) :?>
               <li><a href="#"><span class="icons icon-youtube">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $youtube_link; ?>" target="_blank"><span class="icons icon-youtube">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showflickr == 'Yes') :?>
			 <?php if(empty($flickr_link)) :?>
               <li><a href="#"><span class="icons icon-flickr">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $flickr_link; ?>" target="_blank"><span class="icons icon-flickr">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showgithub == 'Yes') :?>
			 <?php if(empty($github_link)) :?>
               <li><a href="#"><span class="icons icon-github">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $github_link; ?>" target="_blank"><span class="icons icon-github">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showwordpress == 'Yes') :?>
			 <?php if(empty($wordpress_link)) :?>
               <li><a href="#"><span class="icons icon-wordpress">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $wordpress_link; ?>" target="_blank"><span class="icons icon-wordpress">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showtumblr == 'Yes') :?>
			 <?php if(empty($tumblr_link)) :?>
               <li><a href="#"><span class="icons icon-tumblr">&nbsp;</span></a></li>
             <?php else : ?>
                <li><a href="<?php echo $tumblr_link; ?>" target="_blank"><span class="icons icon-tumblr">&nbsp;</span></a></li>
             <?php  endif; ?> 
        <?php  endif; ?> 
		<?php if($showfeed == 'Yes') :?>
               <li><a href="<?php bloginfo('rss_url'); ?>" target="_blank"><span class="icons icon-feed">&nbsp;</span></a></li>
        <?php else : ?>
               <li><a href="<?php bloginfo('rss_url'); ?>" target="_blank"><span class="icons icon-feed">&nbsp;</span></a></li>
        <?php  endif; ?> 
         <?php if(!empty($socialimg1)) :?>
            <li><a href="<?php echo $socialurl1; ?>" target="_blank"><img src="<?php echo $socialimg1; ?>"/></a></li>
         <?php  endif; ?>  
         <?php if(!empty($socialimg2)) :?>
            <li><a href="<?php echo $socialurl2; ?>" target="_blank"><img src="<?php echo $socialimg2; ?>"/></a></li>
         <?php  endif; ?>  
         <?php if(!empty($socialimg3)) :?>
            <li><a href="<?php echo $socialurl3; ?>" target="_blank"><img src="<?php echo $socialimg3; ?>"/></a></li>
         <?php  endif; ?>   
    </ul><!-- END .social-icons -->
<?php  elseif ($socialwidgetfoot == 'No') :?>
<?php else : ?>
    <ul class="social-icons" id="<?php echo $showSocialTopm; ?>">
        <li><a href="#"><span class="icons icon-facebook2">&nbsp;</span></a></li>
        <li><a href="#"><span class="icons icon-twitter2">&nbsp;</span></a></li>
        <li><a href="#"><span class="icons icon-google-plus">&nbsp;</span></a></li>
        <li><a href="<?php bloginfo('rss_url'); ?>" target="_blank"><span class="icons icon-feed2">&nbsp;</span></a></li>
    </ul><!-- END .social-icons -->
<?php  endif; ?> 