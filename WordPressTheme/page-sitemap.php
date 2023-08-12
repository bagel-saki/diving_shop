<?php get_header(); ?>
<?php 
$top = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about/'));
$diving = esc_url(home_url('/diving-info/'));
$blog = esc_url(home_url('/blog/'));
$voices = esc_url(home_url('/voices/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$privacy = esc_url(home_url('/privacy-policy/'));
$terms = esc_url(home_url('/terms/'));
?>
  <main>
    <div class="p-lower-mv p-lower-mv--sitemap">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">site<span> map</span></h1>
      </div>
    </div>
    <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
    </div>
    <div class="l-sitemap-head">
      <div class="p-sitemap">
        <div class="l-inner p-sitemap__inner">
          <div class="p-sitemap__contents">
            <div class="p-contents p-contents--sitemap">
              <nav class="p-contents__container p-contents__container--sitemap">
                <ul class="p-contents__items">
                  <li class="p-contents__item">
                    <a href="<?php echo $campaign; ?>" class="p-contents__title p-contents__title--black"> キャンペーン </a>
                    <div class="p-contents__lists">
                    <?php
                          $taxonomy_terms = get_terms('campaign_category', array(
                            'hide_empty' => false,
                            'include' => array(2, 4, 3), // カテゴリーIDを指定する順番
                            'orderby' => 'include',
                          ));
                          foreach ($taxonomy_terms as $taxonomy_term) :
                          ?>
                            <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'campaign_category')); ?>" class="p-contents__list"><?php echo esc_html($taxonomy_term->name); ?></a>
                          <?php endforeach; ?>
                    </div>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $about; ?>" class="p-contents__title p-contents__title--black"> 私たちについて </a>
                  </li>
                </ul>
                <ul class="p-contents__items">
                  <li class="p-contents__item">
                    <a href="<?php echo $diving; ?>" class="p-contents__title p-contents__title--black"> ダイビング情報 </a>
                    <div class="p-contents__lists">
                      <a href="<?php echo $diving . '#tab-license'; ?>" class="p-contents__list">ライセンス講習</a>
                      <a href="<?php echo  $diving . '#tab-experience-diving'; ?>" class="p-contents__list">体験ダイビング</a>
                      <a href="<?php echo  $diving . '#tab-fan-diving'; ?>" class="p-contents__list">ファンダイビング</a>
                    </div>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $blog; ?>" class="p-contents__title p-contents__title--black"> ブログ </a>
                  </li>
                </ul>
                <ul class="p-contents__items">
                  <li class="p-contents__item">
                    <a href="<?php echo $voices; ?>" class="p-contents__title p-contents__title--black"> お客様の声 </a>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $price; ?>" class="p-contents__title p-contents__title--black"> 料金一覧 </a>
                    <div class="p-contents__lists">
                      <a href="<?php echo $price; ?>#license" class="p-contents__list js-priceTable" >ライセンス講習</a>
                      <a href="<?php echo $price; ?>#experience-diving" class="p-contents__list js-priceTable" >体験ダイビング</a>
                      <a href="<?php echo $price; ?>#fun-diving" class="p-contents__list js-priceTable" >ファンダイビング</a>
                    </div>
                  </li>
                </ul>
                <ul class="p-contents__items">
                  <li class="p-contents__item">
                    <a href="<?php echo $faq; ?>" class="p-contents__title p-contents__title--black"> よくある質問 </a>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $privacy; ?>" class="p-contents__title p-contents__title--black"> プライバシー<br class="u-mobile">ポリシー </a>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $terms; ?>" class="p-contents__title p-contents__title--black"> 利用規約 </a>
                  </li>
                  <li class="p-contents__item">
                    <a href="<?php echo $contact; ?>" class="p-contents__title p-contents__title--black"> お問い合わせ </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="p-sitemap__fish u-mobile">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>