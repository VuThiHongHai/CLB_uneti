<?php
	echo "Hello Word";
	// in ra ngoài sung echo " "
	/* 
		Biến trong php: $tên biến= "hai";
		In tên biến ra: echo $biến;
	*/
	$name= "Hải";
			// echo $name;
	$vui= "năm 2017";
	// nối chuỗi
	echo $name . " " . $vui;
	/*hằng số: những gì không thay đổi
	define("tên", "giá trị"")
	*/
	define("tuoi", "20");
	echo tuoi;

	//kiểu dữ liệu, không cần khai báo
	$chuoi="1234";
	echo $chuoi;
	//kiểm tra dạng kiểu dữ liệu của biến
	var_dump("1234");
	// hoặc
	var_dump($chuoi);	

	//mảng: array
			//array('1','2','3','4')
	//đặt tên biến cho mảng
	$array= array('1','2','3','4');
	echo $array[1]; //in ra phần tử thứ hai trong mảng vì mảng bắt đầu từ số 0
	//toán tử trong php: cộng từ nhân chia
	$toantu= 2+3; //hoặc $toantu= "2" + "3"
	echo $toantu;

	//if- elsse
	/* 
		if(điều kiện)
		{ 
			code
		}
	*/
	$age=19;
	if($age<18)
	{
		echo "Vị thành niên";
	}
	elseif($age==18) //toán tử = là gán
	{
		echo "Thanh niên";
	}
	else
	{
		echo "Người lớn";
	}

	// switch-case:
	/*switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
	*/
	$t=18;
	switch ($t) {
		case '17':
			echo "vị thành niên";
			break;
		case '18':
			echo "thành niên";
			break;
		case '20':
			echo "người lớn";
			break;
		default:
			echo "xem lại";
			break;
	}
	//vòng lặp for
	// for(đk bắt đầu, đk kết thúc, tăng giảm)
	for($i=1; $i<=10; ++$i)
	{
		echo $i . ", ";
	}
	//in nhiều từ bắt đầu đến kết thúc
	$nam= range(1997,2017);
	echo $nam[20]; //in ra năm tại vị trí 20

	$thang=array(
		1=> "tháng 1",
		2=> "tháng 2",
		3=> "tháng 3",
		4=> "tháng 4",
		5=> "tháng 5",
		6=> "tháng 6",
		7=> "tháng 7",
		8=> "tháng 8",
		9=> "tháng 9",
		10=> "tháng 10",
		11=> "tháng 11",
		12=> "tháng 12",
	);

	// hàm đưa ra một dãy số mảng
	foreach ($thang as $key => $value) {
		echo $key; //hoặc echo #value
	}

	//while
	$a=1;
	while ($a<=100) {
		echo $a . ", ";
		$a++;
	}

	//hàm

	function tinhtong($so1, $so2)
	{
		return $so1+ $so2;
	}
	$tong= tinhtong(10,12);
	echo $tong;

?>