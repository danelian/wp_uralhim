<?php get_header(); ?>

<div class="errorbl">
  <div class="container">
    <div class="errorbl__content">
      <span class="errorbl__subtitle">404</span>
      <div class="errorbl__title">error</div>
      <a href="<?php echo get_home_url(); ?>" class="button-primary">Вернуться на главную</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error404-image.svg" class="errorbl__image" alt="">
  </div>
</div>

<?php get_footer(); ?>