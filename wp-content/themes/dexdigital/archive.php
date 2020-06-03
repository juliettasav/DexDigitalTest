<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DexDigital
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="section intro">
		<div class="container">
			<div class="row align-items-center">
				<div class=" block col-md-6">
					<small class="text-muted text-author">by Lorem Ipsum</small>
					<h1><bold><?php the_archive_title( ); ?></bold></h1>
					<p class="text-muted">Lorem Ipsum is simply dummy text</p>
					<div class="d-flex counter">
						<h2>65 mln</h2>
						<h2>12000</h2>
						<h2><span id="count" class="counter-number">105</span></h2>
					</div>

					<p class="text-intro">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
					</p>
					
				</div>
				<div class=" block col-md-6">
					<img src="../../wp-includes/assets/picture.jpg" class="img-fluid" alt="Responsive image">
				</div>
			</div>
		</div>
	
	</section>

	<section class="section top-service">
		<div class="row">
			<div class="container">
				<div class="bg-block">
					<h3>Top Services</h3>
				</div>
				<div class="carousel-wrap">
					<div class="owl-carousel">
					<?php
       					$jsondata = file_get_contents('https://jsonplaceholder.typicode.com/comments');
						$json = json_decode($jsondata, true);
						for ($i = 0; $i < 5; $i++) 
						{
						?>
						<div class="item">
							<div class="card">
								<img src="../../wp-includes/assets/picture.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Lorem Ipsum</h5>
									<div class="card-numbers">
										<span id='comment-count'>2077</span>
										<span>93%</span>
										<span><img src="../../wp-includes/assets/icon-star.png" width="24px"> 9.3</span>
									</div>
									<div class="card-links d-flex justify-content-between align-items-center">
										<a href=""><span>READ REVIEW →</span></a>
										<button class="btn btn-custom btn-card">VISITE SITE</button>
									</div>
									<div class="card-comment">
										<div class="name-comment">
											<span>feedback</span>
										</div>
										<div class="title-comment">
											<img src="../../wp-includes/assets/communications.png" width="24px">
											<span><?php echo $json[$i]['name'];?></span>
										</div>
										<div class="text-comment">
											<?php echo $json[$i]['name'];?>
										</div>
										<div class="email-comment">
											<?php echo $json[$i]['email'];?>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<?php
						}
						
    				?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section main-content">
		<div class="container">
			<div class="row">
				<h3>What is Lorem Ipsum?</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae

				</p>
			</div>
		
			<div class="row justify-content-between">
				
				<div class="block col-md-12 col-lg-6 block-img">
					<img src="../../wp-includes/assets/picture.jpg" class="img-text" alt="Responsive image">
				</div>
				<div class="block col-md-12 col-lg-6 text-block">
				<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</li>
					</ul>
				</div>
			</div>
			<div class=" block row mt-4">
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste

						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
						</li>
					</ul>

				</div>
	

			<div class="row">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
				</p> 
			</div>
			<div class="row justify-content-between mt-4">
			
				<div class="block col-md-12 col-lg-6 text-block">
					<h3>What is Lorem Ipsum?</h3>
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</li>
					</ul>					
				</div>
				<div class="block col-md-12 col-lg-6 block-img">
					<img src="../../wp-includes/assets/picture.jpg" class="img-text" alt="Responsive image">		
				</div>
			</div>
			<div class="block row mt-4">
				<ul>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste

					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
					</li>
				</ul>
				
			</div>
			<div class="row justify-content-between mt-4">
				
				<div class="block col-md-12 col-lg-6 block-img">
					
						<img src="../../wp-includes/assets/picture.jpg" class="img-text" alt="Responsive image">
				</div>
				<div class="block col-md-12 col-lg-6 text-block">
					<h3>What is Lorem Ipsum?</h3>
					<p>	
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
					</p>		
				</div>
			</div>
			<div class="row mt-4">
				<h3>What is Lorem Ipsum?</h3>
			</div>
			<div class="row">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry:</p>
			</div>
			<div class=" block row">
				<ul>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="block col-md-12 col-lg-6 text-block">
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor

						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						</li>
					</ul>
				</div>
				<div class="block col-md-12 col-lg-6 block-img">
					<img src="../../wp-includes/assets/picture.jpg" class="img-text" alt="Responsive image">
				</div>
			</div>
			<div class="row mt-4">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis				
				</p>
			</div>	
			<div class="row mt-4">
				<h3>What is Lorem Ipsum?</h3>
			</div>
			<div class="row block">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry:</p>
				<ul>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					</li>
				</ul>
			</div>
			<div class="row">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
				</p>
			</div>
			
		</div>
	</section>

	<section class="section conclusion">
		<div class="container">
			<div class="text-center">
				<h4>Conclusion</h4>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
				</p>
			</div>
		</div>
	</section>

	<?php echo do_shortcode('[cta-element text="Lorem Ipsum is simply dummy text of the printing and typesetting" button_link="#"]'); ?>
	

		

	</main><!-- #main -->

<?php
get_footer();
