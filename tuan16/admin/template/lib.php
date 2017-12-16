<?php
//là file kết nối database

	$conn = mysqli_connect("localhost", "root", "", "uneti_cms" );
	if(!$conn)
	{
		die ("không kết nối được với database");
	}
	else
	{
		mysqli_set_charset($conn, "utf-8");
	}
?>