<?php get_header(); ?>

<section class="dsection4">
  <div class="container">
    <?php if (get_field('dsection4_section_service', 'options')) { ?><h2 class="default-title"><?php the_field('dsection4_section_service', 'options'); ?></h2><?php } ?>
    <?php
    $query = new WP_Query( array(
      'post_type' => 'services',
      'posts_per_page' => -1,
      'order' => 'ASC',
    ));
    ?>
    <?php if ( $query->have_posts() ) : ?>
      <div class="dsection4__cards">
        <?php while ( $query->have_posts() ) : $query->the_post();
          get_template_part('template-parts/scard');
        endwhile; ?>
      </div>
    <?php wp_reset_postdata(); ?>
    <?php else : endif; ?>
  </div>
</section>

<section class="dsection5">
  <div class="container">
    <div class="dsection5__container">
      <div class="dsection5__left">
        <h1 class="section-title">Плазменная резка металла</h1>
        <p>Плазменная резка листового металла представляет собой технологический процесс, в ходе которого сжатая
          плазменная дуга в виде струи, обрабатывает металл посредством высокой температуры.</p>
      </div>
      <div class="dsection5__right">
        <div class="dsection5__infocard">
          <h3>Выбор способа для плазменной резки металла зависит от толщины материала</h3>
          <div class="value-items">
            <div class="value-item">
              <span>1-10 мм.</span>
              выполняется в азоте
            </div>
            <div class="value-item">
              <span>20-100 мм.</span>
              азот с присутствием водорода
            </div>
            <div class="value-item">
              <span>100+ мм.</span>
              выполняется в аргонно-водородных смесях
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dsection5__infocards">
      <div class="infocard">
        <h3>Стандарты Контроля Качества</h3>
        <p>Применяем строгие меры контроля качества на каждом этапе производства</p>
      </div>
      <div class="infocard">
        <h3>Документация & Сертификация</h3>
        <p>Предоставляем полный комплект документов, включая сертификаты качества и отчёты о проведённых испытаниях</p>
      </div>
      <div class="infocard">
        <h3>Гибкие Опции Доставки</h3>
        <p>Предлагаем различные варианты транспортировки, включая автомобильные и железнодорожные перевозки</p>
      </div>
      <div class="infocard">
        <h3>Гарантийное Обслуживание & Поддержка</h3>
        <p>Гарантируем выполнение всех обязательств в рамках законодательства, предлагая полный спектр сервисных и
          гарантийных услуг</p>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('upobl_text_service', 'options')) { ?>
  <section class="upobl">
    <div class="container">
      <div class="upobl__content">
        <h2><?php the_field('upobl_text_service', 'options'); ?></h2>
      </div>
    </div>
  </section>
<?php } ?>

<?php get_template_part('template-parts/gallerybl'); ?>

<section class="ctabl" id="cta">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('ctabl_section', 'options')) { ?><h2 class="default-title"><?php the_field('ctabl_section', 'options'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <div class="ctabl__form">
          <?php if (get_field('ctabl_title', 'options')) { ?><h2 class="section-title"><?php the_field('ctabl_title', 'options'); ?></h2><?php } ?>
          <?php if (get_field('ctabl_text', 'options')) { ?><p><?php the_field('ctabl_text', 'options'); ?></p><?php } ?>
          <?php echo do_shortcode('[contact-form-7 id="cfa5555" title="Контактная форма"]'); ?>
          <div class="ctabl__socials">
            <h3>Или свяжитесь с нами самостоятельно прямо сейчас!</h3>
            <?php get_template_part('template-parts/socials'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>