<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();

$auction_price = $_POST['auction_price'];
$auction_startdate = $_POST['auction_startdate'];
$auction_enddate = $_POST['auction_enddate'];
$auction_endtime = $_POST['auction_endtime'];
$auction_end =$auction_enddate.' '.$auction_endtime;
$auction_id = $_POST['auction_id'];


	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE auction SET 
		 
		auction_price='$auction_price',
		auction_startdate='$auction_startdate',
		auction_enddate='$auction_enddate',
		auction_endtime='$auction_endtime',
		auction_end='$auction_end'
		WHERE auction_id=$auction_id
	 ";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;

 
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'addproduct.php?act=openlist'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'addproduct.php'; ";
	echo "</script>";
}
?>