<?php get_header(); ?>

<section class="dsection4">
  <div class="container">
    <?php if (get_field('dsection4_section_service', 'options')) { ?><h2 class="default-title"><?php the_field('dsection4_section_service', 'options'); ?></h2><?php } ?>
    <?php
    $query = new WP_Query( array(
      'post_type' => 'services',
      'posts_per_page' => -1,
      'order' => 'ASC',
    ));
    ?>
    <?php if ( $query->have_posts() ) : ?>
      <div class="dsection4__cards">
        <?php while ( $query->have_posts() ) : $query->the_post();
          get_template_part('template-parts/scard');
        endwhile; ?>
      </div>
    <?php wp_reset_postdata(); ?>
    <?php else : endif; ?>
  </div>
</section>

<section class="dsection5">
  <div class="container">
    <div class="dsection5__container">
      <div class="dsection5__left">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
      </div>
      <div class="dsection5__right">
        <div class="dsection5__infocard">
          <?php if (get_field('dsection5_infocard_title')) { ?><h3><?php the_field('dsection5_infocard_title'); ?></h3><?php } ?>
          <?php if (get_field('dsection5_infocard_text')) { ?><?php the_field('dsection5_infocard_text'); ?><?php } ?>
          <?php if (have_rows('dsection5_infocard_values')) : ?>
          <div class="value-items">
            <?php while (have_rows('dsection5_infocard_values')) : the_row(); ?>
              <div class="value-item">
                <?php if (get_sub_field('value')) { ?><span><?php the_sub_field('value'); ?></span><?php } ?>
                <?php if (get_sub_field('text')) { the_sub_field('text'); } ?>
              </div>
            <?php endwhile; ?>
          </div>
          <?php else : endif; ?>
        </div>
      </div>
    </div>
    <?php if (have_rows('dsection5_infocards')) : ?>
      <div class="dsection5__infocards">
        <?php while (have_rows('dsection5_infocards')) : the_row(); ?>
          <div class="infocard">
            <?php if (get_sub_field('dsection5_infocard_title')) { ?><h3><?php the_sub_field('dsection5_infocard_title'); ?></h3><?php } ?>
            <?php if (get_sub_field('dsection5_infocard_text')) { ?><p><?php the_sub_field('dsection5_infocard_text'); ?></p><?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : endif; ?>
    <?php if (get_field('dsection5_article')) { ?>
      <div class="dsection5__article">
        <?php the_field('dsection5_article'); ?>
      </div>
    <?php } ?>
  </div>
</section>

<?php if (get_field('upobl_text_service', 'options')) { ?>
  <section class="upobl">
    <div class="container">
      <div class="upobl__content">
        <h2><?php the_field('upobl_text_service', 'options'); ?></h2>
      </div>
    </div>
  </section>
<?php } ?>

<?php get_template_part('template-parts/gallerybl'); ?>

<section class="ctabl" id="cta">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('ctabl_section', 'options')) { ?><h2 class="default-title"><?php the_field('ctabl_section', 'options'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <div class="ctabl__form">
          <?php if (get_field('ctabl_title', 'options')) { ?><h2 class="section-title"><?php the_field('ctabl_title', 'options'); ?></h2><?php } ?>
          <?php if (get_field('ctabl_text', 'options')) { ?><p><?php the_field('ctabl_text', 'options'); ?></p><?php } ?>
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

<?php get_footer(); ?>