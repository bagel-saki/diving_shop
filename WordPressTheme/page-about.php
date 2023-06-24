<?php get_header(); ?>

  <main>
    <div class="p-lower-mv p-lower-mv--aboutus">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">about us</h1>
      </div>
    </div>
    <div class="l-inner">
      <nav class="breadcrumb">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="index.html">top</a><span>&gt;</span></li>
          <li class="breadcrumb-item active">私たちについて</li>
        </ul>
      </nav>
    </div>
    <div class="l-lower-head">
      <section class="p-lower-aboutusIntro">
        <div class="p-lower-aboutusIntro__inner l-inner">
          <div class="p-lower-aboutusIntro__fish">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
          <div class="p-lower-aboutusIntro__main">
            <div class="p-aboutus p-aboutus--lower">
              <div class="p-aboutus__images">
                <picture>
                  <source srcset="./assets/images/common/aboutus-all.jpg" media="(min-width:768px)" alt="青空の下、赤い屋根の上に佇むシーサー像の写真">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/aboutus2.jpg" alt="青い海の中を泳ぐ２匹の黄色い魚の写真">
                </picture>
              </div>
              <div class="p-aboutus__cont">
                <h2 class="p-aboutus__left"> dive&nbsp;<span>into&nbsp;<br>the&nbsp;</span>ocean </h2>
                <div class="p-aboutus__right">
                  <p class="p-aboutus__text"> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="l-lower-center">
      <section class="p-lower-aboutusGallery">
        <div class="p-lower-aboutusGallery_inner l-inner">
          <div class="p-lower-aboutusGallery__title">
            <div class="c-title">
              <h2 class="c-title__en">gallery</h2>
              <p class="c-title__ja">フォト</p>
            </div>
          </div>
          <div class="p-lower-aboutusGallery__gallery">
            <div class="p-lower-gallery">
              <ul class="p-lower-gallery__top">
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_1.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_2.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_3.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
              </ul>
              <ul class="p-lower-gallery__bottoms">
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>
      ./assets/images/common/gallery_4.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>
      ./assets/images/common/gallery_5.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>
      ./assets/images/common/gallery_6.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
              </ul>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_1.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_2.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_3.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_4.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_5.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/common/gallery_6.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="p-lower-aboutusGallery__fish u-desktop">
            <div class="c-img-fish"></div>
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

<?php get_footer(); ?>