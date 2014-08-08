<!DOCTYPE html>

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Start Header Section -->
<?php include 'head.php'; ?>
<!-- End Header Section -->

<body>
	<!-- Start Navigation Section -->
	<?php include 'nav.php'; ?>
	<!-- End Navigation Section -->

	<!-- Start Header Section -->
	<div class="header header_alt">

		<div class="header-text">
			<h2>Contact</h2>
			<h6 id="sub_header">Get In Touch</h6>
			<hr>
		</div>
		
	</div>
	<!-- End Header Section -->


	<!-- Start Content Section -->

	<div class="content content_alt contact">

		<div class="bg_gradient">

			<form id="contact" name="contact" method="post" novalidate="novalidate">
			
				<fieldset>

					<div class="row">
	
						<div class="large-6 columns">

						 	<label for="name" id="name">Name <span id="required">*</span></label>
        					<input type="text" name="name" id="name" size="30" value="" required="">
	
						 	<div class="row">
	
								<div class="large-12 columns">
						 		<label for="email" id="email">Email <span id="required">*</span></label>
								<input type="text" name="email" id="email" size="30" value="" required="">
								</div>

							</div>
	
							<div class="row">
	
								<div class="large-12 columns">

						    		<label for="phone" id="phone">Phone</label>
									<input type="text" name="phone" id="phone" size="30" value="">

								</div>

							</div>
	
						</div>
	
						<div class="large-6 columns">

						 	<label for="Message" id="message">Message <span id="required">*</span></label>
							<textarea name="message" id="message" required=""></textarea>
	
						 	<div class="row">
	
								<div class="large-12 columns">

						    		<label for="Answer" id="answer">What is 2+2? <span id="required">*</span></label>
									<input type="text" name="answer" value="" required="">

								</div>
	
							</div>
	
						 </div>
	
					</div>
	
					<div class="row">

    					<div class="large-6 columns">
	
							<div data-alert class="alert-box success animated fadeIn" id="success">Success! Your message has been sent.<a href="#" class="close">&times;</a></div>
							
							<div data-alert class="alert-box alert animated fadeIn" id="error">Oops! Something went wrong, go back and try again.<a href="#" class="close">&times;</a></div>
	
    					</div>
	
    					<div class="large-6 columns">

	       					<input id="submit" type="submit" name="submit" value="Send Message" class="btn-medium btn-last">

    					</div>
	
					</div>

				</fieldset>

			</form>

		</div>

		<!-- Start Footer Section -->
		<?php include 'footer.php'; ?>
		<!-- End Footer Section -->
	
	</div>

	<!-- End Content Section -->

  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>

  <script src="js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>

  <script type="text/javascript">
  	jQuery.validator.addMethod('answercheck', function (value, element) {
  	        return this.optional(element) || /^\b4\b$/.test(value);
  	    }, "Please type the correct answer.");
  	
  	// validate contact form
  	$(function() {
  	    $('#contact').validate({
  	        rules: {
  	            name: {
  	                required: true,
  	                minlength: 2
  	            },
  	            email: {
  	                required: true,
  	                email: true
  	            },
  	            phone: {
  	                required: false,
  	            },
  	            message: {
  	                required: true
  	            },
  	            answer: {
  	                required: true,
  	                answercheck: true
  	            }
  	        },
  	        messages: {
  	            name: {
  	                required: "This field is required.",
  	            },
  	            email: {
  	                required: "This field is required."
  	            },
  	            message: {
  	                required: "This field is required.",
  	            },
  	            answer: {
  	                required: "Sorry, wrong answer."
  	            }
  	        },
  	        submitHandler: function(form) {
  	            $(form).ajaxSubmit({
  	                type:"POST",
  	                data: $(form).serialize(),
  	                url:"/process.php",
  	                success: function() {
  	                    $('#contact :input').attr('enabled', 'enabled');
  	                    $('#contact').fadeTo( "slow", 1, function() {
  	                        $('#success').fadeIn();
  	                    });
  	                },
  	                error: function() {
  	                    $('#contact').fadeTo( "slow", 1, function() {
  	                        $('#error').fadeIn();
  	                    });
  	                }
  	            });
  	        }
  	    });
  	});
  </script>

  <script src="js/effects-alt.js"></script>

</body>

</html>