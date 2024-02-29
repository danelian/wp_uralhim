<?php
$cat_card = get_sub_field('dsection3_cat_link');
if ($cat_card):
  $cat_card_url = $cat_card['url'];
  $cat_card_title = $cat_card['title'];
  $cat_card_target = $cat_card['target'] ? $cat_card['target'] : '_self';
  ?>
  <a href="<?php echo esc_url($phone_number_url); ?>" target="<?php echo esc_attr($phone_number_target); ?>"
    class="pcard">
    <div class="pcard-img">
      <?php if (get_sub_field('dsection3_cat_img')) { ?><img src="<?php the_sub_field('dsection3_cat_img'); ?>"
          alt="<?php echo esc_html($cat_card_title); ?>">
      <?php } ?>
    </div>
    <h3 class="pcard-title">
      <?php echo esc_html($cat_card_title); ?>
    </h3>
  </a>
<?php endif; ?>