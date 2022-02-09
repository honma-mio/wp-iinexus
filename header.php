<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>株式会社イイネクサス</title>
        <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">-->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" id="favicon">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        
        <header>
            <div class="header_wrap">
                <div class="header_wrap_img">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt=""></a>
                </div>
                <div class="header_wrap_list">
                    <ul class="menu">
                        <li class="menu__parent">
                            <a href="<?php echo home_url(); ?>/about" class="menu__parent-title">会社概要</a>
                            <ul class="menu__child">
                                <li><a href="<?php echo home_url(); ?>/about/about-message">トップメッセージ</a></li>
                                <li><a href="<?php echo home_url(); ?>/about/about-employee">社員紹介</a></li>
                                <li><a href="<?php echo home_url(); ?>/about/about-office">オフィス紹介</a></li>
                            </ul>
                        </li>
                        <li class="menu__parent">
                            <a href="<?php echo home_url(); ?>/service" class="menu__parent-title">サービス</a>
                            <ul class="menu__child">
                                <li><a href="<?php echo home_url(); ?>/service/service-ses">SES</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-agency">有料職業紹介</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-infrastructure">インフラ構築事業</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-itsupport">ITサポート事業</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-development">ラボ開発</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-freelance">フリーランサー</a></li>
                            </ul>
                        </li>
                        <li class="menu__parent">
                            <a href="<?php echo home_url(); ?>/news" class="menu__parent-title">ニュース</a>
                            <ul class="menu__child">
                                <li><a href="https://qiita.com/jinyogi" target="_blank">開発ブログ</a></li>
                            </ul>
                        </li>
                        <li class="menu__parent">
                            <a href="<?php echo home_url(); ?>/recruit" class="menu__parent-title">採用情報</a>
                            <ul class="menu__child">
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-schedule">働き方事例</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-qa">FAQ</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-welfare">福利厚生</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-newgraduate">新卒採用</a></li>
                            </ul>
                        </li>
                        <li class="menu__parent"><a href="<?php echo home_url(); ?>/contact" class="menu__parent-title">お問い合わせ</a></li>
                        <!--<li class="menu__parent"><a href="#">한국어</a></li>-->
                    </ul>
                </div>             
            </div>
            <!--ハンバーガーメニュー-->
            <div class="hamburger-demo-menubox">
                <input id="hamburger-demo1" type="checkbox" class="input-hidden">
                <label for="hamburger-demo1" class="hamburger-demo-switch hamburger-demo-switch1">
                    <span class="hamburger-switch-line1"></span>
                </label>
                <div class="hamburger-demo-menuwrap">
                    <ul class="hamburger-demo-menulist">
                        <li><a href="<?php echo home_url(); ?>/about">会社概要</a></li>
                        <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
                        <li><a href="<?php echo home_url(); ?>/news">ニュース</a></li>
                        <li><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
                        <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
                        <!--<li><a href="#">한국어</a></li>-->
                    </ul>
                </div>
                <div class="hamburger-demo-cover"></div>
            </div>
            <!--ハンバーガーメニュー-->
        </header>