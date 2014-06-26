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
			<h2>Oops!</h2>
			<h6 id="sub_header">Something Went Wrong</h6>
			<hr>
		</div>
		
	</div>
	<!-- End Header Section -->


	<!-- Start Content Section -->

	<div class="content content_alt">

		<div class="bg_gradient special-404">

			<div class="row fullWidth">
  			  
   				<div class="large-12 columns">
  					<img src="img/404.png" id="four04"><br>
  					<span id="broken">Uh oh! Looks like something broke.</span>
  					<a href="javascript:history.back()" class="btn-medium">Take Me Back</a><br>
  					<span id="report">or <a href="/contact">Report It</a>.</span>
  					
   				</div>


			</div>

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

  <script src="js/effects-alt.js"></script>

</body>

</html>