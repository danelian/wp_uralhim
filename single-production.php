<?php 
/*
Template Name: Продукт
Template Post Type: production
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
    </div>
  </div>
</section> -->

<section class="dsection7">
  <div class="container">
    <?php if (get_field('dsection7_title')) { ?>
    <div class="dsection7__heading">
      <h2 class="section-title"><?php the_field('dsection7_title'); ?></h2>
    </div>
    <?php } ?>
    <?php if (have_rows('dsection7_benefits')) : ?>
      <div class="checks">
        <?php while (have_rows('dsection7_benefits')) : the_row(); ?>
        <div class="check">
          <p><?php the_sub_field('dsection7_benefit'); ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    <?php else : endif; ?>
  </div>
</section>

<section class="dsection8">
  <div class="container">
    <div class="dsection8__container">
      <div class="dsection8__col">
        <?php if (get_field('dsection8_image')) { ?>
          <img src="<?php the_field('dsection8_image'); ?>" alt="">
        <?php } ?>
      </div>
      <div class="dsection8__col">
        <?php if (have_rows('dsection8_cards')) : ?>
          <div class="dsection8__infocards">
            <?php while (have_rows('dsection8_cards')) : the_row(); ?>
              <div class="infocard">
                <?php if (get_sub_field('dsection8_card_title')) { ?><h3><?php the_sub_field('dsection8_card_title'); ?></h3><?php } ?>
                <?php if (get_sub_field('dsection8_card_content')) { ?><p><?php the_sub_field('dsection8_card_content'); ?></p><?php } ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else : endif; ?>
      </div>
    </div>
    <?php if (get_field('dsection5_article')) { ?>
      <div class="dsection5__article">
        <?php the_field('dsection5_article'); ?>
      </div>
    <?php } ?>
  </div>
</section>

<?php get_template_part('template-parts/upobl'); ?>

<section class="gallerybl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('gallerybl_section_products', 'options')) { ?><h2 class="default-title"><?php the_field('gallerybl_section_products', 'options'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <?php
        $gallerybl_items = get_field('gallerybl_items', 'options');
        if ($gallerybl_items): ?>
          <div class="gallerybl__items">
            <?php foreach ($gallerybl_items as $item): ?>
              <a data-fancybox="gallery" href="<?php echo $item['url']; ?>">
                <img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>">
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

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