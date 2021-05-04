<?php
/**
 * Template
 * @link 
 * @package geliostrans
 */

?>
<section id="team" class="container flex-column">
    <!--add rounded shapes before and after, set bg-image-->    

    <h2 class="text-right "><span class="text-danger">Команда</span> професіоналів</h2>
       
    <?php 
        $team = ["Александр Стрижов" 
                ,"Валентина Репа"
                ,"Лена Зинская"
                ,"Юлия Кантур"
                ,"Андрей Медведь"];
        
    ?>

    <div class="row">
        <?php 
            foreach ($team as $key=>$value){
        ?>
            <label for="teammember<?php echo $key ?>" class="d-flex flex-row">
                <input type="radio" name="teammember" id="teammember<?php echo $key ?>">
                <span> <?php echo $value?></span>
                <div class="teammember-box">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/images/team/lenazinskaya.png" alt="">
                    <div class="teammember-contacts">
                        
                    </div>
                </div>
            </label>

        <?php
            }
        ?>
        <div class="col-xs-12 col-sm-4"></div>
        <div class="col-xs-12 col-sm-4"></div>
        <div class="col-xs-12 col-sm-4"></div>
    </div> 

</section>