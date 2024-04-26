<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
    <?php include("menu.php"); ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<section id="contact">
<div class="layout-contact">
	<h2 class="section-title section-title__modifer-thirdy">Sign Up</h2>
	<div class="section-sentence sentence-lead">
		<p class="section-paragraph section-paragraph__lite">現在、テストユーザーを募集中です。<br>
	その他、お問い合わせもお気軽にどうぞ。お待ちしております。</p>

	<p class="section-paragraph">※BlueTripはまだサービス開発中です。<br>
	間違っても問い合わせしないようお願いいたします。</p>
	</div>
</section>

<form method="post" action="user_insert.php" class="wrapper">
		<div class="form">
			<div class="form-list">
				<dl class="form-item">
					<dt for="name" class="form-label">名前</dt>
					<dd class="form-detail"><input type="text" name="name" id="name" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="kana" class="form-label">カナ</dt>
					<dd class="form-detail"><input type="text" name="kana" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="email" class="form-label">メールアドレス</dt>
					<dd class="form-detail"><input type="text" name="email" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="lid" class="form-label">ログインID</dt>
					<dd class="form-detail"><input type="text" name="lid" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="lpw" class="form-label">ログインパスワード</dt>
					<dd class="form-detail"><input type="text" name="lpw" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="flag" class="form-label">管理FLG</dt>
					<dd class="form-detail">管理<input type="radio" name="kanri_flg"  required value="0"></dd>
					<dd class="form-detail">一般<input type="radio" name="kanri_flg"  required value="1"></dd>
				</dl>
			</div>
		</div>
		<input type="submit" value="送信" class="btn btn-submit">
	</form>
  <br><br>
<!-- Main[End] -->

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
