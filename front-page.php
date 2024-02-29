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
        <?php if (get_field('dsection3_section')) { ?><h2 class="default-title"><?php the_field('dsection3_section'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <?php if (have_rows('dsection3_categories')) : ?>
          <div class="dsection3__cards">
            <?php while (have_rows('dsection3_categories')) : the_row(); ?>
              <?php get_template_part('template-parts/pcat_card'); ?>
            <?php endwhile; ?>
          </div>
        <?php else : endif; ?>
        <div class="row-buttons">
          <?php 
            $dsection3_btn1 = get_field('dsection3_btn1');
            if( $dsection3_btn1 ): 
                $dsection3_btn1_url = $dsection3_btn1['url'];
                $dsection3_btn1_title = $dsection3_btn1['title'];
                $dsection3_btn1_target = $dsection3_btn1['target'] ? $dsection3_btn1['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $dsection3_btn1_url ); ?>" target="<?php echo esc_attr( $dsection3_btn1_target ); ?>" class="button-primary">
                  <?php echo esc_html( $dsection3_btn1_title ); ?>
                </a>
          <?php endif; ?>
          <?php 
            $dsection3_btn2 = get_field('dsection3_btn2');
            if( $dsection3_btn2 ): 
                $dsection3_btn2_url = $dsection3_btn2['url'];
                $dsection3_btn2_title = $dsection3_btn2['title'];
                $dsection3_btn2_target = $dsection3_btn2['target'] ? $dsection3_btn2['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $dsection3_btn2_url ); ?>" target="<?php echo esc_attr( $dsection3_btn2_target ); ?>" class="button-second">
                  <?php echo esc_html( $dsection3_btn2_title ); ?>
                </a>
          <?php endif; ?>
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

<?php get_template_part('template-parts/dsection1'); ?>

<?php get_template_part('template-parts/upobl'); ?>

<?php get_template_part('template-parts/accreditbl'); ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_template_part('template-parts/contactsbl'); ?>

<?php get_footer(); ?>