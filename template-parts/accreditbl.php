<section class="accreditbl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('accreditbl_section')) { ?>
          <h2 class="default-title">
            <?php the_field('accreditbl_section'); ?>
          </h2>
        <?php } ?>
      </div>

      <div class="default__container-right">
        <?php if (get_field('accreditbl_title')) { ?>
          <h2 class="section-title">
            <?php the_field('accreditbl_title'); ?>
          </h2>
        <?php } ?>
        <?php if (get_field('accreditbl_text1')) { ?>
          <p>
            <?php the_field('accreditbl_text1'); ?>
          </p>
        <?php } ?>

        <?php
        $accredit_logos = get_field('accreditbl_logos');
        if ($accredit_logos): ?>
          <div class="accreditbl__logos">
            <?php foreach ($accredit_logos as $logo): ?>
              <div class="accreditbl__logos-item">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('accreditbl_card1')) { ?>
          <div class="accreditbl__cards">
            <div class="accreditbl__card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/noname.svg" alt="">
              <p><?php the_field('accreditbl_card1'); ?></p>
            </div>
            <?php if (get_field('accreditbl_card2')) { ?>
            <div class="accreditbl__card">
              <p><?php the_field('accreditbl_card2'); ?></p>
            </div>
            <?php } ?>
          </div>
        <?php } ?>
        <?php if (get_field('accreditbl_text2')) { ?>
          <p>
            <?php the_field('accreditbl_text2'); ?>
          </p>
        <?php } ?>
        
        <?php $accreditbl_btn1 = get_field('accreditbl_btn1'); ?>
        <?php
        if ($accreditbl_btn1):
          $accreditbl_btn1_url = $accreditbl_btn1['url'];
          $accreditbl_btn1_title = $accreditbl_btn1['title'];
          $accreditbl_btn1_target = $accreditbl_btn1['target'] ? $accreditbl_btn1['target'] : '_self';
          ?>
          <div class="row-buttons">
            <a href="<?php echo esc_url($accreditbl_btn1_url); ?>"
              target="<?php echo esc_attr($accreditbl_btn1_target); ?>" class="button-primary">
              <?php echo esc_html($accreditbl_btn1_title); ?>
            </a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>