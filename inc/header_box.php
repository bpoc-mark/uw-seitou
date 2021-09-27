<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="row">
		<div class="col">
			<?php
				if ($str[1] == "") {
					echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
				} else {
					echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
				}
			?>
			<div class="menu" id="header_menu">
				<span class="line line-t"></span>
				<span class="line line-m"></span>
				<span class="line line-b"></span>
				<p></p>
			</div>
		</div>
		<div class="col">
			<a href="">CONTACT</a>
		</div>
	</div>

</div>

<div class="big_menu">
	<div class="row">
		<div class="col">
			<nav>
				<ul>
					<li>
						<a href="">TOP <br> <span>トップ</span></a>
					</li>
					<li>
						<a href="">SHOP INFO <br> <span>店舗案内</span></a>
						<ul class="sub_menu">
							<li>
								<a href="">キッチングッズ</a>
							</li>
							<li>
								<a href="">ギフトショップ</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="">ONE STOP SERVICE <br> <span>ワンストップサービス</span></a>
					</li>
				</ul>
				<ul>
					<li>
						<a href="">COMPANY <br><span>会社案内</span></a>
						<ul class="sub_menu">
							<li>
								<a href="">ごあいさつ</a>
							</li>
							<li>
								<a href="">事業内容</a>
							</li>
							<li>
								<a href="">会社概要</a>
							</li>
							<li>
								<a href="">沿革</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="">RECRUIT <br> <span>採用情報</span></a>
					</li>
					<li>
						<a href="">PICK UP <br> <span>お知らせ</span></a>
					</li>
				</ul>
			</nav>	
			<ul class="sns_link">
				<li>
					<a href="">CONTACT</a>
				</li>
				<li>
					<a href="">
						<img src="/images/common/line_icon.svg" alt="">
						<span>SEITOU<br>OFFICIAL LINE</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="/images/common/ig_icon.svg" alt="">
						<span>KITCHEN <br>STUDIO SEI</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="/images/common/ig_icon.svg" alt="">
						<span>GIFT SHOP</span>
					</a>
				</li>
			</ul>	
			<img src="/images/common/img_3.png" alt="" class="sp img_col_right">
			<p>〒438-0071 静岡県磐田市今之浦1-7-6　<br class="sp">Tel.<a href="tel:0538-34-2191">0538-34-2191</a> ／ Fax.<a href="tel:0538-34-2195">0538-34-2195</a></p>								
		</div>
		<div class="col">
			<img src="/images/common/img_3.png" alt="">
		</div>
	</div>
</div>
