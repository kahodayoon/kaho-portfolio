(function($) {
  // フェードイン処理
  $(window).scroll(function () {
    $(".js-fade").each(function () {
      let winheight = $(window).height();
      let posi = $(this).offset().top;
      let scroll = $(window).scrollTop();
      if (scroll + winheight > posi) {
        $(this).addClass("js-fadein");
      } else {
      }
    });
  });

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
    $(".c-hamburger").removeClass("open");
    $(".p-global-nav").removeClass("open");
    $(".js-home").removeClass("open");
  });


  //CONTACTフォーム
  $(".c-input-text").keyup(function () {
    if ($(this).val()) {
      $(this).addClass("not-empty");
    } else {
      $(this).removeClass("not-empty");
    }
  });
  $(".c-textarea").keyup(function () {
    if ($(this).val()) {
      $(this).addClass("not-empty");
    } else {
      $(this).removeClass("not-empty");
    }
  });

  //ページトップに戻るボタン
  $(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 1) {
        $(".c-pagetop").fadeIn(300).css("display", "flex");
      } else {
        $(".c-pagetop").fadeOut(300);
      }
    });
  });


})(jQuery);