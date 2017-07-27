
    <?php 
            $boxtitle1      = eurekaGetOption('eu_boxtitle1');
            $boxsummary1       = eurekaGetOption('eu_boxsummary1');
            $boxtitle2      = eurekaGetOption('eu_boxtitle2');
            $boxsummary2       = eurekaGetOption('eu_boxsummary2');
            $boxtitle3      = eurekaGetOption('eu_boxtitle3');
            $boxsummary3       = eurekaGetOption('eu_boxsummary3');
     ?>
 <div class="container">
    <div class="row show-grid">
        <div class="col-md-4">
            <div class="boxfeature feature1">
                <a class="metodeicon" href="<?php echo home_url( '/' ); ?>product-services/">
                    <i class="icon-accessibility wow rollIn" data-wow-duration="0.3s"  data-wow-delay="1s"></i>
                    <?php  if(empty($boxtitle1)) :?>
                    <h3>Feasibility Study</h3>
                    <p>Providing expertise in Data Collecting, Field Investigation, Technical and economical study, environmental study, it might be required to judge the worthiness of a project's feasibility.</p>
                    <?php  else : ?>
                    <h3><?php echo $boxtitle1; ?></h3>
                    <p><?php echo $boxsummary1; ?></p>
                    <?php endif;  ?>
                </a>
            </div><!-- END .boxfeature -->
        </div>
        <div class="col-md-4">
            <div class="boxfeature feature2">
                <a class="metodeicon" href="<?php echo home_url( '/' ); ?>product-services/">
                    <i class="icon-done-all wow rollIn" data-wow-delay="1.5s"></i>
                    <?php  if(empty($boxtitle2)) :?>
                    <h3>Site Selection</h3>
                    <p>Successful selection of power plant location is important  to meeting the goal, as a result of compromising for plant technical specification & technology required, National Reserve & End-use Plant and economical consideration.</p>
                    <?php  else : ?>
                    <h3><?php echo $boxtitle2; ?></h3>
                    <p><?php echo $boxsummary2; ?></p>
                    <?php endif;  ?>
                </a>
            </div><!-- END .boxfeature -->
        </div>
        <div class="col-md-4">
            <div class="boxfeature feature3">
                <a class="metodeicon" href="<?php echo home_url( '/' ); ?>product-services/">
                    <i class="icon-extension wow bounceInRight" data-wow-delay="1.8s"></i>
                    <?php  if(empty($boxtitle3)) :?>
                    <h3>Design</h3>
                    <p>Providing expertise in preparing the preliminary design, conceptual design, performance or detailed specification of equipment, design engineering activities from Front End Engineering Design (FEED) up to Post Award Contract Engineering (PACE).</p>
                    <?php  else : ?>
                    <h3><?php echo $boxtitle3; ?></h3>
                    <p><?php echo $boxsummary3; ?></p>
                    <?php endif;  ?>
                </a>
            </div><!-- END .boxfeature -->
        </div>
    </div><!-- END .row -->
 </div> <!-- END .container --> 