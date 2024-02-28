<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>

	<!-------- header --------->
  <header class="header" id="header">
    <div class="container header__container">
      <a href="<?php echo get_home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo-desktop" alt="Logo">
        <span>уралхимаппарат</span>
      </a>
      <nav class="nav-menu" id="burger-menu">
        <a href="<?php echo get_home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo-desktop" alt="Logo">
          <span>уралхимаппарат</span>
        </a>
        <?php
          wp_nav_menu([
            'theme_location' => 'header',
            'container' => '',
            'menu_class' => 'nav-list',
            'menu_id' => false,
            'echo' => true,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ]);
        ?>
        <?php 
          $phone_number = get_field('phone_number', 'options');
          if( $phone_number ): 
              $phone_number_url = $phone_number['url'];
              $phone_number_title = $phone_number['title'];
              $phone_number_target = $phone_number['target'] ? $phone_number['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $phone_number_url ); ?>" target="<?php echo esc_attr( $phone_number_target ); ?>" class="button-primary">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.75962 6.18547C4.62662 8.09651 6.02345 9.66316 7.72735 10.6356L9.05193 9.14995C9.22052 8.96087 9.45533 8.90685 9.66606 8.98113C10.3404 9.23098 11.0629 9.36604 11.8155 9.36604C11.9752 9.36604 12.1283 9.43718 12.2412 9.56382C12.3541 9.69046 12.4176 9.86222 12.4176 10.0413V12.4048C12.4176 12.5839 12.3541 12.7556 12.2412 12.8823C12.1283 13.0089 11.9752 13.0801 11.8155 13.0801C9.10089 13.0801 6.49748 11.8706 4.57796 9.71773C2.65845 7.56486 1.58008 4.64494 1.58008 1.60033C1.58008 1.42123 1.64351 1.24947 1.75642 1.12283C1.86934 0.996194 2.02248 0.925049 2.18216 0.925049H4.28945C4.44914 0.925049 4.60228 0.996194 4.71519 1.12283C4.8281 1.24947 4.89154 1.42123 4.89154 1.60033C4.89154 2.44443 5.01195 3.25476 5.23472 4.01107C5.30095 4.24742 5.25279 4.51078 5.0842 4.69986L3.75962 6.18547Z" fill="currentColor"/>
                </svg>
                <?php echo esc_html( $phone_number_title ); ?>
              </a>
        <?php endif; ?>
        <button type="button" id="burger-close" class="button-second">Закрыть</button>
      </nav>
      <button type="button" id="burger-open"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger.svg" alt="Button open burger-menu"></button>
    </div>
  </header>

	<main>