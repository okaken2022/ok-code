<?php get_header(); ?>

<main>
  <section class="work-list section">
    <h1 class="section__title-en">Works</h1>
    <p class="section__title-ja">実績</p>
    <div class="work-list__items">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="work-list__item">
          <h2 class="work-list__title"><?php the_title(); ?></h2>
          <a href=" <?echo get_post_permalink();?>" class="work-list__img">
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
          </a>
        </div>
      <?php endwhile;endif; ?>
    </div>
    <?php the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
        'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
    ); ?>
  </section>
  <div class="cta">
    <div class="cta__mask"></div>
    <p class="cta__text">Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。</p>
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

<?php get_footer(); ?>

