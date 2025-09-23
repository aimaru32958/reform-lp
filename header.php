<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <!-- my -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__content">
                <div class="header__main">
                    <div class="header__logo" >
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1.png" alt="Allons">
                        </a>
                    </div>
                    <nav class="header__nav">
                        <ul class="header__menu">
                            <li class="header__list"><a href="">サービス紹介</a></li>
                            <li class="header__list"><a href="">料金・相場</a></li>
                            <li class="header__list"><a href="">施工事例</a></li>
                            <li class="header__list"><a href="">法人の方へ</a></li>
                            <li class="header__list"><a href="">FAQ</a></li>
                        </ul>
                    </nav>
                </div>
                <ul class="header__ctaWrap">
                    <li class="header__cta --line"><a href="">LINEで問い合わせ</a></li>
                    <li class="header__cta --mail"><a href="">メールで問い合わせ</a></li>
                </ul>
            </div>
            <div class="header__logo is-sp">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1.png" alt="Allons">
                </a>
            </div>
            <!-- drawer -->
            <div class="header__drawer">
                <div class="header__drawerIcon">
                    <div class="header__drawerBar --1"></div>
                    <div class="header__drawerBar --2"></div>
                    <div class="header__drawerBar --3"></div>
                </div>
            </div>
        </div>
    </header>

    