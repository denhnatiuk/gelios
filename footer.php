<?php
?>
<footer class="site-footer">
    <div class="container">
        <div class="wp-column map">

        </div>
        
    </div>
    <div class="container">
        <div class="wp-column ">

        </div>
        <div class="wp-column"></div>
        <div class="wp-column"></div>
    </div>
    <div>
    <div class="container-fluid contacts-page">
    <div class="contacts-list-wrapper">
      <ul class="contacts-list">
          <?php
            $arr = ['tel','address','email'];

            $tel = get_theme_mod('contacts-panel-tel') ?: '+3806619552001';
            $email = get_theme_mod('contacts-panel-email') ?: 'info@gelostrans.com';
            $address = get_theme_mod('contacts-panel-mail') ?: 'Україна, 93402, Луганська обл., місто Северодонецьк, вулиця ЗАВОДСЬКА, будинок 35, кабінет 16';
            $skype = get_theme_mod('contacts-panel-skype') ?: '+3806619552001';
            $viber = get_theme_mod('contacts-panel-viber') ?: '+3806619552001';
            $telegram = get_theme_mod('contacts-panel-telegram') ?: '+3806619552001';
          ?>
        <li class="contacts-item">
          <a href="tel:<?php echo $tel ?>" class="contacts-item__tel">
            <span class="tel-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'tel' ); ?>
            </span>
            <?php echo $tel ?>
          </a>
        </li>
        <li class="contacts-item">
          <a href="#" class="contacts-item__address" disabled>
            <span class="map-icon">
                 <?php get_template_part( 'template-parts/svg/svg', 'mapMarker' ); ?>
            </span>
            <address><?php echo $address ?></address>
          </a>
        </li>
        <li class="contacts-item">
          <a href="mailto:<?php echo $email?>" class="contacts-item__email">
            <span class="email-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'email' ); ?>
            </span>
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
    <div class="footer__map" id="map">
      <!--iframe
        width="50%"
        height="400"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed?data=!4m12!1m6!3m5!1s0x41201058bdafb979:0xe8376165a5df741a!2sZavodska+St!8m2!3d48.944567!4d38.479587!3m4!1s0x41201058bdafb979:0xe8376165a5df741a!8m2!3d48.944567!4d38.479587"
        allowfullscreen>
      </iframe -->

    </div>
  </div>

    </div>
    <div class="fixed-stuff">
      <button class="btn btn-default"></button>
    </div>
    <?php wp_footer();?>
</footer>