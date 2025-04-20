"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  //ローディングアニメーション　
  function loading() {
    setTimeout(function () {
      $(".js-loading").addClass("is-hide");
      setTimeout(function () {
        $(".js-loading").remove();
      }, 800);
    }, 2000);
  }
  $(document).ready(loading);
  $(window).on("load", loading);
  //
  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      $(".js-drawer").fadeToggle();
    });

    // ドロワーナビのaタグをクリックで閉じる
    $(".js-drawer a[href]").on("click", function () {
      $(".js-hamburger").removeClass("is-open");
      $(".js-drawer").fadeOut();
    });

    // resizeイベント
    $(window).on('resize', function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-hamburger").removeClass("is-open");
        $(".js-drawer").fadeOut();
      }
    });
  });
  //
  // ヘッダーのアコーディオン
  $('.js-drawer-accordion').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
  });
  //
  //  //メインビューのスワイパー
  var swipeOption = {
    loop: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    speed: 1000,
    allowTouchMove: false
  };
  // フォント読み込み完了後にSwiperを初期化
  document.fonts.ready.then(function () {
    new Swiper(".js-fv-swiper", swipeOption);
  });
  //
});