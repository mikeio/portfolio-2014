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
			<h6 id="intro" class="animated wow fadeInUp">The online portfolio&nbsp;of</h6>
			<h1 class="animated wow fadeInUp">Mike Peters</h1>
			<h6 id="outro" class="animated wow bounceIn">A designer from Atlanta,&nbsp;Ga</h6>
			<hr class="animated wow fadeInUp">
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
					<div class="icon_branding"><a href="gallery#branding"><span></span></a></div>
					<h4>Branding</h4>
					<p class="expertise_detail">Make your customers feel confident with a strong brand that stands out in the marketplace.</p>
				</div>
	
  				<div class="large-4 columns">
  					<div class="icon_web"><a href="gallery#web"><span></span></a></div>
					<h4>Web Design</h4>
					<p class="expertise_detail">I design and develop responsive and easy to use websites that are coded with HTML5 and CSS3.</p>
  				</div>

  				<div class="large-4 columns icon_middle">
  					<div class="icon_print"><a href="gallery#print"><span></span></a></div>
					<h4>Print Design</h4>
					<p class="expertise_detail">Design in print form can help your company make a powerful and lasting first impression.</p>
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
	
				<div class="large-6 columns wow fadeInLeft">
					<ul class="thumbnails cs-style-3">
						<li>
							<figure>
								<a href="kemp"><img src="img/gallery-featured-kemp.jpg" alt="Kemp Tennis Academy"></a>
								<figcaption>
									<div class="icon_branding-small show-for-medium-up"></div>
									<h4>Kemp</h4>
									<span>Tennis Academy</span>
									<a href="kemp" class="btn-small inverse hide-for-small">View Project</a>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
		
				<div class="large-6 columns wow fadeInRight">
					<ul class="thumbnails cs-style-3">
						<li>
							<figure>
								<a href="vapecity"><img src="img/gallery-featured-vapecity.jpg" alt="VapeCity"></a>
								<figcaption>
									<div class="icon_branding-small show-for-medium-up"></div>
									<h4 class="longname">Vape City</h4>
									<span>Austin, TX</span>
									<a href="vapecity" class="btn-small inverse hide-for-small">View Project</a>
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

 	<script type="text/javascript" src="js/jquery.preload.min.js"></script>
	<script>
		$.preload( '/img/bg_header-sml.jpg',
		  '/img/gallery-capitalcity01.jpg',
		  '/img/gallery-cupidsprey01.jpg',
		  '/img/gallery-hipchat01.jpg',
		  '/img/gallery-ladiesnight01.jpg',
		  '/img/gallery-moneyjam01.jpg',
		  '/img/gallery-myriad01.jpg',
		  '/img/gallery-quark01.jpg',
		  '/img/gallery-smithwesson01.jpg',
		  '/img/gallery-tabernacle01.jpg',
		  '/img/gallery-kemp01.jpg',
		  '/img/gallery-tedostone01.jpg'
		);
	</script>


</body>

</html>