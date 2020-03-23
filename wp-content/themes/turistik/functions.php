<?php

add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
    wp_enqueue_style( 'libs-style', get_stylesheet_directory_uri() . '/css/libs.min.css' );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'media', get_stylesheet_directory_uri() . '/css/media.css' );
}
add_action( 'wp_footer', 'blankslate_footer_scripts' );
function blankslate_footer_scripts()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js');
}

register_nav_menus(
        array(
            'head-menu' => 'Верхнее меню',
            'footer-menu' => 'Нижнее меню',
        )
);

add_theme_support('post-thumbnails');

function true_register_wp_sidebars() {

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Боковая колонка', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );