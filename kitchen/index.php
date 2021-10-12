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

  <title>キッチングッズ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Kitchen">
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
                <a href="/kitchen/">KITCHEN GOODS</a>
              </li>
              <li>
                <a href="/kitchen/">キッチングッズ</a>
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
            <div class="col c-anim-up">
              <h3 class="c-anim-up">キッチン用品店 <br class="sp">「キッチンスタジオ セイ」</h3>
              <span class="c-anim-up">KITCHEN STUDIO SEI</span>
              <h4 class="c-anim-up">業務用食器や調理道具、パン・菓子づくり道具、<br>
                  製菓材料が何でもそろうお店です。</h4>
              <p class="c-anim-up">
                プロの厳しい要求に応える確かな品々を取りそろえているほか、<br>
                料理がお好きな一般のお客様にきめ細かいアドバイスをご提供しています。<br>
                ホテル・レストラン・飲食店で活躍する料理のプロから日常をちょっと上質にしたい<br>
                料理愛好家まで幅広いお客様にご利用いただいています。
              </p>
            </div>
            <div class="col c-anim-up">
              <img src="/images/kitchen/img_1.svg" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3">
        <div class="wrapper">
          <div class="row">
            <div class="col c-anim-up">
              <img src="/images/kitchen/img_2.png" alt="">
            </div>
            <div class="col">
              <h4 class="c-anim-up">目に見えない価値をご提供</h4>
              <p class="c-anim-up">キッチンスタジアムはキッチン用品を売るだけでなく、料理や飲食店経営に役立つ価値を付け加えることを大切にしています。<br>
                  例えば、料理のプロをブレーンとして支えるため、私たちはプロの興味を引く情報をいつでもストックしています。<br>
                  また、飲食店の強みの分析から看板メニューの考案、そして適切な食器を使ったテーブルコーディネートまでをトータルにご提案しています。このようなコンサルティングにより、少なくない費用を投じて立ち上げる飲食店が成功する可能性を拡げ、事業の発展を応援しています。</p>
            </div>
          </div>
          <div class="row">
            <div class="col c-anim-up">
              <img src="/images/kitchen/img_3.png" alt="">
            </div>
            <div class="col">
              <h4 class="c-anim-up">プロショップがセレクト、<br class="sp">一般のお客様も納得の品々</h4>
              <p class="c-anim-up">
                キッチンスタジアムは本物志向の調理道具を求める一般のお客様のため、プロが満足する品質とリーズナブルな価格を併せ持った商品をセレクトしています。<br>
                商品に関する疑問には、業務用調理道具の知識を持つスタッフが丁寧にお答えします。オシャレ感を重視した家庭用キッチン用品よりも業務用をお勧めする理由、ホームセンターで手に入るキッチン用品よりも業務用を選ぶメリットなどについてもご説明いたします。<br>
                また、ご家庭の料理を専門店の味に近づける工夫や、器によっておいしさを引き出す技などをお伝えしています。およそ半世紀にわたり地域に根ざしてビジネスを展開してきた私たちのノウハウを地域の皆様に還元する取り組みです。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_4">
        <div class="wrapper">
          <h3 class="c-anim-up">SHOP DATA</h3>
          <div class="row">
            <div class="col">
                <h4 class="c-anim-up">ギフトピュア</h4>
                <p class="c-anim-up">
                  〒438-0071 静岡県磐田市今之浦1-7-6 1F <br>
                  TEL・FAX. <a href="tel:0538-34-1751">0538-34-1751</a>
                </p>
                <img src="/images/gift/img_6.png" alt="" class="c-anim-up">
            </div>
            <div class="col c-anim-up">
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
              <a href="/kitchen/">キッチングッズ</a>
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
