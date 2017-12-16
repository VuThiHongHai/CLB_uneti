
<?php
	//kết nối database 1 lần
	require_once("inc/inc.php");
?>
<?php
	$id = $_GET["id"];
	$sql = "SELECT * FROM sinhvien WHERE stt='{$id}'";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	if(empty($row)){
		echo "Bài viết không tồn tại!!";
	}
	else{
		if($_SERVER["REQUEST_METHOD"]== "POST"){
			$hoten=$_POST["hoten"];
			$que=$_POST["quequan"];
			$lop=$_POST["lop"];
			$ngaysinh=$_POST["ngaysinh"];	
			$tieusu=$_POST["tieusu"];

			$sql1= "UPDATE sinhvien SET hoten='{$hoten}', quequan='{$que}', lop='{$lop}', ngaysinh='{$ngaysinh}', tieusu='{$tieusu}' WHERE stt='{$id}'";
			$query1= mysqli_query($conn, $sql1);
			if($query1)
			{
				echo "Cập nhật thành công!!";
			}
			else{
				echo "Cập nhật thất bại!!". mysqli_error($conn);
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
	<form method="POST" action="">
		<label>
			Họ Tên:<br>
			<input type="text" name="hoten" value="<?php echo $row['hoten'];?>"><br>
		</label>
		<label>
			Quê Quán:<br>
			<input type="text" name="quequan" value="<?php echo $row['quequan'];?>"><br>
		</label>
		<label>
			Lớp:<br>
			<input type="text" name="lop" value="<?php echo $row['lop'];?>"><br>
		</label>
		<label>
			Ngày Sinh:<br>
			<input type="number" name="ngaysinh" value="<?php echo $row['ngaysinh'];?>"><br>
		</label>
		<label>
			Tiểu Sử:<br>
			<textarea name="tieusu"><?php echo $row['tieusu'];?></textarea>
		<input type="submit" name="" value="Sửa">
	</form>
</body>
</html>