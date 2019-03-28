<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// //exit();



	$unit_detail = $_POST["unit_detail"];
	$unit_id = $_POST["unit_id"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE unit SET 
	unit_detail='$unit_detail'
	WHERE unit_id=$unit_id
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
	echo "window.location = 'unit.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'unit.php'; ";
	echo "</script>";
}
?>