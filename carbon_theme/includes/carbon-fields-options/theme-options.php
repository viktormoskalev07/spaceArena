<?php

// если попытаются войти в этот файл выходим из него
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки темы')
    ->add_fields([
        Field::make('image', 'site_logo', 'Лого сайта'),
        Field::make('text', 'site_phone', 'Номер телефона'),
    ]);
