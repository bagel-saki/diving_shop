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
  var footerHeight = $("footer").innerHeight();
  $(window).on("scroll", function () {
    var windowHeight = $(window).height();
    var scrollPosition = $(window).scrollTop();
    var scrollHeight = $(document).height() - footerHeight;
    if (scrollHeight - scrollPosition <= windowHeight) {
      $(".js-page-top").css({
        position: "absolute",
        bottom: footerHeight + 20,
      });
    } else {
      if ($(window).width() <= 768) {
        $(".js-page-top").css({
          position: "fixed",
          bottom: "16px",
        });
      } else {
        $(".js-page-top").css({
          position: "fixed",
          bottom: "20px",
        });
      }
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
  // モーダルを開く
  $(".js-modal-open").on("click", function () {
    var imagePath = $(this).find("img").attr("src");
    var modalImagePath = imagePath.replace("/common/gallery_", "/common/gallery_");
    $(".p-gallery-modal__content img").attr("src", modalImagePath);
    $(".p-gallery-modal").addClass("is-open");
    $("html").addClass("modal-open");
  });

  // モーダルを閉じる
  $(".js-modal-close, .p-gallery-modal").on("click", closeModal);

  function closeModal() {
    modal.removeClass("is-open");
    $("html").removeClass("modal-open");
  }

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

 // JavaScript部分 (script.js)
// ページを読み込んだ初回のみオープニングアニメーションを表示する方法
function runOpeningAnimation() {
  const $loading = $(".p-loading");
  const $splash = $(".p-loading__splash");
  const $leftImage = $(".p-loading__leftImage");
  const $rightImage = $(".p-loading__rightImage");
  const $title = $(".p-loading__title");

  // sessionStorageを利用して初回表示かどうかを判定
  const isFirstVisit = sessionStorage.getItem("isFirstVisit");
  if (!isFirstVisit) {
    // 初回の場合はsessionStorageにフラグを設定してオープニングアニメーションを実行
    sessionStorage.setItem("isFirstVisit", "true");
    $("html, body").css("overflow", "hidden");
    $loading.delay(1000).queue(function (next) {
      $title.delay(1000).fadeIn(function () {
        $splash.delay(2000).addClass("appear");
      });
      next();
    });

    $(document).on("animationend", ".p-loading__rightImage", function () {
      $leftImage.delay(2000).fadeOut();
      $rightImage.delay(2000).fadeOut();
      $loading.addClass("fadeout");
      $splash.delay(1000).fadeOut();
    });

    setTimeout(function () {
      $("html, body").css("overflow", "auto");
    }, 6000);
  } else {
    // 初回でない場合はオープニングアニメーションの要素を非表示にする
    $loading.css("display", "none");
    $("html, body").css("overflow", "auto");
  }
}

$(document).ready(function () {
  runOpeningAnimation();
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