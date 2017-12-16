<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a = $_POST["txt-a"];
		$b = $_POST["txt-b"];
		$c = $_POST["txt-c"];
		$c = sqrt(pow($a,2) + pow($b,2));
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cạnh Huyền Tam Giác Vuông</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="">
		<h1>CẠNH HUYỀN TAM GIÁC</h1>
		<table>
			<tr>
				<td>Cạnh A:</td>
				<td><input type="text" name="txt-a" placeholder="Mời nhập a" value="<?php 
					if(isset($a)){
						if($a>0)
							echo $a;
						else
							echo "Mời bạn nhập lại";
					}
				?>"></td>
			</tr>
			<tr>
				<td>Cạnh B:</td>
				<td><input type="text" name="txt-b" placeholder="Mời nhập b" value="<?php 
					if(isset($b)){
						if($b>0)
							echo $b;
						else
							echo "Bạn đã nhập sai";
					}
				?>"></td>
			</tr>
			<tr>
				<td>Cạnh C:</td>
				<td><input type="text" name="txt-c" placeholder="" value="<?php 				 
					if(isset($c)){
						if($c>0)
							echo $c;
						else
							echo "Mời nhập lại";
					}
				?>"></td>
			</tr>
		</table>
		<center><input type="submit" name="submit" value="Tính"></center>
	</form>
</body>
</html>