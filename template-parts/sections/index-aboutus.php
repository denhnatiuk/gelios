<?php
?>
<section class="container-fluid" id="aboutus">
<div id="aboutus-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
  <a role="tab" data-toggle="pill" class="btn btn-shade shine active"  aria-selected="true"
      id="aboutus-pills-history-tab"
      href="#aboutus-pills-history" 
      aria-controls="aboutus-pills-history">
    <div class="icon">
      <?php get_template_part( 'template-parts/svg/svg', 'book' );?>
    </div>
    <span>Наша історія успіху</span>    
  </a>
  <a role="tab" data-toggle="pill" class="btn btn-shade shine"  aria-selected="false"
      id="aboutus-pills-achivements-tab"
      href="#aboutus-pills-achivements" 
      aria-controls="aboutus-pills-achivements">
    <div class="icon">
      <?php get_template_part( 'template-parts/svg/svg', 'awards' );?>
    </div>
    <span>Наші досягнення</span>    
  </a>
  <a role="tab" data-toggle="pill" class="btn btn-shade shine"  aria-selected="false"
      id="aboutus-pills-iso-tab"
      href="#aboutus-pills-iso" 
      aria-controls="aboutus-pills-iso">
    <div class="icon">
      <?php get_template_part( 'template-parts/svg/svg', 'iso' );?>
    </div>
    <span>Сертифікація ISO 9001</span>
  </a>
</div>
<div class="tab-content" 
    id="aboutus-pills-tabContent">
  <div role="tabpanel" class="tab-pane  jumbotron fade show active" 
    id="aboutus-pills-history"
    aria-labelledby="aboutus-pills-history-tab">
    <p class="">
      Ми займались логістикою ще до того як це стало мейнстрімом.
    </p>
  </div>
  <div role="tabpanel" class="tab-pane jumbotron fade" 
    id="aboutus-pills-achivements"
    aria-labelledby="aboutus-pills-achivements-tab">
    achivements
  </div>
  <div role="tabpanel" class="tab-pane  jumbotron fade" 
    id="aboutus-pills-iso"
    aria-labelledby="aboutus-pills-iso-tab">
    iso content
  </div>
</div>
<div class="container-fluid bg-container" 
  style="background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/awards_bg.png);
    background-position:center;
    background-attachment:fixed;
    background-size:cover;
    background-repeat:no-repeat
    filter:grayscale(.5) blur(.5)
    background:linear-gradient(to bottom, transparent 0%, rgba(0,0,0,.5) 25%,rgba(0,0,0,.8) 50%, rgba(0,0,0,.5) 75%, transparent 100%">
  <!-- <img class="" src="<?php //echo get_template_directory_uri() ?>/assets/images/awards_bg.jpg" alt=""> -->
  <svg class="bg-shape bg-shape-bottom bg-shape-fluid" viewBox="0 0 2880 480" fill="var(--theme-color-shade)"
      xmlns="http://www.w3.org/2000/svg">
        <path d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" style="width:200%"></path>
  </svg>
</div>  
</section>

