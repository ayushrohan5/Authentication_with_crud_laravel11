$(function () {
  "use strict";
  $(function () {
    $(".preloader").fadeOut();
  });

  $(".scroll-link").on("click", function (event) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top - 90,
        },
        1000
      );
    event.preventDefault();
  });
});
