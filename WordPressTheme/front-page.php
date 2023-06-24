<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta情報 -->
  <title>diving_shop</title>
  <meta name="description" content="ダイビングショップのディスクリプション">
  <meta property="og:site_name" content="diving_shop">
  <meta property="og:url" content="https://aaa.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="diving_shop">
  <meta property="og:description" content="ダイビングショップのディスクリプション">
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
            <h1 class="c-logo">CodeUps</h1>
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
      <!-- <div class="p-top-screen__first-view">
        <div class="p-first-view">
  <div class="p-first-view__container">
    <div class="p-first-view__title">
<div class="c-view-title">
    <h2 class="c-view-title__main">diving</h2>
    <p class="c-view-title__sub">into&nbsp;the&nbsp;ocean</p>
</div>
    </div>
    <div class="p-first-view__btn">
    <div class="c-btn" ontouchstart="">
        <a href="index.html" class="c-btn__link">
            View more<span></span>
        </a>
     <div class="c-btn__overlay"></div>
    </div>
    </div>
  </div>
</div>
    </div> -->
      <div class="p-top-screen__main-view">
        <div class="p-main-view">
          <div class="p-main-view__inner">
            <div class="p-main-view__slider swiper js-main-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slide-img">
                    <picture>
                      <source srcset="
                ./assets/images/common/main-view_1.jpg" media="(min-width:1024px)">
                      <img src="
                ./assets/images/common/main-view-sp_1.jpg" alt="美しい海の中を泳ぐウミガメ">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-img">
                    <picture>
                      <source srcset="
                ./assets/images/common/main-view_2.jpg" media="(min-width:1024px)">
                      <img src="
                ./assets/images/common/main-view-sp_2.jpg" alt="海を泳ぐウミガメと二人のダイバーを下から見ている">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-img">
                    <picture>
                      <source srcset="
                ./assets/images/common/main-view_3.jpg" media="(min-width:1024px)">
                      <img src="
                ./assets/images/common/main-view-sp_3.jpg" alt="海に浮かぶ船３艘と島">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-img">
                    <picture>
                      <source srcset="
                ./assets/images/common/main-view_4.jpg" media="(min-width:1024px)">
                      <img src="
                ./assets/images/common/main-view-sp_4.jpg" alt="砂浜とコバルトブルーの海">
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
          <div class="p-campaign-section__wrapper">
            <div class="p-campaign-section__swiper js-campaign-swiper">
              <div class="swiper-wrapper">
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_1.jpg" alt="赤、青、黄等の小さな魚が海の中を泳いでいる">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">ライセンス講習</p>
                      <p class="p-campaign-card__title">ライセンス取得</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥56,000</p>
                        <p class="p-campaign-card__newPrice">￥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_2.jpg" alt="海岸を出発し島に向かう二艘の船">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">体験ダイビング</p>
                      <p class="p-campaign-card__title">貸切体験ダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥24,000</p>
                        <p class="p-campaign-card__newPrice">￥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_3.jpg" alt="暗い水の中で光を放つクラゲ群">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">体験ダイビング</p>
                      <p class="p-campaign-card__title">ナイトダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥10,000</p>
                        <p class="p-campaign-card__newPrice">￥8,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_4.jpg" alt="水上に顔を出し会話する4人のダイバー">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">ファンダイビング</p>
                      <p class="p-campaign-card__title">貸切ファンダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥20,000</p>
                        <p class="p-campaign-card__newPrice">￥16,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_1.jpg" alt="赤、青、黄等の小さな魚が海の中を泳いでいる">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">ライセンス講習</p>
                      <p class="p-campaign-card__title">ライセンス取得</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥56,000</p>
                        <p class="p-campaign-card__newPrice">￥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_2.jpg" alt="海岸を出発し島に向かう二艘の船">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">体験ダイビング</p>
                      <p class="p-campaign-card__title">貸切体験ダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥24,000</p>
                        <p class="p-campaign-card__newPrice">￥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_3.jpg" alt="暗い水の中で光を放つクラゲ群">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">体験ダイビング</p>
                      <p class="p-campaign-card__title">ナイトダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥10,000</p>
                        <p class="p-campaign-card__newPrice">￥8,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-campaign-section__item  swiper-slide">
                  <div class="p-campaign-card">
                    <div class="p-campaign-card__img">
                      <img src="./assets/images/common/campaign-card_4.jpg" alt="水上に顔を出し会話する4人のダイバ-">
                    </div>
                    <div class="p-campaign-card__head">
                      <p class="p-campaign-card__tag">ファンダイビング</p>
                      <p class="p-campaign-card__title">貸切ファンダイビング</p>
                      <span class="p-campaign-card__border"></span>
                    </div>
                    <div class="p-campaign-card__body">
                      <p class="p-campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="p-campaign-card__price">
                        <p class="p-campaign-card__originalPrice">￥20,000</p>
                        <p class="p-campaign-card__newPrice">￥16,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class="p-campaign-section__btn">
            <div class="c-btn" ontouchstart="">
              <a href="archive-campaign.html" class="c-btn__link"> View more<span></span>
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
                <img src="./assets/images/common/aboutus-all.jpg" alt="左側に青空の下のシーサーの写真、その画像に少し重なり、青い海を泳ぐ２匹の黄色い魚の写真が並ぶ">
              </div>
              <div class="p-aboutus__cont">
                <h2 class="p-aboutus__left"> dive&nbsp;<span>into&nbsp;<br>the&nbsp;</span>ocean </h2>
                <div class="p-aboutus__right">
                  <p class="p-aboutus__text"> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト </p>
                  <div class="p-aboutus__btn">
                    <div class="c-btn" ontouchstart="">
                      <a href="page-about.html" class="c-btn__link"> View more<span></span>
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
                <img src="./assets/images/common/information.jpg" alt="">
              </div>
              <div class="p-information-section__contentBox">
                <h3 class="p-information-section__subTitle">ライセンス講習</h3>
                <p class="p-information-section__text"> 当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br> 正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
                <div class="p-information-section__btn">
                  <div class="c-btn" ontouchstart="">
                    <a href="page-diving-info.html" class="c-btn__link"> View more<span></span>
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
                      <p class="p-blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
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
              </ul>
              <div class="p-blog-section__btn">
                <div class="c-btn" ontouchstart="">
                  <a href="home.html" class="c-btn__link"> View more<span></span>
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
            <div class="p-lower-voiceCard">
              <div class="p-lower-voiceCard__inner">
                <div class="p-lower-voiceCard__head">
                  <div class="p-lower-voiceCard__info">
                    <div class="p-lower-voiceCard__meta">
                      <p class="p-lower-voiceCard__age">20代(女性)</p>
                      <p class="p-lower-voiceCard__tag">ライセンス講習</p>
                    </div>
                    <h3 class="p-lower-voiceCard__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                  <div class="p-lower-voiceCard__img">
                    <img src="./assets/images/common/voice_1.jpg" alt="麦わら帽子をかぶり微笑む20代女性">
                  </div>
                </div>
                <div class="p-lower-voiceCard__body">
                  <p class="p-lower-voiceCard__text"> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。 </p>
                </div>
              </div>
            </div>
            <div class="p-lower-voiceCard">
              <div class="p-lower-voiceCard__inner">
                <div class="p-lower-voiceCard__head">
                  <div class="p-lower-voiceCard__info">
                    <div class="p-lower-voiceCard__meta">
                      <p class="p-lower-voiceCard__age">30代(男性)</p>
                      <p class="p-lower-voiceCard__tag">ファンダイビング</p>
                    </div>
                    <h3 class="p-lower-voiceCard__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                  <div class="p-lower-voiceCard__img">
                    <img src="./assets/images/common/voice_2.jpg" alt="笑顔でポーズをとる紺色の服を着た30代男性">
                  </div>
                </div>
                <div class="p-lower-voiceCard__body">
                  <p class="p-lower-voiceCard__text"> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。 </p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-voice-section__btn">
            <div class="c-btn" ontouchstart="">
              <a href="archive-voices.html" class="c-btn__link"> View more<span></span>
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
                <source srcset="
                    ./assets/images/common/price-section.jpg" media="(min-width:768px)">
                <img src="./assets/images/common/price-section-sp.jpg" alt="ウミガメが海の中を泳いでいる">
              </picture>
            </div>
          </div>
          <div class="p-price-section__btn">
            <div class="c-btn" ontouchstart="">
              <a href="page-price.html" class="c-btn__link"> View more<span></span>
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
    <div class="l-section">
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