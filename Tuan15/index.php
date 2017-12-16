 
<?php
	//kết nối database 1 lần
	require_once("inc/inc.php");
?>
<?php
	if(isset($_POST['delete'])){
		$id = $_POST['delete'];
		$sql= "DELETE FROM sinhvien WHERE stt='{$id}'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo "Xóa thành công!!<br>";
		}
		else{
			echo "Không xóa được<br>". mysqli_error($conn);
		}
	}
	else{
		echo "Chưa khởi tạo Delete<br>";
	}
?>

<?php
	$sql= "SELECT * FROM sinhvien";
	//chú ý bản 2006 chỉ là sql_query($sql)
	$query = mysqli_query($conn, $sql);

	if(!$query)
		die("Sai");
?>

	<table border= "1">
		<thead>
			<td>Số thứ tự</td>
			<td>Họ tên</td>
			<td>Quê</td>
			<td>Lớp</td>
			<td>Ngày sinh</td>
			<td>Tiểu sử</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</thead>
		<tbody>
			<?php
			// tao ra vong lap while, sau do tao ra bien $row voi nhiem vu lay theo $query, kieu MYSQLI_ASSOC(liên hợp)
				while($row= mysqli_fetch_array($query, MYSQLI_ASSOC))
				{

				
			?>
				<tr>
					<td><?php echo $row['stt']; ?></td>
					<td><?php echo $row['hoten']; ?></td>
					<td><?php echo $row['quequan']; ?></td> 
					<td><?php echo $row['lop']; ?></td> 
					<td><?php echo $row['ngaysinh']; ?></td>
					<td><?php echo $row['tieusu']; ?></td>
					<!--<td>
						 lam nut edit, dòng này có tác dụng truyền id của người muốn sửa lên thanh url -->
						<!--<a href="sua.php?stt=<?php //echo $row['stt']; ?>" > Sửa </a> 
					</td>
					<td>
						lam nut edit, dòng này có tác dụng truyền id của người muốn sửa lên thanh url -->
						<!-- <a href="xoa.php?stt=<?php //echo $row['stt']; ?>" > Xóa </a> 
					</td>--> 
					<td>
						<!-- đặt tên là id -->
						<a href="sua.php?id=<?php echo $row['stt'];?>"><button type="submit">Sửa</button></a>
					</td>
					<td>
						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['stt']; ?>">
							<button type="submit" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
						</form>
					</td>
				</tr>

			<?php
				}
			?>
		</tbody>
	</table>
<!DOCTYPE html>
<html>
<head>
	<title>DB</title>
</head>
<body>
	<br>
	<a href="them.php" ><input type="submit" name="" value="Thêm dữ liệu" ></a>
</body>
</html>