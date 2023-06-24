<?php get_header(); ?>

  <main>
    <div class="p-lower-mv p-lower-mv--contact">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">contact</h1>
      </div>
    </div>
    <div class="l-inner">
      <nav class="breadcrumb">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="index.html">top</a><span>&gt;</span></li>
          <li class="breadcrumb-item active">お問い合わせ</li>
        </ul>
      </nav>
    </div>
    <div class="l-lower-head">
      <div class="p-contact-form">
        <div class="p-contact-form__inner l-inner">
          <form class="p-contact-form__form" action="" method="post" id="form">
            <div class="p-contact-form__errorWrap">
              <p class="p-contact-form__errorMessage">※必須項目が入力されていません。入力してください。</p>
            </div>
            <div class="p-contact-form__items">
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl is-required"> お名前<span>必須</span>
                </dt>
                <dd class="p-contact-form__input">
                  <input class="required" type="text" name="name" value="" placeholder="沖縄&emsp;太郎" />
                </dd>
              </dl>
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl is-required"> メールアドレス<span>必須</span>
                </dt>
                <dd class="p-contact-form__input">
                  <input class="required" type="email" name="email" value="" placeholder="aaa000@ggmail.com" />
                </dd>
              </dl>
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl is-required"> 電話番号<span>必須</span>
                </dt>
                <dd class="p-contact-form__input">
                  <input class="required" type="tel" name="tel" value="" placeholder="000-0000-0000" />
                </dd>
              </dl>
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl is-required"> お問合せ項目<span>必須</span>
                </dt>
                <dd class="p-contact-form__input">
                  <div class="p-contact-form__check">
                    <input class="required" type="checkbox" name="campaign[]" id="checkbox-dive">
                    <label for="checkbox-dive" class="p-contact-form__checkLabel">ダイビング講習について</label>
                  </div>
                  <div class="p-contact-form__check">
                    <input type="checkbox" name="campaign[]" id="checkbox-fan">
                    <label for="checkbox-fan" class="p-contact-form__checkLabel">ファンダイビングについて</label>
                  </div>
                  <div class="p-contact-form__check">
                    <input type="checkbox" name="campaign[]" id="checkbox-ex">
                    <label for="checkbox-ex" class="p-contact-form__checkLabel">体験ダイビングについて</label>
                  </div>
                </dd>
              </dl>
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl"> キャンペーン </dt>
                <dd class="p-contact-form__input">
                  <select name="form-select" class="form-select">
                    <option value="" selected>キャンペーン内容を選択</option>
                    <option value="セレクト1">ダイビング講習</option>
                    <option value="セレクト2">ファンダイビング</option>
                    <option value="セレクト2">体験ダイビング</option>
                  </select>
                </dd>
              </dl>
              <dl class="p-contact-form__item">
                <dt class="p-contact-form__itemTtl is-required"> お問合せ内容<span>必須</span>
                </dt>
                <dd class="p-contact-form__input">
                  <textarea class="is-required" name="contents"></textarea>
                </dd>
              </dl>
            </div>
            <div class="p-contact-form__privacy">
              <input class="p-contact-form__check p-contact-form__check--privacy required" type="checkbox" name="your-checkbox" id="checkbox-privacy">
              <label for="checkbox-privacy" class="p-contact-form__checkLabel p-contact-form__checkLabel--privacy"> 個人情報の取り扱いについて同意のうえ送信します。 </label>
            </div>
            <div class="p-contact-form__btn">
              <div class="c-btn" ontouchstart="">
                <button type='submit' class="c-btn__link c-btn__link--send"> Send<span></span>
                </button>
                <div class="c-btn__overlay"></div>
              </div>
            </div>
          </form>
          <div class="p-contact-form__fish">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>