
<?php $customStyle		= eurekaGetOption('cssStyle_customStyle'); ?> 
<?php  if(empty($customStyle)) : else : ?>
<style type="text/css">
<?php echo $customStyle ?>
</style>   
<?php endif;  ?>  
<?php			
				
	$ciBgcolor						= eurekaGetOption('eu_ciBgcolor');
	$ciBgrepeat						= eurekaGetOption('eu_ciBgrepeat');
	$ciBgimg						= eurekaGetOption('eu_ciBgimg');
    $ciHeaderBgcolor				= eurekaGetOption('eu_ciHeaderBgcolor');
    $ciHeaderWidgetBgcolor			= eurekaGetOption('eu_ciHeaderWidgetBgcolor');
    $ciFooterBgcolor				= eurekaGetOption('eu_ciFooterBgcolor');
    $ciFooterBottom					= eurekaGetOption('eu_ciFooterBottom');
    $ciFontColor					= eurekaGetOption('eu_ciFontColor');
    $ciLinkColor					= eurekaGetOption('eu_ciLinkColor');
    $ciMenuHover					= eurekaGetOption('eu_ciMenuHover');
    $ciMenuColor					= eurekaGetOption('eu_ciMenuColor');
    $ciButton1bgColor				= eurekaGetOption('eu_ciButton1bgColor');
    $ciButton2bgColor				= eurekaGetOption('eu_ciButton2bgColor');
	
    $ciButton1Color					= eurekaGetOption('eu_ciButton1Color');
    $ciButton2Color					= eurekaGetOption('eu_ciButton2Color');
    $ciLinkHoverColor				= eurekaGetOption('eu_ciLinkHoverColor');
	
    $ciFooterColor					= eurekaGetOption('eu_ciFooterColor');
    $ciFooterLinkColor				= eurekaGetOption('eu_ciFooterLinkColor');
    $ciHeaderWidgetColor			= eurekaGetOption('eu_ciHeaderWidgetColor');
    $ciHeaderWidgetLinkColor		= eurekaGetOption('eu_ciHeaderWidgetLinkColor');
	
    $ciContactBgColor		= eurekaGetOption('eu_ciContactBgColor');
    $ciContactFontColor		= eurekaGetOption('eu_ciContactFontColor');
    $borderColor			= eurekaGetOption('eu_borderColor');
	 $TopPurchaseBg				= eurekaGetOption('eu_TopPurchaseBg');
	 $TopPurchaseColor			= eurekaGetOption('eu_TopPurchaseColor');
	 $recomtableColor			= eurekaGetOption('eu_recomtableColor');

?> 
   
<style>
   body{
	    <?php  if(empty($ciBgcolor)) : else : ?> 
			background-color:<?php echo "#$ciBgcolor" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciBgimg)) : else : ?> 
			background-image:url(<?php echo "$ciBgimg" ?>) ;
		<?php endif;  ?> 
	    <?php  if(empty($ciBgrepeat)) : else : ?> 
			background-repeat:<?php echo "$ciBgrepeat" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciFontColor)) : else : ?> 
			color:<?php echo "#$ciFontColor" ?> ;
		<?php endif;  ?> 
		font-size:14px;
    }
	.pricetable .pricetable-column.pricetable-featured .pricetable-column-inner{
	    <?php  if(empty($recomtableColor)) : else : ?> 
			background:<?php echo "#$recomtableColor" ?> ;
		<?php endif;  ?> 
	}
	.headinfo h2,.headinfo p{
	    <?php  if(empty($TopPurchaseColor)) : else : ?> 
			color:<?php echo "#$TopPurchaseColor" ?> ;
		<?php endif;  ?> 
	}
	#headinfo{
	    <?php  if(empty($TopPurchaseBg)) : else : ?> 
			background:<?php echo "#$TopPurchaseBg" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($TopPurchaseColor)) : else : ?> 
			color:<?php echo "#$TopPurchaseColor" ?> ;
		<?php endif;  ?> 
	}
	.border-g{
	    <?php  if(empty($borderColor)) : else : ?> 
			background:<?php echo "#$borderColor" ?> ;
		<?php endif;  ?> 
	}
	a{
	    <?php  if(empty($ciLinkColor)) : else : ?> 
			color:<?php echo "#$ciLinkColor" ?> ;
		<?php endif;  ?> 
	}
	#main-menu li a{
	    <?php  if(empty($ciMenuColor)) : else : ?> 
			color:<?php echo "#$ciMenuColor" ?> ;
		<?php endif;  ?> 
	}
	#main-menu li a:hover, .current-menu-item a{
	    <?php  if(empty($ciMenuHover)) : else : ?> 
			border-top:solid 2px <?php echo "#$ciMenuHover" ?> ;
			color:<?php echo "#$ciMenuHover" ?> ;
		<?php endif;  ?> 
	}
	#main-menu li li a:hover{
	    <?php  if(empty($ciMenuHover)) : else : ?> 
			border-top:none;
			border-left:solid 2px <?php echo "#$ciMenuHover" ?> ;
			color:<?php echo "#$ciMenuHover" ?> ;
		<?php endif;  ?> 
	}
	.form-content{
	    <?php  if(empty($ciContactBgColor)) : else : ?> 
			background:<?php echo "#$ciContactBgColor" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciContactFontColor)) : else : ?> 
			color:<?php echo "#$ciContactFontColor" ?> ;
		<?php endif;  ?>
	}
	.button{
	    <?php  if(empty($ciButton1bgColor)) : else : ?> 
			background:<?php echo "#$ciButton1bgColor" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciButton1Color)) : else : ?> 
			color:<?php echo "#$ciButton1Color" ?> ;
		<?php endif;  ?>
	}
	.button2,a.ribbon,a.pentagon,.social-icons span,#footer .col4 ul.social-icons li span,.pentagon span:before{
	    <?php  if(empty($ciButton2bgColor)) : else : ?> 
			background:<?php echo "#$ciButton2bgColor" ?> ;
		<?php endif;  ?>
	    <?php  if(empty($ciButton2Color)) : else : ?> 
			color:<?php echo "#$ciButton2Color" ?> ;
		<?php endif;  ?> 
	}
	.pentagon:before {
	    <?php  if(empty($ciButton2bgColor)) : else : ?> 
		border-color:transparent transparent <?php echo "#$ciButton2bgColor" ?> ;
		<?php endif;  ?> 
	}
	.traditional:after, .traditional:before {
	    <?php  if(empty($ciButton2bgColor)) : else : ?> 
		border-top: 15px solid <?php echo "#$ciButton2bgColor" ?> ;
		<?php endif;  ?> 
	}
	#top{
	    <?php  if(empty($ciHeaderBgcolor)) : else : ?> 
			background:<?php echo "#$ciHeaderBgcolor" ?> ;
		<?php endif;  ?> 
	}
	#top-hiding{
	    <?php  if(empty($ciHeaderWidgetBgcolor)) : else : ?> 
			background:<?php echo "#$ciHeaderWidgetBgcolor" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciHeaderWidgetColor)) : else : ?> 
			color:<?php echo "#$ciHeaderWidgetColor" ?> ;
		<?php endif;  ?> 
	}
	#top-hiding a{
	    <?php  if(empty($ciHeaderWidgetLinkColor)) : else : ?> 
			color:<?php echo "#$ciHeaderWidgetLinkColor" ?> ;
		<?php endif;  ?> 
	}
	#footer{
	    <?php  if(empty($ciFooterBgcolor)) : else : ?> 
			background:<?php echo "#$ciFooterBgcolor" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciFooterColor)) : else : ?> 
			color:<?php echo "#$ciFooterColor" ?> ;
		<?php endif;  ?> 
	}
	#footer-bottom{
	    <?php  if(empty($ciFooterBottom)) : else : ?> 
			background:<?php echo "#$ciFooterBottom" ?> ;
		<?php endif;  ?> 
	    <?php  if(empty($ciFooterColor)) : else : ?> 
			color:<?php echo "#$ciFooterColor" ?> ;
		<?php endif;  ?> 
	}
	#footer a,#footer-bottom a{
	    <?php  if(empty($ciFooterLinkColor)) : else : ?> 
			color:<?php echo "#$ciFooterLinkColor" ?> ;
		<?php endif;  ?> 
	}
</style>