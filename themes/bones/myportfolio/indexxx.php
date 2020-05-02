<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>MY PORTFOLIO - 田中太郎のポートフォリオサイト</title>
    <link href="./style.css" rel="stylesheet"/>
    <!-- 自分で追記 -->
    <?php wp_head(); ?>
</head>
<body>
<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo('description');?></div>
    <a class="c-logo" href="./">
        <div class="c-logo__image">
            <img src=" <?php echo esc_hrl(get_theme_file_url('images/logo.png')) ?>" 
            alt="<?php bloginfo('name');?>">
        </div>
        <div class="c-logo__text"><?php bloginfo('name');?></div>
    </a>
    <div class="c-global-nav">
        <ul>
            <li>
                <a href="./">HOME</a>
            </li>
            <li>
                <a href="./profile/">PROFILE</a>
            </li>
            <li>
                <a href="./blog/">BLOG</a>
            </li>
            <li>
                <a href="./contact/">CONTACT</a>
            </li>
        </ul>
    </div>
</header>
<!-- ▲ ヘッダー : 終了-->
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="c-front-visual">
            <div class="c-front-visual__text">HELLO WORLD.</div>
        </div>
        <div class="l-container is-sm">
            <div class="c-front-text">
                <p>
                    名古屋を中心として活動している田中太郎のポートフォリオサイトです。<br>
                    WebデザインやHTMLコーディングを勉強しています。<br>
                    このサイトでは日々の学習の記録や、これまで作成した作品を掲載しています。<br>
                    ご連絡やお問い合わせは<a href="./contact/">こちら</a>からお願いします。
                </p>
                <h2 class="c-post-list__title">LATEST POSTS</h2>
                <ul class="wp-block-latest-posts has-dates">
                    <li><a href="#">ここに新着投稿のタイトルが入ります。</a><time class="wp-block-latest-posts__post-date">2019年3月1日</time></li>
                    <li><a href="#">ここに新着投稿のタイトルが入ります。</a><time class="wp-block-latest-posts__post-date">2019年3月1日</time></li>
                    <li><a href="#">ここに新着投稿のタイトルが入ります。</a><time class="wp-block-latest-posts__post-date">2019年3月1日</time></li>
                    <li><a href="#">ここに新着投稿のタイトルが入ります。</a><time class="wp-block-latest-posts__post-date">2019年3月1日</time></li>
                    <li><a href="#">ここに新着投稿のタイトルが入ります。</a><time class="wp-block-latest-posts__post-date">2019年3月1日</time></li>
                </ul>
            </div>
		</div>
	</div>
</div>
	<!-- ▲ コンテンツ : 終了-->
<!-- ▼ フッター : 開始-->
<footer class="l-footer">
    <div class="l-container">
        <p class="c-footer-description"><?php bloginfo('description');?></p>
        <a class="c-logo is-white" href="./">
            <div class="c-logo__image">
                <img src=" <?php echo esc_hrl(get_theme_file_url('images/logo.png')) ?>" 
                alt="<?php bloginfo('name');?>" width="116"/>
            </div>
            <div class="c-logo__text"><?php bloginfo('name');?></div>
        </a>
    </div>
</footer>
<div class="c-copyright">
    <p>Copyright © 2019 <?php bloginfo('name');?>  MY PORTFOLIO All Rights Reserved.</p>
</div>
<!-- ▲ フッター : 終了-->
    <!-- 自分で追記 -->
    <?php wp_footer(); ?>
</body>
</html> -->
