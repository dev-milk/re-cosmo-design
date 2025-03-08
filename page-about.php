<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="contents">
  <div class="container">
    <main>
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <article>
            <h1 class="article-title"><?php the_title(); ?></h1>
            <?php the_post_thumbnail(); ?>
            <div id="contact">
              <div class="text">
              <img src="<?php echo esc_url(get_theme_file_uri('img/blog-img-about.jpg')); ?>" alt="ブログの概要">
              <h2 class="wp-block-heading">作者からのメッセージ</h2>
                <p>きっかけは宇宙への憧れと好奇心<br>
                最後に夜空を見上げたのはいつですか？<br>
                誰もが抱く、宇宙への憧れと好奇心<br>
                その想いをもっと身近に感じるために<br>
                まずは、天体や星々、そして夜空に魅せられた人々の物語を<br>
                一緒に探しに行きましょう。</p>
                <h2 class="wp-block-heading">このサイトの作者</h2>
                <p>
                宇宙とサイエンスに興味がある普通の会社員です。<br>
               本ブログの他にローコストなデザインツールの使い方をまとめたハウツーブログ、<br>
              歴史をテーマにしたnoteブログを書いています。<br>
             同じテーマに興味がある方の参考になれば幸いです。</p>
              </div>
            </div>
          </article>
      <?php endwhile;
      endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /contents -->

<div id="re-top">
  <a href="#top" class="gotop"></a>
</div>

<?php get_footer(); ?>
