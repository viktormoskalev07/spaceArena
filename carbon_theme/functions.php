<?php

add_action('wp_enqueue_scripts', 'add_style_and_script');
add_action('after_setup_theme', 'si_setup');
add_theme_support('custom-logo');
add_action('after_setup_theme', 'crb_load');
add_action('after_setup_theme', 'crb_load');
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');


function add_style_and_script()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', false, null, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', ['jquery'], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'swiper'], null, true);
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
}


function si_setup()
{
  register_nav_menu('menu-header', 'Меню в шапка');
}


function crb_load()
{
  require_once('includes/carbon-fields/vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
}

function crb_attach_theme_options()
{
  require_once('includes/carbon-fields-options/theme-options.php');
  require_once('includes/carbon-fields-options/post-meta.php');
}

function convertToWebpScr($logo_scr)
{
  // $scr_webp = $scr . '.webp';
  // return;   добавляем в нонец файла webp если нужно
  return $logo_scr;
  srt_replace('wp-content/uploads/2021/08/Logo-150x105.png', 'wp-content/themes/carbon_theme/assets/img/Logo.webp', $logo_src_webp);
}
