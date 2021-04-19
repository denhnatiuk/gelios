<?php
defined( 'ABSPATH' ) || exit();
?>
<button 
    id="search" 
    class="btn btn-default" 
    onclick="switchLanguage()" 
    aria-controls="prefences-menu" aria-expanded="false" 
    data-state="0"
    >
    <span class="screen-reader-text">Search</span>
    <?php //get_template_part( 'template-parts/svg/svg', 'search' ); ?>
</button>