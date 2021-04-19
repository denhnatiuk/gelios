<?php
/**
 * Template part for displaying hero-header in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package geliostrans
 */

?>
<section id="aboutus" class="wp-block-columns alignwide are-vertically-aligned-center" 
style="background-image:url(<?php  echo get_template_directory_uri() ?>/template-parts/images/grow.jpeg);
    background-position:center;
    background-attachment:fixed;
    background-size:cover;
    background-repeat:no-repeat
    ">
    <div class="container">
        <h3>100500 років бездоганного досвіду</h3>
        <p>Компанія ГЕЛИОС-ТРАНС була заснована 0000 року як підприємство що надавало експедиційні послуги і бла бла бла.</p>
        <p>Невпинна кропітка робота впродовж багатьох років надала змогу збільшити власний автопарк, що наразі налічує вже ___ машин.</p>
        <p>Наші заслуги не залишаються непоміченими, а тому Компанія щорічно номінується на ______ нагороду як  ____</p>
    </div>
    <div class="container">
        <div class="well" style="background-image:url(<?php  echo get_template_directory_uri() ?>/template-parts/images/awards_bg.jpg);
    background-position:center;
    background-attachment:unset;
    background-size:cover;
    background-repeat:no-repeat
    ">
            <?php get_template_part( 'template-parts/svg/svg', 'awards' );?>
            <span>Awards</span>
            <!-- <img src="<?php  //echo get_template_directory_uri() ?>/template-parts/images/awards_bg.jpg" alt=""> -->
        </div>
        <div class="well" style="background-image:url(<?php  echo get_template_directory_uri() ?>/template-parts/images/history_cave.jpg);
    background-position:center;
    background-attachment:unset;
    background-size:cover;
    background-repeat:no-repeat
    ">
            <?php get_template_part( 'template-parts/svg/svg', 'book' );?>
            <span>History</span>
        </div>
        <div class="well"></div>
    </div>
</section>