// $(function () {
//   $('.js-foodmenu-title--sp').click(function () {
//     console.log('クリックされたよ！');
//     $('.js-foodmenu').toggleClass('is-open');
//     $('.js-foodmenu--background').toggleClass('is-open');
//   });
//   $('.js-foodmenu--close').click(function () {
//     $('.js-foodmenu').toggleClass('is-open');
//     $('.js-foodmenu--background').toggleClass('is-open');
//   });
//   $(window).resize(function () {
//     // 画面幅が変更されたときに実行させたい処理内容
//     $('.js-foodmenu').removeClass('is-open');
//     $('.js-foodmenu--background').removeClass('is-open');
//   });
// });

$(function () {
  //ハンバーガーボタン
  $(".c-hamburger").click(function () {
    $(this).toggleClass("open");
    $(".p-global-nav").toggleClass("open");
    $(".js-home").toggleClass("open");
  });
  $(".p-global-nav a").click(function () {
    $(".c-hamburger").toggleClass("open");
    $(".p-global-nav").removeClass("open");
    $(".js-home").removeClass("open");
  });
  $(window).resize(function () {
    // 画面幅が変更されたときに実行させたい処理内容
    $('.c-hamburger').removeClass('open');
    $('.p-global-nav').removeClass('open');
    $('.js-home').removeClass('open');
  });

  //スムーススクロール
  $('a[href^="#"]').click(function () {
    let speed = 500;
    let type = "swing";
    let href = $(this).attr("href");
    let target = $(href == "#index" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, type);
    return false;
  });

  //CONTACTフォーム
  $( '.c-input-text' ).keyup(function() {
    if( $(this).val() ) {
       $(this).addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
  });
  $( '.c-textarea' ).keyup(function() {
    if( $(this).val() ) {
       $(this).addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
  });
});