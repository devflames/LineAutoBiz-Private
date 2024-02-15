/*******************************************
	SITE:  AutoBiz
	FileName: base.js
	LastUpdate: 2016/04/01
********************************************/

	$(function(){
		$(".btnTab li").each(function(){
			$(this).click(function(){
					var idname = $(this).attr("id");
					var classname = '.';
					classname += idname;
							disp($('dl' +(classname)).get());
				});
				disp($('dl.all').get());
		});

	function disp(dls) {
    var dtdd = [];
    for (var i = 0; i < dls.length; i++) {
      dtdd.push('<dl>' + dls[i].innerHTML +'</dl>');
    }
  $(".conts").html(dtdd.join(" "));
};

});



/*http://www.tinybeans.net/blog/2010/11/14-000851.html*/