<?php
global $redux_demo;
?>
<?php get_header();  the_post(); ?>
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
						<h2>OUR Courses</h2>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab molestias expedita labore, molestiae eligendi consequatur omnis vero animi quia ratione provident ipsum ad cumque eaque doloribus voluptatibus asperiores a quas.</p>
					</header>
					<div class="highlights">
		
					<section>
							<div class="content">
								<header>
									<a href="#"><?php the_post_thumbnail("thumbnail"); ?></a>
									<h3 style="color:#861e26"><?php the_title();  ?></h3>
								</header>
								<p><?php the_content();
								 ?></p>
							</div>
						</section>
					
					</div>
				</div>
			</section>
			

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Curabitur ullamcorper ultricies</h2>
					<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Faucibus consequat lorem</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
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