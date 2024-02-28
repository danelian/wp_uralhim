<?php
/*
Template Name: About Us
*/
get_header(); ?>

<section class="dsection2">
  <div class="container">
    <div class="dsection2__container">
      <div class="dsection2__container-left">
        <h2 class="default-title">01 – о компании</h2>
        <h1 class="section-title"><span>ООО</span> УРАЛХИМАППАРАТ</h1>
        <p>— предприятие по проектированию и производству технологического оборудования для нефтегазодобывающей,
          нефтегазоперерабатывающей, химической, энергетической, атомной, металлургической, машиностроительной,
          медицинской, пищевой и других отраслей промышленности.</p>
        <div class="row-buttons">
          <a href="#" class="button-primary">Каталог продукции</a>
          <a href="#" class="button-second">Услуги</a>
        </div>
      </div>
      <div class="dsection2__container-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aboutus-image.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/accreditbl'); ?>

<?php get_template_part('template-parts/upobl'); ?>

<section class="gallerybl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">03 – Разрешительная документация</h2>
      </div>
      <div class="default__container-right">
        <div class="gallerybl__items">
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
          <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-template.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="dsection1">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">04 – наши проекты</h2>
      </div>
      <div class="default__container-right">
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проект 1</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проект 2</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проект 3</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проект 4</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проект 5</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
        </div>
        <div class="row-buttons">
          <a href="#cta" class="button-primary">Обсудить проект</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_template_part('template-parts/contactsbl'); ?>

<?php get_footer(); ?>