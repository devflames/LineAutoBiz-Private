/*******************************************
	SITE:  AutoBiz
	FileName: base.js
	LastUpdate: 2017/02/10
********************************************/

$(document).ready(function(){
	fixgNav();/*Add2017*/
	imgRollover();
	anchorScroll();
	topBack();
  requestDocuments();
	gnavPlus();
	gNavsec();
	headNav();
	setTimeout(fixScroll, 40);
});


/* --------------------------------------------------
Rollover
------------------------------------*/
function imgRollover(){
  $('img.ov').hover(
    function(){
      $(this).attr('src', $(this).attr('src').replace(/(\.)(gif|jpg|png)/i,"_on$1$2"));
    },
    function(){
			$(this).attr('src', $(this).attr('src').replace(/_on(\.)(gif|jpg|png)/i,"$1$2"));
    }
  )
};


/* --------------------------------------------------
anchor
-------------------------------------------------- */
function anchorScroll(){
   $('a[href^=#],area[href^=#]').click(function() {
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;

      // PC表示のときは見出しが見える位置までスクロールする
      // よくある質問のみ 例: href="#qa1_01"
      if ($(".header").is(":visible") && href.indexOf("#qa") == 0) {
         position = position - $(".header").height() - $(href).find(".qBox").eq(0).height();
      }

      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
};


/* --------------------------------------------------
back
-------------------------------------------------- */
function topBack(){
$(".gotop").hide();
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
         $('.gotop').slideDown("fast");
        } else {
            $('.gotop').slideUp("fast");
        }
        scrollHeightTT = $(document).height();
        scrollPositionTT = $(window).height() + $(window).scrollTop();
        footHeightTT = $(".footer").innerHeight();  
        if ( scrollHeightTT - scrollPositionTT  <= footHeightTT) {
            $(".gotop").css({
                "position":"absolute",
                "bottom": footHeightTT + 10
            });
        } else {
            $(".gotop").css({
                "position":"fixed",
                "bottom": "0px"
            });
        }
    });
 
    $('.gotop a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        return false;
     });
};

function requestDocuments(){
  $(".requestDocuments").hide();
      $(window).on("scroll", function() {
          if ($(this).scrollTop() > 100) {
          $('.requestDocuments').slideDown("fast");
          } else {
              $('.requestDocuments').slideUp("fast");
          }
          scrollHeightTT = $(document).height();
          scrollPositionTT = $(window).height() + $(window).scrollTop();
          footHeightTT = $(".footer").innerHeight();  
          if ( scrollHeightTT - scrollPositionTT  <= footHeightTT) {
              $(".requestDocuments").css({
                  "position":"absolute",
                  "bottom": footHeightTT + 10
              });
          } else {
              $(".requestDocuments").css({
                  "position":"fixed",
                  "bottom": "0px"
              });
          }
      });
  };

/* --------------------------------------------------
gnav
------------------------------- */

function gnavPlus(){
	var bodyClass = $("body").attr("class");
	$(".gNav .gNavmenu li,.tabgNav .gNavmenu li").each(function(){
		if(($(this).attr("class") == bodyClass)){
			$(this).toggleClass("on");
		}
	});
};


/* ---------------------------------- */
 function gNavsec(){
  var $gnavMenu = $('.header .gNav ul li.funct');
    $gnavMenu.hover(function(){
        $(">ol:not(:animated)",this).slideDown("fast");
        $(this).addClass('onNav');
        $(this).children('a','span').css('background-color','rgba(20,155,210,0.8)');
        
    },
    function(){
        $(">ol",this).slideUp("fast");
        $(this).removeClass('onNav');
        $(this).children('a','span').css('background-color','rgba(20,155,210,0)');
    });
};

/* --------------------------------------------------
gnav
-------------------------------------------------- */

function headNav(){
$('.headerTb .menuBtn').click(function() {
  $('.tabgNav').slideToggle('normal', function() {
  });
	$(this).toggleClass("op");
});
};



/* --------------------------------------------------
fixgNav Add2017
-------------*/

function fixgNav(){
var nav = $('.header');
var navoffset = nav.offset();
$(window).scroll(function () {
		if($(window).scrollTop() > navoffset.top) {
			nav.addClass("fixed");
		}else{
			nav.removeClass("fixed");
		}
	});
};


// 「選ばれる理由」ページのスクロール位置を直す
function fixScroll() {
   if (location.pathname.indexOf('/reason/') !== 0) {
     // 「選ばれる理由」ページのみ対象
     return;
   }
   if (!$(".header").is(":visible")) {
      // ヘッダーが出てない時(レスポンシブ時)は何もしない
      return;
   }

   var headerHeight = $(".header").height();
   // 見出し文字列の高さ(取れなかったら35pxくらいにする)
   var boxTitleHeight = $(location.hash).find(".boxTtl").eq(0).height() || 35;
   // #xxxのハッシュ先要素のpaddingやmarginを50pxくらいとする
   var margin = 30;

   // 見出しが見えるように現在のスクロール位置からヘッダーの高さを引いた位置までスクロールする
   var scrollTop = $(window).scrollTop() - headerHeight - boxTitleHeight - margin;
   $(window).scrollTop(scrollTop);
//	$('html,body').animate({ scrollTop: scrollTop }, 300);
}

