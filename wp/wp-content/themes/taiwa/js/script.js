//IE10以下を判別してアラートを出す
var userAgent = window.navigator.userAgent; //閲覧しているブラウザの情報を取得

if(userAgent.indexOf('MSIE') != -1){ //'msie'がブラウザ情報の中に入っているかindexOf()で検索
  alert('お使いのブラウザは閲覧推奨環境ではありません。\nウェブサイトが正しく表示されない、動作しない等の現象が起こる場合がありますので予めご了承ください。'); //アラート表示
}

// ページの先頭へもどる
function backToTop() {
  var x1 = x2 = x3 = 0;
  var y1 = y2 = y3 = 0;
  if (document.documentElement) {
    x1 = document.documentElement.scrollLeft || 0;
    y1 = document.documentElement.scrollTop || 0;
  }
  if (document.body) {
    x2 = document.body.scrollLeft || 0;
    y2 = document.body.scrollTop || 0;
  }
  x3 = window.scrollX || 0;
  y3 = window.scrollY || 0;
  var x = Math.max(x1, Math.max(x2, x3));
  var y = Math.max(y1, Math.max(y2, y3));
  window.scrollTo(Math.floor(x / 2), Math.floor(y / 2));
  if (x > 0 || y > 0) {
    window.setTimeout("backToTop()", 25);
  }
}

//header　下にスクロールするとヘッダーが消えて上にスクロールするとヘッダーが表示
$(function() {
	var headerHeight = $('header').outerHeight(),
		startPos = 0;
	$(window).on('load scroll', function() {
		var scrollPos = $(this).scrollTop();
		if ( scrollPos > startPos && scrollPos > headerHeight ) {
			$('header').css('top', '-' + headerHeight + 'px');
		} else {
			$('header').css('top', '0');
		}
		startPos = scrollPos;
	});
});	
// header submenu
$(function() {
  $(".menu_service").hover(function() {
$('#submenu').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu').removeClass('open');
  });
		
		$("#submenu").hover(function() {
$('#submenu').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu').removeClass('open');
  });
});

// header submenu_c
$(function() {
  $(".menu_company").hover(function() {
$('#submenu_c').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu_c').removeClass('open');
  });
		
		$("#submenu_c").hover(function() {
$('#submenu_c').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu_c').removeClass('open');
  });
});

// header submenu_r
$(function() {
  $(".menu_recruit").hover(function() {
$('#submenu_r').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu_r').removeClass('open');
  });
		
		$("#submenu_r").hover(function() {
$('#submenu_r').addClass('open');
  }, function() {
    // カーソルが離れた時の処理
$('#submenu_r').removeClass('open');
  });
});

/// Pagetop 最初の画面の場合は非表示、スクロールしたら表示
$(function () {
  $(window).on('load scroll', function () {
    //ヘッダーの高さ分(150px)スクロールするとfixedクラスを削除
    if ($(window).scrollTop() > 250) {
      $('#pageup').removeClass('none');
    } else {
      //80px以下だとfixedクラスを追加
      $('#pageup').addClass('none');
    }
  });
});

//移動＋フェードイン表示
$(function () {
  $('main section').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('mv07');
    }
    else {
      $(this).stop().removeClass('mv07');
    }
  });
});



//フェードイン表示
$(function() {
	$('.fadein').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mv_fadein');
		}
		else{
			$(this).stop().removeClass('mv_fadein');
		}
	});
});


//移動＋フェードイン表示
$(function() {
	$('.fadeup').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mv_fadeup');
		}
		else{
			$(this).stop().removeClass('mv_fadeup');
		}
	});
});