<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo wp_get_document_title() ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper" class="hfeed">
<header class="main-header">
    <div class="top-header">
        <div class="top-header__wrap">
            <div class="logotype-block">
                <div class="logo-wrap"><a href="/"><img src="<?=get_stylesheet_directory_uri()?>/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
            <?php
            $args = array(
                    'theme_location' => 'head-menu',
                    'container' => 'nav',
                    'container_class' => 'main-navigation',
                    'menu_class' => 'nav-list',
            );

            wp_nav_menu( $args );

            ?>

        </div>
    </div>
    <div class="bottom-header">
        <div class="search-form-wrap">
            <form class="search-form" action="<?php echo site_url() ?>">
                <input type="text" name="s" placeholder="Поиск..." class="search-form__input">
                <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
            </form>
        </div>
    </div>
</header>
<div id="container">