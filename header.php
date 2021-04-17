<?php
/**
 * @description header for gelios theme
 * @package gelios
 * @scince version 0.0.1
 * 
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="profile" href="https://gmpg.org/xfn/11"-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
				<button class="menu-toggle btn-default" aria-controls="primary-menu" aria-expanded="false">
				<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'geliostrans' ); ?></span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'landing_nav',
						'menu_id'        => 'landing_nav',
					)
				);
				?>
			</nav>
			<nav id="prefencesNav" class="main-navigation">
				<button class="menu-toggle" aria-controls="prefences-menu" aria-expanded="false">
					<span class="screen-reader-text">Prefences Menu</span>
				</button>
                <button id="daynight" class="" aria-controls="prefences-menu" aria-expanded="false" onclick="switchDayNight()" data-state="0">
                    <span>☀</span>
                    <span>☾</span>
                    <span>DayNight</span>
                </button>
				<!--
                <button id="translate" class="" aria-controls="prefences-menu" aria-expanded="false" onclick="switchLanguage()" data-state="0">
                    <span>UA</span>
                    <span>RU</span>
                    <span>EN</span>
                </button>
				<button id="search" class="" aria-controls="prefences-menu" aria-expanded="false" onclick="switchLanguage()" data-state="0">
					<span class="screen-reader-text">Search</span>
					<?php //get_template_part( 'template-parts/svg/svg', 'search' ); ?>
                </button>
				<button id="login" class="" aria-controls="prefences-menu" aria-expanded="false" onclick="openModal('login')" data-state="0">
					<span class="screen-reader-text">Login</span>
					<?php //get_template_part( 'template-parts/svg/svg', 'login' ); ?>
                </button>
				-->
                <script>
                    // function switchDayNight(){
                    //     console.log(document.getElementById('daynight').dataset);
                    //     if(document.getElementById('daynight').dataset.state == 0)
                    //     {
                    //         if(document.body.classList.contains('theme-dark')) document.body.classList.remove('theme-dark');
                    //         document.body.classList +=' theme-light';
                    //         document.getElementById('daynight').dataset.state = 1;
                    //     } else {
                    //         if(document.body.classList.contains('theme-light')) document.body.classList.remove('theme-light');
                    //         document.body.classList +=' theme-dark';
                    //         document.getElementById('daynight').dataset.state = 0;
                    //     }
                    // }
                    function switchLanguage(){
                        console.log(document.getElementById('translate').dataset);
                        if(document.getElementById('translate').dataset.state == 0)
                        {
                            if(document.body.classList.contains('lang-ua')) document.body.classList.remove('theme-dark');
                            document.body.classList +=' theme-light';
                            document.getElementById('daynight').dataset.state = 1;
                        } else {
                            if(document.body.classList.contains('theme-light')) document.body.classList.remove('theme-light');
                            document.body.classList +=' theme-dark';
                            document.getElementById('daynight').dataset.state = 0;
                        }
                    }
                </script>
			</nav>
		</div>
		<div class="secondary-bar">
		</div>

	</header>
<?php 
	get_template_part( 'template-parts/hero', 'header' );

