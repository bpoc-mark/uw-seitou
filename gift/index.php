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

  <title>ギフトショップ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Gift">
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
                <a href="/history/">GIFT SHOP</a>
              </li>
              <li>
                <a href="/history/">ギフトショップ</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <ul>
            <li>
              <a href="/kitchen/" <?php if ($str[1] == "kitchen") {
												echo ' class="here"';
											} ?>>キッチングッズ</a>
            </li>
            <li>
              <a href="/gift/" <?php if ($str[1] == "gift") {
												echo ' class="here"';
											} ?>>ギフトショップ</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <h3>ギフト専門店 「ギフトピュア」<br></h3>
              <span>GIFT PURE</span>
              <h4>フォーマルからカジュアルまで <br>
                絆を深めるギフト選びをお手伝いします。</h4>
              <p>
                「感謝の気持ちを表したい」「喜んでもらいたい」<br>
                セイトウ本社1階のギフト専門店「ギフトピュア」では、<br>
                専任のギフトアドバイザーが贈る方のお気持ちを大切に<br>
                最適なギフト選びをお手伝いいたします。<br>
                明るく広い店内には、地域でトップクラスの品数を取りそろえています。
              </p>
            </div>
            <div class="col">
              <img src="/images/gift/img_1.png" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3">
        <div class="wrapper">
          <div class="info_cont">
            <div class="head_cont">
              <h3>フォーマル・カジュアル、パーソナル・法人に対応</h3>
              <p>
                個人から個人へ贈るパーソナルギフトでは、冠婚葬祭引出物や中元・歳暮などのフォーマルギフトから、母の日・父の日や敬老の日などのカジュアルギフトまで幅広い贈り方に対応するギフト商品を豊富にご用意しています。<br>
                家族や友人など身近な方とのコミュニケーションとして贈るプチギフト選びもお楽しみいただけます。<br>
                法人ギフトやセールスプロモーション用の景品などについてもご相談ください。
              </p>
            </div>
            <div class="img_cont">
              <img src="/images/gift/img_2.png" alt="">
            </div>
            <div class="list_cont">
              <div class="row">
                <div class="col">
                    <p>■ 取扱品目</p>
                </div>
                <div class="col">
                  <p>・ 贈答品 ： 冠婚葬祭引出物、出産・進入学・快気祝い、年賀・中元・歳暮、送別・餞別など</p>
                  <p>・ 記念品 ： 新築・改築・開店・会社設立・契約記念品</p>
                  <p>・ 賞品 ： 運動会・ゴルフ・ボウリングなど各種大会の賞品</p>
                  <p>・ カジュアル ： 誕生日、結婚記念日、母の日、父の日、敬老の日、七五三、手土産など</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_4">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <img src="/images/gift/img_3.png" alt="">
              <h4>選べる包装紙</h4>
              <p>贈答の場面や季節に応じてラッピングの種類をお選びいただけます。大切な方へのプレゼント・ご進物など様々な用途に応じて、ひとつひとつ丁寧にお包みいたします。気持ちを言葉で表すメッセージカードも豊富な種類をご用意しています。</p>
            </div>
            <div class="col">
              <img src="/images/gift/img_4.png" alt="">
              <h4>お盆のレンタル祭壇が好評です</h4>
              <p>店内にはお盆用品のコーナーを設置。祭壇・提灯のレンタルから籠盛り・お料理の手配まで、お盆に必要なすべてのものがワンストップでそろいます。</p>
            </div>
            <div class="col">
              <img src="/images/gift/img_5.png" alt="">
              <h4>セイトウのネットワークでご希望の 商品をお探しします</h4>
              <p>セイトウには業務用食器やインテリア小物などを扱う部門もあり、数多くのメーカーと取り引きしています。そのため、ギフトピュアの店頭にない商品であっても、社内の他部門と連携してご用意できることがあります。ご希望のギフトが見つからずお困りの方はギフトピュアまでご相談ください。</p>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_5">
        <div class="wrapper">
          <h3>SHOP DATA</h3>
          <div class="row">
            <div class="col">
                <h4>ギフトピュア</h4>
                <p>
                  〒438-0071 静岡県磐田市今之浦1-7-6 1F <br>
                  TEL・FAX. <a href="tel:0538-34-1751">0538-34-1751</a>
                </p>
                <img src="/images/gift/img_6.png" alt="">
            </div>
            <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.5806133551137!2d137.86126781553247!3d34.715756489918775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae5b596cf4af7%3A0x3f78222268e96681!2zSmFwYW4sIOOAkjQzOC0wMDcxIFNoaXp1b2thLCBJd2F0YSwgSW1hbm91cmEsIDEtY2jFjW1l4oiS77yX4oiSNg!5e0!3m2!1sen!2sph!4v1633071781580!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
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
              <a href="/">店舗案内</a>
            </li>
            <li>
              <a href="/gift/">ギフトショップ</a>
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
