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

<?php get_template_part('template-parts/upobl'); ?>

<?php get_template_part('template-parts/accreditbl'); ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_template_part('template-parts/contactsbl'); ?>

<?php get_footer(); ?>