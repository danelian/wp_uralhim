<?php
/*
Template Name: Archive Services
*/
get_header(); ?>

<section class="dsection2">
  <div class="container">
    <div class="dsection2__container">
      <div class="dsection2__container-left">
        <h2 class="default-title">01 – Наши услуги</h2>
        <h1 class="section-title">мы решим любой ваш запрос!</h1>
        <p>УралХимАппарат предлагает полное сопровождение вашего проекта от идеи до запуска! Мы не только осуществляет
          изготовление и поставку промышленного оборудования, но и предлагаем ряд услуг по работ с металлом.</p>
        <div class="row-buttons">
          <a href="#cta" class="button-primary">Задать вопрос</a>
          <a href="#steps" class="button-second">Этапы работ</a>
        </div>
      </div>
      <div class="dsection2__container-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="dsection3">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">02 – работа с металлом</h2>
      </div>
      <div class="default__container-right">
        <div class="dsection3__cards">
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
          <a href="single-services.html" class="scard">
            <div class="scard-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plazmennaya-rezka-metalla.jpg" alt="">
            </div>
            <h3 class="scard-title">Плазменная резка металла</h3>
          </a>
        </div>
        <div class="row-buttons">
          <a href="products.html" class="button-primary">Каталог продукции</a>
          <a href="#cta" class="button-second">Задать вопрос</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="dsection1">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">03 – этапы работ</h2>
      </div>
      <div class="default__container-right">
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">проектирование</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">изготовление</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">доставка</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">Монтаж</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h3 class="section-title">Запуск</h3>
            </div>
            <div class="accordion-content">
              <p>Разработка индивидуальных проектов оборудования, учитывающих специфические требования и условия
                заказчика, с применением инновационных технологий и передовых инженерных решений.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="quotebl">
  <div class="container">
    <h2>Мы уверены, что сможем решить любой вопрос и всегда надеемся на&nbsp;плодотворное сотрудничество!</h2>
  </div>
</section>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_footer(); ?>