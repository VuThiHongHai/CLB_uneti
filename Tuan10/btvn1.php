<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a= $_POST["txt_nd"];
		$b= $_POST["txt_mn"];
		$c= $_POST["txt_mc"];

		echo $a . " ";
		echo $b . " ";
		echo $c . " ";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BT1</title>
	<link rel="stylesheet" type="text/css" href="btvn1.css">
</head>
<body>
	<div id="menu">
		<div>
			<h3><i>ĐỊNH MÀU CHỮ - MÀU NỀN</i></h3>
		</div>
		<div id="menu1">
			<form method="POST" action="btvn1.php">
				Nội Dung:
				<input type="text" name="txt_nd" value="" placeholder="Mời nhập nội dung">
				<br>
				<br>
				Màu Nền:
				<input type="text" name="txt_mn" placeholder="Màu nền">
				<br>
				<br>
				Màu Chữ:
				<input type="text" name="txt_mc" placeholder="Màu chữ">
				<br>
				<br>
				<!--<input class="note" type="submit" value="Xem kết quả" style=" width:100px; height:30px; text-align:center; background-color: orange; border:none; cursor:pointer; color:white">
				<br><br>-->
				<center><button type="submit"> Xem Kết Quả</button></center>
			</form>
		</div>
		<div id="menu2">
			<i>Kết quả sau khi nhấn Xem kết quả</i>
		</div>
		<div id="menu3">
			<p>Vì lợi ích trăm năm trồng ngưởi</p>
		</div>
		
	</div>
</body>
</html>