<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('includes/head'); ?>

</head>

<body>

  <!-- header -->
  <?php get_header(); ?>

  <!-- //header -->

  <!-- sub-fv -->
  <section class="sub-fv sub-fv_blog">
    <h3 class="sub-fv__title">ブログ</h3>
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

  <!-- blog-archive -->
  <section class="blog-archive">
    <div class="section__inner">
      <?php if (have_posts()) : ?>
        <h3 class="section__sub-page-title blog-archive__head">新着一覧</h3>

        <!-- <ul class="blog-archive__content"> -->
        <?php while (have_posts()) : the_post(); ?>

          <li class="blog-archive__item">
            <a href="<?php the_permalink(); ?>" class="blog-archive__link">
              <div class="blog-archive__box">
                <div class="blog-archive__type">
                  <?php $category = get_the_category(); ?>
                  <?php echo $category[0]->cat_name; ?>
                </div>
                <?php
                $id = get_post_thumbnail_id();
                $thumbnail_src = wp_get_attachment_image_src($id, 'full');
                ?>
                <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
                  <img class="blog-archive__img" src="<?php echo $thumbnail_src[0]; ?>" alt="">
                <?php else : /* 登録されていなかったら */ ?>
                  <img class="blog-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/no-img.jpeg" alt="">
                <?php endif; ?>
                
                <div class="blog-archive__text">
                  <date class="blog-archive__date"><?php the_time(get_option('date_format')); ?></date>
                  <h4 class="blog-archive__title">
                    <?php
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h4>
                  <? the_excerpt(); ?>
                </div>
              </div>
            </a>
          </li>

          <!-- </ul> -->
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>

  <!-- //blog-archive -->


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