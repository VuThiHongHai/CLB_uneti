<?php
	// kết nối với database
	$conn= mysqli_connect("localhost", "root", "", "tuan12");
	if(!$conn){
		die("Có lỗi xảy ra với việc kết nối database");
	}
	else {
		//echo "Chúc mừng bạn đã kết nối thành công";
		mysqli_set_charset($conn, "utf8");
	}

?>

<?php 
	// thêm dữ liệu vào bảng
	// lấy thông tin và khai báo biến
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$stt = $_POST["txt-stt"];
		$hoten = $_POST["txt-hoten"];
		$que = $_POST["txt-que"];
		$lop = $_POST["txt-lop"];
		$ns = $_POST["txt-ns"];
		$ts = $_POST["txt-ts"];
		//bên ngoài là dấu nháy kép thì bên trong là dấu nháy đơn và ngượclại
		//có thể dùng ngoặc nhọn hoặc dấu chấm
		$sql = "INSERT INTO sinhvien(stt, hoten, quequan, lop, ngaysinh, tieusu)
				VALUES('{$stt}', '{$hoten}', '{$que}', '{$lop}', '{$ns}', '{$ts}')";
		//tổng hợp hai điều kiện kết nối xem nó hoạt động thành công không
		$result = mysqli_query($conn, $sql);

		if(!$result){
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
	<title>Tuần 13</title>
</head>
<body>
	<form method="post">
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

		<input type="submit" name="submit" value="Đăng kí">
	</form>

</body>
</html>