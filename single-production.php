<?php 
/*
Template Name: Продукт
Template Post Type: production
*/
get_header(); ?>

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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-products-image.jpg" alt="">
      </div>
      <div class="dsection8__col">
        <div class="dsection8__infocards">
          <div class="infocard dark">
            <h3>Стандарты Контроля Качества</h3>
            <p>Применяем строгие меры контроля качества на каждом этапе производства</p>
          </div>
          <div class="infocard">
            <h3>Документация & Сертификация</h3>
            <p>Предоставляем полный комплект документов, включая сертификаты качества и отчёты о проведённых испытаниях
            </p>
          </div>
          <div class="infocard">
            <h3>Гибкие Опции Доставки</h3>
            <p>Предлагаем различные варианты транспортировки, включая автомобильные и железнодорожные перевозки</p>
          </div>
          <div class="infocard">
            <h3>Гарантийное Обслуживание & Поддержка</h3>
            <p>Гарантируем выполнение всех обязательств в рамках законодательства, предлагая полный спектр сервисных и
              гарантийных услуг</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/upobl'); ?>

<?php get_template_part('template-parts/gallerybl'); ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_footer(); ?>