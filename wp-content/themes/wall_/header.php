<!DOCTYPE html>
<html lang="uk">
<head>
    <title>THE WALL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="THE WALL WORLD CLUB: клуб респектабельних консерваторів;
    бастіон захисту традиційних цінностей українського суспільства; прогресивна частина успішних українських підприємців,
    економістів, управлінців, науковців, громадських діячів, політиків, журналістів, митців і спрямовує їх поступ у світ;
    підтримує персональний розвиток особистості як підґрунтя для розвитку громадського суспільства, бізнесу, держави,
    інтеграції у світ; партнери, які розділяють основні засадничі принципи організації.">
    <meta name="keywords" content="Бізнес клуб, розвиток, будівельна компанія, банк, міжнародна організація,
    аграрна компанія, управління, будівництво, нетворкінг, законодавство, стратегія, компанія, фінансова установа,
    будівельний ринок, фінансовий ринок, забудовники, девелопери, бізнес клуб, стратегія">
    <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/media.css">
</head>
<body>
<header>

    <div class="header">
        <div class="logo-menu wall">
            <div>
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="THE WALL"/>
            </div>
            <div class="header__block-right">
                <div class="block-right__icons">
                    <div class="block-lang">
                        <ul><?php pll_the_languages(); ?></ul>
                    </div>
                    <div class="icons-header">
                        <a href="tel:380679208282">
                            <img src="<?php echo get_template_directory_uri() ?>/img/phone.png" alt=""/>
                        </a>
                        <a href="mailto:the.wall.ukraine@gmail.com">
                            <img src="<?php echo get_template_directory_uri() ?>/img/mail.png" alt=""/>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/thewallworldclub">
                            <img src="<?php echo get_template_directory_uri() ?>/img/fb.png" alt=""/>
                        </a>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/youtube.png" alt=""/>
                        </a>
                    </div>
                </div>

                <div class="block-right__menu pc">
                    <a href="#wall">
                        <span>THE WALL</span>
                    </a>
                    <a href="#cooparation">
<!--                        <span>СПІВПРАЦЯ</span>-->
                        <span><?php pll_e( "cooperation" ); ?></span>
                    </a>
                    <a href="#benefits">
<!--                        <span>ПЕРЕВАГИ</span>-->
                        <span><?php pll_e( "benefits" ); ?></span>

                    </a>
                    <a href="#news">
<!--                        <span>НОВИНИ</span>-->
                        <span><?php pll_e( "news" ); ?></span>

                    </a>
                    <a href="#contacts">
<!--                        <span>КОНТАКТИ</span>-->
                        <span><?php pll_e( "contacts" ); ?></span>

                    </a>
                </div>
            </div>
        </div>
        <div class="block-right__menu mob">
            <a href="#wall">
                <span>THE WALL</span>
            </a>
            <a href="#cooparation">
                <span>СПІВПРАЦЯ</span>
            </a>
            <a href="#benefits">
                <span>ПЕРЕВАГИ</span>
            </a>
            <a href="#news">
                <span>НОВИНИ</span>
            </a>
            <a href="#contacts">
                <span>КОНТАКТИ</span>
            </a>
        </div>
    </div>
</header>