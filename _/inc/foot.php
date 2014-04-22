

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="_/js/responsive-nav.min.js"></script>
		<script src="_/js/swipe.min.js"></script>
		<script src="_/js/collapse.min.js"></script>
<script type="text/javascript">
		$('#accordion').collapse();

		var navigation = responsiveNav(".nav-collapse", {
			customToggle: "#nav-toggle"
		});

		var elem = document.getElementById('slider');
		
		window.mySwipe = Swipe(elem, {
		  	auto: 6000,
		});
</script>
<script type="text/javascript">
		<!--//--><![CDATA[//><!--
		$(document).ready(function() {
		$('form#contact-us').submit(function() {
		  $('form#contact-us .error').remove();
		  var hasError = false;
		  $('.requiredField').each(function() {
		    if($.trim($(this).val()) == '') {
		      var labelText = $(this).prev('label').text();
		      $(this).parent().append('<span style="display: block;" class="error">You forgot to enter your '+labelText+'.</span>');
		      $(this).addClass('inputError');
		      hasError = true;
		    } else if($(this).hasClass('email')) {
		      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		      if(!emailReg.test($.trim($(this).val()))) {
		        var labelText = $(this).prev('label').text();
		        $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
		        $(this).addClass('inputError');
		        hasError = true;
		      }
		    }
		  });
		  if(!hasError) {
		    var formInput = $(this).serialize();
		    $.post($(this).attr('action'),formInput, function(data){
		      $('form#contact-us').slideUp("fast", function() {          
		        $(this).before('<p>Thanks for the message! We\'ll get back to you as soon as we can.</p>');
		      });
		    });
		  }
		  
		  return false; 
		});
		});
		//-->!]]>
</script>

		<script src="_/js/script.min.js"></script>

	</body>

</html>