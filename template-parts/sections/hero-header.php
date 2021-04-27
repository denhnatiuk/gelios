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
<section class="hero-header container" style="">
  <?php get_template_part( 'template-parts/svg/svg', 'map' ); ?>
  <div class="row  align-items-center justify-content-between">        
    <div class="col-xs-12 col-md-4">
        <h2><span class="text-danger">Лідер ринку</span><br/> автомобільних вантажних перевезень в Україні</h2>
              
    </div>
    <div class="col-xs-12 col-md-6" >       
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/herotruck.png" alt="truck" class=" image-back-blob">
        <div class="cta-form-wrapper">
          <form action="#" class="jumbotron cta-contact-form slide-left-top" id="heroContact">
      <ul>
        
        <li>
          <p class="left">
            <label for="first_name">first name</label>
            <input type="text" name="first_name" placeholder="John" />
          </p>
          <p class="pull-right">
            <label for="last_name">last name</label>
            <input type="text" name="last_name" placeholder="Smith" />      
          </p>
        </li>
        
        <li>
          <p>
            <label for="email">email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="john.smith@gmail.com" />
          </p>
        </li>        
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">comments</label>
          <textarea cols="46" rows="3" name="comments"></textarea>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>
        </div>
    </div>        
    <div class="cta col-xs-12 col-md-6">
      <div class="button-group">
          <button type="button" class="btn btn-lg btn-secondary shine"
            onclick="document.getElementById('aboutus').scrollIntoView({block: 'end',behavior: 'smooth'});">дізнатись більше</button>
          <button type="button" class="btn btn-lg btn-success shine" onclick="getElementById('heroContact').classList.toggle('active')">замовити зараз 
              <div class="badge icon text-primary">
                  <?php get_template_part( 'template-parts/svg/svg', 'goon' );?>
              </div>
          </button>
      </div>  
      <svg class="svg-filters">
        <defs>
          <radialGradient id="active" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#ebf7ff;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#b3e1ff;stop-opacity:1" />
          </radialGradient> 
          <filter id="inset-shadow">
            <feOffset dx='-1' dy='1'/>
            <feGaussianBlur 
                  stdDeviation='.7'
                  result='offset-blur'/>
            <feComposite
                  operator='out'
                  in='SourceGraphic'
                  in2='offset-blur'
                  result='inverse'/>
            <feFlood
              flood-color='black'
              flood-opacity='0.05'
              result='color'/>
            <feComposite
              operator='in'
              in='color'
              in2='inverse'
              result='shadow'/>
            <feComposite
              operator='over'
              in='shadow'
              in2='SourceGraphic'/>
          </filter>
        </defs>
      </svg>   
    </div>
  </div>
</section>
<!-- <div class="bg-shape shape-bottom shape-fluid-x svg-shim text-dark"></div> -->