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

<body <?php body_class('darklight-dark'); ?>>
<?php 
	wp_body_open(); 
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'geliostrans' ); ?>
	</a>

	<header id="masthead" class="site-header fixed-top-bar navbar-fixed navbar-expand-lg ">
		<div  id="prefencesNav"  class="secondary-bar">
			<!-- <divclass="main-navigation">		 -->
				<div class="prefences-navbar hide" id="prefencesBar">
					<script>
						function togglePrefences(){
							const toggleButton = document.getElementById('prefencesToggleButton');
							const barContainer = document.getElementById('prefencesBar');
							toggleButton.classList.toggle('arrow');
							barContainer.classList.toggle('hide');
						}
					</script>
					<?php 
					get_template_part( 'template-parts/prefences/scrollToTop/scrollToTop', 'btn' ); 
					get_template_part( 'template-parts/prefences/darklight/darklight', 'btn' ); 
					// get_template_part( 'template-parts/prefences/langSwitch/langSwitch', 'btn' ); 
					// get_template_part( 'template-parts/prefences/search/search', 'btn' ); 
					// get_template_part( 'template-parts/prefences/login/login', 'btn' ); 
					?>
				</div>						
			<!-- </div> -->
		</div>
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
						<span class="brand-form">ПП</span>
						<?php bloginfo( 'name' );?>
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
					class="navbar-toggler menu-toggle btn-skew-sm" 
					type="button" 
					data-toggle="collapse" 
					data-target="#primary-menu" 
					aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle prefences"
					>
					<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'geliostrans' ); ?></span>
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="primary-menu">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link shine" href="#aboutus">Про Нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link shine" href="#features">Переваги</a>
					</li>
					<li class="nav-item">
						<a class="nav-link shine" href="#team">Команда</a>
					</li>
					<li class="nav-item">
						<a class="nav-link shine" href="#services">Послуги</a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li> -->
					</ul>
				</div>
				<?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location' 	=> 'landing_nav'
					// 		,'menu_id'        	=> 'landing_nav'
					// 		,'fallback_cb'		=> 'primary'
					// 		,'container'        => 'div'
					// 		,'container_class'  => 'nav-menu'
					// 		,'container_id'     => 'landingNav'
					// 	)
					// );?>
			</nav>
			<button 
					class="navbar-toggler menu-toggle" 
					type="button" 
					data-toggle="collapse" 
					data-target="#prefences-menu" 
					aria-controls="prefences-menu" aria-expanded="false" aria-label="Toggle prefences"
					onclick="togglePrefences()"
					id="prefencesToggleButton"
					>
					<span class="screen-reader-text">Prefences Menu</span>
					<?php get_template_part( 'template-parts/svg/svg', 'cog' );?>
					<!-- <svg id="prefencesToggleIcon" 
						viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg" class="navbar-toggler-icon">
          				<path id="path1" d="M 10,10 L 310,310 Z"></path>
						<path id="path2" d="M 10,10 L 10,222.1 C 60,130 110,130 160,160 C 210,210 210,310 10,310  L 160,160" ></path>
						<path id="path3" d="M 10,10 L 222.1,10 C 130,60 130,110 160,160 C 210,210 310,210 310,10 L 160,160" ></path>
        			</svg> -->
				</button>
			
		</div>
	</header>
<?php 
	get_template_part( 'template-parts/sections/hero', 'header' );

