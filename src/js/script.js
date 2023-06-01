
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる


    var topBtn = $('.js-page-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //キャンペーンカテゴリーのactive付与
  $('.js-campaign-category').on('click', function() {
    $('.js-campaign-category').removeClass('c-campaign-category--active');
    $(this).addClass('c-campaign-category--active');
  });

    // ハンバーガーメニュー
   //ドロワーメニュー
  $(".js-hamburger,.js-drawer").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-background-color");
    $(".js-drawer").fadeToggle();
    $("html").toggleClass("is-fixed");
  });

  //ダイビング情報タブのactive付与
  $('.js-information-tab').on('click', function () {
    $('.js-information-tab').removeClass('c-information-tab--active');
    $(this).addClass('c-information-tab--active');
  });

  //アコーディオン
  $(".js-accordion__item:first-child .js-accordion__content").css("display","block");
  $(".js-accordion__item:first-child .js-accordion__question").addClass("is-open");
  $(".js-accordion__question").on("click", function() {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

  $(".js-accordion__item:first-child .js-accordion__content").css(
    "display",
    "block"
  );
  $(".js-accordion__item:first-child .js-accordion__title").addClass(
    "is-open"
  );
  $(".js-accordion__title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

  var modal = $(".js-modal");

  // モーダル
  // クリックしたらモーダルを表示する
  

  $(".js-modal-open").on("click", function () {
    var imagePath = $(this).find("img").attr("src");
    var modalImagePath = imagePath.replace("/common/gallery_", "/common/gallery_");
    $(".p-gallery-modal__content img").attr("src", modalImagePath);
    $(".p-gallery-modal").addClass("is-open");
    $("html").toggleClass("is-fixed");
    setTimeout(function () {
        $(this).find(".p-lower-gallery__topItem, .p-lower-gallery__bottomItem").addClass("is-open"); // フェードインのクラスを追加
    }, 300);
  });

  // 閉じるボタンをクリックしたらモーダルを閉じる
  $(".js-modal").on("click", function () {
    modal.removeClass("is-open");
    $("html").removeClass("is-fixed");
  });

});