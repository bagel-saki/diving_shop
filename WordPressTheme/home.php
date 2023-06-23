<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta情報 -->
  <title>blog__diving_shop</title>
  <meta name="description" content="ダイビングショップのブログ一覧ページです">
  <meta property="og:site_name" content="blog__diving_shop">
  <meta property="og:url" content="https://aaa.com/blog/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="blog__diving_shop">
  <meta property="og:description" content="ダイビングショップのブログ一覧ページです">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary_large_image">
  <!-- （画像関連） -->
  <link rel="icon" href="#">
  <meta property="og:image" content="./img/common/ogp.jpg">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <!-- css -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="./assets/js/script.js" defer></script>
</head>
<body>
  <header class="p-header js-header">
    <div class="p-header__inner">
      <div class="p-header__container">
        <a class="p-header__link" href="index.html">
          <div class="p-header__logo">
            <div class="c-logo"></div>
          </div>
        </a>
        <div class="p-header__pc-nav">
          <nav class="p-pc-nav  u-desktop">
            <ul class="p-pc-nav__items">
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="archive-campaign.html">
                  <p class="p-pc-nav__en-title">Campaign</p>
                  <p class="p-pc-nav__ja-title">キャンペーン</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="page-about.html">
                  <p class="p-pc-nav__en-title">About us</p>
                  <p class="p-pc-nav__ja-title">私たちについて</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="page-diving-info.html">
                  <p class="p-pc-nav__en-title">Information</p>
                  <p class="p-pc-nav__ja-title">ダイビング情報</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="home.html">
                  <p class="p-pc-nav__en-title">Blog</p>
                  <p class="p-pc-nav__ja-title">ブログ</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="archive-voices.html">
                  <p class="p-pc-nav__en-title">Voice</p>
                  <p class="p-pc-nav__ja-title">お客様の声</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="page-price.html">
                  <p class="p-pc-nav__en-title">Price</p>
                  <p class="p-pc-nav__ja-title">料金一覧</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="page-faq.html">
                  <p class="p-pc-nav__en-title">FAQ</p>
                  <p class="p-pc-nav__ja-title">よくある質問</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="page-contact.html">
                  <p class="p-pc-nav__en-title">Contact</p>
                  <p class="p-pc-nav__ja-title">お問合せ</p>
                  <span></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="p-header__hamburger">
          <div class="p-hamburger js-hamburger u-mobile">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="p-header__drawer">
          <nav class="p-drawer js-drawer">
            <div class="p-drawer__inner l-inner">
              <div class="p-drawer__container">
                <ul class="p-drawer__leftItems">
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="archive-campaign.html">キャンペーン</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="">ライセンス取得</a>
                      <a class="p-drawer__list" href="">貸切体験ダイビング</a>
                      <a class="p-drawer__list" href="">ナイトダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-about.html">私たちについて</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-diving-info.html">ダイビング情報</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="">ライセンス講習</a>
                      <a class="p-drawer__list" href="">体験ダイビング</a>
                      <a class="p-drawer__list" href="">ファンダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="home.html">ブログ</a>
                  </li>
                </ul>
                <ul class="p-drawer__rightItems">
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="archive-voices.html">お客様の声</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-price.html">料金一覧</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="">ライセンス講習</a>
                      <a class="p-drawer__list" href="">体験ダイビング</a>
                      <a class="p-drawer__list" href="">ファンダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-faq.html">よくある質問</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-privacy-policy.html">プライバシー<br>ポリシー</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-terms.html">利用規約</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="page-contact.html">お問い合わせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="p-lower-mv p-lower-mv--blog">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">blog</h1>
      </div>
    </div>
    <div class="l-inner">
      <nav class="breadcrumb">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="index.html">top</a><span>&gt;</span></li>
          <li class="breadcrumb-item active">ブログ一覧</li>
        </ul>
      </nav>
    </div>
    <div class="l-lower-head">
      <div class="p-home-container">
        <div class="l-blog-container l-inner">
          <div class="p-home-container__fish">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
          <div class="l-content">
            <div class="p-home-section">
              <div class="p-home-section__inner">
                <div class="p-home-section__content">
                  <ul class="p-lower-blogCards">
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog1.jpg" alt="ピンク色の珊瑚の写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">ライセンス取得</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストここにテキストが入ります。ここにテキストが入ります。ここにテキストここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog2.jpg" alt="青い海を泳ぐ亀の写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">ウミガメと泳ぐ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog3.jpg" alt="イソギンチャクの中から顔を出すクマノミの写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog4.jpg" alt="黄色い魚の写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog5.jpg" alt="海中を這うウミムシの写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog6.jpg" alt="暗い水の中で光るクラゲ群">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog3.jpg" alt="イソギンチャクの中から顔を出すクマノミの写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog4.jpg" alt="黄色い魚の写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog5.jpg" alt="海中を這うウミムシの写真">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                    <li class="p-blog-cards__item">
                      <a href="single.html" class="p-blog-card">
                        <figure class="p-blog-card__img">
                          <img src="assets/images/common/blog6.jpg" alt="暗い水の中で光るクラゲ群">
                        </figure>
                        <div class="p-blog-card__body">
                          <time class="p-blog-card__date" datetime="2023-11-17">2023.11/17</time>
                          <div class="p-blog-card__titleBox">
                            <h3 class="p-blog-card__title">カクレクマノミ</h3>
                          </div>
                          <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="p-home-section__pagination">
                  <div class="c-pagination" ontouchstart="">
                    <div class="pagination">
                      <nav class="navigation">
                        <div class="nav-links u-desktop-flex">
                          <a class="prev page-numbers" href="#"><span></span></a>
                          <a class="page-numbers current js-pagination">1</a>
                          <a class="page-numbers js-pagination" href="#">2</a>
                          <a class="page-numbers js-pagination" href="#">3</a>
                          <a class="page-numbers js-pagination" href="#">4</a>
                          <a class="page-numbers js-pagination" href="#">5</a>
                          <a class="page-numbers js-pagination" href="#">6</a>
                          <a class="next page-numbers" href="#"><span></span></a>
                        </div>
                        <div class="nav-links u-mobile-flex">
                          <a class="prev page-numbers" href="#"><span></span></a>
                          <span class="page-numbers current">1</span>
                          <a class="page-numbers" href="#">2</a>
                          <a class="page-numbers" href="#">3</a>
                          <a class="page-numbers" href="#">4</a>
                          <a class="next page-numbers" href="#"><span></span></a>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="l-sidebar">
            <aside class="p-sidebar">
              <div class="p-sidebar__popularArticle">
                <div class="p-sidebar-popularArticle">
                  <div class="p-sidebar-popularArticle__title">
                    <h3 class="c-sidebar-title">人気記事</h3>
                  </div>
                  <div class="p-sidebar-popularArticle__cards">
                    <ul class="p-sidebar-articleCards">
                      <li class="p-sidebar-articleCards__item">
                        <div class="p-sidebar-articleCard">
                          <a class="p-sidebar-articleCard__link" href="single.html">
                            <div class="p-sidebar-articleCard__inner">
                              <div class="p-sidebar-articleCard__img">
                                <img src="
            ./assets/images/common/blog4.jpg" alt="海の中を泳ぐ黄色い魚">
                              </div>
                              <div class="p-sidebar-articleCard__body">
                                <time datetime="2023-11-17" class="p-sidebar-articleCard__date">2023/11/17</time>
                                <div class="p-sidebar-articleCard__title">ライセンス取得</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="p-sidebar-articleCards__item">
                        <div class="p-sidebar-articleCard">
                          <a class="p-sidebar-articleCard__link" href="single.html">
                            <div class="p-sidebar-articleCard__inner">
                              <div class="p-sidebar-articleCard__img">
                                <img src="
            ./assets/images/common/blog3.jpg" alt="海の中を泳ぐ亀">
                              </div>
                              <div class="p-sidebar-articleCard__body">
                                <time datetime="2023-11-17" class="p-sidebar-articleCard__date">2023/11/17</time>
                                <div class="p-sidebar-articleCard__title">ウミガメと泳ぐ</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="p-sidebar-articleCards__item">
                        <div class="p-sidebar-articleCard">
                          <a class="p-sidebar-articleCard__link" href="single.html">
                            <div class="p-sidebar-articleCard__inner">
                              <div class="p-sidebar-articleCard__img">
                                <img src="
            ./assets/images/common/blog2.jpg" alt="イソギンチャクから顔を出すクマノミ">
                              </div>
                              <div class="p-sidebar-articleCard__body">
                                <time datetime="2023-11-17" class="p-sidebar-articleCard__date">2023/11/17</time>
                                <div class="p-sidebar-articleCard__title">カクレクマノミ</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="p-sidebar__review">
                <div class="p-sidebar-review">
                  <a class="p-sidebar-review__link" href="archive-voices.html">
                    <div class="p-sidebar-review__title">
                      <h3 class="c-sidebar-title">口コミ</h3>
                    </div>
                    <div class="p-sidebar-review__content">
                      <div class="p-sidebar-review__img">
                        <img src="./assets/images/common/voice_side.jpg" alt="ソファに座って腕を組み微笑む若いカップル" />
                      </div>
                    </div>
                    <div class="p-sidebar-review__age">30代(カップル)</div>
                    <div class="p-sidebar-review__articleTitle">ここにタイトルが入ります。ここにタイトル</div>
                  </a>
                  <div class="p-sidebar-review__btn">
                    <div class="c-btn" ontouchstart="">
                      <a href="archive-voices.html" class="c-btn__link"> View more<span></span>
                      </a>
                      <div class="c-btn__overlay"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-sidebar__campaign">
                <div class="p-sidebar-campaign">
                  <div class="p-sidebar-campaign__title">
                    <h3 class="c-sidebar-title">キャンペーン</h3>
                  </div>
                  <div class="p-sidebar-campaign__cards">
                    <ul class="p-sidebar-campaignCards">
                      <li class="p-sidebar-campaignCards__item">
                        <div class="p-sidebar-campaignCard">
                          <a class="p-sidebar-campaignCard__link" href="archive-campaign.html">
                            <div class="p-sidebar-campaignCard__img">
                              <img src="./assets/images/common/campaign-card_1.jpg" alt="赤、青、黄等の小さな魚が海の中を泳いでいる">
                            </div>
                            <div class="p-sidebar-campaignCard__head">
                              <p class="p-sidebar-campaignCard__title">ライセンス取得</p>
                              <span class="p-sidebar-campaignCard__border"></span>
                            </div>
                            <div class="p-sidebar-campaignCard__body">
                              <p class="p-sidebar-campaignCard__text">全部コミコミ(お一人様)</p>
                              <div class="p-sidebar-campaignCard__price">
                                <p class="p-sidebar-campaignCard__originalPrice">￥56,000</p>
                                <p class="p-sidebar-campaignCard__newPrice">￥46,000</p>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="p-sidebar-campaignCards__item">
                        <div class="p-sidebar-campaignCard">
                          <a class="p-sidebar-campaignCard__link" href="archive-campaign.html">
                            <div class="p-sidebar-campaignCard__img">
                              <img src="./assets/images/common/campaign-card_2.jpg" alt="海岸を出発し島に向かう二艘の船">
                            </div>
                            <div class="p-sidebar-campaignCard__head">
                              <p class="p-sidebar-campaignCard__title">貸切体験ダイビング</p>
                              <span class="p-sidebar-campaignCard__border"></span>
                            </div>
                            <div class="p-sidebar-campaignCard__body">
                              <p class="p-sidebar-campaignCard__text">全部コミコミ(お一人様)</p>
                              <div class="p-sidebar-campaignCard__price">
                                <p class="p-sidebar-campaignCard__originalPrice">￥20,000</p>
                                <p class="p-sidebar-campaignCard__newPrice">￥16,000</p>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="p-sidebar-campaign__btn">
                    <div class="c-btn" ontouchstart="">
                      <a href="archive-campaign.html" class="c-btn__link"> View more<span></span>
                      </a>
                      <div class="c-btn__overlay"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-sidebar__archive">
                <div class="p-sidebar-archive">
                  <div class="p-sidebar-archive__title">
                    <h3 class="c-sidebar-title">アーカイブ</h3>
                  </div>
                  <ul class="p-sidebar-archive__lists">
                    <li class="p-sidebar-archive__lists__item">
                      <div class="p-sidebar-archiveList">
                        <p class="p-sidebar-archiveList__year js-archive">2023</p>
                        <div class="p-sidebar-archiveList__months js-archive-lists">
                          <a href="" class="p-sidebar-archiveList__month">3月</a>
                          <a href="" class="p-sidebar-archiveList__month">2月</a>
                          <a href="" class="p-sidebar-archiveList__month">1月</a>
                        </div>
                      </div>
                    </li>
                    <li class="p-sidebar-archive__lists__item">
                      <div class="p-sidebar-archiveList">
                        <p class="p-sidebar-archiveList__year js-archive">2022</p>
                        <div class="p-sidebar-archiveList__months js-archive-lists">
                          <a href="" class="p-sidebar-archiveList__month">12月</a>
                          <a href="" class="p-sidebar-archiveList__month">11月</a>
                          <a href="" class="p-sidebar-archiveList__month">10月</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <div class="l-lower-bottom">
      <section class="p-contact-section">
        <div class="p-contact-section__inner l-inner">
          <div class="p-contact-section__container">
            <div class="p-contact-section__head">
              <div class="p-contact-section__logo">
                <div class="c-logo c-logo--green"></div>
              </div>
              <div class="p-contact-section__access">
                <div class="p-contact-section__address">
                  <p class="p-contact-section__addressText">沖縄県那覇市1-1</p>
                  <p class="p-contact-section__addressText">TEL:0120-000-0000</p>
                  <p class="p-contact-section__addressText">営業時間:8:30-19:00</p>
                  <p class="p-contact-section__addressText">定休日:毎週火曜日</p>
                </div>
                <div class="p-contact-section__map">
                  <div class="iframe-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9115.569389246235!2d127.67438112885138!3d26.214049447648904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569900ff36f09%3A0x583dec31994d039e!2z5rOi44Gu5LiK44OT44O844OB!5e0!3m2!1sja!2sjp!4v1687379223556!5m2!1sja!2sjp" width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-contact-section__body">
              <div class="p-contact-section__title">
                <div class="c-title c-title--large">
                  <h2 class="c-title__en">contact</h2>
                  <p class="c-title__ja">お問い合わせ</p>
                </div>
              </div>
              <p class="p-contact-section__contactText">ご予約・お問い合わせはコチラ</p>
              <div class="p-contact-section__btn">
                <div class="c-btn" ontouchstart="">
                  <a href="page-contact.html" class="c-btn__link"> Contact us<span></span>
                  </a>
                  <div class="c-btn__overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-contact-section__fish">
            <div class="c-img-fish"></div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <div class="l-footer">
    <footer class="p-footer">
      <div class="p-footer__inner l-inner">
        <div class="p-footer__head">
          <a href="index.html" class="p-footer__logo">
            <div class="c-logo c-logo--large"></div>
          </a>
          <div class="p-footer__sns">
            <img src="./assets/images/common/icon-facebook.png" alt="フェイスブック">
            <img src="./assets/images/common/icon-instaglam.png" alt="インスタグラム">
          </div>
        </div>
        <div class="p-footer__contents">
          <div class="p-contents p-contents--footer">
            <nav class="p-contents__container">
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="archive-campaign.html" class="p-contents__title p-contents__title--white"> キャンペーン </a>
                  <div class="p-contents__lists">
                    <a href="" class="p-contents__list">ライセンス取得</a>
                    <a href="" class="p-contents__list">貸切体験ダイビング</a>
                    <a href="" class="p-contents__list">ナイトダイビング</a>
                  </div>
                </li>
                <li class="p-contents__item">
                  <a href="page-about.html" class="p-contents__title p-contents__title--white"> 私たちについて </a>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="page-diving-info.html" class="p-contents__title p-contents__title--white"> ダイビング情報 </a>
                  <div class="p-contents__lists">
                    <a href="" class="p-contents__list">ライセンス講習</a>
                    <a href="" class="p-contents__list">体験ダイビング</a>
                    <a href="" class="p-contents__list">ファンダイビング</a>
                  </div>
                </li>
                <li class="p-contents__item">
                  <a href="home.html" class="p-contents__title p-contents__title--white"> ブログ </a>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="archive-voices.html" class="p-contents__title p-contents__title--white"> お客様の声 </a>
                </li>
                <li class="p-contents__item">
                  <a href="page-price.html" class="p-contents__title p-contents__title--white"> 料金一覧 </a>
                  <div class="p-contents__lists">
                    <a href="" class="p-contents__list">ライセンス講習</a>
                    <a href="" class="p-contents__list">体験ダイビング</a>
                    <a href="" class="p-contents__list">ファンダイビング</a>
                  </div>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="page-faq.html" class="p-contents__title p-contents__title--white"> よくある質問 </a>
                </li>
                <li class="p-contents__item">
                  <a href="page-privacy-policy.html" class="p-contents__title p-contents__title--white"> プライバシー<br class="u-mobile">ポリシー </a>
                </li>
                <li class="p-contents__item">
                  <a href="page-terms.html" class="p-contents__title p-contents__title--white"> 利用規約 </a>
                </li>
                <li class="p-contents__item">
                  <a href="page-contact.html" class="p-contents__title p-contents__title--white"> お問い合わせ </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="p-footer__copy">
          <small class="p-footer__copyright">copyright&ensp;&copy;&ensp;2021&ensp;-&ensp;2023&ensp;code<span>u</span>ps&ensp;<span>llc.&ensp;</span>all&ensp;rights&ensp;reserved.</small>
        </div>
      </div>
    </footer>
  </div>
  <div class="c-page-top-btn js-page-top" ontouchstart=""></div>
</body>
</html>
<?php get_footer(); ?>