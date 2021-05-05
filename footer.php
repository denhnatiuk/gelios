<?php

?>
</main>
<footer class="site-footer">
    <?php //get_template_part( 'template-parts/svg/svg', 'shapeRounded' );?>
    <div class="row">
        <div class="col-sm-6 col-xs-12 map" id="map">
            <!-- <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2739.2772843254875!2d32.60196861514396!3d46.64103836216839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41ab94bcb5949%3A0x14a4e124a07523d6!2sForshtadtska%20St%2C%2051%2C%20Kherson%2C%20Khersons&#39;ka%20oblast%2C%2073009!5e0!3m2!1sen!2sua!4v1619706834572!5m2!1sen!2sua" 
              width="100%"
              height="400"
              loading="lazy"
              frameborder="0" style="border:0"
              allowfullscreen="true" 
              loading="lazy"></iframe> -->
          <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2739.2894801184943!2d32.60297491559731!3d46.64079747913246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41ab9441f94bd%3A0xcba2cfff00b02d7e!2sHirs&#39;koho%20St%2C%2044%2C%20Kherson%2C%20Khersons&#39;ka%20oblast%2C%2073009!5e0!3m2!1sen!2sua!4v1620196845191!5m2!1sen!2sua" 
          width="100%"
              height="400"
              loading="lazy"
              frameborder="0" style="border:0"
              allowfullscreen="true" 
              loading="lazy"></iframe>
        </div> 
        <div class="col-sm-6 col-xs-12 contacts" id="contacts">
          <h3><span class="text-danger">Наші</span> контакти</h3>
        <ul class="contacts-list">
          <?php
            $arr = ['tel','address','email'];

            $tel = get_theme_mod('contacts-panel-tel') ?: '+380661955200';
            $email = get_theme_mod('contacts-panel-email') ?: 'info@gelostrans.com';
            $address1 = get_theme_mod('contacts-panel-mail') ?: 'Україна, 93402, Луганська обл., місто Северодонецьк, вулиця ЗАВОДСЬКА, будинок 35, кабінет 16';
            $address2 = get_theme_mod('contacts-panel-mail') ?: 'Україна, 73009, Херсонська обл., місто Херсон, вулиця Гірського, будинок 44';
            $skype = get_theme_mod('contacts-panel-skype') ?: '+380661955200';
            $viber = get_theme_mod('contacts-panel-viber') ?: '+380661955200';
            $telegram = get_theme_mod('contacts-panel-telegram') ?: '+380661955200';
          ?>
        <li class="contacts-item">
          <a href="tel:<?php echo $tel ?>" class="contacts-item__tel">
            <span class="tel-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'tel' ); ?>
            </span>
            <span class="text-muted">телефон</span>
            <?php echo $tel ?>
          </a>
        </li>
        <li class="contacts-item">
          <!-- <a href="#" class="contacts-item__address" disabled> -->
            <span class="map-icon">
                 <?php get_template_part( 'template-parts/svg/svg', 'mapMarker' ); ?>
            </span>
            <span class="text-muted">юридична адреса</span>
            <address><?php echo $address1 ?></address>
          <!-- </a> -->
        </li>
        <li class="contacts-item">
          <!-- <a href="#" class="contacts-item__address" disabled> -->
            <span class="map-icon">
                 <?php get_template_part( 'template-parts/svg/svg', 'mapMarker' ); ?>
            </span>
            <span class="text-muted">адреса офісу</span>
            <address><?php echo $address2 ?></address>
          <!-- </a> -->
        </li>
        <li class="contacts-item">
          <a href="mailto:<?php echo $email?>" class="contacts-item__email">
            <span class="email-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'email' ); ?>
            </span>
            <span class="text-muted">email</span>
            <?php echo $email?>
          </a>
        </li>
        <li class="contacts-item">
          <a href="skype:<?php echo $skype ?>?call" class="contacts-item__skype">
            <span class="skype-icon"><?php get_template_part( 'template-parts/svg/svg', 'skype' ); ?></span>
            <?php echo $skype ?>
          </a>
        </li>
      </ul>
        </div>
    </div>
    <div class="container-fluid contacts-page">
    <div class="contacts-list-wrapper">
    
    </div>
    
    
  </div>

    </div>
    <!-- <div class="fixed-stuff">
      <button class="btn btn-default"></button>
    </div> -->
    <?php wp_footer();?>
</footer>