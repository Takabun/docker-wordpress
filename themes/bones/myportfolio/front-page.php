<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="c-front-visual">
            <div class="c-front-visual__text">HELLO WORLD.</div>
        </div>
        <div class="l-container is-sm">

        <?php if(have_posts()): //もし投稿があったら。;ではなく: ?>
                    <?php while(have_posts()) : //;ではなく:   ?>
                    <?php the_post();//データ1件分取り出す ?>

            <div class="c-front-text">

            <?php the_content();//データ1件分取り出す ?>


            </div>
            <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>
</div>
<!-- ▲ コンテンツ : 終了(front-page)-->
<?php get_footer(); ?>
</body>
</html>
