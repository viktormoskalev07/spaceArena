<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo the_title() ?></title>
  <?php wp_head(); ?>
</head>

<body>

  <div class="wrapper">
    <div class="scroll" id="scroll"></div>
    <div class="bg-grad"></div>
    <div class="container">
      <?php
      global $logo_id, $logo_img, $logo_webp;
      $logo_id = carbon_get_theme_option('site_logo');
      $logo_img = wp_get_attachment_image_url($logo_id);
      $logo_webp = convertToWebpScr($logo_img);
      ?>
      <div class="bg-banner">
        <div class="banner_bg ibg"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/Banner_photo.png" alt=""></div>
      </div>
      <button class="main__burger">
        <span></span>
      </button>
      <header class="main-header">
        <a href="#" class="main-header__logo">
          <picture>
            <source srcset="<?php echo $logo_webp ?>" type="image/webp"><img src="<?php echo $logo_img ?>" alt="">
          </picture>
        </a>
        <nav class="main-navigation">
          <?php
          wp_nav_menu([
            'theme_location' => 'menu-header',
            'menu' => 'Меню в шапка',
            'container' => 'nav',
            'container_class' => 'main-navigation',
            'menu_class' => 'main-navigation__list',
            'fallback_cb' => 'wp_page_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ]);
          ?>
          <address class="main-header__widget widget-contacts">
            <a href="" class="widget-contacts__logo">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() . '/assets/' ?>img/phone_icon.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/phone_icon.png" alt="">
              </picture>
            </a>
            <a href="" class="widget-contacts__phone"><?php echo carbon_get_theme_option('site_phone'); ?></a>
          </address>

        </nav>
      </header>
    </div>