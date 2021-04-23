<?php

add_action( 'wp_enqueue_scripts', 'gelios_enqueue_langswitch_script' );
function gelios_enqueue_langswitch_script(){
	wp_enqueue_script( 'darklight', get_template_directory_uri() . '/template-parts/prefences/langSwitch/langSwitch.js', array(),  $VERSION, true );
}
?>

<button 
  id="translate" 
  class="btn d-none" 
  aria-controls="prefences-menu" 
  aria-expanded="false" 
  onclick="switchLanguage();" 
  data-state="0"
  >
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'ukr' ); ?></span>
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'rus' ); ?></span>
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'usa' ); ?></span>
</button>