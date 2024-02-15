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
  <title>迷惑メール報告 | お問い合わせ | メルマガ配信スタンド『オートビズ』</title>
  <link rel="shortcut icon" href="{{ asset("/../favicon/favicon.ico") }}">
  <meta name="Keywords" content="" />
  <meta name="Description" content="メルマガ配信スタンド『オートビズ』『オートビズプロ』より配信された迷惑メールを受信された方は、当フォームからご報告をお願いいたします。" />

  <!-- OGP（facebook用など）-->
  <meta property="og:title" content="迷惑メール報告 | お問い合わせ | オートビズ" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="spam_repo.html" />
  <meta property="og:image" content="../images/hero_bg.jpg" />
  <meta property="og:site_name" content="オートビズ" />
  <meta property="og:description" content="メルマガ配信スタンド『オートビズ』『オートビズプロ』より配信された迷惑メールを受信された方は、当フォームからご報告をお願いいたします。" />
  <!-- /OGP（facebook用など） -->

  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'" />

  <link rel="stylesheet" href="{{ asset("/../common/css/commona8b2.css?20240117-1721") }}" type="text/css">
  <link rel="stylesheet" href="{{ asset("/../common/css/2nd_commona8b2.css?20240117-1721") }}" type="text/css">
  <script type="text/javascript" src="{{ asset("/../common/js/jquery-1.11.3.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/../common/js/common.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/../common/js/2nd_common.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/../common/js/jquery.heightLine.js") }}"></script>

  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://autobiz.jp/common/js/selectivizr-min.js"></script>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[Page Org]-->
  <link rel="stylesheet" href="{{ asset("/css/layouta8b2.css?20240117-1721") }}" type="text/css">
  <script type="text/javascript" src="{{ asset("/js/page.js") }}"></script>

  <!--[/Page Org]-->
</head>

<body class="inquiry spam">
  <div class="wrapper">
    <!--[continer]-->
    <div class="continer">
      <!--[heroArea]-->
      <!--<div class="heroArea">
        <div class="heroAreaIn">
        </div>
      </div>-->
      <!--[/heroArea]-->

      <!--[mainConts]-->
      <div class="mainConts">
        <ul class="breadCrumbs clearfix">
          <li><a href="{{ url("/") }}">HOME</a></li>
          <li><a href="{{ url("inquired.blade.php") }}">お問い合わせ</a></li>
          <li class="on"><h1>迷惑メール報告</h1></li>
        </ul><!--<div class="twelve columns" style="margin-bottom:40px;">
<div style="text-align:center; background:#f2dede; border:solid 4px #d00000; padding:15px;color:#a94442; font-weight: bold;">
誠に勝手ながら、下記の日程において年末年始休業とさせていただきます。<br>
<span class="red"><strong>休業日：2023年12月28日（木）～2024年01月04日（木）</strong></span><br />
<br />
休業中にいただいたお問合せやお申込みの対応等は翌営業日以降となりますのでご了承ください。
</div>
</div>-->
        <div class="leadTxt">
          <h2 class="mgB10">迷惑メール報告フォーム</h2>
          <p class="mgB50">
            弊社メール配信サービスより配信された迷惑メールを受信された場合は、以下のフォームよりご報告ください。<br>
            <em class="bold txtL txtRed">個人情報取り扱いの規定上、弊社側での配信解除は行えません。</em>
          </p>
          <p>以下についてご確認いただき、ご報告をお願いいたします。</p>
        </div>
      </div>

      <ul class="contsDtl">
        <li>
          <div class="contsIn">
            <div class="stepBlk">
              <div class="stepBlkIn no1">
                <h3>弊社システムから配信されたメールであることをご確認ください。</h3>
                <ol class="linkList">
                  <li><a href="{{ url("mail_header.blade.php") }}" target="_blank">ヘッダー情報の確認方法について</a></li>
                </ol>
                <p>ヘッダー情報が確認できない場合は、【2】へお進みください。</p>
              </div>

              <div class="stepBlkIn no2">
                <h3>メール内に記載されている配信解除URLから、配信解除をお願いいたします。</h3>
                <div class="whBox">
                  <h4>【メールの配信解除について】</h4>
                  <p class="mgB10">
                    配信されたメールに記載されている下記形式のURLは、当システムが提供する配信解除URLです。<br>
                    http://ab○○○.biz/brd/○○/○○○○/mail_cancel.php?cd=○○○○○○○○
                  </p>
                  <p class="mgB10">
                    解除URLをクリックすると、「配信解除」ボタンからメールの解除ができますので、ご安心ください。
                  </p>
                  <ol class="linkList mgB30">
                    <li><a href="{{ url("../../biz-create.jp/img/biz_mailcancel.gif") }}" target="_blank">解除URLクリック後に表示される画面</a></li>
                  </ol>
                  <p>一度解除をすると、弊社システム上でも配信解除になるため、通常、メールは送られなくなります。</p>
                  <p>それでもメールが送られてくる場合は、本フォームからご報告をお願いいたします。</p>
                </div>
              </div>
              <div class="stepBlkIn no3">
                <h3>ご報告をいただいても、個人情報取り扱いの規定上、弊社側での配信解除は行えません。</h3>
                <p>また、ご報告いただいても必要な場合を除いて弊社からの返信はございません。</p>
              </div>
            </div>
          </div><!--[/contsIn]-->
        </li>

        <li>
          <div class="contsIn">
            <div class="leadTxt">
              <p class="mgB50">上記3点にご了承いただけましたら、本フォームからご報告をお願いいたします。<br>ご報告いただいた内容を元に調査を行い、利用規約違反が認められた場合はサービスの停止や契約解除など、厳しく対処させていただきます。</p>
            </div>

            <form id="form1" name="form1" method="post" action="https://24auto.biz/powerbiz/responder.php">
              <input type="hidden" name="mcode" value="UTF-8" />
              <input type="hidden" name="tno" value="184" />
              <input type="hidden" name="fld10" value="http://autobiz.jp/inquiry/inquired.htm" />
              <div class="spamList">
                <h3>ご報告者さまの情報</h3>
                <dl>
                  <dt>お名前<span class="txtRed">（必須）</span></dt>
                  <dd><input type="text" name="name1" size="30" /><span class="formNote">※「全角」でお願いします</span></dd>
                </dl>
                <dl>
                  <dt>ご連絡先メールアドレス<span class="txtRed">（必須）</span></dt>
                  <dd><input size="30" type="text" name="email" /><span class="formNote">※「半角英数」でお願いします</span></dd>
                  </dl>
                <dl>
                  <dt>迷惑メールを受信したメールアドレス<span class="txtRed">（必須）</span></dt>
                  <dd><input size="30" type="text" name="fld1" /><span class="formNote">※「半角英数」でお願いします</span></dd>
                </dl>
                <dl class="list100" style="border-bottom:none;">
                  <dt>
                  メールアドレスの開示について</dt>
                  <dd>
                    <p class="mgB30">開示いただける場合は、該当ユーザーに対して、受信メールアドレスへの配信解除等を要請します。開示いただけない場合、配信ユーザーへの配信解除依頼や利用状況の詳細な調査が行えません。</p>
                    <input type="checkbox" name="fld7[]" value="開示を許可する" id="fld7" />
                    <label for="fld7" class="bold">「迷惑メールを受信したメールアドレス」を配信者に開示することを許可します。</label>
                  </dd>
                </dl>
              </div>

              <div class="spamList">
                <h3>受信した迷惑メールの情報</h3>
                <dl>
                  <dt>差出人メールアドレス<span class="txtRed">（必須）</span></dt>
                  <dd>
                    <input type="text" name="fld9" size="30" />
                    <span class="formNote">※「半角英数」でお願いします</span>
                  </dd>
                </dl>
                <dl class="list100">
                  <dt>迷惑メールのヘッダー情報<span class="txtRed">（必須）</span></dt>
                  <dd>
                    <p class="mgB10 txtS">
                      ヘッダー情報の確認方法は<a href="https://biz-create.jp/html/mail_header.htm" target="_blank">こちら</a>をご覧ください。<br>
                      貼り付けたヘッダー情報は編集しないようお願いいたします。<br>
                      ヘッダー情報が分からない場合は、メールの件名と受信した日時の入力をお願いいたします。
                    </p>
                    <textarea name="fld2" cols="50" id="fld2" rows="10"></textarea>
                  </dd>
                </dl>

                <dl class="list100">
                  <dt>迷惑メールの本文<span class="txtRed">（必須）</span></dt>
                  <dd>
                    <p class="mgB10 txtS">調査に必要なため、メール本文のはじめから終わりまで全て貼り付けてください。</p>
                    <textarea name="fld3" cols="50" id="fld3" rows="10"></textarea>
                  </dd>
                </dl>

                <dl class="list100">
                  <dt>迷惑メールの状況に該当するものにチェックをしてください<span class="txtRed">（必須）</span></dt>
                  <dd>
                    <ol class="checkArea">
                      <li><input type=checkbox name=fld5[] value="登録した覚えのないメールが送られて来る。" id="fld5_1" /><label for="fld5_1">登録した覚えのないメールが送られてくる。</label></li>
                      <li><input type=checkbox name=fld5[] value="無料レポート等へ登録後、関係のないメールが送られて来る。" id="fld5_2" /><label for="fld5_2">無料レポート等へ登録後、関係のないメールが送られて来る。</label></li>
                      <li><input type=checkbox name=fld5[] value="配信解除した後もメールが送られてくる。" id="fld5_3" /><label for="fld5_3">配信解除した後もメールが送られてくる。</label></li>
                      <li><input type=checkbox name=fld5[] value="配信解除方法が記載されていない。" id="fld5_4" /><label for="fld5_4">配信解除方法が記載されていない。</label></li>
                      <li><input type=checkbox name=fld5[] value="その他" id="fld5_6" /><label for="fld5_6">その他　（詳細は備考欄にご記入ください）</label></li>
                    </ol>
                  </dd>
                </dl>

                <dl class="list100">
                  <dt>備考</dt>
                    <dd>
                      <p class="mgB10 txtS">配信者とのメールのやりとり等がありましたら貼り付けてください。</p>
                      <textarea name="fld4" cols="50" id="fld4" rows="10"></textarea>
                    </dd>
                </dl>
              </div>

              <div class="agreeArea">
                <ol class="linkList">
                  <li><a href="https://abmng.net/policies/policy6.htm" target="_blank">別ウィンドウで開く</a></li>
                </ol>
                <div class="ifArea">
                  <iframe src="https://abmng.net/policies/policy6.htm" width="100%" id="policy"></iframe>
                </div>
                <div class="agreeCk">
                  <input type="checkbox" name="fld8[]" value="同意する" id="fld8"><label for="fld8">上記の個人情報の取扱いについて同意する</label>
                </div>
                <div class="agreeBtn">
                  <button type="submit" name="sbm" value="確認画面へ" ><em>迷惑メールを報告する</em></button>
                </div>
              </div>
            </form>

            <div class="sslAreaM clearfix">
              <!--SSL-->
              <table width="135" border="0" cellpadding="2" cellspacing="0" title="このマークは、SSLで通信を保護している証です。" style="width:100%;margin:20px auto;">
                <tr>
                  <td width="135" align="center" valign="top" style="border:none">
                  <span id="ss_gmo_img_wrapper_100-50_image_ja">
                    <a href="https://jp.globalsign.com/" target="_blank" rel="nofollow">
                    <img alt="SSL　GMOグローバルサインのサイトシール" border="0" id="ss_img" src="{{ asset("/../../seal.globalsign.com/SiteSeal/images/gs_noscript_100-50_ja.gif") }}">
                    </a>
                  </span>
                  <script type="text/javascript" src="{{ asset("/../../seal.globalsign.com/SiteSeal/gmogs_image_100-50_ja.js") }}" defer="defer"></script>
                  </td>
                </tr>
              </table>
              <!--/SSL-->
            </div>

          </div><!--[/contsIn]-->
        </li>
      </ul>
    </div>
    <!--[/continer]-->

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
