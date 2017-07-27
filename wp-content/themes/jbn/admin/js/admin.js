$(function(){
  $('.autoheight').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
  $('.autoheight').css({ height: $(window).innerHeight() + 'px' });
  });
});
$(document).ready(function() { 
	$( ".getTab" ).click(function() {
		var targetID = $(this).attr('value');
		$(".theContainer").removeClass('visibletab');
		$(".getTab").removeClass("activeTab");
		$(this).addClass("activeTab");
		$(targetID).addClass('visibletab');
		$(targetID).find('.firstTab').addClass('visibletab');
		return false;	
	});
	 $(function() {
		$( ".tabs2" ).tabs();
	  });
	$(function() {
		$( "#accordion" ).accordion({
		  heightStyle: "content"
		});
		$("a.toplevel_page_eureka").removeAttr("href");
		$('a.toplevel_page_eureka').attr('href', 'admin.php?page=eureka-setting');
	});
	function resetForm($form) {
    $form.find('input:text, input:password, input.hiddeninput, input:file, select, textarea').val('');
    $form.find('input:radio, input:checkbox')
         .removeAttr('checked').removeAttr('selected');
	}
	
	$( ".reset" ).click(function() {
		if (confirm("if you confirm,  all field would be empty !") == true) {
			resetForm($('#settingForm')); // by id, recommended
		}
		return false;	
	});
});
  //   inputvideo  or inputimage
function embedvideo()
{
	var list = document.getElementsByClassName("inputvideo");
	for (var i = 0; i < list.length; i++) {
		list[i].style.display="block";
	}
	var list = document.getElementsByClassName("inputimage");
	for (var i = 0; i < list.length; i++) {
		list[i].style.display="none";
	}
}
function uploadimage()
{
	var list = document.getElementsByClassName("inputimage");
	for (var i = 0; i < list.length; i++) {
		list[i].style.display="block";
	}
	var list = document.getElementsByClassName("inputvideo");
	for (var i = 0; i < list.length; i++) {
		list[i].style.display="none";
	}
		}
		
$(function() {
  // initialize all the inputs
  $('input[type="checkbox"],[type="radio"]').not('.create-switch').not('.events-switch').bootstrapSwitch();

  $('[data-get]').on("click", function() {
    var type = $(this).data('get');

    alert($('.switch-' + type).bootstrapSwitch(type));
  });

  $('[data-set]').on('click', function() {
    var type = $(this).data('set');

    $('.switch-' + type).bootstrapSwitch(type, $(this).data('value'));
  });

  $('[data-toggle]').on('click', function() {
    var type = $(this).data('toggle');

    $('.switch-' + type).bootstrapSwitch('toggle' + type.charAt(0).toUpperCase() + type.slice(1));
  });

  $('[data-set-text]').on('change', function(event) {
    event.preventDefault();
    var type = $(this).data('set-text');
    var value = $.trim($(this).val());

    if ( ! value) {
      return;
    }

    $('.switch-' + type).bootstrapSwitch(type, value);
  });
});
