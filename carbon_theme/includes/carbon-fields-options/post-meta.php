<?php

// если попытаются войти в этот файл выходим из него
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post-meta', 'Настройки темы')
    ->add_fields([
        Field::make('text', 'site_slogan', 'Слоган'),
        Field::make('textarea', 'site_slogan_text', 'Текст для слогана'),
        Field::make('text', 'btn_after_slogan', 'Кнопка после слогана'),
    ]);
