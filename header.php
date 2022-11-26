<header class="header">
    <div class="header__inner">

      <!-- logo -->
      <div class="logo header__logo">
        <h1 class="logo__text"><a href="<?php bloginfo('url'); ?>" class="logo__link"><img src="<?php echo get_template_directory_uri(); ?>/img/engress-logo.svg" alt="ロゴ画像" class="logo__img"></a></h1>
      </div><!-- //logo -->
      
      <!-- gnav -->
      <nav class="gnav gnav_tab">
        <ul class="gnav__list">
          <li class="gnav__item"><a class="gnav__link" href="<?php bloginfo('url'); ?>">ホーム</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php bloginfo('url'); ?>/blog">ブログ</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php bloginfo('url'); ?>/price">コース・料金</a></li>
        </ul>
      </nav>
      <div class="header__right right right_tab">
        <div class="right__text top-info">
          <p class="right__time">平日08:00〜20:00</p>
          <p class="right__phone-num"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-num.svg" class="phone-icon"><a class="right__phone-num_link">0123-456-7890</a></p>
        </div>
        <a href="<?php bloginfo('url'); ?>/contact" class="btn">資料請求</a>
        <a href="<?php bloginfo('url'); ?>/contact" class="btn btn_contact">お問い合わせ</a>
      </div>

      <!-- ドロワーメニュー -->
      <button type="button" id="js-hamburger" class="hamburger" aria-controls="js-glabal-menu" aria-expanded="false" area-label="メニューを開閉する">
        <span class="hamburger__line">
        </span>
      </button>
      <div class="right__text top-info top-info_tab">
        <p class="right__time top-info__time">平日08:00〜20:00</p>
        <p class="right__phone-num"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-num.svg" class="phone-icon"><a class="right__phone-num_link">0123-456-7890</a></p>
      </div>
  
     
        <nav class="sp-global-menu" id="js-global-menu" area-hidden="true">
          <ul class="sp-global-menu__list">
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>">ホーム</a></li>
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>/blog">ブログ</a></li>
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>/price">コース・料金</a></li>
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>/contact">資料請求</a></li>
            <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
          </ul>
        </nav>
        
     

      <div class="drawer-background" id="js-drawer-background">
      </div><!-- /.drawer-background -->
    </div>
  </header>
