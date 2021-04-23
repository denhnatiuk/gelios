<?php
/**
 * Template part for displaying hero-header in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package gelios
 * 
 */ 

// $background_1 = get_template_directory_uri().'/assets/svg/map.svg.php';
// $background_2 = get_template_directory_uri().'/assets/images/herotruck.png';
?>
<section class="hero-header container"
    style="
    /**
        background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/herotruck1.png);
        background-position:center right;
        background-repeat:no-repeat;
        perspective: 1500;
    */
    ">
    <?php get_template_part( 'template-parts/svg/svg', 'map' ); ?>
    <div class="row  align-items-center justify-content-between">        
        <div class="col-xs-12 col-md-4">
            <h2><span class="text-danger">Лідер ринку</span><br/> автомобільних вантажних перевезень в Україні</h2>
                  
        </div>
        <div class="col-xs-12 col-md-6" >       
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/herotruck.png" alt="truck" class=" image-back-blob">
        </div>        
        <div class="cta col-xs-12 col-md-7">
            <button type="button" class="btn btn-lg btn-secondary">дізнатись більше</button>
            <button type="button" class="btn btn-lg btn-success w-250">замовити зараз 
                <div class="badge icon text-primary">
                    <?php get_template_part( 'template-parts/svg/svg', 'goon' );?>
                </div>
            </button>
        </div>     
    </div>
</section>
<!-- <div class="bg-shape shape-bottom shape-fluid-x svg-shim text-dark"></div> -->