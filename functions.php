<?php

require_once(__DIR__ . '/includes/wp_svg.php');
require_once(__DIR__ . '/includes/wp_breadcrumbs.php');

/**
 * ДОБАВЛЕНИЕ ВОЗМОЖНОСТЕЙ
 */
if (!function_exists('danelian_setup')) {
  function danelian_setup()
  {
    // Добавляем динамический <title>
    add_theme_support('title-tag');
    // Добавление html5
    add_theme_support(
      'html5',
      array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'script',
        'style',
      )
    );
    // Добавление миниатюр для постов
    add_theme_support('post-thumbnails', array('post', 'services'));
  }
  add_action('after_setup_theme', 'danelian_setup');
}


/**
 * ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ
 */
function danelian_scripts()
{
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // Fancybox
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('jquery');
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // Fancybox
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'swiper', 'fancybox'), null, true);
  // Custom map
  wp_enqueue_script('custom-map', get_template_directory_uri() . '/assets/js/icon_customImage.min.js', array('jquery', 'swiper', 'app'), null, true);
}
add_action('wp_enqueue_scripts', 'danelian_scripts');


/**
 * ОТКЛЮЧАЕМ СОЗДАНИЕ МИНИАТЮР ФАЙЛОВ ДЛЯ УКАЗАННЫХ РАЗМЕРОВ
 */
add_filter('intermediate_image_sizes', 'delete_intermediate_image_sizes');
function delete_intermediate_image_sizes($sizes)
{
  // размеры которые нужно удалить
  return array_diff($sizes, [
    'thumbnail',
    '1536x1536',
    '2048x2048',
  ]);
}

/**
 * Регистрирация областей меню
 */
function danelian_menus()
{
  $locations = array(
    'header' => 'Header Menu',
    'footer' => 'Footer Menu',
  );
  register_nav_menus($locations);
}
add_action('init', 'danelian_menus');


add_action('init', 'register_post_types');
function register_post_types() {
	register_post_type('services', 
		array(
			'labels' => array(
				'name'               => __('Услуги'),
				'singular_name'      =>  __('Услуги'),
				'add_new'            => __('Добавить Услугу'),
				'add_new_item'       => __('Добавление Услуги'),
				'edit'				=>  __('Редактировать Услугу'),
				'edit_item'          => __('Редактирование Услуги'),
				'new_item'           => __('Новая Услуга'),
				'view'          		 => __('Просмотреть Услугу'),
				'view_item'          => __('Просмотреть Услугу'),
				'search_items'       => __('Поиск по Услугам'),
				'not_found'          => __('Пока нет Услуг'),
				'not_found_in_trash' => __('В корзине нет Услуг'),
				'menu_name'          => __('Услуги'),
			),
			'description'         => 'Услуги itip',
			'public'              => true,
			// 'publicly_queryable'  => true,
			// 'exclude_from_search' => false,
			// 'show_ui'             => true,
			'show_in_menu'        => null,
			// 'show_in_nav_menus'   => true,
      'show_in_rest'        => true,
			'menu_position'       => 40,
			'menu_icon'           => 'dashicons-cart', 
			'capability_type'   	=> 'post',
			'map_meta_cap'      	=> true,
			'hierarchical'        => false,
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
			'taxonomies'          => [''],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
			'can_export'          => true
		)
	);
	register_post_type('production', 
    array(
      'labels' => array(
        'name'               => __('Продукция'),
        'singular_name'      =>  __('Продукция'),
        'add_new'            => __('Добавить Продукцию'),
        'add_new_item'       => __('Добавление Продукции'),
        'edit'				=>  __('Редактировать Продукцию'),
        'edit_item'          => __('Редактирование Продукции'),
        'new_item'           => __('Новая Продукция'),
        'view'          		 => __('Просмотреть Продукцию'),
        'view_item'          => __('Просмотреть Продукцию'),
        'search_items'       => __('Поиск по Продукции'),
        'not_found'          => __('Пока нет Продукции'),
        'not_found_in_trash' => __('В корзине нет Продукции'),
        'menu_name'          => __('Продукция'),
      ),
      'description'         => 'Продукция itip',
			'public'              => true,
			// 'publicly_queryable'  => true,
			// 'exclude_from_search' => false,
			// 'show_ui'             => true,
			'show_in_menu'        => null,
			// 'show_in_nav_menus'   => true,
      'show_in_rest'        => true,
      'menu_position'       => 50,
      'menu_icon'           => 'dashicons-cart', 
			'capability_type'   	=> 'post',
			'map_meta_cap'      	=> true,
			'hierarchical'        => false,
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
			'taxonomies'          => ['category'],
			// 'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
			'can_export'          => true
		)
	);
}




/**
 * СОЗДАНИЕ OPTIONS PAGE
 */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(
    array(
      'page_title' => 'Theme settings',
      'menu_title' => 'Theme settings',
      'menu_slug' => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
}