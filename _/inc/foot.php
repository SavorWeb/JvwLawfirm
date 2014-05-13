<div id="contact">
	<div class="row is-typeset">
		<div class="contact-form-block colspan12-6 colspan6-3 colspan2-2 as-grid">
				<h3>Contact Us</h3>
			<?php if(isset($hasError) || isset($captchaError) ) { ?>
			        <p class="alert">Error submitting the form</p>
			    <?php } ?>
		
				<form id="contact-us" action="contact-submit.php" method="post">
					<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
						<label class="screen-reader-text">Name</label>
						<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
						<?php if($nameError != '') { ?>
							<br /><span class="error"><?php echo $nameError;?></span> 
						<?php } ?>
					</div>

		            <div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
		              <label class="screen-reader-text">Phone</label>
		              <input type="text" name="phone" id="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone'];?>" class="txt phone" placeholder="Phone: (optional)" />
		            </div>

					<div class="formblock clear">
						<label class="screen-reader-text">Email</label>
						<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
						<?php if($emailError != '') { ?>
							<br /><span class="error"><?php echo $emailError;?></span>
						<?php } ?>
					</div>
			        
					<div class="formblock clear">
						<label class="screen-reader-text">Message</label>
						 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
						<?php if($commentError != '') { ?>
							<br /><span class="error"><?php echo $commentError;?></span> 
						<?php } ?>
					</div>
			        
						<button name="submit" type="submit" class="btn subbutton">Send Email</button>
						<small>I have read the <a href="privacy">disclaimer and privacy policy</a>.</small>
						<input type="hidden" name="submitted" id="submitted" value="true" />
				</form>
		</div>
		<div id="find-us" class="editable colspan12-6 colspan6-3 colspan2-2 as-grid with-gutter">
			<h3>Find Us</h3>
			<p>We are located in Coeur d'Alene, Idaho. To schedule a consultation with an attorney at our firm, call (208) 667-0683 or contact us toll free at (888) 667-0683. To contact us by e-mail, please fill out the contact form on this page.</p>
			<h4>Our Mailing Address</h4>
			<p>
			<b>James, Vernon & Weeks, P.A.</b>
				<br>
				1626 Lincoln Way <br>
				Coeur d'Alene, ID 83814<br>
				Phone: (208) 667-0683<br>
				Toll Free: (888) 667-0683<br>
				Fax: (208) 664-1684
			</p>
			<a target="_blank" href="https://www.google.com/maps/dir//1626+Lincoln+Way,+Coeur+d'Alene,+ID+83814/@47.6905279,-116.7957285,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x5361c6eb0243a3e9:0x3ee29c8a8f9cb4d2!2m2!1d-116.791437!2d47.690528" class="btn">Get Directions</a>
		</div>
	</div>	
</div>

<footer class="contact-foot">
	<div class="contact-btn row">
		<div class="footlogo colspan12-6 colspan6-3 colspan2-2 as-grid"><img src="_/img/logo-full.png" alt=""></div>
		<div class="footbtn colspan12-6 colspan6-3 colspan2-2 as-grid"><a href="#contact" type="button" role="button" id="contact-toggle">
			Contact Us Today
		</a></div>
	</div>
</footer>
	<div id="credit" class="editable row credit">
		<small>© 2014 by James, Vernon, & Weeks, P.A. <span>All Rights Reserved.</span></small>
		<hr>
	</div>



		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="_/js/responsive-nav.min.js"></script>
		<script src="_/js/responsive-accordion.min.js"></script>
		<script type="text/javascript">

				var navigation = responsiveNav(".nav-collapse", {
					customToggle: "#nav-toggle"
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
				        $(this).before('<blockquote>Thanks for the message! We\'ll get back to you as soon as we can.</blockquote>');
				      });
				    });
				  }
				  
				  return false; 
				});
				});
				//-->!]]>
		</script>
		<script>
		$(document).ready(function(){
			$('#area-toggle').on('click', function(){
				$('.area-collapse').toggleClass('open-p');
				$(this).toggleClass('bottom-m');
			});
			$('#contact-toggle').on('click', function(){
				$('#contact').toggleClass('open-p');
			});			
		});
		</script>
		<script>
		   $(function() {

		      $('.gallery div img').each(function(n) {
		        n += 1;
		        $(this).wrap('<figure class="tint t'+ n + '"></figure>');
		      });

		    });
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-24403306-48', 'jvwlaw.net');
		  ga('send', 'pageview');

		</script>
		<script src="_/js/script.min.js"></script>

	</body>

</html>