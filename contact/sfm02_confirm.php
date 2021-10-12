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
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>お問い合わせ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Inquiry">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main id="Contact" class="sfm2">
      <section class="jumbo_sect">
				<div class="wrapper">
          <div class="breadcrumbs">
            <ul class="">
              <li>
                <a href="/contact/">CONTACT</a>
              </li>
              <li>
                <a href="/contact/">お問い合わせ</a>
              </li>
            </ul>
          </div>
				</div>
			</section>
      <section class="form-sec">
        <div class="form_wrap">
          <p>
						当社のお問い合わせページをご覧いただきましてありがとうございます。<br>
						お問い合わせは下記フォーム、またはお電話にてお願い致します。<br>
						お問い合わせフォームは［ <span>*</span> ］の必須項目をご記入の上、「入力内容を確認する」を押してください。<br>
						後日、弊社担当者よりご連絡致します。 
					</p>
					<h3><a href="tel:0538-34-2191">Tel. 0538-34-2191</a></h3>
          <form method="post" name="sfm-form" id="sfm-form" action="./">

            <table>

              <tr>
                <th>■お名前（フリガナ）<span>*</span></th>
                <td>
                  <p><?php echo $sfm_html->name; ?></p>
                  <p><?php echo $sfm_html->furigana; ?></p>
                </td>
              </tr>

              <tr>
                <th>■会社名（店名）</th>
                <td>
                  <p><?php echo $sfm_html->store; ?></p>
                </td>
              </tr>

              <tr>
                <th>■お電話番号 <span>*</span></th>
                <td>
                  <p><?php echo $sfm_html->tel; ?></p>
                </td>
              </tr>

              <tr>
                <th>■メールアドレス <span>*</span></th>
                <td>
                  <p><?php echo $sfm_html->email; ?></p>
                </td>
              </tr>

              <tr>
                <th>■ご住所</th>
                <td>
                  <p>〒<?php echo $sfm_html->zip; ?></p>
                  <p><?php echo $sfm_html->address; ?></p>
                </td>
              </tr>

              <!-- <tr>
                <th>■チェックボックス <span class="need">必須</span></th>
                <td>
                  <p><?php echo $sfm_html->check; ?></p>
                </td>
              </tr>

              <tr>
                <th>■セレクトボックス<span class="need">〈必須〉</span></th>
                <td>
                  <p><?php echo $sfm_html->select; ?></p>
                </td>
              </tr> -->

              <tr>
                <th>■お問い合わせ内容 <span>*</span></th>
                <td>
                  <p><?php echo $sfm_html->message; ?></p>
                </td>
              </tr>

            </table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
        </div>
      </section>
      <section class="footer_breadcrumbs pc">
				<div class="wrapper">
					<ul>
						<li>
							<a href="/">TOP</a>
						</li>
						<li>
							<a href="/contact/">お問い合わせ</a>
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
