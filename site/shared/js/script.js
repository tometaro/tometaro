$(function(){

  // 検索、メニュー
  $('#searchToggle, #menuToggle').click(function(){
    $(this).parent().toggleClass('open').siblings('.open').removeClass('open');
    $('body').addClass('removeHighlight');
  });
  $('body').click(function(e){
    if( !$(e.target).parents().hasClass('open') ){
      $('.search, .menu').removeClass('open');
      $('body').removeClass('removeHighlight');
    }
  });

  // タブ
  $('#pickup').find('.tab a').click(function(){
    $(this).parent().addClass('current').siblings('.current').removeClass('current');
    var tabTarget = $(this).attr('href');
    $( tabTarget ).addClass('current').siblings('.current').removeClass('current');
    return false;
  });
		
  // アコーディオン
  $('.toggle').find('h2').click(function(){
    $(this).siblings('ul').slideToggle(200, function(){
      $(this).parent().toggleClass('close');
    });
  });


  // 検索バーを隠す
  $(window).load(function(){
		setTimeout(function(){
		window.scrollBy (0,1);
		},100);
});
});