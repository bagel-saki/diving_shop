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
    $("html").toggleClass("is-fixed");
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
    $("html").toggleClass("is-fixed");
    setTimeout(function () {
      $(this)
        .find(".p-lower-gallery__topItem, .p-lower-gallery__bottomItem")
        .addClass("is-open"); // フェードインのクラスを追加
    }, 300);
  });

  // 閉じるボタンをクリックしたらモーダルを閉じる
  $(".js-modal").on("click", function () {
    modal.removeClass("is-open");
    $("html").removeClass("is-fixed");
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

  //ファーストビュー
  $(document).ready(function() {
    if ($(".p-main-view").length > 0) {
      $("html").toggleClass("is-fixed");
    }
  
    $(".p-loading")
      .delay(2000)
      .queue(function(next) {
        $("body").addClass("appear");
        $(this).dequeue();
        next();
      });
  
    $(".p-loading__title").delay(1000).fadeIn();
  
    $(".p-loading__rightImage").on("animationend", function() {
      $(".p-loading__leftImage").delay(2000).fadeOut();
      $(".p-loading__rightImage").delay(2000).fadeOut();
      $("body").addClass("fadeout");
      setTimeout(function() {
        $(".p-loading__splash").delay(3000).fadeOut();
      }, 3000);
      $("html").removeClass("is-fixed");
    });
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