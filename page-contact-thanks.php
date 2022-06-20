<?php get_header(); ?>

<main>
  <section class="contact section">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <h1 class="section__title-en"><?php the_title(); ?></h1>
      <p class="section__title-ja">お問い合わせ</p>
      <ul class="contact-state">
        <li class="contact-state__list <?php if( is_page('contact') ) { echo 'current'; } ?>">入力</li>
        <li class="contact-state__list <?php if( is_page('contact-check') ) { echo 'current'; } ?>">確認</li>
        <li class="contact-state__list <?php if( is_page('contact-thanks') ) { echo 'current'; } ?>">完了</li>
      </ul>

      <?php the_post_thumbnail(); ?>
      <div class="text"><?php the_content(); ?></div>
    <?php endwhile;endif; ?>
    <div class="button">
      <a href="<?php echo home_url()?>" class="btn btn-svg">
        <svg>
          <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
        </svg>
        <span>ホームへ戻る</span>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>

