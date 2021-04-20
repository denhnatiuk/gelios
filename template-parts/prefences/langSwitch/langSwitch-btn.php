<?php
?>

<button 
  id="translate" 
  class="btn " 
  aria-controls="prefences-menu" 
  aria-expanded="false" 
  onclick="switchLanguage()" 
  data-state="0"
  >
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'ukr' ); ?></span>
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'rus' ); ?></span>
    <span class="icon"><?php get_template_part( 'template-parts/svg/svg', 'usa' ); ?></span>
</button>