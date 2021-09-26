$(window).scroll(function () {
  if ($(this).scrollTop() > 200) {
    $(".scrolltop:hidden").stop(true, true).fadeIn();
  } else {
    $(".scrolltop").stop(true, true).fadeOut();
  }
});

// $(function () {
//   $(".scrollHome").click(function () {
//     $("html,body").animate({ scrollTop: $(".thetop").offset().top }, "1000");
//     return false;
//   });
// });
