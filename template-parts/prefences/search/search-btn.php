<?php
defined( 'ABSPATH' ) || exit();
?>
<button 
    id="search" 
    class="btn btn-lg d-none" 
    onclick="switchLanguage()" 
    aria-controls="prefences-menu" aria-expanded="false" 
    data-state="0"
    >
    <span class="screen-reader-text">Search</span>
    <?php get_template_part( 'template-parts/svg/svg', 'search' ); ?>
</button>
<!-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form> -->