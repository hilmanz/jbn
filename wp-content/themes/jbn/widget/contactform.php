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
			<?php if($cfield1 == 'Yes') :?>
				if(cname1.length == 0){
					var error = true;
					$('#cname1').addClass("error");
				}else{
					$('#cname1').removeClass("error");
				}
			<?php  endif; ?> 
			<?php if($cfield2 == 'Yes') :?>
				if(cname2.length == 0){
					var error = true;
					$('#cname2').addClass("error");
				}else{
					$('#cname2').removeClass("error");
				}
			<?php  endif; ?> 
			<?php if($cfield3 == 'Yes') :?>  
				if(cname3.length == 0){
					var error = true;
					$('#cname3').addClass("error");
				}else{
					$('#cname3').removeClass("error");
				}
			<?php  endif; ?> 
			<?php if($cfield4 == 'Yes') :?>
				if(cname4.length == 0){
					var error = true;
					$('#cname4').addClass("error");
				}else{
					$('#cname4').removeClass("error");
				}
			<?php  endif; ?> 
			<?php if($cfield5 == 'Yes') :?>
				if(cname5.length == 0){
					var error = true;
					$('#cname5').addClass("error");
				}else{
					$('#cname5').removeClass("error");
				}
			<?php  endif; ?>   
            
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
<div id="form-content" class="form-content  clearfix">
<h3><?php echo $ctitle; ?> </h3>
<span class="hr">
    <span class="hr-bull">&nbsp;</span>
</span>
<div id='mail_success' class='success' style="display:none;">
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
</div>
<div id='mail_fail' class='error' style="display:none;"> 
	<?php  if(empty($cerror)) : ?>
	<div class="fail">Please check if you've filled all the fields with valid information and try again. Thank you.</div>
	<?php  else : ?>
	<div class="fail"><?php echo $cerror; ?></div>
	<?php endif;  ?>
</div>
<form method="post" action="<?php echo home_url( '/' ); ?>" id="contactForm" class="formWidget contactForm">
    <?php if($cfield1 == 'Yes') :?>
    <div class="rows">
		<label><?php echo $cname1; ?></label>
        <?php if($ctype1 == 'Text') :?>
        <input type="text" name="cname1" id="cname1" value="" class="required" role="input" aria-required="true" />
        <?php  elseif ($ctype1 == 'Message') :?>
        <textarea name="cname1" id="cname1" class="required" role="textbox" aria-required="true"></textarea>
        <?php  endif; ?> 
    </div>
    <?php  endif; ?> 
    <?php if($cfield2 == 'Yes') :?>
    <div class="rows">
		<label><?php echo $cname2; ?></label>
        <?php if($ctype2 == 'Text') :?>
        <input type="text" name="cname2" id="cname2" value="" class="required" role="input" aria-required="true" />
        <?php  elseif ($ctype2 == 'Message') :?>
        <textarea name="cname2" id="cname2" class="required" role="textbox" aria-required="true"></textarea>
        <?php  endif; ?> 
    </div>
    <?php  endif; ?> 
    <?php if($cfield3 == 'Yes') :?>
    <div class="rows">
		<label><?php echo $cname3; ?></label>
        <?php if($ctype3 == 'Text') :?>
        <input type="text" name="cname3" id="cname3" value="" class="required" role="input" aria-required="true" />
        <?php  elseif ($ctype3 == 'Message') :?>
        <textarea name="cname3" id="cname3" class="required" role="textbox" aria-required="true"></textarea>
        <?php  endif; ?> 
    </div>   
    <?php  endif; ?> 
    <?php if($cfield4 == 'Yes') :?>
    <div class="rows">
		<label><?php echo $cname4; ?></label>
        <?php if($ctype4 == 'Text') :?>
        <input type="text" name="cname4" id="cname4" value="" class="required" role="input" aria-required="true" />
        <?php  elseif ($ctype4 == 'Message') :?>
        <textarea name="cname4" id="cname4" class="required" role="textbox" aria-required="true"></textarea>
        <?php  endif; ?> 
    </div>
    <?php  endif; ?> 
    <?php if($cfield5 == 'Yes') :?>
    <div class="rows">
		<label><?php echo $cname5; ?></label>
        <?php if($ctype5 == 'Text') :?>
        <input type="text" name="cname5" id="cname5" value="" class="required" role="input" aria-required="true" />
        <?php  elseif ($ctype5 == 'Message') :?>
        <textarea name="cname5" id="cname5" class="required" role="textbox" aria-required="true"></textarea>
        <?php  endif; ?> 
    </div>   
    <?php  endif; ?>   
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
</div><!-- END .form-content -->