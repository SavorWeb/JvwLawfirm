<div id="contact-foot">
	<div class="row is-typeset">
		<div id="contact-form" class="contact-form-block colspan12-6 colspan6-3 colspan2-2 as-grid">
				<h3>Contact Us</h3>
		
			<form id="contact" action="contact-submit.php" method="post">
				<fieldset>	
					<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
						<label for="name">Name</label>
						<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
					</div>

		            <div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
						<label for="phone">Phone</label>
						<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
		            </div>

					<div class="formblock clear">
						<label for="email">E-mail</label>
						<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
					</div>
			        
					<div class="formblock clear">
						<label for="message">Message</label>
						<textarea required name="message" placeholder="Your message" ></textarea>
					</div>
			        
						<input type="submit" name="submit" class="button btn" id="submit" value="Send Message" />
						<small>I have read the <a href="privacy">disclaimer and privacy policy</a>.</small>
				</fieldset>
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
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<script src="_/js/responsive-nav.min.js"></script>
	<script src="_/js/responsive-accordion.min.js"></script>

	<script src="_/js/jquery.validate.min.js"></script>
	<script src="_/js/jquery.placeholder.min.js"></script>
	<script src="_/js/jquery.form.min.js"></script>
	<script>
		$(function(){
		$('#contact').validate({
		submitHandler: function(form) {
		    $(form).ajaxSubmit({
		    url: 'contact-submit.php',
		    success: function() {
		    $('#contact').hide();
		    $('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
		    }
		    });
		    }
		});         
		});
	</script>
		<script type="text/javascript">

				var navigation = responsiveNav(".nav-collapse", {
					customToggle: "#nav-toggle"
				});

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
		<script>
			if (!Modernizr.input.placeholder){
			      $('input[placeholder], textarea[placeholder]').placeholder();
			}
		</script>
		<script src="_/js/script.min.js"></script>

	</body>

</html>