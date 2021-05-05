<?php
/**
 * The main template file
 *
 * @package geliostrans
 * @scince version 1.0.0
 */

get_header();
?>
	<main id="primary" class="site-main">
	  	<div class="content-area">
			<?php get_template_part( 'template-parts/sections/index', 'aboutus' ); ?>
			<?php get_template_part( 'template-parts/sections/index', 'features' ); ?>
			<?php get_template_part( 'template-parts/sections/index', 'services' ); ?>
			<?php //get_template_part( 'template-parts/sections/index', 'team' ); ?>
		</div>
	</main>
<?php
get_footer();
