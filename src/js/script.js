
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


});
