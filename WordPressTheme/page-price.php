<?php get_header(); ?>

<main>
  <div class="p-lower-mv p-lower-mv--price">
    <div class="p-lower-mv__content">
      <h1 class="p-lower-mv_title">price</h1>
    </div>
  </div>
  <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div class="l-lower-head">
    <div class="p-pagePrice-section">
      <div class="p-pagePrice-section__inner l-inner">
        <div class="p-pagePrice-section__content">
          <div class="p-lower-price">
            <ul class="p-lower-price__items">
              <li class="p-lower-price__item" id="license">
                <div class="p-lower-priceTable">
                  <div class="p-lower-priceTable__line u-mobile">
                    <h2 class="p-lower-priceTable__title">ライセンス講習<span></span>
                    </h2>
                  </div>
                  <div class="p-lower-priceTable__row u-desktop-flex">
                    <div class="p-lower-priceTable__title">ライセンス講習</div>
                    <div class="p-lower-priceTable__icon"></div>
                  </div>
                  <div class="p-lower-priceTable__content">
                    <?php
                    $price = SCF::get('license');
                    foreach ($price as $fields) {
                    ?>
                      <dl class="p-lower-priceTable__list">
                        <dt class="p-lower-priceTable__listLeft"><?php echo $fields['course1']; ?></dt>
                        <dd class="p-lower-priceTable__listRight">
                        ¥<?php
                            $price = str_replace(',', '', $fields['price1']); //カンマを削除
                            $price = intval($price); //整数値に変換
                            echo number_format($price); //書式化して出力
                          ?>
                        </dd>
                      </dl>
                    <?php } ?>
                  </div>
                </div>
              </li>
              <li class="p-lower-price__item" id="license">
                <div class="p-lower-priceTable">
                  <div class="p-lower-priceTable__line u-mobile">
                    <h2 class="p-lower-priceTable__title">体験ダイビング<span></span>
                    </h2>
                  </div>
                  <div class="p-lower-priceTable__row u-desktop-flex">
                    <div class="p-lower-priceTable__title">体験ダイビング</div>
                    <div class="p-lower-priceTable__icon"></div>
                  </div>
                  <div class="p-lower-priceTable__content">
                    <?php
                    $price = SCF::get('diving');
                    foreach ($price as $fields) {
                    ?>
                      <dl class="p-lower-priceTable__list">
                        <dt class="p-lower-priceTable__listLeft"><?php echo $fields['course2']; ?></dt>
                        <dd class="p-lower-priceTable__listRight">
                          ¥<?php
                            $price = str_replace(',', '', $fields['price2']); //カンマを削除
                            $price = intval($price); //整数値に変換
                            echo number_format($price); //書式化して出力
                          ?>
                        </dd>
                      </dl>
                    <?php } ?>
                  </div>
                </div>
              </li>
              <li class="p-lower-price__item" id="license">
                <div class="p-lower-priceTable">
                  <div class="p-lower-priceTable__line u-mobile">
                    <h2 class="p-lower-priceTable__title">ファンダイビング<span></span>
                    </h2>
                  </div>
                  <div class="p-lower-priceTable__row u-desktop-flex">
                    <div class="p-lower-priceTable__title">ファンダイビング</div>
                    <div class="p-lower-priceTable__icon"></div>
                  </div>
                  <div class="p-lower-priceTable__content">
                    <?php
                    $price = SCF::get('fan');
                    foreach ($price as $fields) {
                    ?>
                      <dl class="p-lower-priceTable__list">
                        <dt class="p-lower-priceTable__listLeft"><?php echo $fields['course3']; ?></dt>

                        <dd class="p-lower-priceTable__listRight">
                          ¥<?php
                            $price = str_replace(',', '', $fields['price3']); //カンマを削除
                            $price = intval($price); //整数値に変換
                            echo number_format($price); //書式化して出力
                            ?>
                        </dd>
                      </dl>
                    <?php } ?>
                  </div>
                </div>
              </li>
              <li class="p-lower-price__item" id="license">
                <div class="p-lower-priceTable">
                  <div class="p-lower-priceTable__line u-mobile">
                    <h2 class="p-lower-priceTable__title">スペシャルダイビング<span></span>
                    </h2>
                  </div>
                  <div class="p-lower-priceTable__row u-desktop-flex">
                    <div class="p-lower-priceTable__title">スペシャルダイビング</div>
                    <div class="p-lower-priceTable__icon"></div>
                  </div>
                  <div class="p-lower-priceTable__content">
                    <?php
                    $price = SCF::get('special');
                    foreach ($price as $fields) {
                    ?>
                      <dl class="p-lower-priceTable__list">
                        <dt class="p-lower-priceTable__listLeft"><?php echo $fields['course4']; ?></dt>
                        <dd class="p-lower-priceTable__listRight">
                          ¥<?php
                            $price = str_replace(',', '', $fields['price4']); //カンマを削除
                            $price = intval($price); //整数値に変換
                            echo number_format($price); //書式化して出力
                            ?></dd>
                      </dl>
                    <?php } ?>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-pagePrice-section__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>