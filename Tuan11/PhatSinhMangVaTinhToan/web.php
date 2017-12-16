<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a = $_POST["txt-nhap"];
		$b = $_POST["txt-mang"]
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1><i>PHÁT SINH MẢNG VÀ TÍNH TOÁN</i></h1>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Nhập số phần tử:</td>
				<td><input type="text" name="txt-nhap"></td>
			</tr>
		</table>
			<center><input type="submit" name="submit" value="Phát sinh và tính toán"></center>
		<table>
			<tr>
				<td>Mảng:</td>
				<td><input type="text" name="txt-mang" value="<?php
				
				?>"></td>
			</tr>

			<tr>
				<td>GTLN(MAX) trong mảng:</td>
				<td><input type="text" name="txt-max"></td>
			</tr>

			<tr>
				<td>GTNN(MIN) trong mảng:</td>
				<td><input type="text" name="txt-min"></td>
			</tr>

			<tr>
				<td>Tổng mảng:</td>
				<td><input type="text" name="txt-tong"></td>
			</tr>
		</table>
			<center>(Ghi chú: Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</center>
		
	</form>
</body>
</html>