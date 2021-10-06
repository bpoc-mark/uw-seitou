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

  <title>施工事例 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Works">
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
                <a href="/works_list/">WORKS</a>
              </li>
              <li>
                <a href="/works_list/">施工事例</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <p class="post_date_cat">
            <span class="post_date">2021.05.01</span>
            <span class="post_cat">レストラン</span>
          </p>
          <h3 class="post_title">浜北区中瀬 こんがりパン工房ペパル様</h3>
          <p class="post_content">
          めまぐるしく過ぎていく日々のなかで、お家でゆったりと過ごしていますか？ <br>
          にぎやかな街もステキですが、自分だけの空間"お家"で過ごす時間を大事にしてほしい。<br>
          私たちセイトウはお家で過ごすここちいい時間をつくるお手伝いができればと考え、<br>
          たくさんのキッチン用品をとり揃えています。ぜひ、お友達を誘って遊びにきてください。
          </p>
          <div class="post_featured_img">
            <img src="/images/works/img_1.png" alt="">
          </div>
          <div class="btn_cont">
            <div class="btn_left">
              <a href=""><img src="/images/works/btn_box.svg" alt=""> BACK</a>
            </div>
            <div class="btn_right">
              <ul>
                <li>
                  <a href=""><img src="/images/works/arrow.svg" alt=""> PREV</a>
                </li>
                <li>
                  <a href="">NEXT <img src="/images/works/arrow.svg" alt=""></a>
                </li>
              </ul>
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
              <a href="/service/">ワンストップサービス</a>
            </li>
            <li>
              <a href="/works_list/">施工事例</a>
            </li>
            <li>
              <a href="/works_list/">浜北区中瀬 こんがりパン工房ペパル様</a>
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

  <script>
    $(window).on('load resize', function () {
      var w = $(window).width();
      if (w < 900) {
        
      }
      else{
        $('.post_cat').removeAttr('style');
      }

      var active = $('.post_cat li').find('.active').text();
      $('.sp_select').html(active + ' <img src="/images/works_list/sp_arrow.svg" alt="">');
    })

    $('.sp_select').click(function(){
      $('.sp_select').toggleClass('active');
      $('.sp_select img').toggleClass('active');
      if($('.sp_select').hasClass('active')){
        $('.post_cat').slideDown();
      }else{
        $('.post_cat').slideUp();
      }
    })
  </script>
</body>

</html>
