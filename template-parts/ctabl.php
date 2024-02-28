<section class="ctabl" id="cta">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('ctabl_section')) { ?><h2 class="default-title"><?php the_field('ctabl_section'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <div class="ctabl__form">
          <?php if (get_field('ctabl_title')) { ?><h2 class="section-title"><?php the_field('ctabl_title'); ?></h2><?php } ?>
          <?php if (get_field('ctabl_text')) { ?><p><?php the_field('ctabl_text'); ?></p><?php } ?>
          <?php echo do_shortcode('[contact-form-7 id="cfa5555" title="Контактная форма"]'); ?>
          <div class="ctabl__socials">
            <h3>Или свяжитесь с нами самостоятельно прямо сейчас!</h3>
            <?php get_template_part('template-parts/socials'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>