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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<!-- Slider main container -->
					<div class="swiper top_swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide slide-img-1"></div>
							<div class="swiper-slide slide-img-2"></div>
							<div class="swiper-slide slide-img-3"></div>
							<div class="swiper-slide slide-img-4"></div>
							<div class="swiper-slide slide-img-5"></div>
							<div class="swiper-slide slide-img-6"></div>
						</div>
						<!-- If we need pagination -->
						<!-- <div class="swiper-pagination"></div> -->

						<!-- If we need navigation buttons -->
						<!-- <div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div> -->

						<!-- If we need scrollbar -->
						<div class="swiper-scrollbar"></div>
					</div>
					<h3>TO LIVE A<br class="sp"> BETTER LIFE.</h3>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<h3>PICK UP</h3>
					<a href="" class="btn_viewall">VIEW ALL</a>
					<!-- Slider main container -->
					<div class="swiper sect_2_slider">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<a href="">
									<img src="/images/top/section_2/2.png" alt="">
									<p><span>2021.05.01</span> <span>TOPICS</span></p>
									<p>GWのの休みについてのお知らせです。</p>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<img src="/images/top/section_2/1.png" alt="">
									<p><span>2021.05.01</span> <span>TOPICS</span></p>
									<p>理想の無水調理で素材本来の味を引き出す鋳物ホーロー鍋です。</p>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<img src="/images/top/section_2/2.png" alt="">
									<p><span>2021.05.01</span> <span>TOPICS</span></p>
									<p>GWのの休みについてのお知らせです。</p>
								</a>
							</div>
						</div>
						<!-- If we need pagination -->
						<!-- <div class="swiper-pagination"></div> -->

						<!-- If we need navigation buttons -->
						<!-- <div class="swiper-button-prev"></div> -->
						<div class="swiper-button-next">
							<img src="/images/top/section_2/next_arrow.svg" alt="">
						</div>

						<!-- If we need scrollbar -->
						<!-- <div class="swiper-scrollbar"></div> -->
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<h4>毎日の料理時間を、<br>
								もっと楽しく豊かに。</h4>
						</div>
						<div class="col">
							<p>
							めまぐるしく過ぎていく日々のなかで、お家でゆったりと過ごしていますか？<br>
							にぎやかな街もステキですが、自分だけの空間"お家"で過ごす時間を大事にしてほしい。<br>
							私たちセイトウはお家で過ごすここちいい時間をつくるお手伝いができればと考え、<br>
							たくさんのキッチン用品をとり揃えています。ぜひ、お友達を誘って遊びにきてください。
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<p>KITCHEN <br>
								GOODS</p>
							<a href="">
								<img src="/images/top/section_4/arrow.svg" alt="">
							</a>
						</div>
						<div class="col">
							<picture>
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
								<source srcset="/images/top/sp/section_4/img_1.png" media="(max-width: 899px)" type="image/webp">
								<source srcset="/images/top/section_4/img_1.png" media="(min-width: 900px)">
								<img src="/images/top/sp/section_4/img_1.png" alt="">
							</picture>
						</div>
					</div>
					<div class="desc_cont">
						<p>
						キッチン用品店 <br class="sp">「キッチンスタジオ セイ」
						</p>
						<p>セイトウのショールームは県下最大規模、約25,000点に及ぶ最新のキッチン用品を取り揃えて<br class="pc">
						おります。<br class="sp">日々の暮らしを通して、使い心地のよいものをご提案いたします。</p>
					</div>
				</div>
				<div class="swiper sect_4_slider">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/7.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/6.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/5.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/4.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/3.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/2.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/1.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<p class="watermark"></p>
				<p class="btn_ig">
					<a href=""><img src="/images/top/section_4/ig_icon.svg" alt=""> KITCHEN STUDIO SEI</a>
				</p>
			</section>
			<section class="sect_5">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<p>GIFT SHOP</p>
							<a href="">
								<img src="/images/top/section_4/arrow.svg" alt="">
							</a>
						</div>
						<div class="col">
							<picture>
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
								<source srcset="/images/top/sp/section_5/img_1.png" media="(max-width: 899px)" type="image/webp">
								<source srcset="/images/top/section_5/img_1.png" media="(min-width: 900px)">
								<img src="/images/top/sp/section_5/img_1.png" alt="">
							</picture>
						</div>
					</div>
					<div class="desc_cont">
						<p>
						ギフト専門店 「ギフトピュア」
						</p>
						<p>セイトウのショールームは県下最大規模、約25,000点に及ぶ最新のキッチン用品を取り揃えて<br class="pc">
						おります。<br class="sp">日々の暮らしを通して、使い心地のよいものをご提案いたします。</p>
					</div>
				</div>
				<div class="swiper sect_4_slider">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/7.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/6.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/5.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/4.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/3.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/2.png" alt="">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="">
								<img src="/images/top/section_4/1.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<p class="watermark"></p>
				<p class="btn_ig">
					<a href=""><img src="/images/top/section_4/ig_icon.svg" alt=""> GIFT PURE</a>
				</p>
			</section>
			<section class="sect_6">
				<div class="wrapper">
					<div class="txt_cont">
						<span>ONE STOP SERVICE</span>
						<h3>飲食店オープンの<br class="sp">ワンストップサービス</h3>
						<p class="pc">お客様のご要望をしっかりと把握しプランを組み立て、イメージに合った最高クラスのものをご予算内でご提案。<br>
							信頼のおける数多のブランドからトータルコーディネイト致します。<br>
							長年の経験値と培った提案力でお客様のサポートをお約束します。</p>
						<a href="" class="btn_viewmore pc">VIEW MORE</a>
					</div>
					<p class="sp">お客様のご要望をしっかりと把握しプランを組み立て、イメージに合った最高クラスのものをご予算内でご提案。<br>
							信頼のおける数多のブランドからトータルコーディネイト致します。<br>
							長年の経験値と培った提案力でお客様のサポートをお約束します。
							<a href="" class=""><img src="./images/top/section_6/arrow.svg" alt=""></a></p>
				</div>
			</section>
			<section class="sect_7">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<img src="/images/top/section_7/img_1.png" alt="">
							<ul>
								<li>
									<a href="">COMPANY <span>/  会社案内</span></a>
									<img src="/images/top/section_7/arrow.svg" alt="">
								</li>
								<li>
									<a href="">CO-OP <span>/  会社案内</span></a>
									<img src="/images/top/section_7/arrow.svg" alt="">
								</li>
								<li>
									<a href="">RECRUIT <span>/  採用情報</span></a>
									<img src="/images/top/section_7/arrow.svg" alt="">
								</li>
							</ul>
						</div>
						<div class="col">
							<img src="/images/top/section_7/img_2.png" alt="">
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

	<script>
		const swiper1 = new Swiper('.top_swiper', {
			// Optional parameters
			direction: 'horizontal',
			allowTouchMove: false,
			loop: true,
			speed: 3000,
			autoplay: {
				delay: 3000,
			},
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.swiper-scrollbar',
			},
		});

		const swiper2 = new Swiper('.sect_2_slider', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 2000,
			// autoplay: {
			// 	delay: 3000,
			// },
			// If we need pagination
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				900: {
					slidesPerView: 2.6,
					spaceBetween: -15,
					centeredSlides: true,
				},
				0: {
					slidesPerView: 1.2,
					centeredSlides: false,
					spaceBetween: 0,
					speed: 1000,
				},
			},
			pagination: {
				el: '.swiper-pagination',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

		const swiper3 = new Swiper('.sect_4_slider', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 2000,
			autoplay: {
				delay: 1000,
			},
			// If we need pagination
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				900: {
					slidesPerView: 5.8,
					spaceBetween: 20,
					centeredSlides: true,
				},
				0: {
					slidesPerView: 3,
					grid: {
						rows: 1,
					},
					spaceBetween: 6,
				},
			},
			pagination: {
				el: '.swiper-pagination',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});
	</script>
</body>

</html>
