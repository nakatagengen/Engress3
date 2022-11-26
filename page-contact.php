<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part('includes/head'); ?>

</head>
<body>

  <!-- header -->
  <?php get_header(); ?>

  <!-- sub-fv -->
  <section class="sub-fv sub-fv_contact">
    <h3 class="sub-fv__title">お問い合わせ・資料請求</h3>
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

  <section class="contact">
    <div class="contact__inner">
      <?php the_content(); ?>

    </div>
  </section>











  <!-- footer -->
  <?php get_footer(); ?>

  <!-- //footer -->

  <?php get_template_part('includes/footer'); ?>







 
  
</body>



</html>