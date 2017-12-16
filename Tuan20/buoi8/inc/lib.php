<?php
	$conn = mysqli_connect("localhost","root","","webuneti" );
	if(!$conn){
		die("Không thể kết nối database");
	}else{
		mysqli_set_charset($conn, "utf8"); //đổi font chữ
	}
?>