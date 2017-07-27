<?php
class EurekaSetting extends eurekaApp
{
	var $data;
	var $value;
	var $status;
	var $prefix	= "eureka_";
	var $numbering	= array(
						"1"		=> "1",
						"2"		=> "2",
						"3"		=> "3",
						"4"		=> "4",
						"5"		=> "5",
						"6"		=> "6",
						"7"		=> "7",
						"8"		=> "8",
						"9"		=> "9",
						"10"	=> "10",
					  );
	var $eu_active	= array(
						"Show"	=> "Show",
						"Hide"	=> "Hide",
					  );

	var $eu_swap	= array(
						"A"	=> "A",
						"B"	=> "B",
						"C"	=> "C",
						"D"	=> "D",
					  );

	//get from database
	//format ['slider', 'icon', 'gallery', 'portfolio']
	//create function to generate array with wp format

	var $a = 1;

	var $eu_sortable 	= array(
							"Slider"	=> "Slider",
							"Icon"		=> "Icon",
							"Portfolio"	=> "Portfolio",
							"Gallery"	=> "Gallery",
						);

	// init
	function init()
	{
		add_action("admin_menu",array(&$this,"createMenu"));
	}

	// create menu
	function createMenu()
	{
		add_submenu_page( 'eureka', 'Theme Setting', 'Theme Setting', 'manage_categories', 'eureka-setting', array(&$this,"view"));
	}

	/*==================================================================================*/
	/*=========================			  CONTROLLER		   =========================*/
	/*==================================================================================*/

	// processing Input
	function processingInput()
	{
		if(isset($_POST['data']) && isset($_POST['_wpnonce'])) :
			check_admin_referer('eureka-update-theme-setting');
			$this->data	= $_POST['data'];

			$this->updateData();
		endif;
	}

	// generate value from custom options
	function generateValue()
	{

		$this->value	= array(
			'eu'		=> array(
				// GENERAL
				'shows'								=> stripslashes(get_option($this->prefix.'eu_shows')),
				'favicon'							=> stripslashes(get_option($this->prefix.'eu_favicon')),
				'logo'								=> stripslashes(get_option($this->prefix.'eu_logo')),
				'showsearch'						=> stripslashes(get_option($this->prefix.'eu_showsearch')),
				'showTabWidget'						=> stripslashes(get_option($this->prefix.'eu_showTabWidget')),
				'scrollmenu'						=> stripslashes(get_option($this->prefix.'eu_scrollmenu')),
				'widgetfoot'						=> stripslashes(get_option($this->prefix.'eu_widgetfoot')),
				'copyright'							=> stripslashes(get_option($this->prefix.'eu_copyright')),
				'showcopyright'						=> stripslashes(get_option($this->prefix.'eu_showcopyright')),
				'analytic'							=> stripslashes(get_option($this->prefix.'eu_analytic')),
				'boxmode'							=> stripslashes(get_option($this->prefix.'eu_boxmode')),
				'swap'								=> stripslashes(get_option($this->prefix.'eu_swap')),

				'boxtitle1'						=> stripslashes(get_option($this->prefix.'eu_boxtitle1')),
				'boxsummary1'					=> stripslashes(get_option($this->prefix.'eu_boxsummary1')),

				'boxtitle2'						=> stripslashes(get_option($this->prefix.'eu_boxtitle2')),
				'boxsummary2'					=> stripslashes(get_option($this->prefix.'eu_boxsummary2')),

				'boxtitle3'						=> stripslashes(get_option($this->prefix.'eu_boxtitle3')),
				'boxsummary3'					=> stripslashes(get_option($this->prefix.'eu_boxsummary4')),
			),
			'social'	=> array(
				'facebook'					=> stripslashes(get_option($this->prefix.'social_facebook')),
				'twitter'					=> stripslashes(get_option($this->prefix.'social_twitter')),
				'googleplus'				=> stripslashes(get_option($this->prefix.'social_googleplus')),
				'linkedin'					=> stripslashes(get_option($this->prefix.'social_linkedin')),
			),
		);

		//echo("generate value : <pre>");print_r($this->value);echo("</pre><br /><br />");
	}

	// updateData
	function updateData()
	{


		$array_keys	= array_keys($this->data);

		foreach($array_keys as $key) :
			if(is_array($this->data[$key])) :
				$value	= implode(',',$this->data[$key]);
			else :
				$value	= $this->data[$key];
			endif;

			update_option($key,$value);
		endforeach;

		$this->status	= "update";
	}

	/*==================================================================================*/
	/*=========================				VIEW			   =========================*/
	/*==================================================================================*/

	// notification
	function notification()
	{
		$EurekaSetting = new EurekaSetting;
		$EurekaSetting -> processingInput();
		$EurekaSetting -> generateValue();


		if($EurekaSetting->status == "update") :
		?><div class="message updated fade"><p>Settings have been updated</p></div><?php
		endif;
	}

	// view
	function view()
	{
		global $eureka_nextgen;
		$EurekaSetting = new EurekaSetting;  // correct
		$EurekaSetting ->notification();

		?>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/admin.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/nicEdit.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/colpick.js"></script>
<script type="text/javascript" src="<?php echo THEMELINK; ?>/admin/js/jquery.responsiveTabs.js"></script>
<link href="<?php echo THEMELINK; ?>/admin/css/simple-sidebar.css" type="text/css" rel="stylesheet" />
<link href="<?php echo THEMELINK; ?>/admin/css/responsive-tabs.css" type="text/css" rel="stylesheet" />

<script type="text/javascript">
	$(document).ready(function() {
		$('#horizontalTab').responsiveTabs({
			rotate: false,
			startCollapsed: 'accordion',
			collapsible: 'accordion',
			setHash: false,
		});
		$('.colorspicker').colpick({
			layout:'hex',
			submit:0,
			colorScheme:'dark',
			onChange:function(hsb,hex,rgb,el,bySetColor) {
				$(el).css('border-color','#'+hex);
				// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
				if(!bySetColor) $(el).val(hex);
			}
		}).keyup(function(){
			$(this).colpickSetColor(this.value);
		});
		//popup
		$('.showPopups').magnificPopup({
		  type:'inline',
		  midClick: true,
		  callbacks: {
			open: function() {
			},
			close: function() {
			}
			// e.t.c.
		  }
		});
		$("#eureka-slider-slideType").change(function(){
			if ($(this).val() == "Slider"){
				$(".boxOpt").hide();
				$("#sliderOpt").show();
			}else{
				$(".boxOpt").hide();
				$("#videoOpt").show();
			}
		});
	});
</script>


<form name="form1" method="post" action="" id="settingForm">
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="autoheight">
			<h2 id="logoOption"><a href="#menu-toggle" class="sidetogle" id="menu-toggle"><span class="icon-navicon">&nbsp;</span></a></h2>
            <ul class="sidebar-nav">
                <li class="getTab" value="#generalSetting"><a href="#generalSetting" class="linkTab"><span class="icon-chevron-right">&nbsp;</span> General Setting</a></li>
                <li class="getTab" value="#SocialSetting"><a href="#SocialSetting" class="linkTab"><span class="icon-chevron-right">&nbsp;</span> Social Setting</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="cols">
                        <div id="headerOption">
                            <div class="colRight">
                                   <input type="button" value="EMPTY ALL FIELD" class="button2 reset fr" />
                                   <input type="submit" class="button2 fr" name="savethis" value="<?php _e('Save Settings', 'eureka') ?>" />
                            </div>
                        </div><!-- END #headerOption -->
                      <div id="generalSetting" class="theContainer visibletab">
                        <?php //=============================================General Setting=============================================// ?>
                        <div class="theContainer-entry">
                            <div class="postboxs">
                                <h3>General Setting</h3>
                                <div class="inside">
                                    <?php parent::generateInputIcon("Favicon <span>16x16 Pixel</span> "			,"eu","favicon"); ?>
                                    <?php parent::generateInputTextarea("Google Analytic"							,"eu","analytic"); ?>


                                </div><!-- END .inside -->
                            </div><!-- END .postboxs -->
                            <input type="submit" class="button-primary" name="savethis" value="<?php _e('Save Settings', 'eureka') ?>" />
                        </div><!-- END .theContainer-entry -->
                      </div><!-- END .theContainer -->
                      <div class="theContainer" id="SocialSetting">
                        <div class="theContainer-entry">
                            <div class="postboxs">
                                <h3>Social Setting</h3>
                                <div class="inside">
                                    <?php parent::generateInputText("Facebook link account"				,"social",'facebook'); ?>

                                    <?php parent::generateInputText("Twitter link account"				,"social",'twitter'); ?>

                                    <?php parent::generateInputText("Google Plus link account"			,"social",'googleplus'); ?>
                                    <?php parent::generateInputText("Linkedin link account"				,"social",'linkedin'); ?>
                                </div><!-- END .inside -->
                            </div><!-- END .postboxs -->
                            <input type="submit" class="button-primary" name="savethis" value="<?php _e('Save Settings', 'eureka') ?>" />
                        </div><!-- END .theContainer-entry -->
                      </div><!-- END .theContainer -->
                        <div id="footerOption">
                            <?php parent::generateTinyMCE(); ?>
                            <?php wp_nonce_field('eureka-update-theme-setting'); ?>
                        </div>
                    </div><!-- END .cols -->
                </div><!-- END .row -->
            </div><!-- END .container-fluid -->
        </div><!-- END #page-content-wrapper -->

    </div><!-- end #wrapper -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</form>

        <?php
	}
}
$eureka_setting	= new EurekaSetting;
$eureka_setting->init();

?>
