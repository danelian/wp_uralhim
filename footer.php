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
            <div class="wpcf7 js" id="wpcf7-f113-o1" lang="en-US" dir="ltr">
              <form action="/contacts/#wpcf7-f113-o1" method="post" class="wpcf7-form init">
                <div style="display: none;">
                  <input type="hidden" name="_wpcf7" value="113">
                </div>
                <div class="form-group">
                  <p><span class="wpcf7-form-control-wrap">
                    <input size="40" class="wpcf7-form-control wpcf7-text form-input" placeholder="Введите ваш имейл" type="email">
                  </span></p>
                </div>
                <p>
                  <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Отправить">
                  <span class="wpcf7-spinner"></span>
                </p>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
              </form>
            </div>
          </div>
          <?php get_template_part('template-parts/socials'); ?>
          <div class="footer__copy"><?php the_field('copyright', 'options'); ?></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<!-- Yandex Map -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=<25e5a4e6-c0a4-47b3-a0d5-0fb96f8bec03>" type="text/javascript"></script>

</body>

</html>