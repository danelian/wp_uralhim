<section class="dsection1" id="worksteps">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <h2 class="default-title"><?php the_field('dsection1_section'); ?></h2>
      </div>
      <div class="default__container-right">
        <?php if (have_rows('dsection1_accordion')) : ?>
          <div class="accordion">
            <?php while (have_rows('dsection1_accordion')) : the_row(); ?>
            <div class="accordion-item">
              <div class="accordion-header">
                <?php if (get_sub_field('dsection1_accordion_title')) { ?><h3 class="section-title"><?php the_sub_field('dsection1_accordion_title'); ?></h3><?php } ?>
              </div>
              <div class="accordion-content">
                <?php if (get_sub_field('dsection1_accordion_text')) { the_sub_field('dsection1_accordion_text'); } ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        <?php else : endif; ?>
        <?php 
          $dsection1_btn1 = get_field('dsection1_btn1');
          if( $dsection1_btn1 ): ?>
          <div class="row-buttons">
            <?php
            $dsection1_btn1_url = $dsection1_btn1['url'];
            $dsection1_btn1_title = $dsection1_btn1['title'];
            $dsection1_btn1_target = $dsection1_btn1['target'] ? $dsection1_btn1['target'] : '_self';
            ?>
            <a href="<?php echo esc_url( $dsection1_btn1_url ); ?>" target="<?php echo esc_attr( $dsection1_btn1_target ); ?>"class="button-primary">
              <?php echo esc_html( $dsection1_btn1_title ); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>