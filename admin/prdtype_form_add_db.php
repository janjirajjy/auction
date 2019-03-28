<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();


	$t_name = $_POST["t_name"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_prd_type
	(t_name)
	VALUES
	('$t_name')";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());


	// echo $sql;
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
}
?>