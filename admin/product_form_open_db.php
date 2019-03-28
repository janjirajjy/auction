<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();

$auction_product = $_POST['auction_product'];
$auction_price = $_POST['auction_price'];
$auction_startdate = $_POST['auction_startdate'];
$auction_enddate = $_POST['auction_enddate'];
$auction_endtime = $_POST['auction_endtime'];
$auction_end =$auction_enddate.' '.$auction_endtime;
$product_id = $_POST['product_id'];
$product_price = $_POST['product_price'];


	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO auction
		(
		auction_product,
		auction_price,
		auction_startdate,
		auction_enddate,
		auction_endtime,
		product_id,
		auction_end,
		product_price_bid
		)
		VALUES 
		(
		'$auction_product',
		'$auction_price',
		'$auction_startdate',
		'$auction_enddate',
		'$auction_endtime',
		'$product_id',
		'$auction_end',
		'$product_price'
		)
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
	echo "window.location = 'product.php?act=openlist'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'product.php'; ";
	echo "</script>";
}
?>