<?php get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('/'); ?>

<div class="default-page">
  <div class="container">
    <h1 class="section-title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>