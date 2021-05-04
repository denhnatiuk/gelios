<?php
/**
 * Template part for displaying hero-header in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package geliostrans
 */

?>
<section id="team" class="container flex-column">
    <!-- <div class="container-fluid container-bg container-bg-cover" 
         style="background-image:url(<?php  //echo get_template_directory_uri() ?>/assets/images/team-bg.jpg);">
        
    </div> 
    <div class="container-fluid container-bg container-bg-cover bg-shape-rotated-180">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2880 480" 
            class="bg-shape bg-shape-bottom bg-shape-fluid"             
            fill="var(--theme-color-background)">
            <path d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" style="width:200%"></path>
        </svg>    
        <div class="" >
            <svg class="bg-shape bg-shape-bottom bg-shape-fluid" viewBox="0 0 2880 480" fill="var(--theme-color-background)"
                xmlns="http://www.w3.org/2000/svg">
                    <path d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" style="width:200%"></path>
            </svg>
        </div> 
    </div>  -->
    
    <h2 class="text-right "><span class="text-danger">Команда</span> професіоналів</h2>
                    
    <div class="row">
        <div role="tablist" aria-orientation="vertical"
          id="team-pills-tab"
          class="nav align-flex-start col-md-3 col-xs-12 nav-pills">
            <a  role="tab" data-toggle="pill" aria-selected="true" 
                class="btn btn-default shine active"
                id="team-pills-user-1"
                href="#team-pills-user-tab-1"
                aria-controls="team-pills-user-tab-1">
                <h5>Олександр <span> Стріжов</span></h5>
            </a>
            <a role="tab" data-toggle="pill" 
              class="btn btn-default shine"  aria-selected="true"
              id="team-pills-user-2"
              href="#team-pills-user-tab-2"
              aria-controls="team-pills-user-tab-2">
                <h5>Валентина <span> Репа</span></h5>
            </a>
            <a role="tab" data-toggle="pill" 
              class="btn btn-default shine"  aria-selected="true"
              id="team-pills-user-3"
              href="#team-pills-user-tab-3"
              aria-controls="team-pills-user-tab-3">
                <h5>Лена <span> Зинская</span></h5>
            </a>
            <a role="tab" data-toggle="pill" 
              class="btn btn-default shine"  aria-selected="true"
              id="team-pills-user-4"
              href="#team-pills-user-tab-4"
              aria-controls="team-pills-user-tab-4">
                <h5>Юлия<span>  Кантур</span></h5>
            </a>
            <a role="tab" data-toggle="pill" 
              class="btn btn-default shine"  aria-selected="true"
              id="team-pills-user-5"
              href="#team-pills-user-tab-5"
              aria-controls="team-pills-user-tab-5">
                <h5>Андрей<span>  Медведь</span></h5>
            </a>
        </div>
        <div class="tab-content container-bg" 
            id="team-pills-tabContent">

            <div role="tabpanel" class="tab-pane container-fluid bg-container fade show active" 
                id="team-pills-user-tab-1"
                aria-labelledby="team-pills-user-1">
                <div class="container" style="
                background-image:"></div>
                <img src="url(<?php  echo get_template_directory_uri() ?>/assets/images/team/strizhov.jpg);" alt="">
                <div class="row">
                    <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
                        стрижов
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane container-fluid bg-container fade" 
                id="aboutus-pills-history"
                aria-labelledby="aboutus-pills-history-tab">
                <div class="container-fluid" style="
                background-image:url(<?php  echo get_template_directory_uri() ?>/assets/images/history_cave.jpg);"></div>
                <div class="row">
                    <div class="col-md-8 offset-md-3 col-xs-12 tab-content-inner">
                        <h2 class="text-right   "><span class="text-danger">Наша</span> історія успіху</h2>
                        <p class="">
                        Ми вже більше 17 років є надійним партнером найбільших підприємств України. Наш автопарк налічує понад 50 автомобілів з різними напівпричепами від ізотермічних до сучасних Рефрижиратор, здатних забезпечити будь-який необхідний температурний режим (від -25 до +25).
                        Ми займались логістикою ще до того як це стало мейнстрімом :)
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</section>