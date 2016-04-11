(function($) {

  $(function() {
    var $header = $('#top-header');

    // Nav Fixed
    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        $header.addClass('fixed');
      } else {
        $header.removeClass('fixed');
      }
    });
  });
  // Nav Toggle Button
  $(function() {


    //nav-toggle
    $('#nav-toggle').on("click", function() {
      $('#top-header').toggleClass('open');
      return false;
    });

    // var flg = "default";

    //global-navのアニメーション
    // $('#nav-toggle').on('click', function() {
    //   if (flg == "default") {
    //     $('#global-nav').velocity({
    //       opacity: 1.0,
    //       scale: 1.0
    //     }, {
    //       duration: 500,
    //       delay: 300,
    //       easing: 'ease-in',
    //       display: 'block'
    //     });
    //     flg = "changed";
    //   } else {
    //     $('#global-nav').velocity({
    //       opacity: 0,
    //       scale: 2.0
    //     }, {
    //       delay: 300,
    //       duration: 500,
    //       display: 'none'
    //     });
    //     flg = "default";
    //   }
    //   return false;
    // });
    // //ウィンドウサイズによるNAVの挙動
    // $(window).resize(function() {
    //   if ($(window).width() >= 640) { // ウィンドウサイズが768px以下
    //
    //     $('#global-nav').velocity({
    //       opacity: 1,
    //       scale: 1
    //     }, {
    //       duration: 500,
    //       easing: 'ease-in',
    //       display: 'block'
    //     });
    //   } else {
    //     $('#global-nav').velocity({
    //       opacity: 0,
    //       scale: 2
    //     }, {
    //       duration: 500,
    //       easing: 'ease-out',
    //       display: 'none'
    //     });
    //     return false;
    //   }
    // });

  });

})(jQuery);
