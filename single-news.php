<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('includes/head'); ?>

</head>

<body>

  <!-- header -->
  <?php get_header(); ?>
  <!-- //header -->
  

  <!-- パンくずリスト -->
  <div class="breadcrumbs breadcrumbs_pt" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumbs__inner">

      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
  <!-- //パンくずリスト -->

  <!-- news-post -->
  <section class="news">
    <div class="section__inner">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="news__content">

          <h1 class="news__title"><?php the_title(); ?></h1>
          <div class="news__date"><?php the_time(get_option('date_format')); ?></div>
          <?php the_content(); ?>
        </div>
          <?php endwhile; ?>
          <?php endif; ?>
    </div>
  </section>
  <!-- news-post -->





  <!-- document -->
  <div class="document">
    <h5 class="document__title">まずは無料で資料請求から</h5>
    <button class="btn btn_size_l btn_size_l-long"><a href="<?php bloginfo('url'); ?>/contact" class="btn__link">資料請求</a></button>
    <div>
      <a href="<?php bloginfo('url'); ?>/contact" class="document__contact">お問い合わせ</a>
    </div>

  </div>
  <!-- //document -->

  <!-- phone-text -->
  <div class="phone-text">
    <p class="phone-text__text">お電話でのお問い合わせはこちら<span class="phone-text__phone-num"><a class="right__phone-num_link">0123-456-7890</a></span><span class="phone-text__time">平日 08:00~20:00</span></p>
  </div>
  <!-- //phone-text -->




  <!-- footer -->
  <?php get_footer(); ?>

  <!-- //footer -->
  <?php get_template_part('includes/footer'); ?>








</body>


</html>