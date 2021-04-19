<?php

add_action( 'wp_enqueue_scripts', 'gelios_enqueue_darklight_script' );
function gelios_enqueue_darklight_script(){
	wp_enqueue_script( 'darklight', get_template_directory_uri() . '/template-parts/prefences/darklight/darklight.js', array(),  $VERSION, true );
}
?>

<button 
  id="darklight" 
  class="btn btn-default" 
  onclick="darklight.darklightChange();"
  aria-controls="prefences-menu" aria-expanded="false" aria-label="Dark Light Switcher"
  >
    <span>☀</span>
    <span>☾</span>
    <span class="screen-reader-text">Dark Light Switcher</span>
</button>