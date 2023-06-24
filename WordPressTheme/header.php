<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
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
$terms = esc_url(home_url('/page-terms/'));
?>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header js-header">
    <div class="p-header__inner">
      <div class="p-header__container">
        <a class="p-header__link" href="<?php echo $top; ?>">
          <div class="p-header__logo">
            <?php if (is_front_page()) : ?>
              <h1 class="c-logo">CodeUps
            <?php else : ?>
              <div class="c-logo">
            <?php endif; ?>
            <?php if (is_front_page()) : ?>
            </h1>
            <?php else : ?>
            </div>
            <?php endif; ?>
        </a>
        <div class="p-header__pc-nav">
          <nav class="p-pc-nav  u-desktop">
            <ul class="p-pc-nav__items">
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $campaign; ?>">
                  <p class="p-pc-nav__en-title">Campaign</p>
                  <p class="p-pc-nav__ja-title">キャンペーン</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $about; ?>">
                  <p class="p-pc-nav__en-title">About us</p>
                  <p class="p-pc-nav__ja-title">私たちについて</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $diving; ?>">
                  <p class="p-pc-nav__en-title">Information</p>
                  <p class="p-pc-nav__ja-title">ダイビング情報</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $blog; ?>">
                  <p class="p-pc-nav__en-title">Blog</p>
                  <p class="p-pc-nav__ja-title">ブログ</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $voices; ?>">
                  <p class="p-pc-nav__en-title">Voice</p>
                  <p class="p-pc-nav__ja-title">お客様の声</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $price; ?>">
                  <p class="p-pc-nav__en-title">Price</p>
                  <p class="p-pc-nav__ja-title">料金一覧</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $faq; ?>">
                  <p class="p-pc-nav__en-title">FAQ</p>
                  <p class="p-pc-nav__ja-title">よくある質問</p>
                  <span></span>
                </a>
              </li>
              <li class="p-pc-nav__item">
                <a class="p-pc-nav__title" href="<?php echo $contact; ?>">
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
                    <a class="p-drawer__title" href="<?php echo $campaign; ?>">キャンペーン</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="<?php echo $campaign; ?>">ライセンス取得</a>
                      <a class="p-drawer__list" href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
                      <a class="p-drawer__list" href="<?php echo $campaign; ?>">ナイトダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $about; ?>">私たちについて</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $diving; ?>">ダイビング情報</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="<?php echo $diving; ?>">ライセンス講習</a>
                      <a class="p-drawer__list" href="<?php echo $diving; ?>">体験ダイビング</a>
                      <a class="p-drawer__list" href="<?php echo $diving; ?>">ファンダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $blog; ?>">ブログ</a>
                  </li>
                </ul>
                <ul class="p-drawer__rightItems">
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $voices; ?>">お客様の声</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $price; ?>">料金一覧</a>
                    <div class="p-drawer__lists">
                      <a class="p-drawer__list" href="<?php echo $price; ?>">ライセンス講習</a>
                      <a class="p-drawer__list" href="<?php echo $price; ?>">体験ダイビング</a>
                      <a class="p-drawer__list" href="<?php echo $price; ?>">ファンダイビング</a>
                    </div>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $faq; ?>">よくある質問</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $privacy; ?>">プライバシー<br>ポリシー</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $terms; ?>">利用規約</a>
                  </li>
                  <li class="p-drawer__item">
                    <a class="p-drawer__title" href="<?php echo $contact; ?>">お問い合わせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>