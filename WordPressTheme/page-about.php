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
                  <source srcset="/assets/images/common/aboutus-all.jpg" media="(min-width:768px)" alt="青空の下、赤い屋根の上に佇むシーサー像の写真">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/aboutus2.jpg" alt="青い海の中を泳ぐ２匹の黄色い魚の写真">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_1.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_2.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_3.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
              </ul>
              <ul class="p-lower-gallery__bottoms">
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_4.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_5.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_6.jpg" alt="沖縄の海中や海辺の美しい写真">
                </li>
              </ul>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_1.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_2.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_3.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_4.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_5.jpg" alt="">
              </div>
            </div>
            <div class="p-gallery-modal js-modal">
              <div class="p-gallery-modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_6.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="p-lower-aboutusGallery__fish u-desktop">
            <div class="c-img-fish"></div>
          </div>
        </div>
      </section>
    </div>

  </main>

<?php get_footer(); ?>