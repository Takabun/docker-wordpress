<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <!-- <title>BLOG - MY PORTFOLIO</title> -->
    
    <!-- 自分で追記 -->
    <?php wp_head(); ?>
</head>
<body>
<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo('description');?></div>
    <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <div class="c-logo__image">
            <img src="<?php echo esc_url( get_theme_file_uri('images/logo.png')) ?>"
            alt="MY PORTFOLIO">
        </div>
        <div class="c-logo__text">MY PORTFOLIO</div>
    </a>
    <!-- <div class="c-global-nav">
        <ul>
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/profile/')); ?>">PROFILE</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
            </li>
        </ul>
    </div> -->

    <?php wp_nav_menu(
    array (
        //テーマの位置をスラッグで指定
        'theme_location'=>'globalnav',
        //divもしくはnav
        'container'=> 'div',
        //
        'container_class'=>'c-global-nav',
       )
    ); ?>
</header>
<!-- ▲ ヘッダー : 終了-->