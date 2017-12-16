
<?php
	$con = mysqli_connect("localhost", "root", "", "tuan12");
	if(!$con){
		die("Có lỗi xảy ra với database");
	}
	else{
		mysqli_set_charset($con, "utf8");
	}
?>

<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a = $_POST["txt-ten"];
		$b = $_POST["txt-ma"];
		$c = $_POST["txt-nsinh"];
	

	$sql1 = "INSERT INTO lop(ten, ma, noisinh)
			VALUES ('{$a}', '{$b}', '{$c}')";

	$result1 = mysqli_query($con, $sql1);

	if(!$result1){
		echo "Thêm thất bại";
	}
	else{
		echo "Thêm thành công";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thử Database</title>
</head>
<body>
	<form method="POST" action="">
		<h4>Thêm Dữ Liệu</h4>
		<label>
			Tên: 
			<input type="text" name="txt-ten"><br>
		</label>
		<label>
			Mã:
			<input type="text" name="txt-ma"><br>
		</label>
		<label>
			Nơi sinh:
			<input type="text" name="txt-nsinh"><br>
		</label>

		<input type="submit" name="submit" value="Đăng kí">
	</form>
</body>
</html>