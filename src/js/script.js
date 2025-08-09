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

  //ハンバーガーメニュー
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
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-hamburger").removeClass("is-open");
        $(".js-drawer").fadeOut();
      }
    });
  });

  // ヘッダーのアコーディオン
  $(".js-drawer-accordion").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });
  //

  //  ヘッダーのドロワー展開時に背面のスクロールを止める
  var drawer = document.querySelector(".js-drawer");
  var overlay = document.querySelector(".js-overlay");

  function openDrawer() {
    drawer.classList.add("is-open");
    overlay.style.display = "block";
    document.body.style.overflow = "hidden"; // ドロワーが開いている間は本体のスクロールを無効にする
  }

  function closeDrawer() {
    drawer.classList.remove("is-open");
    overlay.style.display = "none";
    document.body.style.overflow = ""; // ドロワーが閉じられたら本体のスクロールを有効にする
  }

  document.querySelector(".js-hamburger").addEventListener("click", function () {
    if (drawer.classList.contains("is-open")) {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  if (overlay) {
    overlay.addEventListener("click", closeDrawer);
  } else {
    console.warn("Overlay element not found.");
  }
  //
  //MVのスワイパー
  const mv_swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });

  /////FAQアコーディオン/////
  // アコーディオンのタイトルがクリックされたときの動き
  // FAQのタイトルがクリックされたら開閉する
  $(".js-faq-accordion-title").on("click", function () {
    var $box = $(this).next(".js-faq-accordion-box");

    // 表示/非表示の切り替え
    $box.slideToggle();

    // 「close」クラスで「＋／−」を切り替える
    $(this).toggleClass("close");
  });

  //フェードインアニメーション
  $(window)
    .on("scroll", function () {
      $(".js-fadeIn").each(function () {
        if ($(this).offset().top < $(window).scrollTop() + $(window).height() * 0.75) {
          $(this).addClass("is-active");
        }
      });
    })
    .trigger("scroll");

  //講座・部活動のクリック時モーダル
  // モーダル処理をjQueryで統一
  $(".js-modal-trigger").on("click", function (e) {
    e.preventDefault();
    const modalId = $(this).data("modal-id");
    const $modal = $("#" + modalId);
    if ($modal.length) {
      $modal.addClass("is-active");
    }
  });

  $(".js-modal-close").on("click", function () {
    $(this).closest(".modal").removeClass("is-active");
  });

  //トップページへ戻るボタン
  const button = document.querySelector(".js-top-button");
  button.addEventListener("click", () => {
    window.scroll({
      top: 0,
      behavior: "smooth",
    });
  });

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      button.classList.add("is-active");
    } else {
      button.classList.remove("is-active");
    }
  });

  //informationのタブ切り替え
  $(document).ready(function () {
    // クエリパラメータから "tab" の値を取得
    var params = new URLSearchParams(window.location.search);
    var defaultTab = "license-link"; // デフォルトタブ（ライセンス講習）のID
    var selectedTab = params.get("tab") || defaultTab; // クエリパラメータがない場合、デフォルトタブを使用

    // すべてのタブとコンテンツを非表示にしてリセット
    $(".js-info-content-tab").removeClass("active");
    $(".js-info-content-card").hide();

    // URLパラメータ、またはデフォルトタブに基づき、該当のタブとコンテンツを表示
    $(".js-info-content-tab[data-id='" + selectedTab + "']").addClass("active");
    $("#" + selectedTab).show();

    // タブクリック時の動作
    $(".js-info-content-tab").click(function () {
      // クリックされたタブのIDを取得
      var tabId = $(this).data("id");

      // すべてのタブとコンテンツを非表示にしてリセット
      $(".js-info-content-tab").removeClass("active");
      $(".js-info-content-card").hide();

      // クリックされたタブをアクティブにし、対応するコンテンツを表示
      $(this).addClass("active");
      $("#" + tabId).show();
    });
  });

  // ======== ページネーション =========
  const $pagination = $(".news__pagination");
  const $items = $pagination.find(".news__pagination__page");
  const $prev = $pagination.find(".news__pagination__prev");
  const $next = $pagination.find(".news__pagination__next");

  function changeActive($target) {
    $items.removeClass("pagination__page--current");
    $target.addClass("pagination__page--current");
  }

  function moveActive(direction) {
    const $current = $items.filter(".news__pagination__page--current");
    const index = $items.index($current);
    const nextIndex = Math.min($items.length - 1, Math.max(0, index + direction));
    $items.removeClass("pagination__page--current");
    $items.eq(nextIndex).addClass("pagination__page--current");
  }

  $items.on("click", function (e) {
    e.preventDefault();
    changeActive($(this));
  });

  $prev.on("click", function (e) {
    e.preventDefault();
    moveActive(-1);
  });

  $next.on("click", function (e) {
    e.preventDefault();
    moveActive(1);
  });
  
});
