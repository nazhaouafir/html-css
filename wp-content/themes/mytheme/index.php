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
					        <?php
							if(have_posts()){
								while(have_posts()){
									the_post();
									?>	
					<section>
							<div class="content">
								<header>
									<a href="<?php echo the_permalink();?>"><?php the_post_thumbnail("thumbnail"); ?></a>
									<h3 style="color:#861e26"><?php the_title();  ?></h3>
								</header>
								<p><?php  $result=get_the_excerpt();
								$result = substr($result, 0, 100);
								echo $result; ?><strong>....</strong></p>
								<a href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</section>
						<?php }; }  ?>
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
					<?php  
                     $args = array("post_type"=>"portfolio");
					 $portfolios = get_posts($args);
                      
					?>
					<?php foreach($portfolios as $portfolio){  ?>
						<section>
							<div class="content">
								<blockquote>
									<p><?php echo $portfolio->post_content?></p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo get_the_post_thumbnail_url($portfolio->ID, "16x16"); ?>" alt="" />
									</div>
									<a href="<?php echo get_the_permalink($portfolio->ID); ?>">
										<p class="credit">- <strong><?php echo $portfolio->post_title; ?></strong> 
										<span>CEO - ABC Inc.</span></p>

									</a>
								</div>
							</div>
						</section>
					<?php } ?>
						
					</div>
				</div>
			</section>

<?php get_footer(); ?>