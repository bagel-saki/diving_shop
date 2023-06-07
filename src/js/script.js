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
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });

  //ファーストビュー
  $(window).on("load", function () {
    if ($(".p-main-view").length > 0) {
    $("html").toggleClass("is-fixed");
  } else {}
    $(".p-loading")
      .delay(2000)
      .queue(function (next) {
        $("body").addClass("appear");
        $(this).dequeue();
        next();
      });
    $(".p-loading__title").delay(1000).fadeIn();

    $(".p-loading__rightImage").on("animationend", function () {
      $(".p-loading__leftImage").delay(2000).fadeOut();
      $(".p-loading__rightImage").delay(2000).fadeOut();
      $("body").addClass("fadeout");
      // $(".p-first-view").fadeIn();
      // $(".p-header").addClass("p-header--bgc");
      setTimeout(function () {
        $(".p-loading__splash").delay(3000).fadeOut();
      }, 3000);
    $("html").removeClass("is-fixed");
    });
    // $(".p-first-view").click(function () {
    //   $(this).toggle();
    //   $(".p-header").removeClass("p-header--bgc");
    // });

  //サイドバーアーカイブ
  $(".js-archive-lists:first").css("display", "block");
  $(".js-archive:first").addClass("is-open");
  $(".js-archive").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
});

    ////// コンタクトフォームのバリデーション/////////
  $("form").submit(function (event) {
    // フォームの送信を停止
    event.preventDefault();

    // エラーの初期化
    $("p.error").remove();
    $("dl dd").removeClass("error");
    $(".required").removeClass("error");
    // $(".p-contact-form__input").removeClass("error");

    var hasError = false;
    var $errorMessageContainer = $("<div class='error-message-container'></div>");

    $(":text, textarea, input[type='email'], input[type='tel'], select").filter(".validate").each(function () {
      // 必須項目のチェック
      var $input = $(this);
      // var $inputContainer = $input.closest(".p-contact-form__input");
      var $inputContainer = $input.closest(".required");
      if ($input.hasClass("required") && $input.val().trim() === "") {
        // $inputContainer.addClass("error");
        $input.addClass("error");
        $errorMessageContainer.append("<p class='error'>※必須項目が入力されていません。入力してください。</p>");
        hasError = true;
      } else {
        // $inputContainer.removeClass("error");
        $input.removeClass("error");
      }


    });

    // ラジオボタンのチェック
    $(":radio").filter(".validate").each(function () {
      var $radioGroup = $(this).closest(".p-contact-form__input--radio");
      if ($radioGroup.find(":radio:checked").length === 0) {
        $radioGroup.addClass("error");
        $errorMessageContainer.append("<p class='error'>選択してください</p>");
        hasError = true;
      } else {
        $radioGroup.removeClass("error");
      }
    });

    // チェックボックスのチェック
    $(".checkboxRequired").each(function () {
      if ($(this).find(":checkbox:checked").length === 0) {
        $(this).addClass("error");
        $errorMessageContainer.append("<p class='error'>※個人情報の取り扱いに関するチェックを入れてください。</p>");
        hasError = true;
      } else {
        $(this).removeClass("error");
      }
    });


    // エラーの際の処。
    if (hasError) {
      $("html,body").animate(
        { scrollTop: $("form").offset().top - 40 },
        "slow"
      );
      $("form").prepend($errorMessageContainer);
      return false;
    }

    // バリデーションが成功した場合は、フォームの送信処理を実行する
    this.submit();
  });

  // 入力内容が変更された際にエラースタイルを解除する
  $(".p-contact-form__input :input").on("input change", function () {
    var $inputContainer = $(this).closest(".required");
    if ($inputContainer.hasClass("error")) {
      $inputContainer.removeClass("error");
      $inputContainer.find(".error").remove();
    }
  });



});