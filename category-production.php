<?php
/*
Template Name: Категория Продукции
*/
get_header(); ?>

<div class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
  <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <a href="<?php echo get_home_url(); ?>" itemprop="item">
      <span itemprop="name">Главная</span>
    </a>
  </span>
  <span class="kb_sep"> / </span>
  <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <a href="<?php echo get_home_url(); ?>/production/" itemprop="item">
      <span itemprop="name">Продукция</span>
    </a>
  </span>
  <span class="kb_sep"> / </span>
  <span class="kb_title"><?php the_title(); ?></span>
</div>

<!-- <section class="dsection4">
  <div class="container">
    <h2 class="default-title">01 – Каталог продукции</h2>
    <div class="dsection4__cards">
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
      <a href="single-product.html" class="pcard">
        <div class="pcard-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pcard-image.png" alt="">
        </div>
        <h3 class="pcard-title">оборудование для АЭС</h3>
      </a>
    </div>
  </div>
</section> -->

<section class="dsection5">
  <div class="container">
    <div class="dsection5__container">
      <div class="dsection5__left">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <?php if (get_field('dsection5_text')) { the_field('dsection5_text'); } ?>
      </div>
      <div class="dsection5__right">
        <?php if (get_field('dsection5_text')) { ?>
          <div class="dsection5__infocard">
            <?php the_field('dsection5_text'); ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<section class="dsection3">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
       <?php if (get_field('dsection3_section')) { ?><h2 class="default-title"><?php the_field('dsection3_section'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <?php $post_objects = get_field('dsection3_cards');
        if( $post_objects ): ?>
          <div class="dsection3__cards" id="products_category_cards">
          <?php foreach( $post_objects as $post): ?>
              <?php setup_postdata($post); ?>
              <?php get_template_part('template-parts/pcard'); ?>
          <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="row-buttons">
          <button type="button" class="button-primary" id="production_showmore">Показать больше</button>
          <?php 
            $hero_btn1 = get_field('dsection3_btn2');
            if( $hero_btn1 ): 
                $hero_btn1_url = $hero_btn1['url'];
                $hero_btn1_title = $hero_btn1['title'];
                $hero_btn1_target = $hero_btn1['target'] ? $hero_btn1['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $hero_btn1_url ); ?>" target="<?php echo esc_attr( $hero_btn1_target ); ?>" class="button-second">
                  <?php echo esc_html( $hero_btn1_title ); ?>
                </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="dsection6">
  <div class="container">
    <div class="dsection6__heading">
      <?php if (get_field('dsection6_title')) { ?><h2 class="section-title"><?php the_field('dsection6_title'); ?></h2><?php } ?>
    </div>
    <?php if (have_rows('dsection6_cards')) : ?>
      <div class="dsection6__cards">
        <?php while (have_rows('dsection6_cards')) : the_row(); ?>
          <div class="infocard">
            <?php if (get_sub_field('dsection6_card_title')) { ?><h3><?php the_sub_field('dsection6_card_title'); ?></h3><?php } ?>
            <?php if (get_sub_field('dsection6_card_content')) { the_sub_field('dsection6_card_content'); } ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : endif; ?>
  </div>
</section>

<?php if (get_field('upobl_text_category', 'options')) { ?>
  <section class="upobl">
    <div class="container">
      <div class="upobl__content">
        <h2><?php the_field('upobl_text_category', 'options'); ?></h2>
      </div>
    </div>
  </section>
<?php } ?>

<section class="ctabl" id="cta">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('ctabl_section_category', 'options')) { ?><h2 class="default-title"><?php the_field('ctabl_section_category', 'options'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <div class="ctabl__form">
          <?php if (get_field('ctabl_title_category', 'options')) { ?><h2 class="section-title"><?php the_field('ctabl_title_category', 'options'); ?></h2><?php } ?>
          <?php if (get_field('ctabl_text_category', 'options')) { ?><p><?php the_field('ctabl_text_category', 'options'); ?></p><?php } ?>
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