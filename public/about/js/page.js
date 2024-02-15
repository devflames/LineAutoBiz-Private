/*******************************************
	SITE:  AutoBiz
	FileName: base.js
	LastUpdate: 2015/10/01
********************************************/

$(document).ready(function(){
seconNav();

});



/* --------------------------------------------------
footerNav
-----------------*/

function seconNav(){
	$(".gNav ul li.funct li a,.tabgNav ul li.funct li a").each(function(){
	if(($(this).attr("href")==location.pathname)){
			$(this).parent().toggleClass("on");
			/*var txt = $(this).html();
			$(this).parent().html('<em>'+txt+'</em>');*/
		}
	});
};



/* --------------
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

*/

$(function(){
	$(window).on("load resize", ReLayout); //リサイズもしくはロードされた時にReLayout呼び出し
  function ReLayout() {
		if ( window.innerWidth > 801 ){
  		$(".hl1").heightLine();
		}else{
			$(".hl1").heightLine({
				minWidth:801
			});
		}
	}
});

$(function(){
	$(window).on("load resize", ReLayout); //リサイズもしくはロードされた時にReLayout呼び出し
  function ReLayout() {
		if ( window.innerWidth > 801 ){
  		$(".hl2").heightLine();
		}else{
			$(".hl2").heightLine({
				minWidth:801
			});
		}
	}
});
$(function(){
	$(window).on("load resize", ReLayout); //リサイズもしくはロードされた時にReLayout呼び出し
  function ReLayout() {
		if ( window.innerWidth > 801 ){
  		$("ul.can li").heightLine();
		}else{
			$("ul.can li").heightLine({
				minWidth:801
			});
		}
	}
});