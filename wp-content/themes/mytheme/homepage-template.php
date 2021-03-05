<?php
/*
Template Name: Inner template
*/
?>
<?php
global $redux_demo;
?>
<?php get_header();   ?>
		<!-- Banner -->
			<section style="  background-image: url(<?php echo $redux_demo['header-image']['url']; ?>);
							background-position: center;
							background-repeat: no-repeat;
							background-size: cover;"
							 id="banner">
				<div class="inner">
					<h1><?php echo $redux_demo['header-text-1']; ?></h1>
					<h2><?php echo $redux_demo['header-text-2']; ?></h2>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo $redux_demo['first-section-title'];  ?></h2>
						<p><?php echo $redux_demo['first-section-description']; ?></p>
					</header>
					<div class="highlights">
					   <!-- ******************* -->
					</div>
				</div>
			</section>
			

		<!-- CTA -->
			<section style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(<?php echo $redux_demo['second-section-image']['url']; ?>);
							background-position: bottom;
							background-repeat: no-repeat;
							background-size: cover;" id="cta" class="wrapper">
				<div class="inner">
					<h2><?php echo $redux_demo['second-section-title'];  ?></h2>
					<p><?php echo $redux_demo['second-section-description'];  ?></p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo $redux_demo['third-section-title']; ?></h2>
						<p><?php echo $redux_demo['third-section-description']; ?></p>
					</header>
					<div class="testimonials">
				<!-- ---------- -->
					</div>
				</div>
			</section>

<?php get_footer(); ?>