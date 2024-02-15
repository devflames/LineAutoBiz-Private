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
		}
	});
};



$(document).ready(function(){
    $('#policy').on('load', function(){
        $('#policy').contents().find('head').append('<link rel="stylesheet" href="style.css" type="text/css" />');
    });
});


/*----------------------------------------------------
lineheight
-----------------*/
$(document).ready(function(){
	$(".wh .contsIn .heightBox").heightLine({
    	minWidth:560
	});
});