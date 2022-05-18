<?php get_header();?>

<body <?php body_class();?>>
  <?php wp_body_open();?>
  <div class="mainvisual">
    <div class="mainvisual__text">
      <h2 class="mainvisual__copy">みやすい、<br>Webサイトつくります</h2>
      <h1 class="mainvisual__title">OK CODE</h1>
    </div>
    <div class="mainvisual__img">
      <img src="<?php echo get_template_directory_uri();?>/img/mainvisual.jpg" alt="">
    </div>
  </div>

  <section id="works" class="section works">
    <h2 class="section__title-en">Works</h2>
    <p class="section__title-ja">実績</p>
    <!-- スライダーのコンテナ -->
    <div class="swiper">
      <!-- 必要に応じたwrapper -->
      <div class="swiper-wrapper">
        <!-- スライド -->
        <div class="swiper-slide"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/works01.png" alt=""></a></div>
        <div class="swiper-slide"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/works02.png" alt=""></a></div>
        <div class="swiper-slide"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/works03.png" alt=""></a></div>
      </div>

      <!-- 必要に応じてページネーション -->
      <div class="swiper-pagination"></div>
      <!-- 必要に応じてナビボタン -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <div class="button">
      <a href="#" class="btn btn-svg">
        <svg>
          <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
        </svg>
        <span>詳しく見る</span>
      </a>
    </div>
  </section>

  <section id="service" class="section service">
    <h2 class="section__title-en">Service</h2>
    <p class="section__title-ja">できること</p>
    <ul class="service__cards">
      <li class="card">
        <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card01.png" alt=""></div>
        <h3 class="card__title">1.デザインからの制作</h3>
        <p class="card__text">1ページで完結するランディングページから、複数ページからなるコーポレートサイトなどを制作します。お客様からヒアリングした情報を元に目的に沿ったデザインを提案し、制作いたします。</p>
      </li>
      <li class="card">
        <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card02.png" alt=""></div>
        <h3 class="card__title">2.コーディング</h3>
        <p class="card__text">いただいたデザインを元に正確に実装します。保守性の高いコーディングを心がけております。デザインカンプはAdobe XD, Photoshop, Illustratorなどのデータにて承ります。</p>
      </li>
      <li class="card">
        <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card03.png" alt=""></div>
        <h3 class="card__title">3.Wordpress</h3>
        <p class="card__text">WebサイトをWordpressで構築いたします。コーディングの知識がなくても、お客様ご自身で記事の投稿や更新を行うことができるようになります。</p>
      </li>
    </ul>

    <div class="button">
      <a href="#" class="btn btn-svg">
        <svg>
          <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
        </svg>
        <span>詳しく見る</span>
      </a>
    </div>
  </section>

  <section id="about" class="about section">
    <h2 class="section__title-en">About</h2>
    <p class="section__title-ja">私について</p>
    <div class="about-box">
      <div class="about-box__image"><img src="<?php echo get_template_directory_uri();?>/img/about.png" alt=""></div>
      <div class="about-box__text">
        <h3 class="about-box__name"><span>K</span>enji <span>O</span>kada</h3>
        <p class="about-box__introduction">
        当ポートフォリオをご覧くださりありがとうございます！
岡田 賢士と申します。看板のデザイン・制作会社や福祉施設での勤務を経て、現在はフリーランスでWeb制作を行っています。お客様が抱える問題の解決、目標の達成に向けて、丁寧なヒアリングを元にWebサイトを制作しております。
        </p>
      </div>
    </div>
  </section>

  <div class="cta">
    <div class="cta__mask"></div>
    <p class="cta__text">Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。</p>
    <div class="cta__button">
      <a href="#" class="btn btn-svg">
        <svg>
          <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
        </svg>
        <span>お問い合わせ</span>
      </a>
    </div>
  </div>

  <?php get_footer();?>