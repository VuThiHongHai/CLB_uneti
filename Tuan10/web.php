<!-- <?php
	//nôm na cách dùng post là như thế này. 
	//a có form bên dưới, cho phép người dùng nhập vào họ tên + ngày sinh, sau đó khi nhấn nút, thì nó in ra màn hình họ tên và ngày sinh người dùng mới nhập vào. 
	// Thì để lấy thông tin mà người dùng nhập vào trong form, ta dùng POST để lấy.
	
	//Đầu tiên, dùng dòng IF này để k có thông báo Notice: Undefined index
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		//dùng $_POST để lấy thông tin ở họ tên, sau đó gán cho nó = biến a
	//	$a= $_POST["txt-hoten"]; //trong dấu "" là name dưới input
		//tiếp: lấy thông tin ở ô ngày sinh, sau đó gán cho nó = biến b
	//	$b= $_POST["txt-ngaysinh"];
		//ok, xong, giờ in ra màn hình 2 cái gía trị người dùng mới nhập
		//in ra họ tên
	//	echo $a;
		//in ra ngày sinh
	//	echo $b;
	//}
	//ok, nôm na post dùng để lấy thông tin người dùng nhập vào trong form
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Post trong php </title>
</head>
<body>
	<form method="POST" action="">
		Họ tên:
		<input type="text" name="txt-hoten" value="" placeholder="Mời bạn nhập họ tên">
		<br>
		Ngày sinh:
		<input type="text" name="txt-ngaysinh" value="" placeholder="Mời bạn nhập ngày sinh">
		<br>
		<input type="submit" name="submit-dangki" value="Đăng kí">
	</form>
</body>
</html> -->







<?php
	//GET TRONG PHP
	//Nôm na, a có form bên dưới html, và một đường link, khi nhấn vào nút đăng kí, thì nó sẽ lấy ra gía trị của name, age, country trên thanh url (link)
	//thanh url(link) của a có dạng như sau: 
	//localhost/Web_Club/Web_Club_Uneti/tuan10/3)GET.php?name=tuan&age=21&country=vietnam
	//Đầu tiên, dùng dòng IF này để k có thông báo Notice: Undefined index
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		//khai báo biến a, dùng $_GET để lấy thông tin từ name trên thanh url
		$a= $_GET["name"];
		//khai báo biến b, dùng $_GET để lấy thông tin từ age trên thanh url
		$b= $_GET["age"];
		//khai báo biến c, dùng $_GET để lấy thông tin từ country trên thanh url
		$c= $_GET["country"];
		
		//in ra name, age, country
		echo $a; 
		echo $b;
		echo $c;
		//kết quả in ra : tuan21vietnam 
		//ok, nôm na get là lấy thông tin của các trường mình cần trên thanh url
		//mở rộng: các đường link sẽ có dạng: localhost/Web_Club/Web_Club_Uneti/tuan10/3)GET.php?name=tuan&age=21&country=vietnam
		
		//trongg đó: phần cứng sẽ có dạng kiểu như link này localhost/Web_Club/Web_Club_Uneti/tuan10/3)GET.php
		//sau phần cứng trên, gía trị đầu tiên được ngăn cách bằng dấu ? : ví dụ: name=tuan
		//các gía trị sau sẽ được ngăn cách bằng dấu & : ví dụ: &age=21&country=vietnam 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Get trong php</title>
</head>
<body>
	<form method="GET" action="">
		<input type="submit" name="submit-dangki" value="Đăng kí">
	</form>
</body>
</html>