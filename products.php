<?php 
/*
Template Name: Продукция
*/
get_header(); ?>

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
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/upobl'); ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_footer(); ?>