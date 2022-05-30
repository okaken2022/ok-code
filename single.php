<?php get_header();?>
<main>
  <div class="work section">
    <h2 class="section__title-en">Works</h2>
    <p class="section__title-ja">実績</p>
    <div class="work__container">
      <dl class="work__text">
        <dt>サイト名：</dt>
        <dd><h1><?php echo post_custom('1.サイト名');?></h1></dd>
        <dt>使用言語：</dt>
        <dd><?php echo post_custom('2.使用言語');?></dd>
        <dt>コンセプト：</dt>
        <dd><?php echo post_custom('3.コンセプト');?></dd>
        <dt>参考URL：</dt>
        <dd><?php echo post_custom('4.参考URL');?></dd>
      </dl>
      <div class="work__image">
      <?php if(first_image()): ?>
        <img src="<?php echo first_image(); ?>" alt="<?php the_title(); ?>">
      <?php endif; ?>
      </div>
    </div>

    <ul class="post-link">
      <li><?php previous_post_link('%link', '< 前のページ'); ?></li>
      <li><?php echo post_custom('1.サイト名');?></li>
      <li><?php next_post_link('%link', '次のページ >'); ?></li>
    </ul>
  </div>
</main>

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