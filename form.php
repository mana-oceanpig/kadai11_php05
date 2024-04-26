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
        <title>Blue and Green Map</title>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/0a953b5675.js" crossorigin="anonymous"></script>
        <!-- custom css -->
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
    <h2 class="section-title section-title__modifer-thirdy">Blue Map<span class="section-title__ja">新しい旅を書き入れる</span></h2>
    <div class="section-sentence sentence-lead">
	<p class="section-paragraph section-paragraph__lite">あなたのとっておきの場所を教えてください<br>
	オリジナルマップにピンを増やして、地球を蒼く碧くしていきましょう</p>
	</div>

    <form method="POST" action="insert.php" class="wrapper">
            <div class="form">
                <div class="form-list">
				<dl class="form-item">
					<dt for="name" class="form-label">タイトル・名前</dt>
					<dd class="form-detail"><input type="text" name="name" id="name" class="form-parts" required></dd>
				</dl>
				<dl class="form-item">
					<dt for="url" class="form-label">参考URL</dt>
					<dd class="form-detail"><input type="text" name="email" class="form-parts" required></dd>
				</dl>
                <dl class="form-item">
					<dt for="age" class="form-label">行ってみたい度（〜100）</dt>
					<dd class="form-detail"><input type="text" name="age" class="form-parts" required></dd>
				</dl>
                <dl class="form-item">
					<dt for="naiyou" class="form-label">メモ・コメント</dt>
					<dd class="form-detail"><textArea name="naiyou" rows="4" cols="40" class="form-parts"></textArea></dd>
				</dl>
			    </div>
            </div>
            <input type="submit" value="送信" class="btn btn-submit">
        </form>
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
