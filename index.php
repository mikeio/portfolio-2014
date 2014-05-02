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
	<div class="header">

		<div class="header-text">
			<h6 id="intro" class="animated fadeInDown">The Online Portfolio,&nbsp;of</h6>
			<h1 class="animated fadeInDown">Mike Peters</h1>
			<h6 id="outro" class="animated fadeInDown">A designer from Atlanta,&nbsp;Ga</h6>
			<hr>
		</div>
		
	</div>
	<!-- End Header Section -->


	<!-- Start Content Section -->

	<div class="content">

		<div class="bg_white">

			<div class="row">
  					<div class="large-12 large-centered columns">
  						<h2>My Expertise</h2>
  						<hr>
  					</div>
			</div>
	
			<div class="row">
	
				<div class="large-4 columns">
					<span class="icon_branding"></span>
					<h4>Branding</h4>
					<p id="expertise_detail">Make your customers feel confident about the way they look at your products and services.</p>
				</div>
	
  				<div class="large-4 columns icon_middle">
  					<span class="icon_print"></span>
					<h4>Print Design</h4>
					<p id="expertise_detail">From stationery to packaging, design can sometimes make the best impression in print form.</p>
  				</div>
	
  				<div class="large-4 columns">
  					<span class="icon_web"></span>
					<h4>Web Design</h4>
					<p id="expertise_detail">I design and develop responsive and easy to use websites that are hand coded with HTML5 and CSS3. </p>
  				</div>
	
			</div>

		</div>

		<div class="bg_offwhite">
			
			<div class="row">
  					<div class="large-12 large-centered columns">
  						<h2>Featured Work</h2>
  						<hr>
  					</div>
			</div>
	
			<div class="row">
	
				<div class="large-6 columns">
					<ul class="thumbnails cs-style-3">
						<li>
							<figure>
								<a href="quark"><img src="img/gallery-featured-quark.jpg" alt="img04"></a>
								<figcaption>
									<h4>Quark Coin</h4>
									<span>Cryptocurrency</span>
									<a href="quark" class="btn-small inverse hide-for-small">View Project</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
		
				<div class="large-6 columns">
					<ul class="thumbnails cs-style-3">
						<li>
							<figure>
								<a href="cupidsprey"><img src="img/gallery-featured-cupidsprey.jpg" alt="img04"></a>
								<figcaption>
									<h4>Cupid's Prey</h4>
									<span>Lust List 2012</span>
									<a href="cupidsprey" class="btn-small inverse hide-for-small">View Project</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
	
			</div>

		</div>

		<div class="bg_action">
			
			<div class="row">
  					<div class="large-12 large-centered columns">
  						<h2>Want to see more?</h2>
  						<a href="gallery" class="btn-medium inverse">View All Projects</a>
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

  <script src="js/effects.js"></script>


</body>

</html>