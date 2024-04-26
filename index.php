<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>自然に還ろう</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--header-->
<header class="header">

	<!-- main visual -->
	<div class="main-visual">
		<h1 class="site-title">自然に還ろう
		<span class="site-title__sub">あなたの旅がエコになる「Blue Trip」</span></h1>
		<img src="images/header/top_img.jpg" alt="チーズの画像">
	</div>

	<div class="header-above">
		<div class="wrapper header-inner">
			<p class="logo logo-header"><a href="#"><img src="images/header/logo_2.png" alt="BlueTrip"></a></p>
			<button class="btn btn-mobileMenu">Menu</button>
			<nav class="nav-outer">
				<ul class="nav clearfix">
					<li class="nav-item"><a href="#about">About</a></li>
					<li class="nav-item"><a href="#contact">Sign Up</a></li>
					<li class="nav-item"><a href="login.php">LOG IN</a></li>
				</ul>
			</nav>
		</div>
	</div>

</header>
<!--//header-->

<!--about-->
<section id="about">
	<div class="layout-about">
		<h2 class="section-title section-title__blue">About</h2>
		<div class="section-sentence">
			<p class="section-paragraph">BlueTripは、厳選された「エコ × ウェルネス」な旅をお届けするサービスです。</p>
			<p class="section-paragraph">私の原点は、海の中に潜った時の感情からスタートしています。<br>
			美しい青、いろとりどりの魚たち。緑色の山々、森の中の静けさ。</p>
			<p class="section-paragraph">そんな「自然に還る」リラックス体験をしながら、地球のことを考えませんか。</p>
			<p class="section-paragraph">私たちが厳選した場所や宿泊先のご紹介はもちろん<br>
		あなたが見つけた取っておきの場所の保存・再訪をサポートします。</p>
		<p class="section-paragraph">尚、こちらで購入いただいた旅体験は、指定の「サンゴ植付活動」や「植林活動」に一部寄付が行われます。<br>
		お気に入りの場所に、想いを還元していきましょう。</p>
		</div>
	</div>
	<div>
		<img src="images/about/about.png" alt="チーズアカデミーの学校の様々な様子">
	</div>
</section>
<!--// about-->

<!--contact-->
<section id="contact">
<div class="layout-contact">
	<h2 class="section-title section-title__modifer-thirdy">Sign Up <span class="section-title__ja">ユーザー登録はこちらから</span></h2>
	<a href="user.php"><button class="btn btn-submit">ユーザー登録する</button></a><br><br>
	<div class="section-sentence sentence-lead">
		<p class="section-paragraph section-paragraph__lite">現在、テストユーザーを募集中です。<br>
	その他、お問い合わせもお気軽にどうぞ。お待ちしております。</p>

	<p class="section-paragraph">※BlueTripはまだサービス開発中です。<br>
	間違っても問い合わせしないようお願いいたします。</p>
	</div>
</section>
<!--// contact-->
<!--login-->
<section id="login">
	<div class="layout-login">
		<h2 class="section-title section-title__modifer-thirdy">Log In <span class="section-title__ja">ご登録済みの方はこちらから</span></h2>
		<a href="login.php"><button class="btn btn-submit">ログインする</button><br><br>
	</div>
</section>
<!--// login-->

<!--footer-->
<footer class="footer text-center">
	<div class="wrapper">
		<small class="copyrights">copyrights 2024 Blue Trip All RIghts Reserved.
		</small>
	</div>
</footer>
<!--// footer-->

</body>
</html>
