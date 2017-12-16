

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