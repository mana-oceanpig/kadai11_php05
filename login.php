<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="css/reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <?php include("menu.php"); ?>
</header>

<!-- login_act.php は認証処理用のPHPです。 -->
<section id="contact">
 <div class="layout-contact">
	<h2 class="section-title section-title__modifer-thirdy">Log In <span class="section-title__ja">テストアカウントログイン用</span></h2>
	<div class="section-sentence sentence-lead">
		<p class="section-paragraph section-paragraph__lite">現在、βテスト中です。<br>
	ログイン情報をお持ちの方のみログインをお願いしております。</p>

	<p class="section-paragraph">※BlueTripはまだサービス開発中です。<br>
	お気をつけください。</p>
	</div>

	<form method="post" action="login_act.php" class="wrapper">
		<div class="form">
			<div class="form-list">
				<dl class="form-item">
					<dt for="name" class="form-label">ID</dt>
					<dd class="form-detail"><input type="text" name="lid" id="lid" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="lpw" class="form-label">パスワード</dt>
					<dd class="form-detail"><input type="text" name="lpw" class="form-parts" required></dd>
				</dl>
			</div>
		</div>
		<input type="submit" value="ログイン" class="btn btn-submit">
	</form>
	</div>
</section>
<br><br>

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