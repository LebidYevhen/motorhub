<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything
 * up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package motorhub
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
	<a class="skip-link screen-reader-text"
	   href="#primary"><?php esc_html_e( 'Skip to content', 'motorhub' ); ?></a>

	<div class="container-fluid">
		<div class="row">
			<?php get_template_part( 'template-parts/shop-filters' ); ?>
			<div class="right-column col-8 p-0">
				<header id="masthead" class="site-header">
					<div id="container" class="header-wrapper">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle"
									aria-controls="primary-menu"
									aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'motorhub' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
						<div id="dropdown" class="dropdown">
							<button class="btn btn-secondary dropdown-toggle"
									type="button"
									id="dropdownMenuButton1"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<?php esc_html_e( 'Телефоны', 'motorhub' ); ?>
							</button>
							<ul class="dropdown-menu"
								aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item"
									   href="tel:+375296250475">+375 29
										625-04-75</a></li>
								<li><a class="dropdown-item"
									   href="tel:+375336250475">+375 33
										625-04-75</a></li>
							</ul>
						</div><!-- #dropdown -->
					</div><!-- .header-wrapper -->
				</header><!-- #masthead -->
