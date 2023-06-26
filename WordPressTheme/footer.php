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
<?php if (!is_page('contact') && !is_page('thanks') && !is_404()) : ?>
    <?php if (is_front_page()) : ?>
      <div class="l-section">
      <?php elseif (is_page('page-sitemap')) : ?>
      <div class="l-sitemap-bottom">
      <?php else : ?>
      <div class="l-lower-bottom">
    <?php endif; ?>
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
                  <a href="<?php echo $contact; ?>" class="c-btn__link"> Contact us<span></span>
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
<?php endif; ?>
</main>
<?php if (is_404()) : ?>
  <div class="l-footer-404">
  <?php else : ?>  
  <div class="l-footer">
<?php endif; ?> 
    <footer class="p-footer">
      <div class="p-footer__inner l-inner">
        <div class="p-footer__head">
          <a href="index.html" class="p-footer__logo">
            <div class="c-logo c-logo--large"></div>
          </a>
          <div class="p-footer__sns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-facebook.png" alt="フェイスブック">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-instaglam.png" alt="インスタグラム">
          </div>
        </div>
        <div class="p-footer__contents">
          <div class="p-contents p-contents--footer">
            <nav class="p-contents__container">
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="<?php echo $campaign; ?>" class="p-contents__title p-contents__title--white"> キャンペーン </a>
                  <div class="p-contents__lists">
                    <a href="<?php echo $campaign; ?>" class="p-contents__list">ライセンス取得</a>
                    <a href="<?php echo $campaign; ?>" class="p-contents__list">貸切体験ダイビング</a>
                    <a href="<?php echo $campaign; ?>" class="p-contents__list">ナイトダイビング</a>
                  </div>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $about; ?>" class="p-contents__title p-contents__title--white"> 私たちについて </a>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="<?php echo $diving; ?>" class="p-contents__title p-contents__title--white"> ダイビング情報 </a>
                  <div class="p-contents__lists">
                    <a href="<?php echo $diving; ?>" class="p-contents__list">ライセンス講習</a>
                    <a href="<?php echo $diving; ?>" class="p-contents__list">体験ダイビング</a>
                    <a href="<?php echo $diving; ?>" class="p-contents__list">ファンダイビング</a>
                  </div>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $blog; ?>" class="p-contents__title p-contents__title--white"> ブログ </a>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="<?php echo $voices; ?>" class="p-contents__title p-contents__title--white"> お客様の声 </a>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $price; ?>" class="p-contents__title p-contents__title--white"> 料金一覧 </a>
                  <div class="p-contents__lists">
                    <a href="<?php echo $price; ?>" class="p-contents__list">ライセンス講習</a>
                    <a href="<?php echo $price; ?>" class="p-contents__list">体験ダイビング</a>
                    <a href="<?php echo $price; ?>" class="p-contents__list">ファンダイビング</a>
                  </div>
                </li>
              </ul>
              <ul class="p-contents__items">
                <li class="p-contents__item">
                  <a href="<?php echo $faq; ?>" class="p-contents__title p-contents__title--white"> よくある質問 </a>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $privacy; ?>" class="p-contents__title p-contents__title--white"> プライバシー<br class="u-mobile">ポリシー </a>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $terms; ?>" class="p-contents__title p-contents__title--white"> 利用規約 </a>
                </li>
                <li class="p-contents__item">
                  <a href="<?php echo $contact; ?>" class="p-contents__title p-contents__title--white"> お問い合わせ </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="p-footer__copy">
          <small class="p-footer__copyright">copyright&ensp;&copy;&ensp;2021&ensp;-&ensp;2023&ensp;code<span>u</span>ps&ensp;<span>llc.&ensp;</span>all&ensp;rights&ensp;reserved.</small>
        </div>
      </div>
      <div class="c-page-top-btn js-page-top" ontouchstart=""></div>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>