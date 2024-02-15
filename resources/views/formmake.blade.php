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
<title>フォーム作成機能｜ メルマガ配信スタンド『オートビズ』</title>
<link rel="shortcut icon" href="{{ asset("/../favicon/favicon.ico") }}">
<meta name="Keywords" content="ステップメール,メールフォーム,自動返信,レンタル" />
<meta name="Description" content="メルマガ登録フォームはもちろん、商品注文やアンケートなど、いろいろな用途で使えるメールフォームが作れます。" />

<!-- OGP（facebook用など）-->
<meta property="og:title" content="フォーム作成機能｜ メルマガ配信スタンド『オートビズ』" />
<meta property="og:type" content="website" />
<meta property="og:url" content="formmake.html" />
<meta property="og:image" content="../images/hero_bg.jpg" />
<meta property="og:site_name" content="オートビズ" />
<meta property="og:description" content="メルマガ登録フォームはもちろん、商品注文やアンケートなど、いろいろな用途で使えるメールフォームが作れます。" />
<!-- /OGP（facebook用など） -->

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'" />

<link rel="stylesheet" href="{{ asset("/../common/css/commona8b2.css?20240117-1721") }}" type="text/css">
<link rel="stylesheet" href="{{ asset("/../common/css/2nd_common.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/../common/js/jquery-1.11.3.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/commona8b2.js?20240117-1721") }}"></script>
<script type="text/javascript" src="{{ asset("/../common/js/2nd_common.js") }}"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="/common/js/selectivizr-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[Page Org]-->
<link rel="stylesheet" href="{{ asset("/css/layout2.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/js/page.js") }}"></script>

<script type="text/javascript">
function showBalloon(){
var wObjballoon	= document.getElementById("makeImg");
if (wObjballoon.className == "balloon1"){
wObjballoon.className = "balloon";
}else{
wObjballoon.className = "balloon1";
}
}
</script>


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
<div class="heroAreaIn form_bg">
</div>
</div>
<!--[/heroArea]-->

<!--[mainConts]-->
<div class="mainConts">
<ul class="breadCrumbs clearfix">
<li><a href="{{ url("/") }}">HOME</a></li>
<li><a href="{{ url("/") }}">機能一覧</a></li>
<li class="on"><h1>フォーム作成</h1></li>
</ul>
<div class="leadTxt">
<h2>いろいろ使えるメールフォームが簡単に作れる</h2>
<p><span class="pcBr">メルマガ登録フォームはもちろん、セミナー申込みフォームやアンケートフォームなど、いろいろな用途で使えるメールフォームが簡単に作れます。</span>フォームだけでなく、入力内容確認ページ、登録完了ページも自由に編集OK!</p>
</div>

<div class="point">
<div class="contsIn">
<h2 class="popTtl_icon"><span><img src="{{ asset("/images/icon_point.gif") }}" width="40" height="40" alt=""/></span><em>フォーム特長</em></h2>
</div>
</div>
<ul class="contsDtl">

<li id="qa1_01">
<div class="contsIn">
<div class="pBox_bg">
<dl class="pBox">
<dt><em class="num"><span>1</span></em></dt>
<dd><div class="box_left"><span class="boxTtl">テンプレートでキレイなフォームを簡単作成</span>
<span class="boxTxt">テンプレートを選んで入力項目を設定するだけで、デザインの良いフォームが簡単に作れます。サクっと作ってすぐに公開してメルマガ読者やお客さまを集めましょう。</span>
<span class="boxTxt boxTxt_btm">フォームやフォームのページ内容はカスタマイズOK。作りこめばランディングページとしても威力を発揮できます。</span>
<span class="boxTxt boxTxt_btm">
<a href="{{ url("images/formtemp_sample.png") }}" class="gLine" target="blank">デザインテンプレートは全18色から選べます</a><br>
<a href="https://39auto.biz/biz-create/registp.php?pid=13" class="gLine" target="blank">デザインテンプレートを使ったフォームのサンプルはこちら</a>
</div><em><img src="{{ asset("/images/form_img01.gif") }}" width="250" height="140" alt=""/></em></dd>
</dl><!--[/pBox]-->
</div><!--[/pBox_bg]-->
</div><!--[/contsIn]-->
</li><!--[/qa1_01]-->

<li id="qa1_02">
<div class="contsIn">
<div class="pBox_bg">
<dl class="pBox">
<dt><em class="num"><span>2</span></em></dt>
<dd><div class="box_left"><span class="boxTtl">パソコン・スマートフォン・携帯に対応</span>
<span class="boxTxt">パソコン、スマートフォン、携帯(フィーチャーフォン)に対応したフォームも簡単に作れます。</span></div><em><img src="{{ asset("/images/form_img03.gif") }}" width="250" height="140" alt=""/></em></dd>
</dl><!--[/pBox]-->
</div><!--[/pBox_bg]-->
</div><!--[/contsIn]-->
</li><!--[/qa1_01]-->


<li id="qa1_03">
<div class="contsIn">
<div class="pBox_bg">
<dl class="pBox">
<dt><em class="num"><span>3</span></em></dt>
<dd><div class="box_left"><span class="boxTtl">クレジットカード決済と連携して自動フォロー</span>
<span class="boxTxt">別途クレジット決済代行会社との契約が必要になりますが、フォームで有料セミナーや商品の注文を受け付け、そのままクレジットカード決済してもらうこともできます。</span>
<span class="boxTxt">（課金の種類につきましては、各決済代行会社さまにお問い合わせください。）</span>
<span class="boxTxt boxTxt_btm">
クレジットカード決済が完了した方のみに、入金確認メールを送る設定もできるので申込受付～入金フォローが全部自動化できます。</span>
<span class="boxTxt boxTxt_btm" style="padding:30px 0 5px 0;"><span class="bold">決済連携可能なサービスはこちら</span></span>
<div class="serviceLogo">
	<a href="https://www.paypal.com/jp/webapps/mpp/merchant" target="_blank"><img src="{{ asset("/images/payment_logo_paypal.gif") }}" alt="PayPal" width="168" height="50" /></a>
	<a href="https://www.univapay.com/" target="_blank"><img src="{{ asset("/images/payment_logo_ips.gif") }}" alt="UnivaPay" width="168" height="50" /></a>
	<a href="https://stripe.com/jp/" target="_blank"><img src="{{ asset("/images/payment_logo_stripe.gif") }}" alt="stripe" width="168" height="50" /></a>
	<a href="https://www.cardservice.co.jp/" target="_blank"><img src="{{ asset("/images/payment_logo_zeus.gif") }}" alt="ZEUS" width="168" height="50" /></a>
	<a href="https://www.robotpayment.co.jp/" target="_blank"><img src="{{ asset("/images/payment_logo_cloudpayment.gif") }}" style="border-radius: 6px;" alt="ROBOT PAYMENT" width="168" height="50" /></a>
	<a href="https://www.yamatofinancial.jp/wc/" target="_blank"><img src="{{ asset("/images/payment_logo_kuroneko.gif") }}" alt="クロネコWEBコレクト" width="168" height="50" /></a>
	<a href="https://www.gmo-pg.com/" target="_blank"><img src="{{ asset("/images/payment_logo_gmo.gif") }}" alt="GMO" width="168" height="50" /></a>
</div>
<span class="boxTxt boxTxt_btm">
<a href="https://univapaycast.com/autobiz/" class="gLine" target="blank">UnivaPay　オートビズユーザ特別プランについて</a><br>
<a href="https://www.cardservice.co.jp/partner/autobiz/" class="gLine" target="blank">ZEUS　オートビズユーザ特別プランについて</a><br>
<a href="{{ url("../dl/jpayment_biz.pdf") }}" class="gLine" target="blank">ROBOT PAYMENT　オートビズユーザ特別プランについて</a><br>
</span>
</div>
<em><img src="{{ asset("/images/shopping_img01.gif") }}" width="250" height="140" alt=""/></em></dd>
</dl><!--[/pBox]-->
</div><!--[/pBox_bg]-->
</div><!--[/contsIn]-->
</li><!--[/qa1_01]-->


<div class="point">
<div class="contsIn contsIn2">
<h2 class="popTtl_icon" style="margin-right: 20px;"><span><img src="{{ asset("/images/icon_point.gif") }}" width="40" height="40" alt=""/></span><em>高機能フォーム特長</em></h2>
	<div class="balloonoya" onclick="showBalloon()">高機能フォームとは？<img src="{{ asset("/../common/images/hatena.png") }}" style="vertical-align: baseline;width: 16px;height: 16px;">
  <span class="balloon1" id="makeImg">通常のフォーム作成機能とは別に、自動計算機能や動的自動返信機能などを備えた、より高機能なフォームが作成できます。</span>
</div>
</div>
</div>

          <li id="qa1_03">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>1</span></em></dt>
                  <dd>
                    <div class="box_left">
                      <span class="boxTtl">1人ひとりに合った自動返信メールが送れる</span>
                      <span class="boxTxt">フォームから登録した直後に送る「お礼メール」「申込内容確認メール」などの自動返信メールも自由に編集できます。</span>
                      <span class="boxTxt boxTxt_btm">フォームに入力・選択された内容によって自動返信メールの内容を変えられるので、お客さま一人ひとりに合った内容のメールが自動で送れます。</span>
                    </div>
                    <em><img src="{{ asset("/images/kform_img01.gif") }}" width="250" height="140" alt=""/></em>
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->

          <li id="qa1_04">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>2</span></em></dt>
                    <dd>
                      <div class="box_left">
                        <span class="boxTtl">曜日・日付・期間、時間帯によって、文章を変える</span>
                        <span class="boxTxt">例えば、定休日や営業時間外、年末年始などの長期休業中に問い合わせや注文があった場合のみ、自動返信メール内に専用のメッセージを入れることができます。</span>
                        <span class="boxTxt boxTxt_btm">休日設定をしておけば、翌営業日の日付を自動的に計算してメールに入れることもできます。メールを受け取ったお客様も、「いつ対応してくれる」といった安心感を持ってもらいやすくなります。</span>
                      </div>
                      <em><img src="{{ asset("/images/automail_img01%20(1).gif") }}" width="250" height="140" alt=""/></em>
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->

          <li id="qa1_05">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>3</span></em></dt>
                  <dd>
                    <div class="box_left">
                      <span class="boxTtl">フォームの登録内容によって、文章を変える</span>
                      <span class="boxTxt">
                        フォームの選択肢によって、メールの文章を変えることもできます。例えば、支払い方法が「銀行振込」か「クレジットカード決済」かによって振込先を記載するしないなどメールの内容を変えることができます。<br>
                        また、アンケートの選択肢によってメールで提案する商品を変えるなど、アイディア次第で色々と使えます。
                      </span>
                    </div>
                    <em><img src="{{ asset("/images/automail_img02%20(1).gif") }}" width="250" height="140" alt=""/></em>
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->

          <li id="qa1_06">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>4</span></em></dt>
                  <dd>
                    <div class="box_left">
                      <span class="boxTtl">計算機能</span>
                      <span class="boxTxt">
                        商品の合計金額を計算したり、支払い方法によって手数料を変えたりフォーム上で金額の計算もできます。<br>
						ショッピングカートシステムはいらないけど、複数の商品を同時購入させたい場合などにとても役立つ機能です。</span>
                    </div>
                    <em><img src="{{ asset("/images/form_img05%20(1).gif") }}" width="250" height="140" alt=""/></em>
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->

          <li id="qa1_06">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>5</span></em></dt>
                  <dd>
                    <div class="box_left">
                      <span class="boxTtl">条件によって登録先のメルマガを変えられる</span>
                      <span class="boxTxt">
                        フォームの入力内容等によって、登録先のステップメールやメルマガを変えることも可能です!<br>
                        よりお客様にとって興味のあるメールを読んでもらえれば、反応率もアップします。</span>
                    </div>
                    <em><img src="{{ asset("/images/automail_img03%20(1).gif") }}" width="250" height="140" alt=""/></em>
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->

	<li id="qa1_08">
            <div class="contsIn">
              <div class="pBox_bg">
                <dl class="pBox">
                  <dt><em class="num"><span>6</span></em></dt>
                  <dd>
                    <div class="box_left"><span class="boxTtl">メールフォームが1000個作れる</span>
                    <span class="boxTxt">高機能なメールフォーム＋自動返信は1000個まで作成可能です。思い立ったとき、制限を気にせずにアイディアを形にできます。</span>
                    <span class="boxTxt boxTxt_btm">※ステップメールの「シナリオ」も1000個まで作成可能です。
                  </dd>
                </dl><!--[/pBox]-->
              </div><!--[/pBox_bg]-->
            </div><!--[/contsIn]-->
          </li><!--[/qa1_01]-->
        </ul>

<li class="video txaC"><div class="videoInner"><p>お問い合わせフォーム設定例</p><div class="videoBox"><iframe width="560" height="315" src="https://www.youtube.com/embed/0lRtyEVsoG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div></li>

</ul>

<div class="listConts">
<div class="contsIn">
<h2 class="popTtl_icon"><span><img src="{{ asset("/images/icon_form.gif") }}" width="40" height="40" alt=""/></span><em>フォーム作成機能一覧</em></h2>

<dl class="list_Box list_Box1">
<dt>フォームの入力項目数</dt>
<dd>通常フォームは15個（姓、名、メールアドレス、フリー項目12個）、高機能フォームは53個（姓、名、メールアドレス、フリー項目50個）まで設定できます。</dd>
</dl>


<dl class="list_Box">
<dt>デザインテンプレート</dt>
<dd>フォームのデザインテンプレートをご用意しているので、きれいなフォームが簡単に作れます。テンプレートを使わず、自分で細かく設定することもできます。</dd>
</dl>


<dl class="list_Box">
<dt>PC・携帯・スマホ対応</dt>
<dd>どの端末からフォームにアクセスしても見やすいフォームのURLを発行できます。</dd>
</dl>


<dl class="list_Box">
<dt>空メール登録/解除対応</dt>
<dd>キャリアメールアドレスの他、Gmail、Yahoo!メールでも空メールの登録や解除が可能です。QRコードも簡単に作成できます。</dd>
</dl>


<dl class="list_Box">
<dt>登録制限</dt>
<dd>特定のメールアドレスやドメインからの登録をブロックするブラックリスト機能や、登録人数を設定した登録制限が可能です。重複アドレスの登録も制限できます。</dd>
</dl>


<dl class="list_Box">
<dt>登録/解除通知</dt>
<dd>フォームからの登録やメールの配信解除があった際、指定のメールアドレス宛に通知を送る機能があります。</dd>
</dl>


<dl class="list_Box">
<dt>住所検索</dt>
<dd>フォームで住所を入力させる際、郵便番号から住所を自動入力する機能です。</dd>
</dl>


<dl class="list_Box">
<dt>ダブルオプトイン</dt>
<dd>登録直後のメールでオプトイン用のURLを送信し、URLをクリックしたアドレスにのみ配信を開始できます。メールアドレスの存在確認、成りすまし登録対策の手段としても有効です。必ず届くメールアドレスにメールを配信できます。</dd>
</dl>

<dl class="list_Box">
<dt>登録者情報変更（追加）URL</dt>
<dd>登録者自身で登録情報（メールアドレスなど）を変更できるURLをメールに挿入できます。情報を追加したらメールを再開させることもできるので、空メール登録後、名前や誕生日などを追加入力してもらう仕組みも作れます。</dd>
</dl>

<dl class="list_Box">
<dt>英語化対応</dt>
<dd>エラーメッセージやボタンの表記等を英語にできるので、英語圏向けサービスでもご利用いただけます。</dd>
</dl>


<dl class="list_Box">
<dt><span class="pcBr">フォームHTML</span>ソース発行</dt>
<dd>オートビズで作ったフォームを、自社サイトやブログ、ワードプレス等に設置するためのHTMLソースを発行できます。</dd>
</dl>

<dl class="list_Box">
<dt>完了ページ作成</dt>
<dd>フォームから登録があった後に表示する完了ページは自由に編集していただけます。Googleアナリティクスやリスティング広告、アフィリエイトのコンバージョンタグ等、外部サービスで発行されるコードの貼り付けも可能です。登録完了後、自社サイトをそのまま表示させることもできます。</dd>
</dl>

<dl class="list_Box">
<dt>クレジット決済連携</dt>
<dd>注文フォームにクレジットカード決済を取り入れれば、決済を完了した人だけに自動で決済完了後のメールを送ることができます。入金フォローを自動化できれば、手間は軽減され、顧客の満足度はアップします。<br>
<span class="note">※別途クレジット決済代行会社との契約が必要です。</span></dd>
</dl>

<dl class="list_Box">
<dt>動的自動返信</dt>
<dd>指定した時間帯・曜日・日にち・期間、フォームの入力内容などによって自動返信内容を変えることができます。<br>
</dd>
</dl>

<dl class="list_Box">
<dt>計算</dt>
<dd>合計金額を計算するなど、フォームに入力された値で自動計算できます。<br>
</dd>
</dl>

<dl class="list_Box">
<dt>ファイル送信</dt>
<dd>フォームから画像などのファイルを添付して登録をしてもらうことができます。<br>
</dd>
</dl>

<dl class="list_Box">
<dt>SSL対応</dt>
<dd>フォームに入力された登録データは暗号化されて送信されます。自動作成されるページは、信頼性の高いノートン（旧シマンテック）社のSSLサーバ証明書による暗号化通信対応です。<br>
	※ハイエンドプランはジオトラスト社のSSLサーバー証明書になります。</dd>
</dl>


</div><!--[/contsIn]-->
</div><!--[/listConts]-->

<div class="contsIn">
<div class="funcLink">
<ul>
<li><a href="{{ url("stepmail.html") }}" class="gLine">ステップメール配信</a></li>
<li><a href="{{ url("rmh.html") }}" class="gLine">メルマガ配信</a></li>
<li><a href="{{ url("line.html") }}" class="gLine">LINE配信</a></li>
<li><a href="{{ url("other.html") }}" class="gLine">その他機能</a></li>
</div>
</div>


<p class="linkBtn"><a href="{{ url("index-2.html") }}" class="gBtn">全機能一覧をみる</a></p>


<div class="contactArea">
<dl class="contactResi clearfix">
<!--<dt><em class="decTxt"><span>即日利用可</span></em></dt>-->
<dd><a href="{{ url("price") }}" class="regiBtn"><span>お申し込みはこちら</span></a>
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

<div class="requestDocuments"><a href="{{ url("form-request") }}" target="_blank" rel="noopener">資料を<br>請求する</a></div>
<div class="gotop"><a href="{{ url("#") }}">トップへ<br>戻る</a></div>
</div>
</body>


</html>
