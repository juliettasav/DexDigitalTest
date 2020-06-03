<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DexDigital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">


		<nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'container_class' => 'navbar-collapse collapse w-100 dual-collapse2',
					'container_id' => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto align-items-center',
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					
				)
			);
			?>

			</div>
			
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
