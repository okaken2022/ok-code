<?php get_header();?>

  <main>
    <?php wp_body_open();?>
    <section class="price section">
      <h2 class="section__title-en fade-in fade-in-up ">Price</h2>
      <p class="section__title-ja fade-in fade-in-up">制作料金</p>
      <div class="price-cards">
        <div class="price-cards__card">
          <div class="price-cards__img"><img src="<?php echo get_template_directory_uri();?>/img/card01.png" alt=""></div>
          <div class="price-cards__text-part">
            <h3 class="price-cards__title">1.デザインからの制作</h3>
            <p class="price-cards__text">1ページで完結するランディングページから、複数ページからなるコーポレートサイトなどを制作します。お客様からヒアリングした情報を元に目的に沿ったデザインを提案し、制作いたします。</p>
            <dl class="price-cards__price">
              <dt>・トップページ</dt>
              <dd>¥30,000〜</dd>
              <dt>・下層ページ</dt>
              <dd>¥10,000〜</dd>
              <dt>・ランディングページ</dt>
              <dd>¥50,000〜</dd>
            </dl>
          </div>
        </div> <!-- price-cards__card end -->
      </div> <!-- price-cards end -->
        <div class="price-cards__card">
          <div class="price-cards__img"><img src="<?php echo get_template_directory_uri();?>/img/card02.png" alt=""></div>
          <div class="price-cards__text-part">
            <h3 class="price-cards__title">2.コーディング</h3>
            <p class="price-cards__text">いただいたデザインを元に正確に実装します。保守性の高いコーディングを心がけております。デザインカンプはAdobe XD, Photoshop, Illustratorなどのデータにて承ります。</p>
            <dl class="price-cards__price">
              <dt>・トップページ</dt>
              <dd>¥20,000〜</dd>
              <dt>・下層ページ</dt>
              <dd>¥8,000〜</dd>
              <dt>・ランディングページ</dt>
              <dd>¥20,000〜</dd>
            </dl>
          </div>
        </div> <!-- price-cards__card end -->
      </div> <!-- price-cards end -->
        <div class="price-cards__card">
          <div class="price-cards__img"><img src="<?php echo get_template_directory_uri();?>/img/card03.png" alt=""></div>
          <div class="price-cards__text-part">
            <h3 class="price-cards__title">3.WordPress</h3>
            <p class="price-cards__text">WebサイトをWordPressで構築いたします。コーディングの知識がなくても、お客様ご自身で記事の投稿や更新を行うことができるようになります。</p>
            <dl class="price-cards__price">
              <dt>・新規サイトコーディング</dt>
              <dd>¥70,000〜</dd>
              <dt>・プラグイン導入</dt>
              <dd>¥10,000〜</dd>
            </dl>
          </div>
        </div> <!-- price-cards__card end -->
      </div> <!-- price-cards end -->
    </section>

    <section id="flow" class="flow section">
    <h2 class="section__title-en fade-in fade-in-up">Flow</h2>
    <p class="section__title-ja fade-in fade-in-up">制作の流れ</p>

    <div class="flow-steps">
      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>1</p>
          </div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow01.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">お問い合わせ</h4>
          <p class="flow-step__text">フォームに必要事項を記入し、返信をお待ちください。</p>
        </div>
      </div>  <!-- flow-step__item end -->

      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>2</p>
          </div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow02.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">ヒアリングシートへの記入</h4>
          <p class="flow-step__text">メールにてヒアリングシートをお送りいたします。サイト構築のお目的やターゲット、完成のイメージについてお聞かせください。</p>
        </div>
      </div>  <!-- flow-step__item end -->
      
      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>3</p>
          </div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow03.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">打ち合わせ</h4>
          <p class="flow-step__text">ヒアリングシートをもとに、ご依頼範囲、金額、スケジュール、納期、納品方法について確認します。ご納得していただければ契約となります。メールによる打ち合わせの他に、zoomやお電話による打ち合わせも可能です。</p>
        </div>
      </div>  <!-- flow-step__item end -->

      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>4</p>
          </div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow04.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">制作</h4>
          <p class="flow-step__text">デザイン、コーディングをしていきます。それぞれのフェーズでこまめに進捗度合いをお伝えし、確認、修正を行なっていきます。</p>
        </div>
      </div>  <!-- flow-step__item end -->

      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>5</p>
          </div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
          <div class="flow-step__dot zoom"></div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow05.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">納品</h4>
          <p class="flow-step__text">①zipファイルにて納品<br>
          ②サーバーへのアップロード<br>
          いずれかの方法で納品させていただきます。</p>
        </div>
      </div>  <!-- flow-step__item end -->

      <div class="flow-step__item">
        <div class="flow-step__number">
          <div class="flow-step__circle zoom">
            <p>STEP</p>
            <p>6</p>
          </div>
        </div>
        <div class="flow-step__image"><img src="<?php echo get_template_directory_uri();?>/img/flow06.png" alt=""></div>
        <div class="flow-step__text-part">
          <h4 class="flow-step__title">保守・運用</h4>
          <p class="flow-step__text">構築したWebサイトは、今後お客様とユーザー様とをつなぐ大切な窓口となります。最大限活用するためには、保守・運用が不可欠です。保守・運用をご希望の場合は、打ち合わせ時にお知らせください。責任を持ってサポートさせていただきます。</p>
        </div>
      </div>  <!-- flow-step__item end -->
    </div>

    </section>
  </main>

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
<?php get_footer();?>