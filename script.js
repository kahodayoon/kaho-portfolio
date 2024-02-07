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
        //スクロールで画面上部に戻った際に要素を非表示にしたい場合は、下記の行のコメントを外し有効にしてください。
        //$(this).removeClass("js-fadein");
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

  // //スムーススクロール
  // $('a[href^="#"]').click(function () {
  //   let speed = 500;
  //   let type = "swing";
  //   let href = $(this).attr("href");
  //   let target = $(href == "#index" ? "html" : href);
  //   let position = target.offset().top;
  //   $("body,html").animate({ scrollTop: position }, speed, type);
  //   return false;
  // });

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
    // $("#js-pagetop").click(function () {
    //   $("html, body").animate(
    //     {
    //       scrollTop: 0,
    //     },
    //     300    
    //     );
    // });
    $(window).scroll(function () {
      if ($(window).scrollTop() > 1) {
        $(".c-pagetop").fadeIn(300).css("display", "flex");
      } else {
        $(".c-pagetop").fadeOut(300);
      }
    });
  });

  //もっとみるのボタン
  $(function() {  
    $('.btn-0')
      .on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top:relY, left:relX})
      })
      .on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top:relY, left:relX})
      });
  });

})(jQuery);