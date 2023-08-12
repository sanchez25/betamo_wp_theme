<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensedlight.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensed.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensedbold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Rubiklight.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Rubikbold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
<section class="main">
    <header class="header">
        <div class="header-content">
            <div class="header-top">
                <a href="/" aria-label="Spina Logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="120" height="60"  alt="Betamo Logo">
                </a>
            </div>
            <div class="header-buttons" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/bg-status.jpg);">
                <a href="#" class="header-content-logo-link in">Log in</a>
                <a href="#" class="header-content-logo-link up">Registration</a>
            </div>
            <div class="header-menu">
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/gambling.svg);"></div>
                        <span class="header-content-list-text">Live casino</span>
                    </a>
                </div>
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/cherry.svg);"></div>
                        <span class="header-content-list-text">All Games</span>
                    </a>
                </div>
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/battle.svg);"></div>
                        <span class="header-content-list-text">tournaments</span>
                    </a>
                </div>
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/promo.svg);"></div>
                        <span class="header-content-list-text">Promotions</span>
                    </a>
                </div>
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/crown.svg);"></div>
                        <span class="header-content-list-text">Vip</span>
                    </a>
                </div>
                <div class="header-menu-item">
                    <a href="#" class="header-content-list-link">
                        <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/wheel.svg);"></div>
                        <span class="header-content-list-text">Wheel of Fortune</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <a href="#" class="header-bottom-chat">
                <div class="header-bottom-chat-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/chat.svg);"></div>
                <span>Live Chat</span>
            </a>
        </div>
    </header>
    <header class="mobile-header">
        <div class="mobile-container">
            <div class="menu-mobile-button">
                <span class="menu-mobile-button-icon"></span>
                <span class="menu-mobile-button-icon"></span>
                <span class="menu-mobile-button-icon"></span>
            </div>
            <a href="/" aria-label="Betamo Logo">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="120" height="60" alt="Betamo Logo">
            </a>
            <a href="#" class="mobile-header-btn">Sign Up</a>
        </div>
    </header>

