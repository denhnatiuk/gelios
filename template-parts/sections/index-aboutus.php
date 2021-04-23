<?php
?>
<section class="" id="aboutus">
<div id="aboutus-pills-tab" class="nav flex-column col-md-3 col-xs-12 nav-pills" role="tablist" aria-orientation="vertical">
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
<div class="tab-content bg-container" 
    id="aboutus-pills-tabContent">
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade show active" 
    id="aboutus-pills-history"
    aria-labelledby="aboutus-pills-history-tab"
    style="background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/history_cave.png);
    background-position:center;
    background-attachment:fixed;
    background-size:cover;
    background-repeat:no-repeat;
    filter: grayscale(35%) sepia(35%) brightness(63%) hue-rotate(22deg) contrast(100%);
    background-color:rgba(0,0,0,.5)">
    <div class="row">
      <div class="col-md-7 offset-md-3 col-xs-12">
        <p class="">
          Ми займались логістикою ще до того як це стало мейнстрімом.
        </p>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
    id="aboutus-pills-achivements"
    aria-labelledby="aboutus-pills-achivements-tab"
    style="background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/awards_bg.png);
    background-position:center;
    background-attachment:fixed;
    background-size:cover;
    background-repeat:no-repeat;
    filter: grayscale(35%) sepia(35%) brightness(63%) hue-rotate(22deg) contrast(100%);
    background-color:rgba(0,0,0,.5)">
    <div class="row">
      <div class="col-md-7 offset-md-3 col-xs-12">
        <p class="">
          Нас щорічно номінують на бла бла бла.
        </p>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
    id="aboutus-pills-iso"
    aria-labelledby="aboutus-pills-iso-tab"style="background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/iso_bg.png);
    background-position:center;
    background-attachment:fixed;
    background-size:cover;
    background-repeat:no-repeat;
    filter: grayscale(35%) sepia(35%) brightness(63%) hue-rotate(22deg) contrast(100%);
    background-color:rgba(0,0,0,.5)">
    <div class="row">
      <div class="col-md-7 offset-md-3 col-xs-12">
        <p class="">
          Ми маємо сертифікат ISO.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="" 
  >
  <!-- <img class="" src="<?php //echo get_template_directory_uri() ?>/assets/images/awards_bg.jpg" alt=""> -->
  <svg class="bg-shape bg-shape-bottom bg-shape-fluid" viewBox="0 0 2880 480" fill="var(--theme-color-background)"
      xmlns="http://www.w3.org/2000/svg">
        <path d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" style="width:200%"></path>
  </svg>
</div>  
</section>

