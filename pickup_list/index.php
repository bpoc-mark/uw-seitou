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

<body id="Pickup_list">
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
                <a href="/pickup_list/">PICK UP</a>
              </li>
              <li>
                <a href="/pickup_list/">お知らせ</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="cat_cont">
            <p class="sp sp_select">ALL <img src="/images/works_list/sp_arrow.svg" alt=""></p>
            <ul class="post_cat">
              <li>
                <a href="" class="active">ALL</a>
              </li>
              <li>
                <a href="">NEWS</a>
              </li>
              <li>
                <a href="">TOPICS</a>
              </li>
              <li>
                <a href="">PRODUCT</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_1.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_2.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>TOPICS</span>
                  </p>
                  <p class="post_title">理想の無水調理で素材本来の味を引き出す鋳物ホ ーロー鍋です。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_3.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_1.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_2.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>TOPICS</span>
                  </p>
                  <p class="post_title">理想の無水調理で素材本来の味を引き出す鋳物ホ ーロー鍋です。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_3.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_1.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_2.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>TOPICS</span>
                  </p>
                  <p class="post_title">理想の無水調理で素材本来の味を引き出す鋳物ホ ーロー鍋です。</p>
                </div>
              </a>
            </div>
            <div class="col c-anim-up">
              <a href="">
                <img src="/images/pickup_list/img_3.png" alt="">
                <div class="post_data">
                  <p class="post_date_cat">
                    <span>2021.05.01</span>
                    <span>NEWS</span>
                  </p>
                  <p class="post_title">GWのの休みについてのお知らせです。</p>
                </div>
              </a>
            </div>
          </div>
          <!-- Wordpress -->
          <div class="page_navigation c-anim-up">
            <div class="wp-pagenavi">
              <a class="previouspostslink" href="#" rel="prev"><img src="/images/works_list/arrow.svg" alt=""> PREV</a>
              <span class="current">1</span>
              <a class="page smaller" href="#">2</a>
              <a class="page larger" href="#">3</a>
              <a class="nextpostslink" href="#" rel="next">NEXT <img src="/images/works_list/arrow.svg" alt=""></a>
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
              <a href="/pickup_list/">お知らせ</a>
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
