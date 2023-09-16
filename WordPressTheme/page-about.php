<?php get_header(); ?>

  <main>
    <div class="p-lower-mv p-lower-mv--aboutus">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">about us</h1>
      </div>
    </div>
    <div class="l-inner">
      <?php get_template_part('breadcrumb'); ?>
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
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/aboutus-all.jpg" media="(min-width:768px)" alt="青空の下、赤い屋根の上に佇むシーサー像の写真">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/aboutus2.jpg" alt="青い海の中を泳ぐ２匹の黄色い魚の写真">
                </picture>
              </div>
              <div class="p-aboutus__cont">
                <h2 class="p-aboutus__left"> dive&nbsp;<span>into&nbsp;<br>the&nbsp;</span>ocean </h2>
                <div class="p-aboutus__right">
                  <p class="p-aboutus__text"> 私たちはダイビングの世界を愛し、その魅力を共有することを使命としています。私たちは豊かな海洋生態系を守り、探求心を刺激し、安全な冒険を提供しています。<br>
                                当店は長年にわたり、プロのダイバーと経験豊富なインストラクターによって運営されています。私たちは安全を最優先し、あなたの冒険をサポートします。</p>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_1.jpg" alt="珊瑚の周りを小さな赤い魚">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_2.jpg" alt="海岸を出発し島に向かう二艘の船">
                </li>
                <li class="p-lower-gallery__topItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_3.jpg" alt="海の中を泳ぐ2匹の魚">
                </li>
              </ul>
              <ul class="p-lower-gallery__bottoms">
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_4.jpg" alt="黄色い魚の写真">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_5.jpg" alt="海の中をおよく白い魚の群れ">
                </li>
                <li class="p-lower-gallery__bottomItem js-modal-open">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery_6.jpg" alt="珊瑚の中をおよく魚たち">
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
<?php get_footer(); ?>