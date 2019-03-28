<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$send_id = $_GET["id"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "DELETE FROM  send_type 
	WHERE send_id=$send_id";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'send_type.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'send_type.php'; ";
	echo "</script>";
}
?>