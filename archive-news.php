<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('includes/head'); ?>

</head>

<body>

  <!-- header -->
  <?php get_header(); ?>

  <!-- sub-fv -->
  <section class="sub-fv sub-fv_info">
    <h3 class="sub-fv__title">お知らせ</h3>
  </section>

  <!-- //sub-fv -->

  <!-- パンくずリスト -->
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumbs__inner">

      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
  <!-- //パンくずリスト -->


  <!-- info-archive -->
  <section class="info-archive">
    <div class="section__inner">
      <h3 class="section__sub-page-title">お知らせ一覧</h3>
      <?php if (have_posts()) : ?>

        <ul class="info-archive__list">
          <?php while (have_posts()) : the_post(); ?>
            <li class="info-archive__item">
              <p class="info-archive__date"><?php the_time(get_option('date_format')); ?></p>
              <a href="<?php the_permalink(); ?>" class="info-archive__link">
                <?php
                if (mb_strlen($post->post_title) > 20) {
                  $title = mb_substr($post->post_title, 0, 40);
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>

      <?php endif; ?>
    </div>
    <!-- pager -->
    <?php the_posts_pagination(
      array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
        'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
      )
    ); ?>
    <!-- //pager -->
  </section>
  <!-- //info-archive -->








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