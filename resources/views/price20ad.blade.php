<!DOCTYPE html>

<html lang="ja">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>メルマガ配信スタンド『オートビズ』 ステップメール配信・メール自動応答・一斉送信</title>
<link rel="shortcut icon" href="{{ asset("/favicon/favicon.ico") }}">
<meta name="Keywords" content="ステップメール,メール配信システム,メール自動配信,ASP,携帯,一斉配信,メルマガ配信,メルマガスタンド" />
<meta name="Description" content="高い到達率のメルマガ配信スタンド『オートビズ』。ステップメール配信やメール自動応答、一斉送信が可能。クレジット決済連携など多彩な機能が満載のメール配信システム" />

<!-- OGP（facebook用など）-->
<meta property="og:title" content="メルマガ配信スタンド『オートビズ』 ステップメール配信・メール自動応答・一斉送信" />
<meta property="og:type" content="website" />
<meta property="og:url" content="index.php" />
<meta property="og:image" content="images/hero_bg.jpg" />
<meta property="og:site_name" content="オートビズ" />
<meta property="og:description" content="高いメール到達率でメルマガ配信＆ステップメール配信！携帯・スマホにも対応。クレジット決済連携など他には無い機能が満載のメール配信システム" />
<!-- /OGP（facebook用など） -->

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'" />

<link rel="stylesheet" href="{{ asset("/common/css/commona8b2.css?20240117-1721") }}" type="text/css">
<link rel="stylesheet" href="{{ asset("/common/css/top3.css") }}" type="text/css">
<script type="text/javascript" src="{{ asset("/common/js/jquery-1.11.3.min.js") }}" defer></script>
<script type="text/javascript" src="{{ asset("/common/js/commona8b2.js?20240117-1721") }}" defer></script>

<style>
.yearsAnniversary {
	margin-top: -90px;
	margin-bottom: 20px;
}

.line_bn{
margin-top: 0px;
	}

	.reasonBlk_img{
	display: flex;
    align-items: center;
	}

	.reasonBlk .text {
    margin: 30px 0;
    max-width: 800px;
}
@media (max-width: 800px) {
.yearsAnniversary {
	margin-top: 0px;
}

.reasonBlk_img{
	display: flex;
    justify-content: space-evenly;
	}
	}

@media (max-width:480px){

		.line_bn{
			margin-top:0px;
			font-size: 18px;
		}
		.line_bn img{
			display: none;

		}
		.line_bn p{
			display: none;

		}
	}

/*モーダル表示用*/
.pc { display: block !important; }
.sp { display: none !important; }
.modal {
  display: none;
  position: fixed;
  z-index: 10;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  margin: 15% auto;
  padding: 20px;
  max-width: 350px;
  border-radius: 5px;
  text-align: center;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

@media (max-width:480px){
.pc { display: none !important; }
.sp { display: block !important; }

.modal-content {
  margin: 15% auto;
  padding: 20px;
  max-width: 300px;
  border-radius: 5px;
  text-align: center;
}
}

</style>
</head>

<body class="home">
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
<div class="heroAreaIn">
<div class="contArea">
<h1 class="noto700" style="display: none;"><em>｢ご縁を育む｣</em>メルマガスタンド　オートビズ</h1>
<ul class="btnWhats">
<img src="{{ asset("/images/topcopy_231206.gif") }}" alt="「ご縁を育む」メルマガスタンド　AutoBiz">
<li class="subtitle">＼寄り添うサポートが大好評／</li>
<li>
<dl class="contactResi clearfix">
<dd><a href="{{ url("price") }}" class="hdBtn" style="padding: 10px 0px 10px 0px;"><span>今すぐ申し込む</span></a>
</dd>
</dl>
</li>
</ul>
</div>
</div>
</div>
<!--[/heroArea]-->

<!--[reasonBlk]-->
<div class="reasonBlk">
    <div class="wrapWhite">
        <div class="yearsAnniversary" >
            <img src="{{ asset("/images/fvcatchcopy.png") }}" width="700.984" height="212.891" alt="20years">
        </div>
        <div class="contsIn">
            <h2>オートビズが選ばれる理由と他との違い</h2>
        <div class="leadStory">
            <p>2002年サービス開始から現在に至るまで、変化に順応しながらご利用者様とともに進化し続けてきました。メールマーケティングシステムの老舗として確かな実績があります。</p>
        </div>
    </div>
</div>
<div class="wrapgray">
<div class="reasonBlk flex nth-child1">
 <div class="reasonBlk flex center">
  <div class="reasonBlk_img item">
    <img src="{{ asset("/images/reasonblk_img04.png") }}">
  </div>
  <div class="reasonBlk text item">
    <h3>困ったらすぐに電話で聞ける！ <em>寄り添うサポート</em></h3>
<p class="leadTxt">手厚い電話サポートがオートビズの一番の売りです。<br>
専門のスタッフが親身にサポートいたします。<br>
	<br>
	<b>（ユーザーの声）</b><br>
・他社も使ってきましたがサポートの手厚さは断トツです。（I.M様　40代男性）<br>
・アナログなわたしにもわかるように、電話で根気よくサポートして下さる（M.K様　50代女性）<br>
・とにかく電話サポートが親切丁寧で、毎回神対応で感動的です。これは人に紹介する時にも、いつもお伝えしています。（M.O様 40代女性）</p>
  </div>
	</div>
</div>

<div class="reasonBlk flex nth-child2">
<div class="reasonBlk flex center">
  <div class="reasonBlk_img item">
    <img src="{{ asset("/images/reasonblk_img03.png") }}">
  </div>
  <div class="reasonBlk text item">
	<h3>月1,815円～ <em>リーズナブルな料金プラン</em></h3>
<p class="leadTxt">「ご利用者様のビジネスを支援したい」その想いから、徹底的に業務効率化をはかり、低価格を実現。
	<BR>
ステップメール、メルマガ、フォーム作成、LINE連携が導入でき、さらに全プラン電話サポート付き。<BR>
<BR>
わかりやすいプラン設定なので、安心してお使いいただける点もポイント。<BR>
<BR>
「安かろう悪かろう」ではなく、「安くて高品質」なサービスをお届けします。</p>
  </div>
 </div>
</div>

<div class="reasonBlk flex nth-child3">
 <div class="reasonBlk flex center">
  <div class="reasonBlk_img item">
    <img src="{{ asset("/images/reasonblk_img02.png") }}">
  </div>
  <div class="reasonBlk text item">
    <h3>きっちり届けば成果も違う! <em>高いメール到達率</em></h3>
<p class="leadTxt">20年以上の運用実績で培った、独自のノウハウとシステムでメールを確実に顧客に届けます。<br>
<br>
	<b>（ユーザーの声）</b><br>
・到達率の高さをありがたく感じています。開封率が70%以上をキープできているのはオートビズさんのおかげです。（M.S様　40代女性）<br>
・メルマガを書くのに、到達率が高いと聞いたのでここにしました。（A.M様　40代女性）<br>
・メールの到達率、開封率が上がりました（E.K様　50代女性）<br>
<br>
<br>
「オートビズを使うと開封率が上がった」「読者から返信をもらうことが多くなった」等、たくさんの方から届いている証拠をいただけております。<br>
<br>
一通のメールの重みや、メールを通して築いたお客様との関係性の価値を心得ているからこそ、あなたのメールが届くよう、尽力いたします。</p>
  </div>
	</div>
</div>

<div class="reasonBlk flex nth-child4">
<div class="reasonBlk flex center">
	<div class="reasonBlk_img item">
    <img src="{{ asset("/images/reasonblk_img06.png") }}">
		</div>
  <div class="reasonBlk text item">
    <h3>シームレスな情報発信で資産構築 <em>LINE×メール</em></h3>
<p class="leadTxt">オートビズに登録されている読者（メールアドレス）とLINEの友だちを紐づけることができます。<br>
これにより、シームレスにオートビズからメールとLINEを送れるようになります。<br>
<br>
また、友だちとメールアドレスを紐づけておくことで、LINE公式アカウントが凍結された場合のリスクヘッジにもなります。<br>
<br>
顧客一人ひとりと築いた関係性はかけがえのない資産です。<br>
オートビズを使えば、プラットフォームに依存しない資産構築ができるのが最大の強みです。</p>
  </div>
	</div>
</div>
</div>
<a href="{{ url("reason2") }}" class="gBtn">選ばれる理由</a>
</div>
<!--[/reasonBlk]-->

<!--[systemBlk]-->
<div class="systemBlk">
<!--[wrapWhite]-->
<div class="wrapWhite">
<div class="systemBlk contsIn">
<h2>オートビズの機能</h2>
<div class="leadStory">
<p class="mgB10">オートビズはサービス提供開始以来、ご利用者様の声を元に、様々な実践的な機能を拡充してきました。ビジネスを劇的に「進化」させる機能が満載です。</p>
</div>
</div>
</div>
<!--[/wrapWhite]-->
<div class="wrapgray">
<div class="system_content">
<div class="img_box">
<img src="{{ asset("/images/systemblk_img01.jpg") }}" alt="">
</div>
	<div class="blue"><div class="system_text"><h3>メールフォーム</h3><p>メールフォームとは、Webサイトに設置されたフォームに、お客様が直接テキストを入力し、送信できる機能のことです。メルマガ登録フォームや問い合わせ・アンケート、イベント・セミナーの参加申し込みなど、さまざまなシーンで活用できます。<br>
<br>
オートビズでは、テンプレートを使って綺麗なフォームを簡単に作成できたり、クレジットカード決済連携で、ちょっとしたカート機能にも対応できます。</p></div>
</div>
	</div>


<div class="system_content">
<div class="img_box">
<img src="{{ asset("/images/systemblk_img02.jpg") }}" alt="">
</div>
<div class="lightblue"><div class="system_text"><h3>ステップメール</h3><p>ステップメールとは、あらかじめ用意した複数のメールを1通目から順番に自動配信する機能のことです。<br>
お客さまが資料請求や商品購入した日を起算日として、事前に設定したスケジュールに沿ってメール配信をスタートできます。<br>
<br>
見込み客へのセールスを自動化し、売上をあげる仕組みを作ったり、顧客へのフォローを自動化し、リピーターの数（LTV）を伸ばしたり、アイディア次第で様々なことができます。</p></div>
</div>
	</div>

<div class="system_content">
<div class="img_box">
<img src="{{ asset("/images/systemblk_img03.jpg") }}" alt="">
</div>
<div class="blue"><div class="system_text"><h3>メルマガ</h3><p>メルマガとは、「メールマガジン」の略称で、製品やサービスに関する情報発信を行い、読者（見込み客や顧客）との関係構築を図るコミュニケーション手法のひとつです。<br>
<br>
メルマガ配信を続けることで、読者とのご縁を育み、ファンを増やしていく。<br>
売り込まなくても自然と売れるようにできるのが、メルマガ最大の強みです。</p></div>

</div>
	</div>
	<div class="system_content">
<div class="img_box">
<img src="{{ asset("/images/systemblk_img04.jpg") }}" alt="">
</div>
	<div class="lightblue"><div class="system_text"><h3>LINE配信</h3><p>LINE連携とは、オートビズとLINE公式アカウントを連携することで、オートビズからLINEを配信できる機能のことです。<br>
オートビズに登録されているメールアドレスとLINE公式アカウントに友だち登録されているユーザーを紐づけることができ、メールとLINEの両方からアプローチが可能になります。<br><br>
LINEの高い到達率と開封率を活かすことで、必ずお知らせしたいメッセージなどを読んでもらうことができます。
</div>
</div>
	</div>
<p><a href="{{ url("function2") }}" class="gBtn">機能一覧</a></p>

<!--[/wrapBlue]-->
</div>
<!--[/systemBlk]-->


<!--[voiceBlk]-->
<div class="voiceBlk">
<!--[wrapWhite]-->
<div class="wrapWhite">
<div class="voiceBlk contsIn">
<h2>ご利用者様の声</h2>
<div class="leadStory">
<p class="mgB20">オートビズを最大限に活用し、お客様と「ご縁を育んでいる」ご利用者様の声をご紹介します。</p>
	<p>　</p>
</div>
</div>
</div>
<!--[/wrapWhite]-->
<!--[wrapgray]-->
<div class="wrapgray">
<div class="voiceBLK_blue">
<ul class="voiceBLK_content">
<li class="voiceBLK_content user"><img src="{{ asset("/review/images/detail01_top_img.png") }}" width="142" height="142" alt=""/><div>株式会社<br>キャリッジウェイ・コンサルティング<br>代表取締役　今井孝 様</div></li>
<li class="voiceBLK_content title">集客にもフォローにも、24時間ずっと自動的に機能してくれていますので、本当に助かっています。</li>
</ul>
	</div>

<div class="voiceBLK_lightblue">
<ul class="voiceBLK_content">
<li class="voiceBLK_content user"><img src="{{ asset("/review/images/detail04_top_img.png") }}" width="142" height="142" alt=""/><div>東ちひろのマザーズセラピー<br>東 ちひろ 様</div></li>
<li class="voiceBLK_content title">電話サポートのおかげで簡単に設定できるようになりました。<br>
メルマガを配信できてからは読者が１４００名になり、有料相談の成約も増えています。</li>
</ul>
	</div>

<div class="voiceBLK_blue">
<ul class="voiceBLK_content">
<li class="voiceBLK_content user"><img src="{{ asset("/review/images/detail10_top_img.png") }}" width="142" height="142" alt=""/><div>株式会社イーキャラット<br>阿部 真由美 様</div></li>
<li class="voiceBLK_content title">なんといっても迷惑メール対策に力を注がれているところが魅力です。<br>
労力と時間をかけて成約率の高い文章を書いても、届かなかったら意味がないんですよね。</li>
</ul>
	</div>
	</div>
<p><a href="{{ url("review") }}" class="gBtn">利用者の声一覧</a></p>
</div>

<!--[/wrapBlue]-->



<!--[topNews]-->
<div class="topNews">
<div class="contsIn">
<div class="newsTtl"><img src="{{ asset("/images/top_news_ttl.jpg") }}" width="168" height="168" alt="NEWS"/><em>NEWS</em></div>
<ul>

<!--<li><em>ゴールデンウィーク休業のお知らせ</em>誠に勝手ながら、下記の日程において年末年始休業とさせていただきます。<br>
<b>　休業日：2023年4月29日(土)～2023年5月7日(日)</b><br>
お問合せへの対応は【2023年5月8日(月)】以降となりますのでご了承ください。</em></li>-->
<li><em>2023.10.01  インボイス制度に対応いたしました（登録番号：T6070001012255）</em></li>
<li><em>2023.04.28  サービスサイトを統合いたしました</em></li>
<li><em>2022.10.03   サービス画面のUI変更と名称変更のお知らせ<br>
「パワーステップメール」が画面も新たに「オートビズプロ」に生まれ変わりました！</em></li>
<li><em>2022.09.07　クレジット決済サービス「Stripe」との連携機能をリリース！</em></li>
<li><em>2022.05.12　ステップメールの開封率測定機能をリリース！</em></li>
</ul>

</div>
</div>

<!--[/topNews]-->
</div>

<div class="contactArea">
<dl class="contactResi clearfix">
<!--<dt><em class="decTxt"><span>即日利用可</span></em></dt>-->
<dd><a href="{{ url("price") }}" class="regiBtn"><span>お申し込みはこちら</span></a>
</dd>
</dl>

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
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
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

<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <a href="price/index20ad.html?utm_source=modal&amp;utm_medium=banner&amp;utm_campaign=2309">
      <img src="{{ asset("/images/popup_pc.png") }}" class="pc">
      <img src="{{ asset("/images/popup_sp.png") }}" class="sp">
    </a>
  </div>
</div>

<script>
var modal = document.getElementById("modal");
var closeBtn = document.getElementsByClassName("close")[0];
var today =new Date();
var day = today.getDate();
var startDate = 1;
var endDate = 15;

if (day >= startDate && day <= endDate) {
  modal.style.display = "block";
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>


</html>
