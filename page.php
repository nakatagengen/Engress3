<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('includes/head'); ?>
</head>

<body>

  <!-- header -->
  <?php get_header(); ?>

  <!-- sub-fv -->
  <section class="sub-fv">
    <h3 class="sub-fv__title">コース・料金</h3>
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

  <!-- price-system -->

  <section class="price-system section">
    <div class="section__inner">
      <h3 class="section__sub-page-title">料金体系</h3>
      <div class="price-system__system">
        <div class="price-system__card">入会金 <?php $admission_fee = get_field('admission_fee');
                                            if ($admission_fee) { ?>
            <?php echo number_format($admission_fee); ?>
            <?php } ?>円</div>
        <div class="price-system__plus">+</div>
        <div class="price-system__card">月額費用</div>
      </div>
      <p class="price-system__text">
        Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
      </p>
    </div>
  </section>

  <!-- //price-system -->

  <!-- price-list -->
  <section class="price-list">
    <div class="section__inner">
      <h3 class="section__sub-page-title">料金表</h3>
      <ul class="price-list__content js-scrollable">

        <li class="price-list__item">
          <p class="price-list__title">基礎プラン</p>
          <div class="price-list__inner">
            <p class="price-list__price">
            <?php $basic_fee = get_field('basic_fee');
                                            if ($basic_fee) { ?>
            <?php echo number_format($basic_fee); ?>
            <?php } ?>円~</p>
            <p class="price-list__unit">*月額（税抜価格）</p>
            <p class="price-list__text">カリキュラム作成</p>
            <p class="price-list__text">TOEFL学習サポート</p>
            <p class="price-list__text">週一回のビデオMTG</p>
          </div>
        </li>

        <li class="price-list__item">
          <p class="price-list__title">演習プラン</p>
          <div class="price-list__inner">
            <p class="price-list__price">
            <?php $exercise_fee = get_field('exercise_fee');
                                            if ($exercise_fee) { ?>
            <?php echo number_format($exercise_fee); ?>
            <?php } ?>円~</p>
            <p class="price-list__unit">*月額（税抜価格）</p>
            <p class="price-list__text">カリキュラム作成</p>
            <p class="price-list__text">TOEFL学習サポート</p>
            <p class="price-list__text">週一回のビデオMTG</p>
            <p class="price-list__text">月二回の模試（解説付き）</p>
          </div>
        </li>

        <li class="price-list__item price-list__item_recommend">
          <p class="price-list__title price-list__title_recommend">おすすめ<br>志望校対策プラン</p>
          <div class="price-list__inner">
            <p class="price-list__price price-list__price_recommend">
            <?php $recommend_fee = get_field('recommend_fee');
                                            if ($recommend_fee) { ?>
            <?php echo number_format($recommend_fee); ?>
            <?php } ?>円~</p>
            <p class="price-list__unit">*月額（税抜価格）</p>
            <p class="price-list__text">カリキュラム作成</p>
            <p class="price-list__text">TOEFL学習サポート</p>
            <p class="price-list__text">週一回のビデオMTG</p>
            <p class="price-list__text">月二回の模試（解説付き）</p>
            <p class="price-list__text">週一の英語面接対策</p>
          </div>
        </li>

        <li class="price-list__item">
          <p class="price-list__title">フレックスプラン</p>
          <div class="price-list__inner">
            <p class="price-list__price">
            <?php $flex_fee = get_field('flex_fee');
                                            if ($flex_fee) { ?>
            <?php echo number_format($flex_fee); ?>
            <?php } ?>円~</p>
            <p class="price-list__unit">*月額（税抜価格）</p>
            <p class="price-list__text-unit">＊別途ご相談ください</p>
          </div>
        </li>

      </ul>
    </div>
  </section>
  <!-- //price-list -->






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