<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white'); ?>>

    <header class="bg-white border-b border-gray-200">
        <div class="max-w-screen-lg mx-auto flex items-center justify-between p-4">
            <div class="flex items-center gap-2">
                <?php if (function_exists("the_custom_logo")) {
                    the_custom_logo();
                } ?>
                <?php wp_nav_menu([
                    "theme_location" => "header",
                    "menu_class" => "flex gap-4",
                    "container" => false
                ]) ?>
            </div>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">ثبت نام / ورود</a>
        </div>
    </header>