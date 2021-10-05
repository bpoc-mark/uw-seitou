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

  <title>事業内容 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Business">
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
                <a href="/business/">BUSINESS</a>
              </li>
              <li>
                <a href="/business/">事業内容</a>
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
          <p class="bs_desc">
            セイトウは業務用食器、調理道具、備品、厨房設備をはじめ、<br>
            家庭向け調理・食卓用品、インテリア用品、小物などの卸売・小売を主力業務としています。<br>
            フォーマルギフト・カジュアルギフトの専門店も構え、地域の皆様にご利用いただいています。
          </p>
          <div class="item_cont">
            <div class="item">
              <div class="row">
                <div class="col">
                  <span class="num">01</span>
                  <h3>
                    <span>〈 業務用食器・備品一式 〉</span>
                    ワンストップですべてが揃うコンサルティング型 卸売
                  </h3>
                  <p class="desc">
                    ホテル、レストラン、各種飲食店、給食施設など「食」を提供する施設に必須の什器・備品から食器までを総合的にコーディネートします。セイトウなら、ワンストップですべてがそろいます。<br>
                    当社の特徴は、事業主であるお客様のパートナーとして商売繁盛を実現させる提案力です。飲食事業を始められるお客様とともに店舗の強みや魅力を分析。当社の豊富なデータベースや情報網を活用し、勝ち抜くためのメニューや料理の見せ方まで検討します。お客様は料理と器がテーブルに広がる景色をイメージしながら、店舗のプランを練ることができます。<br>
                    SNS時代にアドバンテージとなる料理のビジュアルや驚きをお探しの企業様・事業主様はぜひご相談ください。
                  </p>
                  <div class="row">
                    <div class="col">
                      <p>■ 取扱品目</p>
                    </div>
                    <div class="col">
                      <div class="pc">
                        <ul>
                          <li>
                            <p>・ 業務用食器、<br class="sp">備品一式</p>
                            <p>・ 食器</p>
                            <p>・ ガラス</p>
                            <p>・ 漆器</p>
                            <p>・ 調理道具</p>
                          </li>
                          <li>
                            <p>・ 小物一式</p>
                            <p>・ 消耗品</p>
                            <p>・ イス、テーブル</p>
                            <p>・ 制服</p>
                          </li>
                          <li>
                            <p>・ レジスター</p>
                            <p>・ 食品サンプル</p>
                            <p>・ 厨房設備</p>
                            <p>・ 厨房備品</p>
                          </li>
                        </ul>
                      </div>
                      <div class="sp">
                        <ul>
                          <li>
                            <p>・ 業務用食器、<br class="sp">備品一式</p>
                            <p>・ 食器</p>
                            <p>・ ガラス</p>
                            <p>・ 漆器</p>
                            <p>・ 調理道具</p>
                            <p>・ 小物一式</p>
                            <p>・ 消耗品</p>
                          </li>
                          <li>
                            <p>・ イス、テーブル</p>
                            <p>・ 制服</p>
                            <p>・ レジスター</p>
                            <p>・ 食品サンプル</p>
                            <p>・ 厨房設備</p>
                            <p>・ 厨房備品</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <picture>
                    <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                    <source srcset="/images/business/sp/img_01.png" media="(max-width: 899px)" type="image/webp">
                    <source srcset="/images/business/img_01.png" media="(min-width: 900px)">
                    <img src="/images/business/sp/img_01.png" alt="">
                  </picture>
                </div>
                <div class="col">
                  <a href="" class="btn_link">
                    詳細はこちら
                    <img src="/images/business/arrow.svg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <span class="num">02</span>
              <h3>
                <!-- <span>〈 業務用食器・備品一式 〉</span> -->
                ショールーム・小売 「キッチンスタジオ セイ」 卸売
              </h3>
              <p class="desc">
                本社2階のショールーム・小売店舗には、25,000点に上る業務用食器や調理道具などをご用意。<br>
                各種飲食店の新規オープンやリニューアルを検討中のお客様が、食器や調理道具を実際に手に取って質感や使い勝手をお確かめいただけます。<br>
                もちろん、一般のお客様も大歓迎。プロ用調理道具をお気軽にご覧いただけます。
              </p>
              <div class="row">
                <div class="col">
                  <img src="/images/business/row_2_img1.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_2_img2.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_2_img3.png" alt="">
                </div>
              </div>
              <a href="" class="btn_link">
                詳細はこちら
                <img src="/images/business/arrow.svg" alt="">
              </a>
            </div>
            <div class="item">
              <span class="num">03</span>
              <h3>
                <span>〈 生協・通販事業 〉</span>
                時代とライフスタイルに合ったオリジナル商品を開発
              </h3>
              <p class="desc">
                家庭向け調理・食卓用品を中心に、インテリア用品、小物などを全国の生活協同組合様や通販事業者様にご提供しています。<br>
                お客様のニーズに応じたオリジナル商品の開発も行っています。当社との新規取引をご検討いただける企業様には資料をお送りしています。
              </p>
              <div class="row">
                <div class="col">
                  <img src="/images/business/row_3_img1.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_3_img2.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_3_img3.png" alt="">
                </div>
              </div>
              <a href="" class="btn_link">
                詳細はこちら
                <img src="/images/business/arrow.svg" alt="">
              </a>
            </div>
            <div class="item">
              <span class="num">04</span>
              <h3>
                <!-- <span>〈 生協・通販事業 〉</span> -->
                ギフト専門店 「ギフトピュア」
              </h3>
              <p class="desc">
                専任のギフトアドバイザーがお客様のご要望に応じて最適なギフトをお選びします。
              </p>
              <div class="row info_list">
                  <div class="col">
                    <p>■ 取扱品目</p>
                  </div>
                  <div class="col">
                    <p>・ 贈答品 ： 冠婚葬祭引出物、出産・進入学・快気祝い、年賀・中元・歳暮、送別・餞別など</p>
                    <p>・ 記念品 ： 新築・改築・開店・会社設立・契約記念品</p>
                    <p>・ 賞<span class="sp">　</span>品 ： 運動会・ゴルフ・ボウリングなど各種大会の賞品</p>
                    <p>・ カジュアル ： 誕生日、結婚記念日、母の日、父の日、敬老の日、七五三、手土産など</p>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                  <img src="/images/business/row_4_img1.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_4_img2.png" alt="">
                </div>
                <div class="col">
                  <img src="/images/business/row_4_img3.png" alt="">
                </div>
              </div>
              <a href="" class="btn_link">
                詳細はこちら
                <img src="/images/business/arrow.svg" alt="">
              </a>
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
              <a href="/business/">事業内容</a>
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
