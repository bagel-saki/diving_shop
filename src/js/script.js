jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".js-page-top");
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
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // フッター手前でストップ
  $(".js-page-top").hide();
  $(window).on("scroll", function () {
    var scrollHeight = $(document).height(); // scrollHeightを宣言
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $("footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {

      // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
      $(".js-page-top").css({
        position: "absolute",
        bottom: footHeight + 16,
      });
    } else {
      $(".js-page-top").css({
        position: "fixed",
        bottom: "0",
      });
    }
  });

  //キャンペーンカテゴリーのactive付与
  $(".js-campaign-category").on("click", function () {
    $(".js-campaign-category").removeClass("c-campaign-category--active");
    $(this).addClass("c-campaign-category--active");
  });

  // ハンバーガーメニュー
  //ドロワーメニュー
  $(".js-hamburger,.js-drawer").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-background-color");
    $(".js-drawer").fadeToggle();
    $("body").toggleClass("is-fixed");
  });

  //ダイビング情報コンテンツ切り替え
  $(".js-information-tab").on("click", function () {
    event.preventDefault();
    var index = $(".js-information-tab").index(this);

    $(".js-information-tab").removeClass("is-active");
    $(this).addClass("is-active");

    $(".js-information-card").removeClass("is-active");
    $(".js-information-card").eq(index).addClass("is-active");
  });

  //アコーディオン
  $(".js-accordion-item:first-child .js-accordion-content").css(
    "display",
    "block"
  );
  $(".js-accordion-item:first-child .js-accordion-question").addClass(
    "is-open"
  );
  $(".js-accordion-question").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
  $(".js-accordion-content").on("click", function () {
    $(this).slideToggle(300);
  });

  //キャンペーンカードスワイパー
  var swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    speed: 2000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        spaceBetween: 40,
      },
    },
  });

  var modal = $(".js-modal");
  // モーダル
  // クリックしたらモーダルを表示する
  $(".js-modal-open").on("click", function () {
    var imagePath = $(this).find("img").attr("src");
    var modalImagePath = imagePath.replace(
      "/common/gallery_",
      "/common/gallery_"
    );
    $(".p-gallery-modal__content img").attr("src", modalImagePath);
    $(".p-gallery-modal").addClass("is-open");
    $("body").toggleClass("is-fixed");
    setTimeout(function () {
      $(this)
        .find(".p-lower-gallery__topItem, .p-lower-gallery__bottomItem")
        .addClass("is-open"); // フェードインのクラスを追加
    }, 300);
  });

  // 閉じるボタンをクリックしたらモーダルを閉じる
  $(".js-modal").on("click", function () {
    modal.removeClass("is-open");
    $("body").removeClass("is-fixed");
  });

  //swiper メインビュー
  var swiper1 = new Swiper(".js-main-swiper", {
    loop: true,
    effect: "fade",
    speed: 2000,
    allowTouchMove: false,
    autoplay: {
      delay: 2000,
    },
  });

// スクロールを無効にする
function disableScroll() {
  document.body.classList.add('is-fixed');
}

// スクロールを有効にする
function enableScroll() {
  document.body.classList.remove('is-fixed');
}

$(window).on('load', function () {
  if ($('.p-main-view').length > 0) {
    disableScroll();
  }
});

$('.p-loading').delay(2000).queue(function (next) {
  $('.p-loading__splash').addClass('appear');
  $(this).dequeue();
  next();
});

$('.p-loading__title').delay(1000).fadeIn();

$(document).on('animationend', '.p-loading__rightImage', function () {
  $('.p-loading__leftImage').delay(2000).fadeOut();
  $('.p-loading__rightImage').delay(2000).fadeOut();
  $('.p-loading').addClass('fadeout');
  $('.p-loading__splash').fadeOut();
  enableScroll();
});

  //サイドバーアーカイブ
  $(".js-archive-lists:first").css("display", "block");
  $(".js-archive:first").addClass("is-open");
  $(".js-archive").on("click touchstart", function (event) {
    event.preventDefault(); // デフォルトのクリックイベントをキャンセル
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

  //ページネーションのクリック時の動き
  $(document).ready(function () {
    $(".js-pagination").on("click", function (e) {
      e.preventDefault();
      $(".nav-links .page-numbers.current").removeClass("current");
      $(this).addClass("current");
    });
  });
});
