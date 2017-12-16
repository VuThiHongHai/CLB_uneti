<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$a= $_POST["txt-ch"];
		$b= $_POST["txt-csc"];
		$c= $_POST["txt-csm"];
		$d= $_POST["txt-dg"];
		$e= $_POST["txt-tien"];
		$e= ($c - $b) * $d;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thanh Toán Tiền Điện</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST">
		<h1><i>THANH TOÁN TIỀN ĐIỆN</i></h1>
		<table>
			<tr>
				<td>Tên chủ hộ</td>
				<td><input type="text" name="txt-ch" placeholder="Mời nhập tên chủ hộ" value="<?php echo $a; ?>"></td>
			</tr>
			<tr>
				<td>Chỉ số cũ</td>
				<td><input type="text" name="txt-csc" placeholder="Chỉ số cũ" value="<?php echo $b; ?>">(Kw)</td>
			</tr>
			<tr>
				<td>Chỉ số mới</td>
				<td><input type="text" name="txt-csm" placeholder="Chỉ số mới" value="<?php 
					if(isset($c))
					{
						if($c>$b)
							echo $c;
						else
							echo "Chỉ số mới phải nhỏ hơn chỉ số cũ";
					} 
				 ?>">(Kw)</td>
			</tr>
			<tr>
				<td>Đơn giá</td>
				<td><input type="text" name="txt-dg" placeholder="Mời nhập đơn giá" value="<?php 
					echo $d;
				?>">(VNĐ)</td>
			</tr>
			<tr>
				<td>Số tiền thanh toán</td>
				<td><input type="text" name="txt-tien" readonly="true" placeholder="" value="<?php 
					if(isset($e))
					{
						if($c>$b)
							echo $e;
						else
							echo "Chỉ số mới phải nhỏ hơn chỉ số cũ";
					} 
				?>">(VNĐ)</td>
			</tr>
		</table>
		<center><input type="submit" name="submit" value="Tính"></center>
	</form>
</body>
</html>