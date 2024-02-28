<section class="dsection2">
  <div class="container">
    <div class="dsection2__container">
      <div class="dsection2__container-left">
        <?php if (get_field('dsection2_section')) { ?><h2 class="default-title"><?php the_field('dsection2_section'); ?></h2><?php } ?>
        <?php if (get_field('dsection2_title')) { ?><h1 class="section-title"><?php the_field('dsection2_title') ?></h1><?php } ?>
        <?php if (get_field('dsection2_text')) { ?><p><?php the_field('dsection2_text') ?></p><?php } ?>
        <div class="row-buttons">
          <?php 
            $dsection2_btn1 = get_field('dsection2_btn1');
            if( $dsection2_btn1 ): 
                $dsection2_btn1_url = $dsection2_btn1['url'];
                $dsection2_btn1_title = $dsection2_btn1['title'];
                $dsection2_btn1_target = $dsection2_btn1['target'] ? $dsection2_btn1['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $dsection2_btn1_url ); ?>" target="<?php echo esc_attr( $dsection2_btn1_target ); ?>" class="button-primary">
                  <?php echo esc_html( $dsection2_btn1_title ); ?>
                </a>
          <?php endif; ?>
          <?php 
            $dsection2_btn2 = get_field('dsection2_btn2');
            if( $dsection2_btn2 ): 
                $dsection2_btn2_url = $dsection2_btn2['url'];
                $dsection2_btn2_title = $dsection2_btn2['title'];
                $dsection2_btn2_target = $dsection2_btn2['target'] ? $dsection2_btn2['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $dsection2_btn2_url ); ?>" target="<?php echo esc_attr( $dsection2_btn2_target ); ?>" class="button-second">
                  <?php echo esc_html( $dsection2_btn2_title ); ?>
                </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="dsection2__container-right">
        <?php if (get_field('dsection2_image')) { ?><img src="<?php the_field('dsection2_image'); ?>" alt="image"><?php } ?>
      </div>
    </div>
  </div>
</section>