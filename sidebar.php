<aside id="sidebar">
<section class="side-item  author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール" class="author-img">
    <h3 class="side-title">Auther</h3>
    <p class="profile">
    星と歴史が好きな有閑マダムを目指す普通の会社員です。オリジナルテーマをデザインしながら記事を書いています。
    </p>
    <ul>
      <li>
     <a href="https://x.com/devcosmo_luna">
      <img src="<?php echo get_theme_file_uri('img/x-btn.png'); ?>" alt="x"></a>
    </li>
   <li>
    <a href="https://www.instagram.com/devcosmo_biz/">
      <img src="<?php echo get_theme_file_uri('img/insta-btn.png'); ?>" alt="instagram">
     </a>
   </li>
   <li>
     <a href="https://jp.pinterest.com/devmilk_biz/">
      <img src="<?php echo get_theme_file_uri('img/pinterest-btn.png'); ?>" alt="pinterest">
     </a>
   </li>
   </ul>
  </section>

  <section class="side-item">
    <?php get_search_form(); ?>
  </section>

 
  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>
