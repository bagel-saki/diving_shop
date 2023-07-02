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
  <div class="p-top-screen">
    <div class="p-top-screen__loading">
      <div class="p-loading" id="loading">
        <div class="p-loading__title">
          <div class="c-view-title c-view-title--green">
            <h2 class="c-view-title__main">diving</h2>
            <p class="c-view-title__sub">into&nbsp;the&nbsp;ocean</p>
          </div>
        </div>
      </div>
      <div class="p-loading__splash">
        <div class="p-loading__leftImage"></div>
        <div class="p-loading__rightImage"></div>
      </div>
    </div>
    <div class="p-top-screen__main-view">
      <div class="p-main-view">
        <div class="p-main-view__inner">
          <div class="p-main-view__slider swiper js-main-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slide-img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view_1.jpg" media="(min-width:1024px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view-sp_1.jpg" alt="美しい海の中を泳ぐウミガメ">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view_2.jpg" media="(min-width:1024px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view-sp_2.jpg" alt="海を泳ぐウミガメと二人のダイバーを下から見ている">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view_3.jpg" media="(min-width:1024px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view-sp_3.jpg" alt="海に浮かぶ船３艘と島">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view_4.jpg" media="(min-width:1024px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-view-sp_4.jpg" alt="砂浜とコバルトブルーの海">
                  </picture>
                </div>
              </div>
            </div>
            <div class="p-main-view__title">
              <div class="c-view-title">
                <h2 class="c-view-title__main">diving</h2>
                <p class="c-view-title__sub">into&nbsp;the&nbsp;ocean</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="l-first-section">
    <section class="p-campaign-section">
      <div class="p-campaign-section__inner l-inner">
        <div class="p-campaign-section__title">
          <div class="c-title">
            <h2 class="c-title__en">campaign</h2>
            <p class="c-title__ja">キャンペーン</p>
          </div>
        </div>
        <?php
        $campaign_args = array(
          'post_type' => 'campaign',
          'posts_per_page' => 8,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $campaign_query = new WP_Query($campaign_args);
        if ($campaign_query->have_posts()) :
        ?>
          <div class="p-campaign-section__wrapper">
            <div class="p-campaign-section__swiper js-campaign-swiper">
              <div class="swiper-wrapper">
                <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
                  <div class="p-campaign-section__item swiper-slide">
                    <div class="p-campaign-card">
                      <div class="p-campaign-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('campaign'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                        <?php endif; ?>
                      </div>
                      <div class="p-campaign-card__head">
                        <p class="p-campaign-card__tag"> <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                        if ($taxonomy_terms) {
                          echo $taxonomy_terms[0]->name;
                        }
                        ?></p>
                        <p class="p-campaign-card__title"><?php the_title(); ?></p>
                        <span class="p-campaign-card__border"></span>
                      </div>
                      <div class="p-campaign-card__body">
                        <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                        <div class="p-campaign-card__price">
                          <p class="p-campaign-card__originalPrice">¥<?php echo get_field('original_price'); ?></p>
                          <p class="p-campaign-card__newPrice">¥<?php echo get_field('new_price'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class="p-campaign-section__btn">
            <div class="c-btn" ontouchstart="">
              <a href="<?php echo $campaign; ?>" class="c-btn__link"> View more<span></span>
              </a>
              <div class="c-btn__overlay"></div>
            </div>
          </div>
      </div>
    </section>
  </div>
  <div class="l-section">
    <section class="p-aboutus-section">
      <div class="l-inner p-aboutus-section__inner">
        <div class="p-aboutus-section__title">
          <div class="c-title">
            <h2 class="c-title__en">about us</h2>
            <p class="c-title__ja">私たちについて</p>
          </div>
        </div>
        <div class="p-aboutus-section__main">
          <div class="p-aboutus ">
            <div class="p-aboutus__images">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/aboutus-all.jpg" alt="左側に青空の下のシーサーの写真、その画像に少し重なり、青い海を泳ぐ２匹の黄色い魚の写真が並ぶ">
            </div>
            <div class="p-aboutus__cont">
              <h2 class="p-aboutus__left"> dive&nbsp;<span>into&nbsp;<br>the&nbsp;</span>ocean </h2>
              <div class="p-aboutus__right">
                <p class="p-aboutus__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト </p>
                <div class="p-aboutus__btn">
                  <div class="c-btn" ontouchstart="">
                    <a href="<?php echo $about; ?>" class="c-btn__link">View more<span></span>
                    </a>
                    <div class="c-btn__overlay"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-aboutus-section__coral">
          <div class="c-img-caral"></div>
        </div>
      </div>
    </section>
  </div>
  <div class="l-section">
    <section class="p-information-section">
      <div class="p-information-section__inner">
        <div class="l-inner">
          <div class="p-information-section__title">
            <div class="c-title">
              <h2 class="c-title__en">information</h2>
              <p class="c-title__ja">ダイビング情報</p>
            </div>
          </div>
          <div class="p-information-section__wrapper">
            <div class="p-information-section__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information.jpg" alt="">
            </div>
            <div class="p-information-section__contentBox">
              <h3 class="p-information-section__subTitle">ダイビング講習</h3>
              <p class="p-information-section__text"> 当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br> 正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
              <div class="p-information-section__btn">
                <div class="c-btn" ontouchstart="">
                  <a href="<?php echo $diving; ?>" class="c-btn__link">View more<span></span>
                  </a>
                  <div class="c-btn__overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $blog_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
  ); ?>
  <?php $blog_query = new WP_Query($blog_args); ?>
  <?php if ($blog_query->have_posts()) : ?>
    <section class="p-blog-section">
      <div class="p-blog-section__bgWrapper">
        <div class="p-blog-section__rgba">
          <div class="p-blog__title">
            <div class="c-title c-title--white">
              <h2 class="c-title__en">blog</h2>
              <p class="c-title__ja">ブログ</p>
            </div>
          </div>
          <div class="l-inner">
            <div class="p-blog-section__wrap">
              <ul class="p-blog-cards">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                  <li class="p-blog-cards__item">
                    <a href="<?php the_permalink(); ?>" class="p-blog-card">
                      <figure class="p-blog-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('blog'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                        <?php endif; ?>
                      </figure>
                      <div class="p-blog-card__body">
                        <time class="p-blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <div class="p-blog-card__titleBox">
                          <h3 class="p-blog-card__title"><?php the_title(); ?></h3>
                        </div>
                        <p class="p-blog-card__text"><?php the_excerpt(); ?></p>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              </ul>
              <div class="p-blog-section__btn">
                <div class="c-btn" ontouchstart="">
                  <a href="<?php echo $blog; ?>" class="c-btn__link"> View more<span></span>
                  </a>
                  <div class="c-btn__overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-blog-section__fish">
          <div class="c-img-fish c-img-fish--white"></div>
        </div>
      </div>
    </section>

    <?php $voices_args = array(
      'post_type' => 'voices',
      'posts_per_page' => 2,
      'orderby' => 'date',
      'order' => 'DESC'
    ); ?>
    <?php $voices_query = new WP_Query($voices_args); ?>
    <?php if ($voices_query->have_posts()) : ?>
      <div class="l-section">
        <section class="p-voice-section">
          <div class="p-voice-section__inner l-inner">
            <div class="p-voice-section__title">
              <div class="c-title">
                <h2 class="c-title__en">voice</h2>
                <p class="c-title__ja">お客様の声</p>
              </div>
            </div>
            <div class="p-voice-section__cards">
              <?php while ($voices_query->have_posts()) : $voices_query->the_post(); ?>
                <div class="p-voice-section__card">
                  <div class="p-lower-voiceCard">
                    <div class="p-lower-voiceCard__inner">
                      <div class="p-lower-voiceCard__head">
                        <div class="p-lower-voiceCard__info">
                          <div class="p-lower-voiceCard__meta">
                            <p class="p-lower-voiceCard__age"><?php echo get_field('age'); ?>(<?php echo get_field('age'); ?>)</p>
                            <p class="p-lower-voiceCard__tag">
                              <?php
                            $taxonomy_terms = get_the_terms($post->ID, 'voices_category');
                            if ($taxonomy_terms) {
                                echo $taxonomy_terms[0]->name;
                            }
                            ?></p>
                          </div>
                          <h3 class="p-lower-voiceCard__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="p-lower-voiceCard__img">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="p-lower-voiceCard__body">
                        <p class="p-lower-voiceCard__text"> <?php echo get_field('details'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>

            <div class="p-voice-section__btn">
              <div class="c-btn" ontouchstart="">
                <a href="<?php echo $voices; ?>" class="c-btn__link"> View more<span></span>
                </a>
                <div class="c-btn__overlay"></div>
              </div>
            </div>
            <div class="p-voice-section__fish u-desktop">
              <div class="c-img-fish c-img-fish--reverse"></div>
            </div>
            <div class="p-voice-section__seahorse u-desktop">
              <div class="c-img-seahorse"></div>
            </div>
          </div>
        </section>
      </div>
    <?php endif; ?>

    <div class="l-section">
      <section class="p-price-section">
        <div class="p-price-section__inner l-inner">
          <div class="p-price-section__title">
            <div class="c-title">
              <h2 class="c-title__en">price</h2>
              <p class="c-title__ja">料金一覧</p>
            </div>
          </div>
          <div class="p-price-section__container">
            <div class="p-price-section__contents">
              <div class="p-price-contents">
                <div class="p-price-contents__item">
                  <div class="p-price-content">
                    <div class="p-price-content__title">ライセンス講習</div>
                    <ul class="p-price-content__lists">
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">オープンウォーターダイバーコース</p>
                        <p class="p-price-content__price">¥50,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">アドバンスドオープンウォーターコース</p>
                        <p class="p-price-content__price">¥60,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">レスキュー＋EFRコース</p>
                        <p class="p-price-content__price">¥70,000</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-price-contents__item">
                  <div class="p-price-content">
                    <div class="p-price-content__title">体験ダイビング</div>
                    <ul class="p-price-content__lists">
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ビーチ体験ダイビング(半日)</p>
                        <p class="p-price-content__price">¥7,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ビーチ体験ダイビング(1日)</p>
                        <p class="p-price-content__price">¥14,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ボート体験ダイビング(半日)</p>
                        <p class="p-price-content__price">¥10,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ボート体験ダイビング(1日)</p>
                        <p class="p-price-content__price">¥18,000</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-price-contents__item">
                  <div class="p-price-content">
                    <div class="p-price-content__title">ファンダイビング</div>
                    <ul class="p-price-content__lists">
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ビーチダイビング(2ダイブ)</p>
                        <p class="p-price-content__price">¥14,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ボートダイビング(2ダイブ)</p>
                        <p class="p-price-content__price">¥18,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">スペシャルダイビング(2ダイブ)</p>
                        <p class="p-price-content__price">¥24,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">ナイトダイビング(1ダイブ)</p>
                        <p class="p-price-content__price">¥10,000</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-price-contents__item">
                  <div class="p-price-content">
                    <div class="p-price-content__title">スペシャルダイビング</div>
                    <ul class="p-price-content__lists">
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">貸切ダイビング(2ダイブ)</p>
                        <p class="p-price-content__price">¥24,000</p>
                      </li>
                      <li class="p-price-content__list">
                        <p class="p-price-content__text">1日ダイビング(3ダイブ)</p>
                        <p class="p-price-content__price">¥32,000</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-price-section__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/price-section.jpg" media="(min-width:768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/price-section-sp.jpg" alt="ウミガメが海の中を泳いでいる">
              </picture>
            </div>
          </div>
          <div class="p-price-section__btn">
            <div class="c-btn" ontouchstart="">
              <a href="<?php echo $price; ?>" class="c-btn__link"> View more<span></span>
              </a>
              <div class="c-btn__overlay"></div>
            </div>
          </div>
          <div class="p-price-section__fish">
            <div class="c-img-fish c-img-fish--large"></div>
          </div>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>