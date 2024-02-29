<?php
/*
Template Name: Категория Продукции
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
      <h2 class="section-title">Категории теплообменных аппаратов</h2>
    </div>
    <div class="dsection6__cards">
      <div class="infocard dark">
        <h3>Назначение</h3>
        <ul>
          <li>Теплообменники</li>
          <li>Холодильники</li>
          <li>Конденсаторы</li>
          <li>Испарители</li>
        </ul>
      </div>
      <div class="infocard">
        <h3>Тип конструкции</h3>
        <ul>
          <li>Аппараты с неподвижными трубными решетками</li>
          <li>С температурным компенсатором на кожухе</li>
        </ul>
      </div>
      <div class="infocard">
        <h3>Расположение</h3>
        <ul>
          <li>Горизонтальные</li>
          <li>Вертикальные</li>
        </ul>
      </div>
      <div class="infocard">
        <h3>Теплоноситель</h3>
        <ul>
          <li>Газообразный</li>
          <li>Парогазовый</li>
          <li>Жидкий / парожидкостный</li>
          <li>Паровой</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/upobl'); ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_footer(); ?>