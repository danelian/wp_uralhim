<?php
/*
Template Name: Archive Services
*/
get_header(); ?>

<?php get_template_part('template-parts/dsection2'); ?>

<section class="dsection3">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('dsection3_section')) { ?><h2 class="default-title"><?php the_field('dsection3_section'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <?php
        $query = new WP_Query( array(
          'post_type' => 'services',
          'posts_per_page' => -1,
          'order' => 'ASC',
        ));
        ?>
        <?php if ( $query->have_posts() ) : ?>
          <div class="dsection3__cards">
            <?php while ( $query->have_posts() ) : $query->the_post();
              get_template_part('template-parts/scard');
            endwhile; ?>
          </div>
        <?php wp_reset_postdata(); ?>
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

<?php get_template_part('template-parts/dsection1'); ?>

<?php if (get_field('quotebl_text')) { ?>
<section class="quotebl">
  <div class="container">
    <h2><?php the_field('quotebl_text'); ?></h2>
  </div>
</section>
<?php } ?>

<?php get_template_part('template-parts/ctabl'); ?>

<?php get_footer(); ?>