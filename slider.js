(function ($) {
    jQuery(".slider").slick({
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      dots: true,
      arrows: true,
      slidesToShow: 3,
      slideToScroll: 1,
      responsive:[{
        breakpoint: 650,
        settings: {
          slidesToShow: 1,
          slideToScroll: 1
        }
      }]
    });

})(jQuery);
