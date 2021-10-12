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

  <title>ごあいさつ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Greetings">
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
                <a href="/GREETING/">GREETING</a>
              </li>
              <li>
                <a href="/company/">ごあいさつ</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <ul>
            <li>
              <a href="/greetings/" <?php if ($str[1] == "greetings") {
												echo ' class="here"';
											} ?>>ごあいさつ</a>
            </li>
            <li>
              <a href="/business/" <?php if ($str[1] == "business") {
												echo ' class="here"';
											} ?>>事業内容</a>
            </li>
            <li>
              <a href="/company/" <?php if ($str[1] == "company") {
												echo ' class="here"';
											} ?>>会社概要</a>
            </li>
            <li>
              <a href="/history/" <?php if ($str[1] == "history") {
												echo ' class="here"';
											} ?>>沿  革</a>
            </li>
          </ul>
          <div class="row">
            <div class="col c-anim-up">
              <img src="/images/greetings/img_1.png" alt="">
              <p>代表取締役社長  <span>鈴木 浩太郎</span></p>
            </div>
            <div class="col c-anim-up">
              <h3>
              笑顔あふれる心豊かな<br>
              幸せ空間創りに貢献します。
              </h3>
              <p>
                業務用食器などの卸売と小売をはじめ、全国の生活協同組合への家庭向け調理・食卓用品の提供、ギフトの小売などを業務とするセイトウは、お客様の期待を越える提案型のサービスや、新たな市場の創造などにより、個人・企業が共に輝く永続的な成長を実現させる使命があると考えます。<br>
                <br>
                当社は1973年に陶器などの量販店として創業し、その後、卸売事業をスタートさせました。創業以来、社会の要請とお客様のニーズにお応えしながら、新しい価値の創出にチャレンジしてまいりました。<br>
                <br>
                業務用食器・備品の卸売事業においては、ホテル・レストラン・飲食店のパートナーとして、「美味しいものを楽しく食べたい」という一般消費者の希望を叶える空間づくりをご提案しています。<br>
                生活協同組合や通販会社への商品提供事業では、静岡県西部地区のメーカーと連携して地域振興につながる新商品を開発するなど、地域に根ざした企業として社会的責任を果たすことを目指しています。<br>
                <br>
                昨今は、外食産業を取り巻く社会情勢や経済環境が大きく変化し、在宅時間の増加など一般消費者のニーズや価値観の多様化が加速しています。<br>
                こうした時代の転換点にあり、当社がこれからも笑顔があふれ心豊かな空間創りに貢献するためには、これまで以上の変革とチャレンジによって付加価値を提供していくことが必要です。<br>
                <br>
                そこで着手したのが、業務用食器・備品のショールーム兼店舗の拡充です。飲食店のテーブルを彩る食器や、プロ用調理道具の品ぞろえをさらに充実させ、商品を実際に使用して質感や具合を確かめられるようにしたことで、お客様の商売繁盛を後押しします。<br>
                <br>
                また、身近な人との絆の大切さが再認識され、ギフトの果たす役割があらためて注目されていることから、ギフト専門店のリニューアルも計画しています。<br>
                <br>
                さらに、当社の厨房設備部門の強化によって、厨房のレイアウトから、料理を盛り付ける食器の選定まで、飲食ビジネスの新規開業やリニューアルに必要なサービスをワンストップでご提供することが可能となりました。今後は各サービスの連携をさらに円滑にすることで、さらに満足度の高いビジネスモデルへと発展させてまいります。<br>
                <br>
                セイトウは今後も食文化ビジネスのサポートを通じて、地域の皆様の信頼と期待にお応えしてまいります。<br>
              </p>
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
              <a href="/company/">会社案内</a>
            </li>
            <li>
              <a href="/greetings/">ごあいさつ</a>
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
