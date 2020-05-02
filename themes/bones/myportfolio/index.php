<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                
                <?php if (is_home() ) : //投稿ホームの場合  ?>
                <h1 class="archive-title">BLOG</h1>
                <?php else: //それ以外の場合 ?>
                    <!-- the_archive_titleを使うと、現在表示しているページの種類に基づいてタイトルテキストが出力される -->
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>');  ?>
                <?php endif;  //条件分岐終了  ?>

                
                <div class="c-post-archive">

                
                    <!-- ▼ 投稿 : 開始-->
                    <?php if(have_posts()): //もし投稿があったら。;ではなく: ?>
                    <?php while(have_posts()) : //;ではなく:   ?>
                    <?php the_post();//データ1件分取り出す ?>

                   <!-- 各投稿に合わせたpost_classを付ける事が推奨されている -->
                    <article <?php post_class(); ?>>
                        <div class="hentry-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): //もしアイキャッチ画像があれば  ?> 
                                <?php the_post_thumbnail(); ?>
                            <?php  else: //もしアイキャッチ画像が無ければ  ?>
                                <img src="<?php echo esc_url( get_theme_file_uri('images/img-default.png')) ?>" 
                                alt="">
                            <?php endif; ?>
                            </a>
                        </div>


                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="<?php the_permalink(); ?>">
                                        <time class="entry-date published">
                                            <?php the_time('Y年n月j日'); ?>
                                        </time>
                                    </a>
                                </div>
                                <h2 class="<?php the_permalink(); ?>">
                                    <a href="../blog/01/">
                                    <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                            <!-- excerpt:抜粋文 -->
                                <?php  the_excerpt(); ?>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <?php the_category(  '&nbsp;' ) ; ?>
                                    </span>
                                    <!-- タグが付けられている時のみ前後のspanを出力し、複数のタグがある時は間を空白文字('&nbsp;')で区切る -->
                                    <?php the_tags('<span class="tags-links">', '&nbsp;', '</span>' ); ?>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <?php endwhile; ?>


                    <!--▼ ページネーション : 開始-->
                    <?php the_posts_pagination(); ?>
                    <!--▲ ページネーション : 終了-->

                    
                    <?php else: //;ではなく:  ?>
                        <p>まだ情報ない</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php  get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了(index.php)-->

<?php get_footer(); ?>

    <!-- 自分で追記 -->
    <?php wp_footer(); ?>
</body>
</html>
