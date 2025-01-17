<?php
include "./api/base.php";
$login = $Admin->find(['acc' => $_SESSION['Admin']]);
$loginPr = unserialize($login['pr']);

// dd($login);
// Array
// (
// [id] => 3
// [acc] => admin
// [pw] => 1234
// [pr] => a:5:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";}
// )
// dd($loginPr);
// Array
// (
// [0] => 1
// [1] => 2
// [2] => 3
// [3] => 4
// [4] => 5
// )

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>┌精品電子商務網站」</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>

<body>
	<iframe name="back" style="display:none;"></iframe>
	<div id="main">
		<div id="top">
			<a href="index.php">
				<img src="./icon/0416.jpg">
			</a>
			<img src="./icon/0417.jpg">
		</div>
		<div id="left" class="ct">
			<div style="min-height:400px;">
				<a href='?do=admin'>管理權限設置</a>
				<?= (in_array(1, $loginPr)) ? "<a href='?do=th'>商品分類與管理</a>" : "" ?>
				<?= (in_array(2, $loginPr)) ? "<a href='?do=order'>訂單管理</a>" : "" ?>
				<?= (in_array(3, $loginPr)) ? "<a href='?do=mem'>會員管理</a>" : "" ?>
				<?= (in_array(4, $loginPr)) ? "<a href='?do=bot'>頁尾版權管理</a>" : "" ?>
				<?= (in_array(5, $loginPr)) ? "<a href='?do=news'>最新消息管理</a>" : "" ?>
				<a href="javascript:location.href='./api/logout.php?user=admin'" style="color:#f00;">登出</a>
			</div>
		</div>
		<div id="right">
			<?php
			$do = $_GET['do'] ?? 'admin';
			$file = "backend/$do.php";
			if (file_exists($file)) {
				include $file;
			} else {
				include "front/admin.php";
			}
			?>
		</div>
		<div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
			<!-- 從backend/bot.php複製來的 -->
			<?= $Bottom->find(1)['bottom'] ?>
		</div>
	</div>

</body>

</html>