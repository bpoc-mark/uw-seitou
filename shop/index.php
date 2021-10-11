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

  <title>店舗案内 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Shop">
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
                <a href="/shop/">SHOP INFO</a>
              </li>
              <li>
                <a href="/shop/">店舗案内</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <div class="head_row row">
                <div class="col">
                  <a href="/kitchen/">
                    <p>KITCHEN <br> GOODS</p>
                    <img src="/images/shop/arrow.svg" alt="">
                  </a>
                </div>
                <div class="col">
                  <img src="/images/shop/img_1.png" alt="">
                </div>
              </div>
              <h3>キッチン用品店 <br class="sp">「キッチンスタジオ セイ」</h3>
              <p>
                セイトウのショールームは県下最大規模、約25,000点に及ぶ最新のキッチン用品を取り揃えております。<br>
                日々の暮らしを通して、使い心地のよいものをご提案いたします。
              </p>
            </div>
            <div class="col">
              <div class="head_row row">
                <div class="col">
                  <a href="/gift/">
                    <p>GIFT <br> SHOP</p>
                    <img src="/images/shop/arrow.svg" alt="">
                  </a>
                </div>
                <div class="col">
                  <img src="/images/shop/img_2.png" alt="">
                </div>
              </div>
              <h3>ギフト専門店 「ギフトピュア」</h3>
              <p>
                セイトウのショールームは県下最大規模、約25,000点に及ぶ最新のキッチン用品を取り揃えております。<br>
                日々の暮らしを通して、使い心地のよいものをご提案いたします。
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
              <a href="/shop/">店舗案内</a>
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
