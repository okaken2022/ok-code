<?php get_header();?>

  <main>
    <?php wp_body_open();?>
    <?php if (is_home()):?>
      <div class="mainvisual">
        <div class="mainvisual__text">
          <h2 class="mainvisual__copy">みやすい、<br>Webサイトつくります</h2>
          <h1 class="mainvisual__title">OK CODE</h1>
        </div>
        <div class="mainvisual__img">
          <img src="<?php echo get_template_directory_uri();?>/img/mockups02.png" alt="">
        </div>
      </div>
    <?php endif;?>

    <section id="works" class="section works">
      <h2 class="section__title-en fade-in fade-in-up">Works</h2>
      <p class="section__title-ja fade-in fade-in-up">実績</p>

      <?php
      $slideargs = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'rand',
        'posts_per_page' => 5
        );
        $the_query = new WP_Query($slideargs);
      ?>
      <!-- スライダーのコンテナ -->
      <div class="swiper">
        <!-- 必要に応じたwrapper -->
        <div class="swiper-wrapper">
        <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>

          <div class="swiper-slide">
            <a href="<?php the_permalink(); ?>" class="swiper__link">
              <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </a>
            <p class="swiper__text">
              <?php the_title(); ?>
            </p>
          </div>

        <?php endwhile; ?>
    <!-- // スライダー用のループ -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
        </div> <!--pair of swiper-wrapper-->

        <!-- 必要に応じてページネーション -->
        <div class="swiper-pagination"></div>
        <!-- 必要に応じてナビボタン -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

      <div class="button">
        <a href="<?php echo home_url('/work-list'); ?>" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
          </svg>
          <span>詳しく見る</span>
        </a>
      </div>
    </section>

    <section id="service" class="section service">
      <h2 class="section__title-en fade-in fade-in-up">Service</h2>
      <p class="section__title-ja fade-in fade-in-up">できること</p>
      <ul class="service__cards fade-in fade-in-up">
        <li class="card">
          <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card01.png" alt=""></div>
          <h3 class="card__title">1.デザインからの制作</h3>
          <p class="card__text">1ページで完結するランディングページから、複数ページからなるコーポレートサイトなどを制作します。お客様からヒアリングした情報を元に目的に沿ったデザインを提案し、制作いたします。</p>
        </li>
        <li class="card fade-in fade-in-up delay-time02">
          <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card02.png" alt=""></div>
          <h3 class="card__title">2.コーディング</h3>
          <p class="card__text">いただいたデザインを元に正確に実装します。保守性の高いコーディングを心がけております。デザインカンプはAdobe XD, Photoshop, Illustratorなどのデータにて承ります。</p>
        </li>
        <li class="card fade-in fade-in-up delay-time04">
          <div class="card__image"><img src="<?php echo get_template_directory_uri();?>/img/card03.png" alt=""></div>
          <h3 class="card__title">3.Wordpress</h3>
          <p class="card__text">WebサイトをWordpressで構築いたします。コーディングの知識がなくても、お客様ご自身で記事の投稿や更新を行うことができるようになります。</p>
        </li>
      </ul>

      <div class="button">
        <a href="<?php echo home_url('/price-flow'); ?>" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
          </svg>
          <span>詳しく見る</span>
        </a>
      </div>
    </section>

    <section id="about" class="about section">
      <h2 class="section__title-en fade-in fade-in-up">About</h2>
      <p class="section__title-ja fade-in fade-in-up">私について</p>
      <div class="about-box">
        <div class="about-box__image fade-in fade-in-up"><img src="<?php echo get_template_directory_uri();?>/img/about.png" alt=""></div>
        <div class="about-box__text">
          <h3 class="about-box__name"><span>K</span>enji <span>O</span>kada</h3>
          <p class="about-box__introduction">
          当ポートフォリオをご覧くださりありがとうございます！
  岡田 賢士と申します。看板のデザイン・制作会社や福祉施設での勤務を経て、現在はフリーランスでWeb制作を行っています。お客様が抱える問題の解決、目標の達成に向けて、丁寧なヒアリングを元にWebサイトを制作しております。
          </p>
          <ul class="about-box__link">
            <li class="about-box__twitter">
              <a href="https://twitter.com/okaken2022"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
            </li>
            <li class="about-box__github">
              <a href="https://github.com/okaken2022"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <div class="cta">
      <div class="cta__mask"></div>
      <p class="cta__text fade-in fade-in-up">Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。</p>
      <div class="cta__button">
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
          </svg>
          <span>お問い合わせ</span>
        </a>
      </div>
    </div>
  </main>
<?php get_footer();?>