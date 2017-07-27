<div id="main-navigation">
    <div class="container">
            <div id="site-title">
                 <a href="<?php echo home_url( '/' ); ?>">
                     <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="JAKPRO" title="JAKPRO"/>
                </a>
            </div><!-- END #site-title -->
            <div id="theNavigation">
                        <?php if ( has_nav_menu( 'main-menu' ) ) { ?>
                            <div id="nav">
                                <nav class="nav-collapse">
                                <?php    $args  = array(
                                        'theme_location'    => 'main-menu',
                                        'container'         => false,
                                        'menu_class'        => 'sf-menu',
                                        'menu_id' => 'main-menu',
                                    );
                                    wp_nav_menu($args);
                                ?>
                                </nav>
                            </div>
                        <?php }else { ?>
                            <div id="nav">
                                <nav class="nav-collapse">
                               <ul id="main-menu" class="sf-menu">
                                    <li>Parent 1
                                        <ul>
                                            <li><a href="#">item 3</a></li>
                                            <li>Parent 3
                                                <ul>
                                                    <li><a href="#">item 8</a></li>
                                                    <li><a href="#">item 9</a></li>
                                                    <li><a href="#">item 10</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">item 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">item 1</a></li>
                                    <li>Parent 2
                                        <ul>
                                            <li><a href="#">item 5</a></li>
                                            <li><a href="#">item 6</a></li>
                                            <li><a href="#">item 7</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        <?php } ?>
                        <div id="navbox"></div>
            </div><!-- END #theNavigation -->

            <div id="socmed">
                    <?php
                            $facebook_link      = eurekaGetOption('social_facebook');
                            $twitter_link       = eurekaGetOption('social_twitter');
                            $googleplus_link    = eurekaGetOption('social_googleplus');
                            $linkedin_link      = eurekaGetOption('social_linkedin');
                     ?>
                <a href="<?php echo $googleplus_link; ?>" target="_blank"><i class="icon-google-plus">&nbsp;</i></a>
                <a href="<?php echo $facebook_link; ?>" target="_blank"><i class="icon-facebook">&nbsp;</i></a>
                <a href="<?php echo $twitter_link; ?>" target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                <a href="<?php echo $linkedin_link; ?>" target="_blank"><i class="icon-linkedin">&nbsp;</i></a>
            </div>
    </div><!-- END .container -->
</div><!-- END #main-navigation -->
