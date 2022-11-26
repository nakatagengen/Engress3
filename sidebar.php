<aside class="blog-sidebar">


  <!-- 関連記事 -->
  <div class="connect-article">
    <div class="connect-article__head">関連記事</div>

    <ul class="connect-article__list">
      <?php
      $categories = get_the_category();
      $category_ID = array();
      foreach ($categories as $category) :
        array_push($category_ID, $category->cat_ID);
      endforeach;
      $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'category__in' => $category_ID,
        'orderby' => 'rand',
      );
      $query = new WP_Query($args);
      ?>
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <li class="connect-article__item">
            <a href="<?php the_permalink(); ?>" class="connect-article__link">
              <?php
              $id = get_post_thumbnail_id();
              $thumbnail_src = wp_get_attachment_image_src($id, 'full');
              ?>
              <?php if(has_post_thumbnail()) : ?>
              <img src="<?php echo $thumbnail_src[0]; ?>" class="connect-article__img" alt="">
              <?php else : ?>
                <img class="connect-article__img" src="<?php echo get_template_directory_uri(); ?>/img/no-img.jpeg" alt="">
                <?php endif; ?>
              <p class="connect-article__title"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile;
      else : ?>
        <p>関連記事はありませんでした。</p>
      <?php endif; ?>

    </ul>
  </div>
  <!-- //関連記事 -->
  <!-- カテゴリー -->
  <div class="category">
    <div class="category__head">カテゴリー</div>
    <ul class="category__list">

    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
      echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
    </ul>

  </div>
  <!-- //カテゴリー -->




</aside>