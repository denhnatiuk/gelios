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
<section 
    class="hero-header container-fluid"
    style="">
    <?php get_template_part( 'template-parts/svg/svg', 'map' ); ?>
    <script>console.log('hero-header loaded')</script>
    <div class="row  align-items-center  justify-content-between">        
            <div class="col-xs-12 col-md-4">
                <h2>Лідер ринку <br/> автомобільних вантажних перевезень в Україні</h2>
                <button type="button" class="cta btn btn-default">дізнатись більше</button>
                <button type="button" class="cta btn btn-success">замовити зараз 
                    <div class="icon text-primary">
                        <?php get_template_part( 'template-parts/svg/svg', 'goon' );?>
                    </div>
                </button>
            </div>
            <div class="col-xs-12 col-md-6" >       
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/herotruck.png" alt="truck" class=" image-back-blob">
            </div>
        
    </div>
</section>