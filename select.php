<?php
//0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();

//２．データ登録SQL作成
$pdo = db_conn();
$sql = "SELECT * FROM gs_an_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>旅先一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <?php include("menu.php"); ?>
</header>
<!-- Head[End] -->


<!-- Main[Start] -->
<div>
<div class="container jumbotron">
  <div class="flex_box">
      <div class="item"><h3><?=$_SESSION["name"]?>さん、こんにちは！</h3></div>
      <div class="item"><a href="form.php"><button class="btn btn-submit">新しい旅を書き入れる</button></a></div>
  </div>
</div>
</div>

<div>
    <div class="container jumbotron">
      <div class="flexbox">
      <?php foreach($values as $v){ ?>
        <div>
          <div><?=$v["id"]?></div>
          <div><a href="detail.php?id=<?=$v["id"]?>"><?=$v["name"]?></a></div>
          <div><a target="_blank" href=<?=$v["email"]?>><?=$v["email"]?></a></div>
          <div>行きたい度<?=$v["age"]?>%</div>
          <?php if($_SESSION["kanri_flg"]=="1"){ ?>
          <div><a href="delete.php?id=<?=$v["id"]?>">[削除]</a></div>
          <?php } ?>
        </div>
      <?php } ?>
      </div>

  </div>
</div>
<!-- Main[End] -->
<!--footer-->
<footer class="footer text-center">
	<div class="wrapper">
		<small class="copyrights">copyrights 2024 Blue Trip All RIghts Reserved.
		</small>
	</div>
</footer>
<!--// footer-->

<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
