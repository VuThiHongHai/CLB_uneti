<?php
	$conn = mysqli_connect("localhost","root","","tuan12");
	if(!$conn)
		die ("Không thể kết nối database");
	else
		mysqli_set_charset($conn, "utf8");
?>

<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$stt = $_POST["txt-stt"];
		$hoten = $_POST["txt-hoten"];
		$que = $_POST["txt-que"];
		$lop = $_POST["txt-lop"];
		$ns = $_POST["txt-ns"];
		$ts = $_POST["txt-ts"];

		$sql3 = "INSERT INTO sinhvien(stt, hoten, quequan, lop, ngaysinh, tieusu)
					VALUES('{$stt}', '{$hoten}', '{$que}', '{$lop}', '{$ns}', '{$ts}')";
		$query3 = mysqli_query($conn, $sql3);
		if(!$query3){
				echo "Không thành công";

			}
			else{
				echo "Thêm thành công";
			}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Thêm DL</title>
</head>
<body>
	<form method="POST" action="">
		<label>
			STT: 
			<input type="text" name="txt-stt"><br>
		</label>
		<label>
			Họ Tên:
			<input type="text" name="txt-hoten"><br>
		</label>
		<label>
			Quê Quán:
			<input type="text" name="txt-que"><br>
		</label>
		<label>
			Lớp:
			<input type="text" name="txt-lop"><br>
		</label>
		<label>
			Ngày Sinh:
			<input type="text" name="txt-ns"><br>
		</label>
		<label>
			Tiểu Sử:
			<input type="text" name="txt-ts"><br>
		</label>
		<input type="submit" name="" value="Thêm">
	</form>
</body>
</html>