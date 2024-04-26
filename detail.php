<?php
session_start();
$id = $_GET["id"]; //?id~**を受け取る
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error($stmt);
}else{
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
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
	<h2 class="section-title section-title__modifer-thirdy">データ編集</h2>
</section>

<form method="POST" action="update.php" class="wrapper">
  <div class="form">
  <div class="form-list">
		<dl class="form-item">
			<dt for="name" class="form-label">タイトル・名前</dt>
			<dd class="form-detail"><input type="text" name="name" id="name" class="form-parts" value="<?=$row["name"]?>"></dd>
		</dl>
		<dl class="form-item">
			<dt for="url" class="form-label">参考URL</dt>
			<dd class="form-detail"><input type="text" name="email" class="form-parts" value="<?=$row["email"]?>"></dd>
    </dl>
    <dl class="form-item">
			<dt for="age" class="form-label">行ってみたい度（〜100）</dt>
			<dd class="form-detail"><input type="text" name="age" class="form-parts" value="<?=$row["age"]?>"></dd>
		</dl>
    <dl class="form-item">
			<dt for="naiyou" class="form-label">メモ・コメント</dt>
			<dd class="form-detail"><textArea name="naiyou" rows="4" cols="40" class="form-parts"><?=$row["naiyou"]?></textArea></textArea></dd>
		</dl>
  </div>
  </div>
  <input type="submit" value="送信" class="btn btn-submit">
  <input type="hidden" name="id" value="<?=$id?>">
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
