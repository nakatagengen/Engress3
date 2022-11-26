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
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="blog">

        <div class="blog__content">

          <!-- post-inner -->
          <main class="post__inner">
            <article class="post__article">

              <div class="post__category">
                <?php $category = get_the_category(); ?>
                <?php echo $category[0]->cat_name; ?>
              </div>

              <div class="post__title-date">
                <h1 class="post__title"><?php the_title(); ?></h1>
                <p class="post__date"><?php the_time(get_option('date_format')); ?></p>
              </div>

              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
              <?php the_content(); ?>


            </article>
            <!-- おすすめ記事 -->
            <div class="recommend-article">
              <h4 class="recommend-article__title">おすすめの記事</h4>

              <ul class="recommend-article__list">
                <?php
                $args = ['tag_id' => '156'];
                ?>
                <?php
                $custom_posts = get_posts($args);
                foreach ($custom_posts as $post) : setup_postdata($post); ?>

                  <li class="recommend-article__item">
                    <a href="<?php the_permalink(); ?>" class="recommend-article__link">
                      <div class="recommend-article__type">
                        <?php $category = get_the_category(); ?>
                        <?php echo $category[0]->cat_name; ?>
                      </div>
                      <?php
                      $id = get_post_thumbnail_id();
                      $thumbnail_src = wp_get_attachment_image_src($id, 'full');
                      ?>
                      <img class="recommend-article__img" src="<?php echo $thumbnail_src[0]; ?>" alt="">
                      <div class="recommend-article__text">
                        <p class="recommend-article__sub-title">
                          <?php the_title(); ?>
                        </p>
                        <p class="recommend-article__date"><?php the_time(get_option('date_format')); ?></p>
                      </div>
                    </a>

                  </li>

                <?php endforeach; ?>

              </ul>







            </div>
            <!-- //おすすめ記事 -->






          </main>
          <!-- //post-inner -->


          <!-- blog-sidebar -->
          <?php get_sidebar(); ?>
          <!-- //blog-sidebar -->
        </div>
      </div>



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


    <?php endwhile; ?>
  <?php endif; ?>

  <!-- footer -->
  <?php get_footer(); ?>

  <!-- //footer -->







  <?php get_template_part('includes/footer'); ?>

</body>


</html>