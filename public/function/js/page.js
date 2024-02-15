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

$(document).ready(function(){

//$('.opPrice .opgBtn').click(function() {
//  $('.opPrice .opPriceArea').slideToggle('normal', function() {
//  });
//	$(this).toggleClass("op");
//});

});

function dispTooltip(obj,type){
	var objCmt = "";
	if(type == 'img'){
		objCmt = obj.nextSibling;
	}else{
		objCmt = obj.parentNode;
	}

	if(objCmt.style.display == "block"){
		objCmt.style.display = "none";
	}else{
		objCmt.style.display = "block";
	}
}

