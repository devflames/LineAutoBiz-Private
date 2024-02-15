<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8" lang="ja"><![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="ja"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ja">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>サービス機能比較表｜ メルマガ配信スタンド『オートビズ』</title>
<link rel="shortcut icon" href="{{ asset("/../favicon/favicon.ico") }}">
<meta name="Keywords" content="メルマガ,メール,配信,機能" />
<meta name="Description" content="ビズクリエイトが提供するステップメール配信・メルマガ配信スタンド『オートビズ』の比較表です。" />

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'" />

<link rel="stylesheet" href="{{ asset("/../common/css/common.css") }}" type="text/css">
<link rel="stylesheet" href="{{ asset("/../common/css/2nd_common.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/../common/js/jquery-1.11.3.min.js") }}"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="/common/js/selectivizr-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[Page Org]-->
<link rel="stylesheet" href="{{ asset("/css/layout_compare.css") }}" type="text/css">
<!--[/Page Org]-->

<style>
.compareList ul{
  float:left;
  width:165.3px;/*16.4%*/
  color:#ffffff;
}

.compareList li{
  color:#fff;
  text-align:center;
}

.compareList ul > li{
  padding:20px 3px;
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
}

.compareList ul > li h3{
  font-size:92%;
  font-weight:500;
  font-family: 'Noto Sans JP', san-serif;
}

.compareList ul > li span{
  display:block;
  font-size:84%;
  color:#555555;
}

.funcList img{
  vertical-align:sub;
}

/*--------------------------------*/
/*セルの色指定*/
.compareList li:nth-child(odd){
  background-color:#fff;
}

.compareList li:nth-child(even){
  background-color:#eee;
}

.compareList li:first-child{
  padding:8px 3px;
}
.compareList .funcName li:first-child{
  background-color:#666;
}
.compareList .funcName li:nth-child(2){
  background-color:#fff;
  padding:5px;
}



.compareList .autobiz .slgt li:first-child{
	background-color:#149BD2;
	}


/*⇒*/
.compareList .autobiz .slgt li:nth-child(2){
	border-top: 10px solid #149BD2;
	background-color:#fff;
	padding:0px;
	border-right: 85px solid transparent;
	border-left: 85px solid transparent;
	}


.compareList .autobiz .lgt li:first-child{
	background-color:#2887D7;
	}

.compareList .autobiz .lgt li:nth-child(2){
	border-top: 10px solid #2887D7;
	background-color:#fff;
	padding:0px;
	border-right: 85px solid transparent;
	border-left: 85px solid transparent;
	}


.compareList .autobiz .std li:first-child{
	background-color:#3C73DC;
	}

.compareList .autobiz .std li:nth-child(2){
	border-top: 10px solid #3C73DC;
	background-color:#fff;
	padding:0px;
	border-right: 85px solid transparent;
	border-left: 85px solid transparent;
	}


.compareList .psm .normal li:first-child{
	background-color:#3954D1;
	}

.compareList .psm .normal li:nth-child(2){
	border-top: 10px solid #3954D1;
	background-color:#fff;
	padding:0px;
	border-right: 85px solid transparent;
	border-left: 85px solid transparent;
	}



.compareList .psm .domain li:first-child{
	background-color:#004AAD;
	}

.compareList .psm .domain li:nth-child(2){
	border-top: 10px solid #004AAD;
	background-color:#fff;
	padding:0px;
	border-right: 85px solid transparent;
	border-left: 85px solid transparent;
	}

.compareList .slgt  li span{
	color:#00aecd;
	font-weight:500;
	}

.compareList .lgt  li span{
	color:#2887D7;
	font-weight:500;
	}

.compareList .std  li span{
	color:#3C73DC;
	font-weight:500;
	}

.compareList .normal  li span{
	color:#3954D1;
	font-weight:500;
	}

.compareList .domain  li span{
	color:#004AAD;
	font-weight:500;
	}

.compareList .funcName  .note{
	color:#888888;
	font-weight:500;
	font-size:80%;
	}

.compareList .autobiz  .note{
	color:#888888;
	font-weight:500;
	font-size:80%;
	}
.compareList .autobiz  .note_orange{
	color:#FFA628;
	font-weight:600;
	font-size:80%;
	}


.compareList .psm  .note{
	color:#888888;
	font-weight:500;
	font-size:80%;
	}

.compareList .psm  .note_orange{
	color:#FFA628;
	font-weight:600;
	font-size:80%;
	}


.compareList li span .blk_txt{
	display:inline;
	color:#555555;
	}


.compareList .funcName{
	margin-right:8px;
	}

/*.compareList .std{
	margin-right:8px;
	}*/

.tooltip{
	position:relative;
	}

div .tooltipCmt{
	display:none;
	background-color:#fff;
	border:1px solid #ccc;
	font-size:80%;
	width:200px;
	padding:6px;
	position: absolute;
	left: 154px;
	top: -8px;
	text-align:left;
	}

.heroAreaIn {
    width: 1008px;
    height: 100px;
    margin: auto;
}

.heroArea h1 {
    color: #ffffff;
    font-size: 32px;
    line-height: 1.3;
    /* margin-bottom: 20px; */
    padding-top: 15px;
    font-weight: 700;
    font-family: 'Noto Sans JP', sans-serif;
}


@media (max-width: 800px){
.compare .continer{
	width:1008px;
	}
.compare img {
	max-width: 12%;
	width: 12%;
	}
}

@media (max-width: 480px){
.compare .continer{
	width:1008px;
	}
.compare  img {
	max-width: 12%;
	width: 12%;
	}
}


</style>
<script>
function dispTooltip(obj){
	var objCmt = obj.nextSibling;
	if(objCmt.style.display == "block"){
		objCmt.style.display = "none";
	}else{
		objCmt.style.display = "block";
	}
}
</script>


</head>

<body class="funct">
<div class="wrapper">
<!--[header]-->
<div class="header">
<div class="contArea">
<p class="seo">メルマガ・ステップメール配信ASPシステム『オートビズ』『オートビズプロ』</p>
</div>
</div>
<!--[/header]-->
<!--[continer]-->
<div class="compare continer">

<!--[heroArea]-->
<div class="heroArea">
<div class="heroAreaIn">
<div class="contArea">
<h1><em>ビズクリエイト　メール配信サービス</em>オートビズ プラン比較表</h1>
</div>
</div>
</div>
<!--[/heroArea]-->

<!--[mainConts]-->
<div class="mainConts">

<div class="leadTxt">
<p class="mgB20">弊社では、ユーザーさまそれぞれのビジネス規模に合ったサービスをご提供できるよう、豊富なプランをご用意しております。<br>
比較表をご参考に、あなたに合ったサービス・プランをお選びください。
</p>
<p><a href="{{ url("/") }}" class="gLine">オートビズのサイトを見る</a></p>
</div>

<div class="point">
<div class="contsIn">

<!--<div style="margin-bottom:54px;font-size:110%;padding:10px 0px;font-weight:600;width:1008px">

<div style="float:left;width:165.3px;margin-right:8px;color:#fff;">　</div><!--16.4% 0.8%-->
<!--<div style="float:left;background-color:#00afce;width:495.92px;padding:14px 0px;margin-right:8px;color:#fff;text-align:center;">オートビズ</div><!--49.2% 0.8%-->
<!--<div style="float:left;background-color:#2773dd;width:330.61px;padding:14px 0px;color:#fff;text-align:center;">オートビズプロ</div>--><!--32.8%-->
<!--</div>-->

<div class="both"></div>

<div class="compareList clearfix" style="width:1008px">

<!--見出し-->

<div class="funcList">
<ul class="funcName">
<li><h3>主な機能一覧</h3></li>
<li></li>
<li>
<span class="note">　</span>
<span class="note">　</span>
<span>ご利用料金</span>
<span class="note">　</span>
<span class="note">　</span>
<span class="note">　</span>
<span class="note">　</span>
</li>
<li><span>通常フォーム作成</span></li>
<li><span class="tooltip">高機能フォーム作成<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">通常のフォーム作成機能とは別に、自動計算や動的自動返信などを備えたより高機能なフォームです。</div></span></li>
<li><span>通常フォーム作成数</span></li>
<li><span>高機能フォーム作成数</span></li>
<li><span>フォームの項目数</span><span>　</span></li>
<li><span>決済連携</span></li>
<li><span>アドレス一括登録</span></li>
<li><span class="tooltip">登録リスト数<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">目安の登録数を超えた場合、画面操作が遅くなったり、状況によってはリスト整理をお願いすることがございます。</div></span></li>
<li><span class="tooltip">ステップメール配信<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt"> 1時間に1200通配信（ハイエンドプランは12,000通）。リストが多い場合は順次配信されます。</div></span></li>
<li><span>シナリオ数</span></li>
<li><span>ステップ数</span></li>
<li><span>HTMLメール配信</span></li>
<li><span style="font-size: 82%;">ステップメール開封率測定</span></li>
<li><span>メルマガ（一斉）配信</span></li>
<li><span class="tooltip">メルマガ配信数<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">プラン変更には、弊社既定の審査が必要になる場合があります。</div></span><span>　</span></li>
<li><span>メルマガ開封率測定</span></li>
<li><span>メルマガバックナンバー</span></li>
<li><span>LINE配信<br></span></li>
<li><span>バースデーメール・<br>イベントメール</span></li>
<li><span class="tooltip">簡易メルマガ<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">読者の個人情報閲覧を制限してメルマガを発行できます。</div></span></li>
<li><span>クリックURL測定</span></li>
<li><span>メディア管理</span></li>
<!-- 画像やPDFなどのファイルを、弊社が用意するファイルスペースに登録してメール等で使うことができます。（200MBまで） -->

<li><span class="tooltip">フォーム計算<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">フォーム上で商品の合計金額などを計算できます。</div></span></li>
<li><span class="tooltip">ファイル送信<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">フォームから画像などのファイルを添付して登録をしてもらうことができます。</div></span></li>

<li><span class="tooltip">動的自動返信<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">フォームに入力された内容や日付、時間帯によって自動返信メールの内容を変えることができます。</div></span></li>

<li><span class="tooltip">独自ドメイン運用<img src="{{ asset("/images/hatena.png") }}" onclick="dispTooltip(this)"><div class="tooltipCmt">メールフォームURLや配信解除URL等を、ご契約時に指定いただくドメインで運用できます</div></span></li>

</ul>
</div>


<!--見出し-->
<div class="autobiz">
<ul class="slgt">
<li>
<h3>スーパーライトプラン</h3>
</li>
<li></li>
<li>
<span class="note">月払契約：1,980円</span>
<span class="note">3ヶ月契約：5,940円</span>
<span class="note">半年契約：10,890円</span>
<span class="note">年間契約：21,780円</span>
<span class="note">　</span>
<span class="note_orange">年間契約で月1,815円！<br>実質1ヶ月分無料！</span>
</li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>10個</span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>15個</span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>3000件</span></li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span>10個</span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_slgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
</ul>

<ul class="lgt">
<li>
<h3>ライトプラン</h3>
</li>
<li></li>
<li>
<span class="note">月払契約：3,520円</span>
<span class="note">3ヶ月契約：10,560円</span>
<span class="note">半年契約：19,360円</span>
<span class="note">年間契約：35,200円</span>
<span class="note">　</span>
<span class="note_orange">年間契約で月2,934円！<br>実質2ヶ月分無料！</span>
</li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>30個</span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>15個</span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span>5万件目安</span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span>30個</span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span>1万通～/月</span><span class="note">（上限13万通）</span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_lgt2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
</ul>

<ul class="std">
<li>
<h3>スタンダードプラン</h3>
</li>
<li></li>
<li>
<span class="note">月払契約：5,990円</span>
<span class="note">3ヶ月契約：17,970円</span>
<span class="note">半年契約：32,940円</span>
<span class="note">年間契約：59,900円</span>
<span class="note">　</span>
<span class="note_orange">年間契約で月4,992円！<br>実質2ヶ月分無料！</span>
</li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>100個</span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span>15個</span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span>10万件目安</span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span>100個</span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span>2万通～/月</span><span class="note">（上限62万通）</span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_std2.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
</ul>

</div>


<!--PSM-->
<div class="psm">
<ul class="normal">
<li>
<h3>プロプラン</h3>
</li>
<li></li>
<li>
<span class="note">月払契約：9,900円</span>
<span class="note">3ヶ月契約：29,700円</span>
<span class="note">半年契約：54,450円</span>
<span class="note">年間契約：103,950円</span>
<span class="note">　</span>
<span class="note_orange">年間契約で月8,663円！<br>実質1.5ヶ月分無料！</span>
</li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span>1000個</span></li>
<li><span>1000個</span></li>
<li><span><span class="blk_txt">高機能フォーム：</span>53個<br><span class="blk_txt">通常フォーム：</span>15個</span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span>50万件目安</span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span>1000個</span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span>4万通～/月</span><span class="note">（上限104万通）</span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_pro.png") }}"></span></li>
<li><span><img src="{{ asset("/images/peke.png") }}"></span></li>
</ul>

<ul class="domain">
<li>
<h3>ハイエンドプラン</h3>
</li>
<li></li>
<li>
<span class="note">月払契約：×</span>
<span class="note">3ヶ月契約：148,500円</span>
<span class="note">半年契約：272,250円</span>
<span class="note">年間契約：519,750円</span>
<span class="note">　</span>
<span class="note_orange">年間契約で月43,313円！<br>実質1.5ヶ月分無料！</span>
</li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span>1000個</span></li>
<li><span>1000個</span></li>
<li><span><span class="blk_txt">高機能フォーム：</span>53個<br><span class="blk_txt">通常フォーム：</span>15個</span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span>1000個</span></li>
<li><span>無制限</span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span>40万通～/月</span><span class="note">（応相談）</span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span><span>　</span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
<li><span><img src="{{ asset("/images/ab_high.png") }}"></span></li>
</div>




</div>

</div>

<p class="linkBtn mgT30"><a href="{{ url("function_list.html") }}" class="gBtn">全機能一覧をみる</a></p>



</div>
<!--[/mainConts]-->

</div>
<!--[/continer]-->

<!--
<div class="gotop"><a href="#">トップへ<br>戻る</a></div>
 -->
</div>
</body>


</html>
