<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>生協・通販事業 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Coop">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="breadcrumbs">
            <ul class="">
              <li>
                <a href="/coop/">CO-OP</a>
              </li>
              <li>
                <a href="/coop/">生協・通販事業</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="info_cont">
            <div class="info_head">
              <h3>時代とライフスタイルに合ったオリジナル商品を開発</h3>
              <p>家庭向け調理・食卓用品を中心に、インテリア用品、小物などを全国の生活協同組合様や通販事業者様にご提供しています。お客様のニーズに応じたオリジナル商品の開発も行っています。当社との新規取引をご検討いただける企業様には資料をお送りしています。</p>
            </div>
            <div class="img_cont">
              <img src="/images/coop/img_1.png" alt="">
              <img src="/images/coop/img_2.png" alt="">
            </div>
            <div class="info_item">
              <h4>〔 調理・食卓用品 〕</h4>
              <p>皿、茶碗、箸、湯飲みなど日常使いの食器や調理道具をはじめ、職人による手づくりの数量限定商品も取り扱っています。</p>
            </div>
            <div class="info_item">
              <h4>〔 オリジナル商品開発 〕</h4>
              <p>消費者のライフスタイルに合った魅力ある調理・食卓用品を企画・開発しています。<br>
                  耐熱陶器のグリルプレートなど、耐熱商品を得意としています。</p>
            </div>
            <div class="info_item">
              <h4>〔 インテリア小物、季節商品 〕</h4>
              <p>インテリア用品、仏壇用品、正月飾りなども生協・通販の人気商品となっています。</p>
            </div>
            <div class="info_item">
              <h4>〔 地域の発展のために 〕</h4>
              <p>地元メーカーやアーティストと連携し、地域振興につながる新商品を開発しています。</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4>■ 遠州綿紬</h4>
              <p>静岡県浜松市を中心に生産されている遠州綿紬を使ったトートバッグ、保険証カバー、茶筒などを取りそろえています。</p>
            </div>
            <div class="col">
            <h4>■ 福田町のコーデュロイ</h4>
              <p>静岡県西部の旧磐田郡福田町（現 磐田市）で全国の95％以上が生産されていると言われるコーデュロイ生地。そのコーデュロイを使ったトートバッグやエプロンをラインナップしています。</p>
            </div>
            <div class="col">
            <h4>■ 静岡県内のアーティスト</h4>
              <p>
              静岡県内の障害をお持ちの作家とのコラボレーションを進めています。代表的な作品をデザインに用いて小物類などの商品を開発し、販売の収益はアーティストが所属するNPO法人に還元します。<br>
              〈協力アーティスト〉<br>
              山口健太、安間佐恵 ほか
              </p>
            </div>
          </div>
          <div class="info_btm">
            <h4>〔 ネット通販 〕</h4>
            <p>
              Amazon、楽天で調理道具や生活用品を販売しています。<br>
              幅広い商品を取りそろえることが可能なセイトウの強みを活かし、一般消費者が楽しめるサイトづくりを進めています。
            </p>
            <ul>
              <li>
                <a href="">
                  <img src="/images/common/img_1.png" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="/images/common/img_2.png" alt="">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="footer_breadcrumbs pc">
        <div class="wrapper">
          <ul>
            <li>
              <a href="/">TOP</a>
            </li>
            <li>
              <a href="/company/">会社案内</a>
            </li>
            <li>
              <a href="/business/">事業内容</a>
            </li>
            <li>
              <a href="/coop/">生協・通販事業</a>
            </li>
          </ul>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
