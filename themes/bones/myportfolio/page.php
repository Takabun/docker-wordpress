
<?php get_header();  ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm">

        <?php if(have_posts()): //もし投稿があったら。;ではなく: ?>
            <?php while(have_posts()) : //;ではなく:   ?>
            <?php the_post();//データ1件分取り出す ?>
            <article <?php post_class(); ?>>
                <h1 class="c-post__title">
                  <?php the_title(); ?>
                </h1>
                <div class="entry-content">
                <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了page.php-->
<?php get_footer();  ?>
</body>
</html>
