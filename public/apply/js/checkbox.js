function PolicyCheck(n){
	var cnt =0;
	var i;

	for(i =0; i< document.getElementsByName('checkbox').length;i++){
		if(document.getElementsByName('checkbox')[i].checked)
		cnt++;
	}

	if(document.getElementsByName('checkbox').length == cnt){
	}else{
		if(n == "0"){
			alert("利用条件をすべて確認・同意してください");
			return false;
		}
	}
}