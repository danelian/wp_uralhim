<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__subtitle">уралхимаппарат</span>
      <?php if (get_field('hero_title')) { ?><h1 class="hero__title"><?php the_field('hero_title'); ?></h1><?php } ?>
      <?php if (get_field('hero_title_mob')) { ?><h1 class="hero__title-mobile"><?php the_field('hero_title_mob'); ?></h1><?php } ?>
      <?php if (get_field('hero_text')) { ?>
        <div class="hero__text">
          <?php the_field('hero_text'); ?>
        </div>
      <?php } ?>
      <div class="row-buttons">
        <?php 
          $hero_btn1 = get_field('hero_btn1');
          if( $hero_btn1 ): 
              $hero_btn1_url = $hero_btn1['url'];
              $hero_btn1_title = $hero_btn1['title'];
              $hero_btn1_target = $hero_btn1['target'] ? $hero_btn1['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $hero_btn1_url ); ?>" target="<?php echo esc_attr( $hero_btn1_target ); ?>" class="button-primary">
                <?php echo esc_html( $hero_btn1_title ); ?>
              </a>
        <?php endif; ?>
        <?php 
          $hero_btn2 = get_field('hero_btn2');
          if( $hero_btn2 ): 
              $hero_btn2_url = $hero_btn2['url'];
              $hero_btn2_title = $hero_btn2['title'];
              $hero_btn2_target = $hero_btn2['target'] ? $hero_btn2['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $hero_btn2_url ); ?>" target="<?php echo esc_attr( $hero_btn2_target ); ?>" class="button-second">
                <?php echo esc_html( $hero_btn2_title ); ?>
              </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="hero__image" 
  style="background-image: url(
    <?php if (get_field('hero_image')) { the_field('hero_image'); } 
    else { echo get_template_directory_uri(); ?>/assets/img/hero-image.jpg <?php } ?>);">
  </div>
</section>

<?php if (have_rows('benefits')) : ?>
<section class="benefits">
  <div class="container">
    <div class="benefits__cards">
      <?php while (have_rows('benefits')) : the_row(); ?>
      <div class="benefit">
        <div class="benefit__value"><?php the_sub_field('benefit_value'); ?></div>
        <div class="benefit__text"><?php the_sub_field('benefit_text'); ?></div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php else : endif; ?>

<section class="dsection3">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">01 – Каталог продукции</h2>
      </div>
      <div class="default__container-right">
        <div class="dsection3__cards">
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
        <div class="row-buttons">
          <a href="archive-products.html" class="button-primary">Полный каталог продукции</a>
          <a href="services.html" class="button-second">Наши услуги</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="companybl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title"><?php the_field('companybl_section'); ?></h2>
      </div>
      <div class="default__container-right">
        <?php if (get_field('companybl_title')) { ?><h2 class="companybl__title"><?php the_field('companybl_title'); ?></h2><?php } ?>
        <?php if (get_field('companybl_text')) { ?><div class="companybl__text"><?php the_field('companybl_text'); ?></div><?php } ?>
        <div class="row-buttons">
          <?php 
            $companybl_btn1 = get_field('companybl_btn1');
            if( $companybl_btn1 ): 
                $companybl_btn1_url = $companybl_btn1['url'];
                $companybl_btn1_title = $companybl_btn1['title'];
                $companybl_btn1_target = $companybl_btn1['target'] ? $companybl_btn1['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $companybl_btn1_url ); ?>" target="<?php echo esc_attr( $companybl_btn1_target ); ?>" class="button-primary-dark">
                  <?php echo esc_html( $companybl_btn1_title ); ?>
                </a>
          <?php endif; ?>
          <?php 
            $companybl_btn2 = get_field('companybl_btn2');
            if( $companybl_btn2 ): 
                $companybl_btn2_url = $companybl_btn2['url'];
                $companybl_btn2_title = $companybl_btn2['title'];
                $companybl_btn2_target = $companybl_btn2['target'] ? $companybl_btn2['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $companybl_btn2_url ); ?>" target="<?php echo esc_attr( $companybl_btn2_target ); ?>" class="button-second-dark">
                  <?php echo esc_html( $companybl_btn2_title ); ?>
                </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="dsection1">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title"><?php the_field('frontpage_servicesbl_section'); ?></h2>
      </div>
      <div class="default__container-right">
        <?php if (have_rows('frontpage_services')) : ?>
          <div class="accordion">
            <?php while (have_rows('frontpage_services')) : the_row(); ?>
            <div class="accordion-item">
              <div class="accordion-header">
                <?php if (get_sub_field('frontpage_services_title')) { ?><h3 class="section-title"><?php the_sub_field('frontpage_services_title'); ?></h3><?php } ?>
              </div>
              <div class="accordion-content">
                <?php if (get_sub_field('frontpage_services_text')) { the_sub_field('frontpage_services_text'); } ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        <?php else : endif; ?>
        <div class="row-buttons">
        <?php 
          $frontpage_servicesbl_btn1 = get_field('frontpage_servicesbl_btn1');
          if( $frontpage_servicesbl_btn1 ): 
              $frontpage_servicesbl_btn1_url = $frontpage_servicesbl_btn1['url'];
              $frontpage_servicesbl_btn1_title = $frontpage_servicesbl_btn1['title'];
              $frontpage_servicesbl_btn1_target = $frontpage_servicesbl_btn1['target'] ? $frontpage_servicesbl_btn1['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $frontpage_servicesbl_btn1_url ); ?>" target="<?php echo esc_attr( $frontpage_servicesbl_btn1_target ); ?>" class="button-primary">
                <?php echo esc_html( $frontpage_servicesbl_btn1_title ); ?>
              </a>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('frontpage_upobl')) { ?>
<section class="upobl">
  <div class="container">
    <div class="upobl__content">
      <h2><?php the_field('frontpage_upobl'); ?></h2>
    </div>
  </div>
</section>
<?php } ?>

<section class="accreditbl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">04 – аккредитация</h2>
      </div>
      <div class="default__container-right">
        <h2 class="section-title">мы соответствуем стандартам гост качества</h2>
        <p>Компания аккредитована как производитель и&nbsp;поставщик оборудования для ведущих компаний РФ и СНГ</p>
        <div class="accreditbl__logos">
          <div class="accreditbl__logos-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-gazprom-logo.png" alt="Partner Gasprom logo">
          </div>
          <div class="accreditbl__logos-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-rosatom-logo.png" alt="Partner Rosatom logo">
          </div>
          <div class="accreditbl__logos-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-transneft-logo.png" alt="Partner Transneft logo">
          </div>
          <div class="accreditbl__logos-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-rosneft-logo.png" alt="Partner Rosneft logo">
          </div>
          <div class="accreditbl__logos-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-alrosa-logo.png" alt="Partner Alrosa logo">
          </div>
        </div>
        <p>Подробнее о сертификации, лицензиях и разрешительной документации вы узнаете на странице “О Компании”</p>
        <div class="row-buttons">
          <a href="about-us.html" class="button-primary">О компании</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ctabl" id="cta">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title">05 – связь</h2>
      </div>
      <div class="default__container-right">
        <div class="ctabl__form">
          <h2 class="section-title">заполните форму обратной связи</h2>
          <p>Заполните форму справа и мы свяжемся с вами для личной консультации – вместе обсудим детали, наметим план
            действий и рассчитаем стоимость работ!</p>

          <div class="wpcf7 js" id="wpcf7-f113-o1" lang="en-US" dir="ltr">
            <form action="/contacts/#wpcf7-f113-o1" method="post" class="wpcf7-form init">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="113">
              </div>
              <div class="form-group">
                <div class="form-label">Имя и Фамилия</div>
                <p><span class="wpcf7-form-control-wrap">
                    <input size="40" class="wpcf7-form-control wpcf7-text form-input" placeholder="Арсений Парфенов"
                      type="text">
                  </span></p>
              </div>
              <div class="form-group">
                <div class="form-label">Ваш имейл</div>
                <p><span class="wpcf7-form-control-wrap">
                    <input size="40" class="wpcf7-form-control wpcf7-text form-input"
                      placeholder="mail@uralchemapparatus.ru" type="email">
                  </span></p>
              </div>
              <div class="form-group">
                <div class="form-label">Номер вашего телефона</div>
                <p><span class="wpcf7-form-control-wrap">
                    <input size="40" class="wpcf7-form-control wpcf7-text form-input" placeholder="+7 922 195 15 44"
                      type="number">
                  </span></p>
              </div>
              <div class="form-group">
                <div class="form-checkbox">
                  <p><span class="wpcf7-form-control-wrap">
                      <span class="wpcf7-form-control wpcf7-acceptance">
                        <span class="wpcf7-list-item">
                          <label>
                            <input type="checkbox" value="1">
                            <span class="wpcf7-list-item-label">Я согласен(а) на обработку моих <a href="#"
                                target="_blank">персональных данных.</a></span>
                          </label>
                        </span>
                      </span>
                    </span>
                  </p>
                </div>
              </div>
              <div class="row-buttons">
                <p>
                  <input class="wpcf7-form-control wpcf7-submit has-spinner button-primary" type="submit"
                    value="Отправить">
                  <span class="wpcf7-spinner"></span>
                </p>
                <a href="tel:+" class="button-second">Позвонить нам</a>
              </div>
              <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
          </div>

          <div class="ctabl__socials">
            <h3>Или свяжитесь с нами самостоятельно прямо сейчас!</h3>
            <?php get_template_part('template-parts/socials'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contactsbl" id="contacts">
  <div class="container">
    <h2 class="default-title">06 – контакты</h2>
    <?php get_template_part('template-parts/contactsbl'); ?>
  </div>
</section>

<?php get_footer(); ?>