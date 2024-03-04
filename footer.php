</main>

<!-------- footer --------->
<footer class="footer">
  <div class="container">
    <div class="footer__container">
      <div class="footer__container-left">
        <a href="<?php echo get_home_url(); ?>" class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt=""></a>
      </div>
      <div class="footer__container-right">
        <div class="footer__col">
          <div class="footer__group">
            <h3 class="footer__title">Навигация</h3>
            <?php
              wp_nav_menu([
                'theme_location' => 'footer',
                'container' => '',
                'menu_class' => 'footer__menu',
                'menu_id' => false,
                'echo' => true,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              ]);
            ?>
          </div>
        </div>
        <?php
        if( have_rows('footer_info', 'options') ): ?>
          <div class="footer__col">
            <?php while( have_rows('footer_info', 'options') ) : the_row(); ?>
              <div class="footer__group">
                <?php if (get_sub_field('footer_info_title', 'options')) { ?><h3 class="footer__title"><?php the_sub_field('footer_info_title', 'options'); ?></h3><?php } ?>
                <?php if (get_sub_field('footer_info_text', 'options')) { ?><p><?php the_sub_field('footer_info_text', 'options'); ?></p><?php } ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else : endif; ?>
        <div class="footer__col">
          <a href="<?php echo get_home_url(); ?>/privacy-policy" target="_blank" class="footer__link">Политика Конфиденциальности</a>
          <div class="footer__form">
            <?php if (get_field('footer_form_title', 'options')) { ?><h3 class="footer__title"><?php the_field('footer_form_title', 'options'); ?></h3><?php } ?>
            <?php echo do_shortcode('[contact-form-7 id="5ed53e0" title="Форма в подвале"]'); ?>
          </div>
          <?php get_template_part('template-parts/socials'); ?>
          <div class="footer__copy"><?php the_field('copyright', 'options'); ?></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<div class="state state-success" data-state="state-success">
	<div class="state-box">
    <div class="modal-heading">
      <?php if (get_field('title_success', 'options')) { ?><h2><?php the_field('title_success', 'options'); ?></h2><?php } ?>
      <?php if (get_field('text_success', 'options')) { ?><p><?php the_field('text_success', 'options'); ?></p><?php } ?>
    </div>
    <div class="row-buttons">
      <a href="<?php echo get_home_url(); ?>/production/" class="button-primary">Наша продукция</a>
      <a href="#" class="button-second close">Закрыть</a>
    </div>
	</div>
</div>

</body>

</html>