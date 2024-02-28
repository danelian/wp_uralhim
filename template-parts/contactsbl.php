<section class="contactsbl" id="contacts">
  <div class="container">
    <h2 class="default-title"><?php the_field('contactsbl_section'); ?></h2>
    <div class="default__container">
      <div class="default__container-left">
        <div class="map" id="map"></div>
      </div>
      <div class="default__container-right">
        <div class="contactsbl__list">
          <div class="contactsbl__list-item">
            <h3>Контактная почта</h3>
            <?php
            $email = get_field('email', 'options');
            if ($email):
              $email_url = $email['url'];
              $email_target = $email['target'] ? $email['target'] : '_self';
              $email_title = $email['title'];
              ?>
              <a href="<?php echo esc_url($email_url); ?>" target="<?php echo esc_attr($email_target); ?>" class="social">
                <?php echo esc_html($email_title); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="contactsbl__list-item">
            <h3>Контактный телефон</h3>
            <?php
            $phone_number = get_field('phone_number', 'options');
            if ($phone_number):
              $phone_number_url = $phone_number['url'];
              $phone_number_title = $phone_number['title'];
              $phone_number_target = $phone_number['target'] ? $phone_number['target'] : '_self';
              ?>
              <a href="<?php echo esc_url($phone_number_url); ?>" target="<?php echo esc_attr($phone_number_target); ?>">
                <?php echo esc_html($phone_number_title); ?>
              </a>
            <?php endif; ?>
            <?php if (get_field('text_director', 'options')) { ?>
              <p>
                <?php the_field('text_director', 'options'); ?>
              </p>
            <?php } ?>
          </div>
          <?php if (get_field('address_ekb', 'options')) { ?>
            <div class="contactsbl__list-item">
              <h3>офис в Екатеринбурге</h3>
              <p>
                <?php the_field('address_ekb', 'options'); ?>
              </p>
            </div>
          <?php } ?>
          <?php if (get_field('address_proizvodstva', 'options')) { ?>
            <div class="contactsbl__list-item">
              <h3>Адрес производства</h3>
              <p>
                <?php the_field('address_proizvodstva', 'options'); ?>
              </p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>