<?php
	// kết nối với database
	$conn= mysqli_connect("localhost", "root", "", "tuan12");
	if(!$conn){
		die("Có lỗi xảy ra với việc kết nối database");
	}
	else {
		// echo "Chúc mừng bạn đã kết nối thành công";
		mysqli_set_charset($conn, "utf8");
	}

?>
<?php
	if(isset($_GET["stt"])){
		$stt= $_GET["stt"];
	}
	//xóa dữ liệu
	$sql2 = "DELETE FROM sinhvien WHERE stt={$stt}";
	$query2= mysqli_query($conn, $sql2);
	if(!$query2){
		echo "Không thành công!";
	}
	else{
		echo "Thành công!";
	}

?>