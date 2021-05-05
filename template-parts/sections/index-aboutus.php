<?php
?>
<section class="" id="aboutus">
<div id="aboutus-pills-tab" class="nav align-flex-start col-md-3 col-xs-12 nav-pills" role="tablist" aria-orientation="vertical">
  <a role="tab" data-toggle="pill" class="btn btn-shade shine active"  aria-selected="true"
        id="aboutus-pills-stats-tab"
        href="#aboutus-pills-stats" 
        aria-controls="aboutus-pills-stats">
      <div class="icon">
        <?php get_template_part( 'template-parts/svg/svg', 'graphic' );?>
      </div>
      <span>Ключові показники</span>    
  </a>
  <a role="tab" data-toggle="pill" class="btn btn-shade shine"  aria-selected="true"
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
<div class="tab-content container-bg" 
    id="aboutus-pills-tabContent">
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade show active" 
    id="aboutus-pills-stats"
    aria-labelledby="aboutus-pills-stats-tab">
    <div class="container-fluid container-bg container-bg-cover container-bg-filter" style="
      background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/grow.jpg);"></div>
    <div class="row">
      <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
        <h2 class="text-right "><span class="text-danger">Ключові </span> показники</h2>
        <?php get_template_part( 'template-parts/sections/part', 'numbers' );?>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
    id="aboutus-pills-history"
    aria-labelledby="aboutus-pills-history-tab">
    <div class="container-fluid  container-bg container-bg-cover container-bg-filter" style="
      background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/history_cave.jpg);"></div>
    <div class="row">
      <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
        <h2 class="text-right   "><span class="text-danger">Наша</span> історія успіху</h2>
        <p class="">
          Автомобільні перевезення – це один з найзручніших способів доставити необхідний вантаж. Підприємстов  «Гелиос-Транс» вже понад  12 років забезпечує перевезення і експедирування вантажів різної ваги та складності транспортування.
        </p>
        <p class="">
          Ми здійснюємо перевезення вантажів як по Україні, так і в країни СНД , використовуючи перевірений транспорт стандарту Євро 3 Євро 3 . Наша компанія організовує доставку вантажів авторефрижераторами і тентованими автомобілями вантажопідйомністю до 23 тонн, обʼємом від 86 м3, а також готова надати транспорт для негабаритних, небезпечних та дорогих вантажів.
        </p>
        <p class="">
          Безсумнівним плюсом є гарний технічний стан нашого транспорту, наявність власних ремонтних площ по технічному обслуговуванню та ремонту вантажних автомобілів. Це суттєво знижує ймовірність виникнення несправностей машин в дорозі і здійснити доставку Ваших вантажів в найшвидші терміни.
        </p>        
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
    id="aboutus-pills-achivements"
    aria-labelledby="aboutus-pills-achivements-tab">
    <div class="container-fluid  container-bg container-bg-cover container-bg-filter" style="
      background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/awards_bg.jpg);"></div>
    <div class="row">
      <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
          <h2 class="text-right  "><span class="text-danger">Визнання </span> наших досягнень</h2>
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/leader2020.png" alt="" class=" img">
            </div>
            <div class="col-sm-6 col-xs-12">
              <p class="">
                Наше підприємство отримало нагороду "Лідер Галузі 2020 року"
              </p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
    id="aboutus-pills-iso"
    aria-labelledby="aboutus-pills-iso-tab">
    <div class="container-fluid  container-bg container-bg-cover container-bg-filter" style="
      background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/iso_bg1.jpg);"></div>
    <div class="row">
    <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
          <h2 class="text-right  "><span class="text-danger">Стандартизація </span>бізнес-процесів</h2>
          <div class="row">
            <div class="col-sm-6 col-xs-12">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/cert_iso.jpg" alt=""  class=" img">
            </div>
            <div class="col-sm-6 col-xs-12">
              <p class="">
                Підприємство отримало сертифікат ISO 9001:2015 (Системи управління якістю)
              </p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="" >
  <svg class="bg-shape bg-shape-bottom bg-shape-fluid" viewBox="0 0 2880 480" fill="var(--theme-color-background)"
      xmlns="http://www.w3.org/2000/svg">
        <path d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" style="width:200%"></path>
  </svg>
</div>  
</section>

