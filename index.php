<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('includes/head'); ?>
</head>

<body>

  <!-- header -->
  <?php get_header(); ?>
  <!-- //header -->

  <!-- fv -->
  <section class="fv">
    <div class="fv__contents">
      <h2 class="fv__title">TOEFL対策はEngress</h2>
      <p class="fv__copy">
        日本人へのTOEFL指導歴豊かな講師陣の<br class="fv__copy_sp">コーチング型TOEFLスクール
      </p>
      <button class="btn btn_size_l fv__btn">資料請求</button>
      <div> <a href="" class="fv__contact">お問い合わせ</a></div>
    </div>


  </section>
  <!-- //fv -->

  <!-- fv-buttom -->
  <section class="fv-buttom section section_navy">
    <div class="section__inner">

      <div class="fv-buttom__content">
        <h3 class="section__title section__title_navy">TOEFL学習でこんな悩みありませんか？</h3>
        <div class="fv-buttom__text">
          <p class="fv-buttom__p">勉強の習慣が身についていない</p>
          <p class="fv-buttom__p">勉強しているはずなのに点数が伸びない</p>
          <p class="fv-buttom__p">正しい勉強方法がわからない</p>
        </div>
      </div>

      <div class="bord">
        <div class=" bord__contents">
          <h4 class="bord__title">Engressは<br><span class="bord__under-line">TOEFLに特化したスクール</span>です</h4>
          <p class="bord__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
        </div>

      </div>

    </div>
  </section>
  <!-- //fv-bottom -->

  <!-- main -->
  <main>
    <!-- media -->
    <section class="media section">
      <div class="section__inner">
        <h3 class="section__title">TOEFL対策に特化したEngress3つの強み</h3>

        <div class="media__content">
          <div class="media__text">
            <span class="media__num">特徴 1</span>
            <h6 class="media__head">TOEFLに最適化された<br>
              無駄のないカリキュラム</h6>
            <p class="media__copy">
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </p>
          </div>
          <div class="media__img">
            <img class="media-img" src="<?php echo get_template_directory_uri(); ?>/img/feature01.jpg" alt="">
          </div>
        </div>

        <div class="media__content">
          <div class="media__text media__text_order">
            <span class="media__num">特徴 2</span>
            <h6 class="media__head">日本人指導歴10年以上の<br>
              経験豊富な講師陣</h6>
            <p class="media__copy">
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </p>
          </div>
          <div class="media__img">
            <img class="media-img" src="<?php echo get_template_directory_uri(); ?>/img/feature02.jpg" alt="">
          </div>
        </div>

        <div class="media__content">
          <div class="media__text">
            <span class="media__num">特徴 3</span>
            <h6 class="media__head">平均3ヶ月でTOEFL iBT20点アップ</h6>
            <p class="media__copy">
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </p>
          </div>
          <div class="media__img">
            <img class="media-img" src="<?php echo get_template_directory_uri(); ?>/img/feature03.jpg" alt="">
          </div>
        </div>


      </div>

    </section>
    <!-- //media -->

    <!-- price -->
    <section class="price">
      <div class="section__inner price__content">
        <p class="price__title">Engressの料金プランはこちら</p>
        <button class="price__btn"><a class="price__link" href="price.html">料金を見てみる</a></button>
      </div>
    </section>
    <!-- //price -->

    <!-- card -->
    <section class="card section section_navy">
      <div class="section__inner">
        <h3 class="section__title section__title_navy">TOEFL成功事例</h3>

        <div class="card__content">

          <div class="card__item">
            <p class="card__text"><?php the_field('card_text_1'); ?></p>
            <div class="card__info-box">
              <div class="card__img"><img src="<?php echo get_template_directory_uri(); ?>/img/success1@2x.jpg" alt="" class="card-img"></div>
              <div class="card-profile">
                <p class="card-profile__profession"><?php the_field('card_profession_1'); ?></p>
                <p class="card-profile__name"><?php the_field('card_name_1'); ?></p>
              </div>
              <p class="card__grade"><?php the_field('card_score_1'); ?></p>

            </div>

          </div>

          <div class="card__item">
            <p class="card__text"><?php the_field('card_text_2'); ?></p>
            <div class="card__info-box">
              <div class="card__img"><img src="<?php echo get_template_directory_uri(); ?>/img/success2@2x.jpg" alt="" class="card-img"></div>
              <div class="card-profile">
                <p class="card-profile__profession"><?php the_field('card_profession_2'); ?></p>
                <p class="card-profile__name"><?php the_field('card_name_2'); ?></p>
              </div>
              <p class="card__grade"><?php the_field('card_score_2'); ?></p>
            </div>



          </div>

          <div class="card__item">
            <p class="card__text"><?php the_field('card_text_3'); ?></p>
            <div class="card__info-box">
              <div class="card__img"><img src="<?php echo get_template_directory_uri(); ?>/img/success3@2x.jpg" alt="" class="card-img"></div>
              <div class="card-profile">
                <p class="card-profile__profession"><?php the_field('card_profession_3'); ?></p>
                <p class="card-profile__name"><?php the_field('card_name_3'); ?></p>
              </div>
              <p class="card__grade"><?php the_field('card_score_3'); ?></p>

            </div>


          </div>


        </div>


      </div>

    </section>
    <!-- //card -->

    <!-- flow -->
    <section class="flow section">
      <div class="section__inner">
        <h3 class="section__title">ご利用の流れ</h3>

        <div class="flow__content">

          <div class="flow__box">

            <p class="flow__num">01</p>
            <p class="flow__name">お問い合わせ</p>

            <p class="flow__text">まずはフォームまたはお電話からお申し込みください。</p>
          </div>

          <div class="flow__box">
            <span class="flow__num">02</span>
            <p class="flow__name">ヒアリング</p>
            <p class="flow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
          </div>
          <div class="flow__box">
            <span class="flow__num">03</span>
            <p class="flow__name">学習プランのご提供</p>
            <p class="flow__text">目標達成のために最適な学習プランをご提案致します。</p>
          </div>
          <div class="flow__box">
            <span class="flow__num">04</span>
            <p class="flow__name">ご入会</p>
            <p class="flow__text">お申込み完了後、レッスンがスタートします。</p>
          </div>

        </div>
      </div>
    </section>
    <!-- //flow -->

    <!-- question -->
    <section class="question section">
      <div class="section__inner">
        <h3 class="section__title">よくある質問</h3>

        <section class="accordion">


          <h4 class="accordion-title jsAccordionTitle">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
          <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>

          <h4 class="accordion-title jsAccordionTitle">教材はオリジナルのものを使用しているのでしょうか？</h4>
          <div class="accordion-content">Engressの教材は全てオリジナル制作物となります。そのため、それぞれの生徒に最適な教材を提供することが可能です。</div>

          <h4 class="accordion-title jsAccordionTitle">講師に日本人はいますか？</h4>
          <div class="accordion-content">日本人へのTOEFL指導歴豊かな講師陣が揃っています。</div>

          <h4 class="accordion-title jsAccordionTitle">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
          <div class="accordion-content">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</div>


        </section><!-- /.accordion -->


      </div>

    </section>
    <!-- //question -->

    <!-- blog-info -->
    <section class="blog-info">
      <div class="section__inner blog-info__content">

        <!-- blog -->
        <div class="blog-info__blog">
          <h3 class="blog-info__title">ブログ</h3>
          <!-- wordpressで編集 -->

          <ul class="blog-info__list">

            <?php
            $wp_query = new WP_Query();
            $my_posts = array(
              'post_type' => 'post', //カテゴリは特定せず
              'posts_per_page' => '3', //とりあえず3件
            );
            $wp_query->query($my_posts);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
               <li class="blog-info__item">
              <a href="<?php the_permalink(); ?>" class="blog-info__link">

                <div class="blog-info__type">
                  <?php $category = get_the_category(); ?>
                  <?php echo $category[0]->cat_name; ?>
                </div>
                <?php
                $id = get_post_thumbnail_id();
                $thumbnail_src = wp_get_attachment_image_src($id, 'full');
                ?>
                <img class="blog-info__img" src="<?php echo $thumbnail_src[0]; ?>" alt="">
                <div class="blog-info__text">
                  <p class="blog-info__sub-title">
                    <?php
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </p>
                  <p class="blog-info__date"><?php the_time(get_option('date_format')); ?></p>
                </div>
              </a>
            </li>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

            


          </ul>
          <!-- wordpressで編集 -->
        </div>
        <!-- //blog -->

        <!-- info -->
        <div class="blog-info__info">
          <h3 class="blog-info__title">お知らせ</h3>
          <ul class="blog-info__info-list">

            <li class="blog-info__info-item">
              <p class="blog-info__info-date">2020-12-01</p>
              <p class="blog-info__info-sub-title">
                2021年のスケジュールについて
              </p>
            </li>

            <li class="blog-info__info-item">
              <p class="blog-info__info-date">2019-11-02</p>
              <p class="blog-info__info-sub-title">
                11月休校日のお知らせ
              </p>
            </li>

            <li class="blog-info__info-item">
              <p class="blog-info__info-date">2020-10-01</p>
              <p class="blog-info__info-sub-title">
                10月休校日のお知らせ
              </p>
            </li>

          </ul>
        </div>
        <!-- //info -->
      </div>
    </section>
    <!-- //blog-info -->


  </main>

  <!-- //main -->




  <!-- document -->
  <div class="document">
    <h5 class="document__title">まずは無料で資料請求から</h5>
    <button class="btn btn_size_l btn_size_l-long">資料請求</button>
    <div>
      <a href="#" class="document__contact">お問い合わせ</a>
    </div>

  </div>
  <!-- //document -->

  <!-- phone-text -->
  <div class="phone-text">
    <p class="phone-text__text">お電話でのお問い合わせはこちら<span class="phone-text__phone-num">0123-456-7890</span><span class="phone-text__time">平日 08:00~20:00</span></p>
  </div>
  <!-- //phone-text -->




  <!-- footer -->
  <?php get_footer(); ?>
  <!-- //footer -->
  <?php get_template_part('includes/footer'); ?>

</body>


</html>