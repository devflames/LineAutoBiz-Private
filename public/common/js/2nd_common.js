/*******************************************
	SITE:  AutoBiz Faq
	FileName: base.js
	LastUpdate: 2015/10/01
********************************************/
$(document).ready(function(){

$('.opPrice .opgBtn').click(function() {
  $('.opPrice .opPriceArea').slideToggle('normal', function() {
  });
	$(this).toggleClass("op");
});


$('.planCompare .plangBtn').click(function() {
  $('#planComp').slideToggle('normal', function() {
  });
	$(this).toggleClass("op");
});

$(document).ready(function(){
tabChange();
});

function tabChange(){
    var currentTabIndex = -1;
    var tabClick = function(tabIndex){
        if(tabIndex != currentTabIndex){
            if(tabIndex >= 0) {
                $(".cont").eq(currentTabIndex).hide();
                $(".btnTab li").eq(currentTabIndex).removeClass("on");
            }
            $(".cont").eq(tabIndex).show();
            $(".btnTab li").eq(tabIndex).addClass("on");
            currentTabIndex = tabIndex;	
        }
    };
		
		$(".btnTab li").click(function () {
       tabClick($(".btnTab li").index(this));
    });
		tabClick(0);
};

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
	});