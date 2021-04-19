<?php
/**
 * @description header for gelios theme
 * @package gelios
 * @scince version 0.0.1
 * 
*/
defined( 'ABSPATH' ) || exit();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="profile" href="https://gmpg.org/xfn/11"-->

	<?php wp_head(); ?>
</head>

<body <?php body_class('theme-dark'); ?>>
<?php 
	wp_body_open(); 
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'geliostrans' ); ?>
	</a>

	<header id="masthead" class="site-header fixed-top-bar">
		<div class="primary-bar">
			<div class="site-branding">
				<?php
				$custom_logo = the_custom_logo();
				if ($custom_logo) :
					the_custom_logo();
				else : 
					?>
					<div class="site-logo">
						<?php get_template_part( 'template-parts/svg/svg', 'logo' ); ?>
					</div>
					<?php
				endif;
				$geliostrans_description = get_bloginfo( 'description', 'display' );
					?>
					<h1 class="brand-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<!-- <span class="brand-form">ТОВ</span> -->
					<?php bloginfo( 'name' ); 
				?>
					</a>
				</h1>
				<?php
					if ( $geliostrans_description || is_customize_preview() ) :
						?>
						<span class="site-description"><?php echo $geliostrans_description ?></span>
						<?php
					endif; 
				?>
			</div>
			<nav id="landingNav" class="main-navigation">
				<button 
					class="navbar-toggler menu-toggle" 
					type="button" 
					data-toggle="collapse" 
					data-target="#primary-menu" 
					aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle prefences"
					>
					<span class="navbar-toggler-icon screen-reader-text">Prefences Menu</span>
					<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'geliostrans' ); ?></span>
				</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' 	=> 'landing_nav'
							,'menu_id'        	=> 'landing_nav'
							,'fallback_cb'		=> 'primary'
							,'container'        => 'div'
							,'container_class'  => 'nav-menu'
							,'container_id'     => 'landingNav'
						)
					);
									
				//wp_nav_menu( [
					// 	'theme_location'  => '',
					// 	'menu_id'         => '',
					// 	'menu'            => '', 
					// 	'container'       => 'div', 
					// 	'container_class' => '', 
					// 	'container_id'    => '',
					// 	'menu_class'      => 'menu', 
					// 	'echo'            => true,
					// 	'fallback_cb'     => 'wp_page_menu',
					// 	'before'          => '',
					// 	'after'           => '',
					// 	'link_before'     => '',
					// 	'link_after'      => '',
					// 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					// 	'depth'           => 0,
					// 	'walker'          => '',
					// ] );
				?>
			</nav>
			<nav id="prefencesNav" class="main-navigation">
				<button 
					class="navbar-toggler menu-toggle" 
					type="button" 
					data-toggle="collapse" 
					data-target="#prefences-menu" 
					aria-controls="prefences-menu" aria-expanded="false" aria-label="Toggle prefences"
					>
					<span class="navbar-toggler-icon screen-reader-text">Prefences Menu</span>
				</button>				
				<?php 
					get_template_part( 'template-parts/prefences/darklight/darklight', 'btn' ); 
					get_template_part( 'template-parts/prefences/langSwitch/langSwitch', 'btn' ); 
					get_template_part( 'template-parts/prefences/search/search', 'btn' ); 
					get_template_part( 'template-parts/prefences/login/login', 'btn' ); 
				?>
			</nav>
		</div>
		<div class="secondary-bar">
		</div>

	</header>
<?php 
	get_template_part( 'template-parts/sections/hero', 'header' );

