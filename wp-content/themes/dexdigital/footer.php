<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DexDigital
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="row align-items-baseline justify-content-between">
				<div class="col-md-3">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p> 
				</div>
				<div class="col-md-4 col-sm-3">
				 <nav class="d-flex align-items-baseline">
				 <?php
					wp_nav_menu(
						array(
							'container_class' => 'nav-footer',
							'menu_class'      => 'd-flex align-items-center',
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer-menu',
						)
					);
				?>

				<ul class='custom-links-ul d-flex align-items-center'>
					<li>
						<a href="#">Sitemap</a>
					</li>
					<li>
						<a href="#">Privacy Policy</a>
					</li>
				</ul>
				<ul class='custom-links-ul d-flex align-items-center'>
					<li>
						<a href="#">Terms of Use</a>
					</li>
					<li>
						<a href="#">Affiliate Desclaimer</a>
					</li>
				</ul>
				 </nav>
				</div>
				<div class="col-md-2">
					<img src="../../wp-includes/assets/logo-dcma.png" alt="Logo DCMA">
				</div>
				<div class="col-md-3"><a href='#'><button class='btn btn-custom btn-footer'>Visit site</button></a></div>

			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
