
<?php
	//phpinfo(); //kiểm tra thông tin
	//về nhà: sql, mysql, apache, http

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a=$_POST["txt-hk1"];
		$b=$_POST["txt-hk2"];
		$c=$_POST["txt-dtb"];
		$d=$_POST["txt-kq"];
		$e=$_POST["txt-xl"];
		$dtb=($a+$b*2)/3;
		if($a>10 || $a<0 || $b>10 || $b<0){
			echo"Mời bạn nhập lại";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kết Quả Học Tập</title>
	<link rel="stylesheet" type="text/css" href="css/web.css"/>
	<meta charset="utf-8"/>
</head>
<body>
	<form method="POST"><table>
		<h1><i>KẾT QUẢ HỌC TẬP</i></h1>
		
			<tr>
				<td>Điểm HK1</td>
				<td><input type="text" name="txt-hk1" placeholder="Mời nhập" value="<?php echo $a;?>"></td>
			</tr>
		
		
			<tr>
				<td>Điểm HK2</td>
				<td><input type="text" name="txt-hk2"
						placeholder="Mời nhập" value="<?php echo $b;?>"></td>
			</tr>

	
		
			<tr>

				<td>Điểm Trung Bình</td>
				<td><input type="text" name="txt-dtb" readonly="true" value="<?php 
					if($dtb>=0 && $dtb<=10)
						{
							echo $dtb;
						}
					else{
							echo "Lỗi nhập";
						}
						?>">
					</td>
			</tr>

		
		
			<td>Kết Quả</td>
			<td><input type="text" name="txt-kq" readonly="true" value="<?php
						if(isset($dtb)){
							if($dtb>10 || $dtb<0){
								echo "Lỗi nhập";
							}
							elseif($dtb<=10 && $dtb>=5){
								echo "Được lên lớp";
							}
							else{
								echo "Ở lại lớp";
							}
						}
						else
							echo "Chưa nhập điểm";

					?>"></td>
			</tr>

			
		
		
				<td>Xếp Loại Học Lực</td>
				<td><input type="text" name="txt-xl" readonly="true" value="<?php
						if(isset($dtb)){
							if($dtb>10 || $dtb<0){
								echo "Lỗi nhập";
							}
							elseif($dtb<=10 && $dtb>=8){
								echo "Giỏi";
							}
							elseif ($dtb>6.5 && $dtb<8){
								echo "Khá";
							}
							elseif ($dtb>=5 && $dtb<6.5){
								echo "Khá";
							}
							else{
								echo "Yếu";
							}
						}
						
					?>"></td>
		</tr>	
	</table>
		<center><button type="submit">Xem Kết Quả</button></center>

	</form>
</body>
</html>
