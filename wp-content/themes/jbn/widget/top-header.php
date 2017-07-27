<div id="top">
        <div class="container">
        <?php   	
        $showSocialTop				= eurekaGetOption('top_showSocialTop');
        $icon1name					= eurekaGetOption('top_icon1name');
        $icon1url					= eurekaGetOption('top_icon1url');
        $icon2name					= eurekaGetOption('top_icon2name');
        $icon2url					= eurekaGetOption('top_icon2url');
        $icon3name					= eurekaGetOption('top_icon3name');
        $icon3url					= eurekaGetOption('top_icon3url');
        $icon4name					= eurekaGetOption('top_icon4name');
        $icon4url					= eurekaGetOption('top_icon4url');
        $icon5name					= eurekaGetOption('top_icon5name');
        $icon5url					= eurekaGetOption('top_icon5url');
            
        ?>
        <div id="top-social" >
            <?php if($showSocialTop == 'Yes') :?>
                <ul class="social-icons">
                    <?php  if(!empty($icon5name)) :  ?><li><a href="<?php echo $icon5url; ?>"><span class="icons <?php echo $icon5name; ?>">&nbsp;</span></a></li><?php endif; ?>
                    <?php  if(!empty($icon4name)) :  ?><li><a href="<?php echo $icon4url; ?>"><span class="icons <?php echo $icon4name; ?>">&nbsp;</span></a></li><?php endif; ?>
                    <?php  if(!empty($icon3name)) :  ?><li><a href="<?php echo $icon3url; ?>"><span class="icons <?php echo $icon3name; ?>">&nbsp;</span></a></li><?php endif; ?>
                    <?php  if(!empty($icon2name)) :  ?><li><a href="<?php echo $icon2url; ?>"><span class="icons <?php echo $icon2name; ?>">&nbsp;</span></a></li><?php endif; ?>
                    <?php  if(!empty($icon1name)) :  ?><li><a href="<?php echo $icon1url; ?>"><span class="icons <?php echo $icon1name; ?>">&nbsp;</span></a></li><?php endif; ?>
                </ul><!-- END .social-icons -->
            <?php  elseif ($showSocialTop == 'No') :?>
            <?php else : ?>
                <ul class="social-icons">
                    <li><a href="#"><span class="icons icon-facebook">&nbsp;</span></a></li>
                    <li><a href="#"><span class="icons icon-twitter">&nbsp;</span></a></li>
                    <li><a href="#"><span class="icons icon-github">&nbsp;</span></a></li>
                    <li><a href="<?php bloginfo('rss_url'); ?>" target="_blank"><span class="icons icon-rss">&nbsp;</span></a></li>
                    <li><a href="#" class="searchBtn"><span class="icons icon-search">&nbsp;</span></a></li>
                </ul><!-- END .social-icons -->
            <?php  endif; ?> 
        </div>
   	</div><!-- END .container -->
</div><!-- END # -->