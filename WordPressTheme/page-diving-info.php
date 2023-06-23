<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta情報 -->
  <title>diving-info__diving_shop</title>
  <meta name="description" content="ダイビングショップのダイビング情報ページです">
  <meta property="og:site_name" content="diving-info__diving_shop">
  <meta property="og:url" content="https://aaa.com/diving-info/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="diving-info__diving_shop">
  <meta property="og:description" content="ダイビングショップのダイビング情報ページです">
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
    <div class="p-lower-mv p-lower-mv--information">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">information</h1>
      </div>
    </div>
    <div class="l-inner">
      <nav class="breadcrumb">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="index.html">top</a><span>&gt;</span></li>
          <li class="breadcrumb-item active">ダイビング情報</li>
        </ul>
      </nav>
    </div>
    <div class="l-lower-head">
      <section class="p-lower-informationContents">
        <div class="l-inner p-lower-informationContents__inner">
          <div class="p-lower-informationContents__tab">
            <a href="" class="c-information-tab c-information-tab--whale js-information-tab  is-active">
              <span class="u-desktop"></span>ライセンス<br class="u-mobile">講習 </a>
            <a href="" class="c-information-tab c-information-tab--shark js-information-tab ">
              <span class="u-desktop"></span>ファン<br class="u-mobile">ダイビング </a>
            <a href="" class="c-information-tab c-information-tab--fish js-information-tab ">
              <span class="u-desktop"></span>体験<br class="u-mobile">ダイビング </a>
          </div>
          <ul class="p-lower-informationContents__items">
            <li class="p-lower-informationCotents__item">
              <div class="p-information-card  is-active js-information-card">
                <div class="p-information-card__box">
                  <div class="p-information-card__body">
                    <div class="p-information-card__ttlBox">
                      <h3 class="p-information-card__subTitle">ライセンス講習</h3>
                    </div>
                    <p class="p-information-card__text"> 泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！ </p>
                  </div>
                  <div class="p-information-card__img">
                    <img src="./assets/images/common/information1.jpg" alt="美しい海に浮かぶ5人のダイバー">
                  </div>
                </div>
              </div>
            </li>
            <li class="p-lower-informationCotents__item">
              <div class="p-information-card  js-information-card">
                <div class="p-information-card__box">
                  <div class="p-information-card__body">
                    <div class="p-information-card__ttlBox">
                      <h3 class="p-information-card__subTitle">ファンダイビング</h3>
                    </div>
                    <p class="p-information-card__text"> ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！ </p>
                  </div>
                  <div class="p-information-card__img">
                    <img src="./assets/images/common/information2.jpg" alt="青い海の中を泳ぐ美しい大量の魚">
                  </div>
                </div>
              </div>
            </li>
            <li class="p-lower-informationCotents__item">
              <div class="p-information-card  js-information-card">
                <div class="p-information-card__box">
                  <div class="p-information-card__body">
                    <div class="p-information-card__ttlBox">
                      <h3 class="p-information-card__subTitle">体験ダイビング</h3>
                    </div>
                    <p class="p-information-card__text"> ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！ </p>
                  </div>
                  <div class="p-information-card__img">
                    <img src="./assets/images/common/information3.jpg" alt="青い海の中を泳ぐ2匹のチョウチョウウオ">
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="p-lower-informationContents__fish">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
        </div>
      </section>
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