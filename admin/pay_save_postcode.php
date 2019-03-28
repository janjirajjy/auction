
<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 
$tracking_id = $_POST['tracking_id'];
$auction_id = $_POST['auction_id'];
$trans_price = $_POST['trans_price'];

$sql = "UPDATE orders SET 
 tracking_id='$tracking_id'
 WHERE auction_id=$auction_id";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());






//update status auction pay slip
$sql2 = "UPDATE  auction SET 
productstatus_id=3
WHERE auction_id=$auction_id
";
$result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());





	// echo '<pre>';
	// echo $sql2;
	// echo '</pre>';
	// exit;
 
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'pay.php?auction_id=$auction_id&act=showslip&p=$trans_price&do=payformok'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'customer.php'; ";
	echo "</script>";
}
 