<?php get_header(); ?>

  <main>
    <div class="p-lower-mv p-lower-mv--information">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">information</h1>
      </div>
    </div>
    <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
    </div>
    <div class="l-lower-head">
      <section class="p-lower-informationContents">
        <div class="p-lower-informationContents__inner l-inner">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information1.jpg" alt="美しい海に浮かぶ5人のダイバー">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information2.jpg" alt="青い海の中を泳ぐ美しい大量の魚">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information3.jpg" alt="青い海の中を泳ぐ2匹のチョウチョウウオ">
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
<?php get_footer(); ?>