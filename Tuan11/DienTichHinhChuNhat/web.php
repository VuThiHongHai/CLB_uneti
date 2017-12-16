<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a= $_POST["txt-cd"];
		$b= $_POST["txt-cr"];
		$c= $_POST["txt-dt"];
		$c= $a * $b;
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Diện tích hình chữ nhật</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div id="menu">
		<center><h1><i>DIỆN TÍCH HÌNH CHỮ NHẬT</i></h1></center>
		<form method="POST">
			<table>
				<tr>
					<td>Chiều dài:</td>
					<td><input type="text" name="txt-cd" placeholder="Mời nhập chiều dài" value="<?php echo $a;?>"></td>

				</tr>

				<tr>
					<td>Chiều rộng:</td>
					<td><input type="text" name="txt-cr" placeholder="Mòi nhập chiều rộng" value="<?php echo $b;?>"></td>

				</tr>

				<tr>
					<td>Diện tích:</td>
					<td><input type="text" name="txt-dt" readonly="true" value="<?php echo $c;?>"></td>

				</tr>
			</table>
				
				<center><input type="submit" name="submit" value="Tính"></center>
				
		</form>
	</div>
</body>
</html>