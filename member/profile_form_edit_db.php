<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// //exit();



	$cus_id = $_POST["cus_id"];
	$cus_password = $_POST["cus_password"];
	$cus_name = $_POST["cus_name"];
	$cus_lastname = $_POST["cus_lastname"];
	$cus_tel = $_POST["cus_tel"];
	$cus_address = $_POST["cus_address"];
	$cus_sex= $_POST["cus_sex"];
	$cus_birthday= $_POST["cus_birthday"];
	$cus_district= $_POST["cus_district"];
	$cus_amphur= $_POST["cus_amphur"];
	$cus_province= $_POST["cus_province"];
	$cus_zipcode= $_POST["cus_zipcode"];
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE customer SET 
 
	cus_password='$cus_password',
	cus_name='$cus_name',
	cus_lastname='$cus_lastname',
	cus_tel='$cus_tel',
	cus_address='$cus_address',
	cus_sex='$cus_sex',
	cus_birthday='$cus_birthday',
	cus_district='$cus_district',
	cus_amphur='$cus_amphur',
	cus_province='$cus_province',
	cus_zipcode='$cus_zipcode'
	WHERE cus_id=$cus_id";

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
	echo "window.location = 'profile.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
}
?>