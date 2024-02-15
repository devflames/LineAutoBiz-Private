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
<meta name="referrer" content="no-referrer-when-downgrade">
<title>ヘッダー情報 確認方法 | 迷惑メール報告 | お問い合わせ | メルマガ配信スタンド『オートビズ』</title>
<link rel="shortcut icon" href="{{ asset("/../favicon/favicon.ico") }}">
<meta name="Keywords" content="" />
<meta name="Description" content="メルマガ配信スタンド『オートビズ』『オートビズプロ』より配信された迷惑メールを受信された方は、こちらページにそって確認してください" />

<!-- OGP（facebook用など）-->
<meta property="og:title" content="ヘッダー情報 確認方法 | 迷惑メール報告 | お問い合わせ | メルマガ配信スタンド『オートビズ』" />
<meta property="og:type" content="website" />
<meta property="og:url" content="spam_repo.html" />
<meta property="og:image" content="../images/hero_bg.jpg" />
<meta property="og:site_name" content="オートビズ" />
<meta property="og:description" content="メルマガ配信スタンド『オートビズ』『オートビズプロ』より配信された迷惑メールを受信された方は、こちらページにそって確認してください" />
<!-- /OGP（facebook用など） -->

<link rel="stylesheet" href="{{ asset("/../common/css/common.css") }}" type="text/css">
<link rel="stylesheet" href="{{ asset("/../common/css/2nd_common.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/../common/js/jquery-1.11.3.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/common.js") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/2nd_common.js") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/jquery.heightLine.js") }}"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="https://autobiz.jp/common/js/selectivizr-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[Page Org]-->
<link rel="stylesheet" href="{{ asset("/css/layout.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/js/page.js") }}"></script>

<!--[/Page Org]-->

</head>

<body class="inquiry spam">
	<div class="wrapper">
		<!--[continer]-->
		<div class="continer">

			<!--[heroArea]-->
			<div class="heroArea">
				<div class="heroAreaIn">
				</div>
			</div>
			<!--[/heroArea]-->

			<!--[mainConts]-->
			<div class="mainConts">
				<ul class="breadCrumbs clearfix">
					<li><a href="{{ url("/") }}">HOME</a></li>
					<li><a href="{{ url("inquired.blade.php") }}">お問い合わせ</a></li>
					<li><a href="{{ url("spam_repo.blade.php") }}">迷惑メール報告</a></li>
					<li class="on"><h1>ヘッダー情報 確認方法</h1></li>
				</ul>

				<!--<div class="twelve columns" style="margin-bottom:40px;">
<div style="text-align:center; background:#f2dede; border:solid 4px #d00000; padding:15px;color:#a94442; font-weight: bold;">
誠に勝手ながら、下記の日程において年末年始休業とさせていただきます。<br>
<span class="red"><strong>休業日：2023年12月28日（木）～2024年01月04日（木）</strong></span><br />
<br />
休業中にいただいたお問合せやお申込みの対応等は翌営業日以降となりますのでご了承ください。
</div>
</div>-->

				<div class="leadTxt">
					<h2 class="mgB10">ビズクリエイトの配信サービスから配信されたメールの確認方法</h2>
					<p class="mgB50">弊社サービスで提供しているURLや、メールのヘッダー情報からご確認いただけます。<br>
					<ol class="linkList">
						<h4><li><a href="{{ url("#1_01") }}">1.スマートフォン、携帯で迷惑メールを受信された場合はこちら</a></li></h4>
					</ol>
					<ol class="linkList">
						<h4><li><a href="{{ url("#1_02") }}">2.パソコンで迷惑メールを受信された場合はこちら</a></li></h4>
					</ol>
				</div>
			</div>

			<ul class="contsDtl">
				<li>
					<div class="contsIn">
						<div class="stepBlk">
							<div id="1_01" class="stepBlkIn no1">
								<h2><span style="color:#2774DD;">スマートフォン、携帯電話で迷惑メールを受信された場合</span></h2>
								<p>メール内に下記形式のURLが記載されていることをご確認ください。<br> 弊社サービスがご提供している、メールの配信を解除するためのURLです。</p><br>
								<h4><p>http://ab○○○.biz/brd/○○/○○○○/mail_cancel.php?cd=○○○○○○○○</p></h4><br>
								<img src="{{ asset("/../../biz-create.jp/img/mail_header/sp_cancelurl.gif") }}" alt="メールに記載される配信解除URLの表示例">
							</div>
							<div id="1_02" class="stepBlkIn no2" style="margin-bottom: 0px; border-bottom: none;">
								<h2><span style="color:#2774DD;">パソコンで迷惑メールを受信された場合</span></h2>
								<p>受信したメールソフトにて、メールのヘッダー情報をご確認ください。</p><br>
								<h3>●Gmailのメールヘッダー確認方法</h3>
								<p><img src="{{ asset("/../../biz-create.jp/img/mail_header/gmail_header1.gif") }}" alt="Gmailのヘッダー確認方法1"><p>
								<p>(1)該当のメールを開いた後、▼マークをクリックし</p><br>
								<p>(2)「メッセージのソースを表示」を選択します。</p><br>
								<img src="{{ asset("/../../biz-create.jp/img/mail_header/gmail_header2.gif") }}" alt="Gmailのヘッダー確認方法2"><br>
								<p>表示されたヘッダー情報（1行目以降）をご確認ください。</p>
								<p>【Massage-ID】に、「01auto.biz」、「02auto.biz」、「mseone.net」が記載されている場合、弊社サービスから配信されたメールです。</p><br>
								<p>ご報告の際は、ヘッダー情報を全てコピー＆貼り付けをお願いいたします。</p>
								<br><br>
								<h3>●Yahoo!のメールヘッダー確認方法</h3>
								<img src="{{ asset("/../../biz-create.jp/img/mail_header/yahoo_header1.gif") }}" alt="Yahoo!のヘッダー確認方法2"><br>
								<p>表示されたヘッダー情報を一番下までスクロールします。</p><br>
								<p>【Massage-ID】に、「01auto.biz」、「02auto.biz」、「mseone.net」が記載されている場合、弊社サービスから配信されたメールです。</p>
								<p>ご報告の際は、ヘッダー情報を全てコピー＆貼り付けをお願いいたします。</p>
								<br><br>
								<h3>●その他のメールソフトでのメールヘッダー確認方法</h3>
								<p>下記サイトをご参考に、メールヘッダーのご確認をお願いいたします。</p>
								<ol class="linkList">
									<li><a href="https://support.google.com/mail/answer/29436?hl=ja&amp;visit_id=637983032162887300-957731988&amp;rd=1" target="_blank">Googleヘルプ　メッセージヘッダーの確認方法</a></li>
								</ol>
								<ol class="linkList">
									<li><a href="https://support.apple.com/ja-jp/guide/mail/mlhlp1089/mac" target="_blank">Macの「メール」で詳細ヘッダを表示する</a></li>
								</ol><br>
								<p>表示されたメールヘッダーの【Massage-ID】に、「01auto.biz」、「02auto.biz」、「mseone.net」が記載されている場合、弊社サービスから配信されたメールです。</p><br>
								<p>ご報告の際は、ヘッダー情報を全てコピー＆貼り付けをお願いいたします。</p>
							</div>
						</div>
					</div>
				</li>
			</ul>

		</div>

		<!--[footer]-->
		<div class="footer">
			<div class="contArea">
				<dl class="pMark clearfix">
				<dt><a href="https://privacymark.jp/" target="_blank"><img src="{{ asset("/../common/images/21000734_01_100_JP.gif") }}" width="100" height="100" alt=""/></a></dt>
				<dd>株式会社ビズクリエイトは個人情報の取扱いを適切に行う体制等を整備していることを認定する「プライバシーマーク」を取得しております。</dd>
				</dl>

				<div class="copyArea" style="clear:both">
					<p>株式会社ビズクリエイト</p>
					<p>Copyrights&#169; 2017 BizCreate,Inc. All Rights Reserved.</p>
				</div>
			</div>
		</div>
		<!--[footer]-->
		<div class="gotop">
			<a href="{{ url("#") }}">トップへ<br>戻る</a>
		</div>
	</div>

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-59361-6");
		pageTracker._trackPageview();
	</script>
</body>


</html>
