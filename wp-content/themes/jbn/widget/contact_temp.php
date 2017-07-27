<?php
	
	 $cformtype		= eurekaGetOption('contact_cformtype');
	 $cformtitle	= eurekaGetOption('contact_cformtitle');
	 $cPosition		= eurekaGetOption('contact_cPosition');
	 $cformdesc		= eurekaGetOption('contact_cformdesc');
	 $ctitle		= eurekaGetOption('contact_ctitle');
	 $ctext			= eurekaGetOption('contact_ctext');
	 $cshow			= eurekaGetOption('contact_cshow');
	 $cform			= eurekaGetOption('contact_cform');
	 $cformcode		= eurekaGetOption('contact_cformcode');
	 $cfield1		= eurekaGetOption('contact_cfield1');
	 $cfield2		= eurekaGetOption('contact_cfield2');
	 $cfield3		= eurekaGetOption('contact_cfield3');
	 $cfield4		= eurekaGetOption('contact_cfield4');
	 $cfield5		= eurekaGetOption('contact_cfield5');
	 $cname1		= eurekaGetOption('contact_cname1');
	 $cname2		= eurekaGetOption('contact_cname2');
	 $cname3		= eurekaGetOption('contact_cname3');
	 $cname4		= eurekaGetOption('contact_cname4');
	 $cname5		= eurekaGetOption('contact_cname5');
	 $ctype1		= eurekaGetOption('contact_ctype1');
	 $ctype2		= eurekaGetOption('contact_ctype2');
	 $ctype3		= eurekaGetOption('contact_ctype3');
	 $ctype4		= eurekaGetOption('contact_ctype4');
	 $ctype5		= eurekaGetOption('contact_ctype5');
	 $csukses		= eurekaGetOption('contact_csukses');
	 $cerror		= eurekaGetOption('contact_cerror');
	 $hpContact		= eurekaGetOption('mobile_hpContact');
?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact.js"></script>
<div id="contactBox" class="contact-<?php echo $cPosition; ?> <?php echo $hpContact; ?>">
	<div class="contactWrap">
<?php if($cshow == 'Yes') :?>
	<?php  if ($cformtype == 'custom') :?>
        <div id="formwidget" class="form-widget">
        <?php include(TEMPLATEPATH.'/widget/contactform.php');?>
        </div>
    <?php  elseif ($cformtype == 'custom-code') :?>
        <div id="formwidget" class="form-widget">
            <div class="form-content  clearfix">
                <h2><?php echo $ctitle; ?></h2>
                <p><?php echo $ctext; ?></p>
                 <?php echo $cform; ?>
            </div>
        </div>
    <?php  elseif ($cformtype == 'custom-shortcode') :?>
        <div id="formwidget" class="form-widget">
            <div class="form-content  clearfix">
                <h2><?php echo $ctitle; ?></h2>
                <p><?php echo $ctext; ?></p>
                <?php echo do_shortcode("$cformcode"); ?>
            </div>
        </div>
    <?php  endif; ?> 
<?php  elseif ($cshow == 'No') :?>
<?php else : ?>
	<script type='text/javascript'>
		$(document).ready(function(){
			$("#reload").click(function(){
				$("img","#imgcaptchabox").remove();
				$("#imgcaptchabox").html('<img src="<?php bloginfo('template_directory'); ?>/captcha/captcha.php" id="imgcaptcha" />');
				return false;
			});
			$('#submitButton').click(function(e){
				e.preventDefault();
				var error = false;
				var cname1 = $('#cname1').val();
				var cname2 = $('#cname2').val();
				var cname3 = $('#cname3').val();
				var cname4 = $('#cname4').val();
				var cname5 = $('#cname5').val();
				if(cname1.length == 0){
					var error = true;
					$('#cname1').addClass("error");
				}else{
					$('#cname1').removeClass("error");
				}
				if(cname2.length == 0){
					var error = true;
					$('#cname2').addClass("error");
				}else{
					$('#cname2').removeClass("error");
				}
				if(cname3.length == 0){
					var error = true;
					$('#cname3').addClass("error");
				}else{
					$('#cname3').removeClass("error");
				}
				if(cname4.length == 0){
					var error = true;
					$('#cname4').addClass("error");
				}else{
					$('#cname4').removeClass("error");
				}
				
				//now when the validation is done we check if the error variable is false (no errors)
				if(error == false){
					//disable the submit button to avoid spamming
					//and change the button text to Sending...
					$('#submitButton').attr({'disabled' : 'true', 'value' : 'Sending...' });
					
					/* using the jquery's post(ajax) function and a lifesaver
					function serialize() which gets all the data from the form
					we submit it to send_email.php */
					$.post("<?php bloginfo('template_directory'); ?>/send.php", $("#contactForm").serialize(),function(result){
						//and after the ajax request ends we check the text returned
						var result = parseInt(result,10) ;
						if(result == 1){
							//and show the mail success div with fadeIn
							$('#mail_success').fadeIn(500);
							$('#contactForm').fadeOut(500);
						}else if (result == 2){
							//show the mail failed div
							
							$("img","#imgcaptchabox").remove();
							$("#imgcaptchabox").html('<img src="<?php bloginfo('template_directory'); ?>/captcha/captcha.php" id="imgcaptcha" />');
							$('#spambot').fadeIn(500);
							//reenable the submit button by removing attribute disabled and change the text back to Send The Message
							$('#submitButton').removeAttr('disabled').attr('value', 'Send The Message');
							return false;
						}else{
							//show the mail failed div
							$('#mail_fail').fadeIn(500);
							//reenable the submit button by removing attribute disabled and change the text back to Send The Message
							$('#submitButton').removeAttr('disabled').attr('value', 'Send The Message');
						}
					});
				}
			});    
		});
	</script>
	<div id="formwidget" class="form-widget <?php echo $showContactm; ?>">
		<div id="formContent" class="form-content  clearfix">
			<h3>Want to learn more?</h3>
            <span class="hr">
                <span class="hr-bull">&nbsp;</span>
            </span>
			<?php if(isset($hasError)) { //If errors are found ?>
				<?php  if(empty($cerror)) : ?>
				<div class="fail">Please check if you've filled all the fields with valid information and try again. Thank you.</div>
				<?php  else : ?>
				<div class="fail"><?php echo $cerror; ?></div>
				<?php endif;  ?>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
				<?php  if(empty($csukses)) : ?>
				<div class="successmail">
					<p><strong>Email Successfully Sent!</strong></p>
					<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent and we 'll be in touch with you soon.</p>
				</div>
				<?php  else : ?>
				<div class="successmail">
					<p><?php echo $csukses; ?></p>
				</div>
				<?php endif;  ?>
			<?php } ?>
			<form <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?> style="display:none;" <?php } ?> method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="formWidget contactForm">
				<div class="rows">
					<label>Full Name</label>
					<input type="text" placeholder="" name="cname1" id="cname1" class="required" role="input" aria-required="true" />
				</div>
				<div class="rows">
					<label>Phone</label>
					<input type="text" placeholder="" name="cname2" id="cname2" class="required" role="input" aria-required="true" />
				</div>
				<div class="rows">
					<label>Email</label>
					<input type="text" placeholder="" name="cname3" id="cname3"class="required email" role="input" aria-required="true" />
				</div>
				<div class="rows">
					<label>Message</label>
					<textarea name="cname4" placeholder="" id="cname4" class="required" rows="5" role="textbox" aria-required="true"></textarea>
				</div>   
				<div class="rows row-captcha">
				<label>Enter Code</label>
				<div id="captchabox">
					<div id="imgcaptchabox"><img src="<?php bloginfo('template_directory'); ?>/captcha/captcha.php" id="imgcaptcha" /> </div>
					<input type="text" name="answer" id="captcha-answer"  />
					<a href="#" id="reload"><span class="icon-loop2">&nbsp;</span></a>
				</div>
				<span id="spambot" style="display:none; color:#F00;">Sorry, captcha not solved !</span> 
				</div>      
				<input type="submit" value="SEND" name="submit" id="submitButton" class="button" />
			</form>
		</div>
	</div>
<?php  endif; ?> 
	</div>
</div>