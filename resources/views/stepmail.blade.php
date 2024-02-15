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
<title>ステップメール配信機能｜メルマガ配信スタンド『オートビズ』</title>
<link rel="shortcut icon" href="{{ asset("/../favicon/favicon.ico") }}">
<meta name="Keywords" content="ステップメール,メール配信,機能" />
<meta name="Description" content="ステップメールとは、あらかじめ用意した複数のメールを1通目から順番に自動配信する仕組みです。段階的にメールを送り、信頼関係を築いていくことで、見込み客を顧客に、顧客をリピータにすることができます。" />

<!-- OGP（facebook用など）-->
<meta property="og:title" content="ステップメール配信機能｜メルマガ配信スタンド『オートビズ』" />
<meta property="og:type" content="website" />
<meta property="og:url" content="stepmail.html" />
<meta property="og:image" content="../images/hero_bg.jpg" />
<meta property="og:site_name" content="オートビズ" />
<meta property="og:description" content="ステップメールで、見込み客を顧客に、顧客をリピーターに育てます。" />
<!-- /OGP（facebook用など） -->

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'" />

<link rel="stylesheet" href="{{ asset("/../common/css/commona8b2.css?20240117-1721") }}" type="text/css">
<link rel="stylesheet" href="{{ asset("/../common/css/2nd_commona8b2.css?20240117-1721") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/../common/js/jquery-1.11.3.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/commona8b2.js?20240117-1721") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/2nd_common.js") }}"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="/common/js/selectivizr-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[Page Org]-->
<link rel="stylesheet" href="{{ asset("/css/layout.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/js/page.js") }}"></script>

<!--[/Page Org]-->

</head>

<body class="funct">
<div class="wrapper">
<!--[header]-->
<div class="header">
<div class="contArea">
    <p class="seo" style="line-height:initial;text-align: left;padding-top: 2px;">
            ステップメール・メール自動応答・一斉配信なら<br>
                    メルマガスタンド『オートビズ』    </p>
                        <ul class="topNav">
                            <li class="mailmag"><a href="{{ url("form-request.blade.php") }}">
                            <span class="spBr">資料</span>請求</a></li>
                                    <li class="contact"><a href="{{ url("inquired.blade.php") }}">
                                    <span class="spBr">お問い</span>合わせ</a></li>
                                    <li class="order"><a href="{{ url("price.blade.php") }}">
                                    <span class="order-text">お申し込み</span></a></li>
                                    </ul>
                                </div>
<div class="gNav">
<ul class="contArea gNavmenu">
<li class="logoBiz"><a href="{{ url("/") }}"><img src="{{ asset("/common/images/autobiz_logo.png") }}" width="156" height="34" alt="AutoBiz"/></a></li>
<li class="info"><a href="{{ url("about.blade.php") }}">オートビズとは</a></li>
<li class="about"><a href="{{ url("reason.blade.php") }}">選ばれる理由</a></li>
<li class="funct"><a href="{{ url("function.blade.php") }}">機能一覧</a></li>
<li class="price"><a href="{{ url("price.blade.php") }}">利用料金</a></li>
<li class="column"><a href="{{ url("column.blade.php") }}">コラム</a></li>
<li class="faq"><a href="{{ url("faq.blade.php") }}">よくある質問</a></li>
</ul>



<ul class="footLink clearfix">
<li><a href="{{ url("company.blade.php") }}">会社案内</a></li>
<li><a href="{{ url("sitemap.blade.php") }}">サイトマップ</a></li>
<li><a href="{{ url("kiyaku.blade.php") }}">利用規約</a></li>
<li><a href="{{ url("company.blade.php") }}">法律に基づく表記</a></li>
</ul></div>
</div>
<!--[/header]-->

<!--[continer]-->
<div class="continer">
<!--headerTb-->
<div class="headerTb clearfix">
<div class="logoBiz"><a href="{{ url("/") }}"><img src="{{ asset("/common/images/autobiz_logo.png") }}" width="" height="34" alt="AutoBiz"/></a></div>
<div class="menuBtn"><img src="{{ asset("/common/images/heaer_menu_space.png") }}" width="80" height="80" alt=""/></div>
</div>
<!----><!--[gNav]-->
<div class="tabgNav">
<div class="contArea">    <p class="seo" style="line-height:initial;text-align: left;padding-top: 2px;">        ステップメール・メール自動応答・一斉配信なら<br>        メルマガスタンド『オートビズ』    </p>    <ul class="topNav">        <li class="mailmag"><a href="{{ url("form-request") }}"><span class="spBr">資料</span>請求</a></li>        <li class="contact"><a href="{{ url("inquired") }}"><span class="spBr">お問い</span>合わせ</a></li>        <li class="order"><a href="{{ url("price") }}"><span class="order-text">お申し込み</span></a></li>    </ul></div><ul class="contArea gNavmenu">
<li class="logoBiz"><a href="{{ url("/") }}"><img src="{{ asset("/common/images/autobiz_logo.png") }}" width="156" height="34" alt="AutoBiz"/></a></li>
<li class="info"><a href="{{ url("about.blade.php") }}">オートビズとは</a></li>
<li class="about"><a href="{{ url("reason.blade.php") }}">選ばれる理由</a></li>
<li class="funct"><a href="{{ url("function.blade.php") }}">機能一覧</a></li>
<li class="price"><a href="{{ url("price.blade.php") }}">利用料金</a></li>
<li class="column"><a href="{{ url("column.blade.php") }}">コラム</a></li>
<li class="faq"><a href="{{ url("faq.blade.php") }}">よくある質問</a></li>
</ul>



<ul class="footLink clearfix">
<li><a href="{{ url("company.blade.php") }}">会社案内</a></li>
<li><a href="{{ url("sitemap.blade.php") }}">サイトマップ</a></li>
<li><a href="{{ url("kiyaku.blade.php") }}">利用規約</a></li>
<li><a href="{{ url("law.blade.php") }}">法律に基づく表記</a></li>
</ul></div>
<!--[/gNav]-->

		<!--[heroArea]-->
		<div class="heroArea">
			<div class="heroAreaIn mail_bg">
			</div>
		</div>
		<!--[/heroArea]-->

		<!--[mainConts]-->
		<div class="mainConts">
			<ul class="breadCrumbs clearfix" itemscope="" itemtype="https://schema.org/BreadcrumbList">
				<li itemscope="" itemtype="https://schema.org/ListItem" itemprop="itemListElement">
					<a href="{{ url("/") }}" itemprop="item">
						<span itemprop="name">HOME</span>
					</a>
					<meta itemprop="position" content="1">
				</li>
				<li><a href="{{ url("/") }}">機能一覧</a></li>
				<li class="on" itemscope="" itemtype="https://schema.org/ListItem" itemprop="itemListElement">
					<span itemprop="name"><h1>ステップメール配信</h1></span>
					<meta itemprop="position" content="2">
				</li>
			</ul>
			<div class="leadTxt">
				<h2>ステップメールとは</h2>
				<p>
					<span class="pcBr" style="font-size:99%;">ステップメールとは、あらかじめ用意した複数のメールを1通目から順番に自動配信する仕組みで、メールマーケティングの手法の1種です。</span>
					お客さまが資料請求や商品購入した日を起算日として、事前に設定したスケジュールに沿って自動的にメール配信をスタートすることができます。
				</p>
				<br>
				<h2>見込み客を顧客に、顧客をリピーターに</h2>
				<p>
					<span class="pcBr">段階的に情報をお届けすることで、信頼関係を築きながら見込み客を育てて無理のないセールスでお客さまにしたり、お客さまをしっかりとフォローすることで満足度や信頼をさらに高めてリピーターにする、こんなことが「自動で」できてしまう優れもののステップメール。</span>
					ビジネスの重要な部分を自動化できる、今や無くてはならないツールです。
				</p>
				<div class="imgCenter mgT15">
					<img src="{{ asset("/images/stepmail_img01.gif") }}" width="370" height="270" alt=""/>
					<!-- <p style="text-align: center; color: #33a8d8;font-size: 1.2rem;"><b>見込み客を顧客に、顧客をリピーターに</b></p> -->
				</div>
			</div>

			<div class="point">
				<div class="contsIn">
					<h2 class="popTtl_icon"><span><img src="{{ asset("/images/icon_point.gif") }}" width="40" height="40" alt=""/></span><em>特長</em></h2>
				</div>
			</div>

			<ul class="contsDtl">
				<li id="qa1_01">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
								<dt><em class="num"><span>1</span></em></dt>
								<dd>
									<div class="box_only"><span class="boxTtl">多彩な「配信タイミング」設定できめ細かなフォロー</span>
										<span class="boxTxt">「登録から○日後の○時○分」というステップメールの一般的な配信タイミングだけでなく、配信する「曜日」や「特定の日付、月末」を指定することもできます。細かい配信スケジュールを設定できることで、絶妙なタイミングでのフォローが入れられます。</span>
									</div>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->

				<li id="qa1_02">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
								<dt><em class="num"><span>2</span></em></dt>
								<dd>
									<div class="box_left">
										<span class="boxTtl">ステップメールを繰り返し送れるリピート配信</span>
										<span class="boxTxt">ステップメールの最終ステップ配信後に、再度任意のステップから繰り返し配信できます。例えば、毎月月末に同一内容のメールを送るなど、継続的なフォローを行う場合に便利な機能です。<br>
										「365日語録」など、ワンポイントアドバイス系のメールもリピート配信機能を使うことで繰り返し送ることが出来て便利です。</span>
										<span class="boxTxt boxTxt_btm">
											<span class="bold">リピート配信機能を活用した日刊メルマガ</span>
										</span>
										<a href="{{ url("daily") }}" class="gLine" target="_blank">⇒人生を変える名言を毎日お届け「Daily名言」</a>
									</div>
									<em><img src="{{ asset("/images/stepmail_img02.gif") }}" width="250" height="140" alt=""/></em>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->

				<li id="qa1_03">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
							<dt><em class="num"><span>3</span></em></dt>
								<dd>
									<div class="box_only">
										<span class="boxTtl">「止まるステップメール」でフレキシブルな対応</span>
										<span class="boxTxt">ステップメールはスケジュールどおりに順番にメールを自動配信できることがメリットですが、「商品発送後に配信したい」「決済完了を確認後に配信したい」など、自動で配信されては困るケースもあります。</span>
										<span class="boxTxt boxTxt_btm">オートビズの「配信一時停止機能」を使えば、止めたいステップでステップメールを一時停止して、任意のタイミングで手動で配信再開できます。「止まるステップメール」でフォローの幅も広がります。</span>
										<a href="{{ url("../utilization/index.html#apply03") }}" class="gLine">[活用法]ネット販売システムとして使う</a><br>
									</div>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->

				<li id="qa1_04">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
								<dt><em class="num"><span>4</span></em></dt>
								<dd>
									<div class="box_left">
										<span class="boxTtl">ステップメール配信終了後のメルマガ配信にも対応</span>
										<span class="boxTxt">ステップメールが送り終わった人だけを、自動的にメルマガの配信対象に加えることもできます。<br>
										まずはステップメールで信頼関係を築いてから、メルマガに移行する使い方もOK。</span>
									</div>
									<em><img src="{{ asset("/images/stepmail_img03.gif") }}" width="250" height="140" alt=""/></em>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->

				<li id="qa1_05">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
								<dt><em class="num"><span>5</span></em></dt>
								<dd>
									<div class="box_left">
										<span class="boxTtl">メールに名前を差込んで個別感&amp;親近感アップ</span>
										<span class="boxTxt">送るメールには全て読者の名前を差し込むことができます。メールに名前を差し込むことで、自分のために送られてきたメールだと認識されて親近感もアップ! 名前以外にも読者の登録情報を差し込めます。</span>
									</div>
									<em><img src="{{ asset("/images/mail_img05.gif") }}" width="250" height="140" alt=""/></em>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->

				<li id="qa1_06">
					<div class="contsIn">
						<div class="pBox_bg">
							<dl class="pBox">
								<dt><em class="num"><span>6</span></em></dt>
								<dd>
									<div class="box_left"><span class="boxTtl">差出人の名前もメールアドレスも自由に設定</span>
										<span class="boxTxt">メールの差出人は自由に設定できます。携帯キャリアメールアドレス宛の配信は、差出人を「なりすましメール対策専用アドレス」にして到達率を高められます。</span>
									</div>
									<em><img src="{{ asset("/images/mail_img06.gif") }}" width="250" height="140" alt=""/></em>
								</dd>
							</dl><!--[/pBox]-->
						</div><!--[/pBox_bg]-->
					</div><!--[/contsIn]-->
				</li><!--[/qa1_01]-->
			</ul>

			<div class="listConts">
				<div class="contsIn">
					<h2 class="popTtl_icon"><span><img src="{{ asset("/images/icon_form.gif") }}" width="40" height="40" alt=""/></span><em>ステップメール機能一覧</em></h2>

					<dl class="list_Box list_Box1">
						<dt>ステップ数</dt>
						<dd>1つのシナリオ内に作れるメールのステップ数は【無制限】です。<br><br>
							<span class="note">[シナリオとは？]<br>
							『登録者に何通のメールをどのような配信間隔で送るのか』 といったメール配信の一連の流れ（複数通のメール）のことを言います。</span>
						</dd>
					</dl>

					<dl class="list_Box">
						<dt>入力内容自動差込</dt>
						<dd>件名や本文にお名前やメールアドレス等、フォームに入力された内容を差し込めます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>配信スケジュール設定機能</dt>
						<dd>日付や曜日など配信時期を細かく指定可能です。ステップメール配信の効果を最大化できます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>配信待機（自動一時停止）機能</dt>
						<dd>任意のステップで配信を自動で一時停止、 配信再開ボタンを押すだけでステップメールを再開できます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>リピート配信機能</dt>
						<dd>全ステップ配信終了後に、任意のステップに戻って繰り返しステップメール配信させることができます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>別シナリオへの接続</dt>
						<dd>全ステップ配信終了後に、別シナリオのステップメールに自動接続できます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>定型文挿入機能</dt>
						<dd>登録しておいた定型文を任意のステップの任意の場所に挿入できます。期間限定のキャンペーンなど、タイムリーな情報をステップメール内で告知することができます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>配信解除URL差し込み</dt>
						<dd>読者側で配信解除ができる解除URLをメール内に差し込むことができます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>HTMLメール配信</dt>
						<dd>
							文字の色やサイズを変えたり、画像を表示させたり、HTML形式のメールを送れます。<br>
							テキスト形式メールも用意しておくことで、HTML形式メールを表示できない環境の人には、テキスト形式で表示される「マルチパート形式」を採用しています。<br>
							<span class="note">※デコメールの配信には対応していません。</span>
						</dd>
					</dl>

					<dl class="list_Box">
						<dt>開封率測定</dt>
						<dd>
							ステップごとの開封率と読者ごとの開封数を確認することができます。<br>
							<span class="note">※計測期間はステップメール配信から30日間となります。</span>
						</dd>
					</dl>

					<dl class="list_Box">
						<dt>配信シミュレーション機能</dt>
						<dd>設定したステップメールが、「いつ登録すれば実際にどんなスケジュール（日付）で配信されるのか」をシミュレーションできます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>エラーメール自動処理機能</dt>
						<dd>エラー内容によって解除・停止を自動で処理します。エラーメールを受信するアドレスを指定することもできます。</dd>
					</dl>

					<dl class="list_Box">
						<dt>多言語対応</dt>
						<dd>メール配信の文字コードをISO-2022-JP、Unicode(UTF-8）から選択できますので、中国語など、他の言語でのメールも送れます。</dd>
					</dl>

				</div><!--[/contsIn]-->
			</div><!--[/listConts]-->

			<div class="contsIn">
				<h2 class="popTtl"><em>ステップメールのQ&A</em></h2>
			</div>
			<ul class="contsDtl">
				<li id="qa1_01">
					<div class="qBox qaBox">
						<div style="display: inline-block;"><em class="blln"><span>Q</span></em></div>
						<h2 style="display: inline-block;">ステップメールは何通（何ステップ）まで設定できますか？</h2>
					</div>
					<div class="aBox qaBox">
						<div><em class="blln"><span>A</span></em></div>
						<p style="display: inline-block;">オートビズのステップメールには、ステップ数の制限はありません。</p>
					</div>
				</li>
				<li id="qa1_02">
					<div class="qBox qaBox">
						<div style="display: inline-block;"><em class="blln"><span>Q</span></em></div>
						<h2 style="display: inline-block;">ステップメールは何通送ればいいですか？</h2>
					</div>
					<div class="aBox qaBox">
						<div><em class="blln"><span>A</span></em></div>
						<p style="display: inline-block;">
							ステップメールは、だいたい3～10通で配信されるのが一般的で、7通が最適と案内している書籍等が多いようです。<br>
							しかしながら、適した送信数は用途や対象によって異なるため、3～10通にこだわる必要はありません。<br>
							効果的なステップメール配信を行う方法としては、「何を」「どのタイミングで」「誰に」送るのか、<br>
							あらかじめシナリオ設計をすることで、適切な送信数が必然的に分かってきます。
						</p>
					</div>
				</li>
				<li id="qa1_03">
					<div class="qBox qaBox">
						<div style="display: inline-block;"><em class="blln"><span>Q</span></em></div>
						<h2 style="display: inline-block;">ステップメールの導入メリットは？</h2>
					</div>
					<div class="aBox qaBox" >
						<div><em class="blln"><span>A</span></em></div>
						<p style="display: inline-block;">
							ステップメールの最大のメリットは「フォローとセールスを自動化できる」ことです。<br>
							例えば、商品購入後にリピート率を引き上げるためには、売りっぱなしにせずしっかりフォローすることが大切です。<br>
							その際にステップメールを使って、役に立つノウハウなどを段階的に提供すれば<br>
							見込み客や顧客へのセールスとフォローを自動化しつつ、お客さまとの絆を深めていくことができます。
						</p>
					</div>
				</li>
				<li id="qa1_04">
					<div class="qBox qaBox">
						<div style="display: inline-block;"><em class="blln"><span>Q</span></em></div>
						<h2 style="display: inline-block;">ステップメールとメルマガの違いとは？</h2>
					</div>
					<div class="aBox qaBox">
						<div><em class="blln"><span>A</span></em></div>
						<p style="display: inline-block;">
							ステップメールは、誰がいつ登録をしても、必ず1通目から順番に送られます。<br>
							設定したタイミングで複数回のメールを自動で配信できるので、
							おもにメールセミナーやメール講座として利用されています。<br><br>
							一方メルマガは、登録した後に発行される最新号のメールから送ることができます。<br>
							メールを作成して、好きなタイミングで配信ができるので読者全員に<br>
							一斉に最新のセールス情報やニュース等のタイムリーな情報配信ができます。
						</p>
					</div>
				</li>
			</ul>

			<div class="contsIn">
				<div class="funcLink">
					<ul>
						<li><a href="{{ url("formmake.blade.php") }}" class="gLine">フォーム作成</a></li>
						<li><a href="{{ url("rmh.blade.php") }}" class="gLine">メルマガ配信</a></li>
						<li><a href="{{ url("line.blade.php") }}" class="gLine">LINE配信</a></li>
						<li><a href="{{ url("other.blade.php") }}" class="gLine">その他機能</a></li>
					</ul>
				</div>
			</div>

			<p class="linkBtn mgT30"><a href="{{ url("index-2.blade.php") }}" class="gBtn">全機能一覧をみる</a></p>

			<div class="contactArea">
				<dl class="contactResi clearfix">
<!--<dt><em class="decTxt"><span>即日利用可</span></em></dt>-->
<dd><a href="{{ url("price.blade.php") }}" class="regiBtn"><span>お申し込みはこちら</span></a>
</dd>
</dl>

			</div>

		</div>
		<!--[/mainConts]-->

	</div>
	<!--[/continer]-->

<!--[pickUp]-->
<div class="pickUp">
<ul class="contArea">
<li><a href="{{ url("mailmaga.blade.php") }}"><h2>無料コンテンツ</h2>オートビズでは、売上アップやビジネスを改善する有益な情報を無料で提供しています。
あなたのビジネスにぜひご活用ください！</a></li>
<li><a href="{{ url("biz_partner.blade.php") }}"><h2>ビジネスパートナー(代理店)</h2>
弊社のビジネスパートナーとしてサービスをご紹介いただきます。ご紹介者さまがサービスのご利用を続ける限り、継続して報酬が支払われます。</a></li>
<li><a href="{{ url("affiliate.blade.php") }}"><h2>アフィリエイトパートナー</h2>あなたのサイトやメルマガに設置したリンクから、当サイトにアクセスした方がサービスを申し込めば、あなたに報酬が支払われます。</a></li>
</ul></div>
<!--[/pickUp]-->

    <!--[footer]-->
    <div class="footer">
        <div class="contArea">
<div class="footConts">


<ul class="footLink clearfix">
<li><a href="{{ url("reason.blade.php") }}">選ばれる理由</a></li>
<li><a href="{{ url("utilization.blade.php") }}">活用法</a></li>
<li><a href="{{ url("review.blade.php") }}">利用者の声</a></li>
<li><a href="{{ url("price.blade.php") }}">利用料金</a></li>
<li><a href="{{ url("column.blade.php") }}">コラム</a></li>
<li><a href="{{ url("apply.blade.php") }}">お申し込み</a></li>
<li><a href="{{ url("faq.blade.php") }}">よくある質問</a></li>
</ul>


<ul class="footLink clearfix">
<li><a href="{{ url("formmake.blade.php") }}">メールフォーム機能</a></li>
<li><a href="{{ url("stepmail.blade.php") }}">ステップメール機能</a></li>
<li><a href="{{ url("rmh.blade.php") }}">メルマガ機能</a></li>
<li><a href="{{ url("line.blade.php") }}">LINE配信機能</a></li>
<li><a href="{{ url("other.blade.php") }}">その他機能</a></li>
<li><a href="{{ url("function.blade.php") }}">機能一覧</a></li>
</ul>


<ul class="footLink clearfix">
<li><a href="{{ url("company.blade.php") }}">会社案内</a></li>
<li><a href="{{ url("sitemap.blade.php") }}">サイトマップ</a></li>
<li><a href="{{ url("kiyaku.blade.php") }}">利用規約</a></li>
<li><a href="{{ url("law.blade.php") }}">法律に基づく表記</a></li>
</ul>

</div>
<dl class="pMark clearfix">
<dt><a href="https://privacymark.jp/" target="_blank"><img src="{{ asset("/common/images/21000734_06_200_JP.png") }}" width="100" height="100" alt=""/></a></dt>
<dd>株式会社ビズクリエイトは個人情報の取扱いを適切に行う体制等を整備していることを認定する「プライバシーマーク」を取得しております。</dd>
</dl>

<div class="copyArea" style="clear:both">
<p>株式会社ビズクリエイト</p>
<p>Copyrights&#169; 2022 BizCreate,Inc. All Rights Reserved.</p>
</div>

</div>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KCNF7N6');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCNF7N6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	</div>
	<!--[footer]-->

	<div class="requestDocuments"><a href="{{ url("form-request.blade.php") }}" target="_blank" rel="noopener">資料を<br>請求する</a></div>
	<div class="gotop"><a href="{{ url("#") }}">トップへ<br>戻る</a></div>
</div>
</body>


</html>
