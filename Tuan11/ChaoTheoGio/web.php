<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a= $_POST["txt-nhap"];

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CHÀO THEO GIỜ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="">
		<h1>CHÀO THEO GIỜ</h1>
		Nhập giờ:
		<input type="text" name="txt-nhap">
		<br>
		<?php
			if(isset($a)){
				if($a<0 || $a>23){
					echo "Bạn đã nhập sai giờ";
				}
				else
					{
						if($a>=0 && $a<13){
							echo "Chào buổi sáng!";
						}
						elseif ($a>=13 && $a <=18) {
							echo "Chào buổi chiều!";
						}
						else{
							echo "Chào buổi tối!";
						}
					}
			}
		?>
		<center style="background-color: blue;"><input type="submit" name="submit" value="Chào"></center>
	</form>
</body>
</html>