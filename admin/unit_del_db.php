<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$unit_id = $_GET["id"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "DELETE FROM  unit 
	WHERE unit_id=$unit_id
	";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
 
 
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'unit.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'unit.php'; ";
	echo "</script>";
}
?>