
function PolicyCheck(n){
	var btn = document.getElementsByName('offer').item(0);
	var cnt =0;
	var i;

	for(i =0; i< document.getElementsByName('checkbox').length;i++){
		if(document.getElementsByName('checkbox')[i].checked)
		cnt++;
	}
	if(document.getElementsByName('checkbox').length == cnt){
		btn.alt = '';
		btn.title = '';
		btn.src = 'http://autobiz.jp/partner/images/biz_btn.gif';
		btn.style.cursor = 'pointer';
	}else{
		btn.src = 'http://autobiz.jp/partner/images/biz_btn_off.gif';
		btn.style.cursor = 'default';
		btn.alt = '登録条件をすべて確認・同意してください';
		btn.title = '登録条件をすべて確認・同意してください';

		if(n == "0"){
			alert("登録条件をすべて確認・同意してください");
			return false;
		}

	}
}
