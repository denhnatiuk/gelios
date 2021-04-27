<?php

// add_action( 'wp_enqueue_scripts', 'gelios_enqueue_scrollToTop_script' );
// function gelios_enqueue_scrollToTop_script(){
// 	wp_enqueue_script( 'scrollToTop', get_template_directory_uri() . '/template-parts/prefences/scrollToTop/scrollToTop.js', array(),  $VERSION, true );
// }
?>

<div id="scrollToTop" >
  <button 
    class="btn btn-default btn-skew btn-clipped-end" 
    onclick="document.body.scrollIntoView({block: 'start',behavior: 'smooth'})"
    aria-controls="prefences-menu" aria-expanded="false" aria-label="Scroll To Top"
    alt="Scroll To Top Button"
    >
    <span>
      &uarr;
    </span>
    <!-- <span class="screen-reader-text">Dark Light Switcher</span> -->
  </button>
</div>