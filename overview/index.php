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

  <title>会社概要 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Overview">
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
                <a href="/overview/">OVERVIEW</a>
              </li>
              <li>
                <a href="/overview/">会社概要</a>
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
              <a href="/overview/" <?php if ($str[1] == "overview") {
												echo ' class="here"';
											} ?>>会社概要</a>
            </li>
            <li>
              <a href="/history/" <?php if ($str[1] == "history") {
												echo ' class="here"';
											} ?>>沿  革</a>
            </li>
          </ul>
          <div class="overview_info">
            <table>
              <tbody>
                <tr>
                  <td>
                  社名
                  </td>
                  <td>
                  株式会社セイトウ
                  </td>
                </tr>
                <tr>
                  <td>
                  創業
                  </td>
                  <td>
                  1973年11月1日
                  </td>
                </tr>
                <tr>
                  <td>
                  設立
                  </td>
                  <td>
                  1981年 9月1日
                  </td>
                </tr>
                <tr>
                  <td>
                  資本金
                  </td>
                  <td>
                  5,200万円
                  </td>
                </tr>
                <tr>
                  <td>
                  代表者
                  </td>
                  <td>
                  代表取締役　鈴木 政義
                  </td>
                </tr>
                <tr>
                  <td>
                  従業員数
                  </td>
                  <td>
                  75名（パート含む）
                  </td>
                </tr>
                <tr>
                  <td>
                  事業内容
                  </td>
                  <td>
                  陶器・硝子・漆器・調理器具の卸･小売、カタログ販売、ブライダル関連ギフト、<br>
                  ギフト用品及び和雑貨の小売業
                  </td>
                </tr>
                <tr>
                  <td>
                  売上高
                  </td>
                  <td>
                  200,337万円  2020年度実績 （小売事業部含む）
                  </td>
                </tr>
                <tr>
                  <td>
                  主要<br class="sp">取引銀行
                  </td>
                  <td>
                  静岡銀行、<br class="sp">浜松いわた信用金庫
                  </td>
                </tr>
                <tr>
                  <td>
                  主要<br class="sp">取引銀行
                  </td>
                  <td>
                    <ul class="col3">
                      <li>
                        <p>・ アデリア㈱名古屋支店</p>
                        <p>・ ＨＡＲＩＯ㈱</p>
                        <p>・ ㈱山加商店</p>
                        <p>・ 江部松商事㈱</p>
                      </li>
                      <li>
                        <p>・ ㈱ハーモニック </p>
                        <p>・ 西海陶器㈱</p>
                        <p>・ ㈱ナカシマ</p>
                      </li>
                      <li>
                        <p>・ ㈱リュウコドウ </p>
                        <p>・ セトクラフト㈱</p>
                        <p>・ ㈱正和</p>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                  主要<br class="sp">販売先
                  </td>
                  <td>
                    <ul class="col2">
                      <li>
                        <p>・ 日本生活協同組合連合会 </p>
                        <p>・ 通販各社</p>
                      </li>
                      <li>
                        <p>・ 有名ホテル、レストランチェーン</p>
                        <p>・ 総合結婚式場</p>
                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="shop_cont">
            <h3>SHOP & OFFICE</h3>
            <div class="shop_itm">
              <div class="row">
                <div class="col">
                    <h4>株式会社セイトウ 本社</h4>
                    <p>〒438-0071 静岡県磐田市今之浦1-7-6 <br>
                        TEL. <a href="tel:0538-34-2158">0538-34-2158</a>  ／  <br class="sp">FAX. <a href="tel:0538-34-2195">0538-34-2195</a> <br>
                        MAIL. seitou@mail.wbs.ne.jp</p>
                    <h4>ギフトピュア</h4>
                    <p>〒438-0071 静岡県磐田市今之浦1-7-6 <br>
                        TEL・FAX. <a href="tel:0538-34-1751">0538-34-1751</a></p>
                    <img src="/images/overview/shop_1.png" alt="">
                </div>
                <div class="col">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.5806133551137!2d137.86126781553247!3d34.715756489918775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae5b596cf4af7%3A0x3f78222268e96681!2zSmFwYW4sIOOAkjQzOC0wMDcxIFNoaXp1b2thLCBJd2F0YSwgSW1hbm91cmEsIDEtY2jFjW1l4oiS77yX4oiSNg!5e0!3m2!1sen!2sph!4v1633071781580!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
            <div class="shop_itm">
              <div class="row">
                <div class="col">
                    <h4>きっちんぴゅあ 笠井店</h4>
                    <p>〒431-3107 <br>
                        静岡県浜松市東区笠井町1197-22 <br class="sp">リブロス笠井内<br>
                        TEL・FAX. <a href="tel:053-435-6607">053-435-6607</a></p>
                    <img src="/images/overview/shop_2.png" alt="">
                </div>
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1378.0018367562684!2d137.79026542700777!3d34.7692140534325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae05ad82a326f%3A0x11c75d24d81b87de!2z44GN44Gj44Gh44KT44G044KF44GC!5e0!3m2!1sen!2sph!4v1633074744587!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
            <div class="shop_itm">
              <div class="row">
                <div class="col">
                    <h4>きっちんぴゅあ 見付店</h4>
                    <p>〒438-0086 <br>
                      静岡県磐田市見付6038-5 <br class="sp">プラザ21 遠鉄ストア見付店内 <br>
                      TEL・FAX. <a href="tel:053-86-5340">053-86-5340</a></p>
                    <img src="/images/overview/shop_3.png" alt="">
                </div>
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.7430601791475!2d137.8557476155329!3d34.73687038878725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae415d24c98a3%3A0x52b46056ac152ca8!2sEntetsu%20Shore%20Mitsuke!5e0!3m2!1sen!2sph!4v1633074987874!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
            <div class="shop_itm">
              <div class="row">
                <div class="col">
                    <h4>株式会社セイトウ磐田物流センター</h4>
                    <p>〒438-0013 <br class="sp">静岡県磐田市向笠竹之内字下原1239-1 <br>
                      TEL. <a href="tel:0538-38-4788">0538-38-4788</a>  ／  <br class="sp">FAX. <a href="tel:0538-38-4789">0538-38-4789</a> <br>
                      倉庫面積 ： 1386㎡</p>
                    <img src="/images/overview/shop_4.png" alt="">
                </div>
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13110.62732423782!2d137.86610518920827!3d34.764236464342666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae3879e1181e7%3A0x4778a20489141b50!2sMukasatakenouchi%2C%20Iwata%2C%20Shizuoka%20438-0013%2C%20Japan!5e0!3m2!1sen!2sph!4v1633075229320!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
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
              <a href="/history/">会社概要</a>
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
