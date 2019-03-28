<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();



	$user_id = $_POST["user_id"];
	$user_password = $_POST["user_passwords"];
	$user_name = $_POST["user_name"];
	$user_lastname = $_POST["user_lastname"];
	$user_tel = $_POST["user_tel"];

	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE user SET 
	user_password='$user_password',
	user_name='$user_name',
	user_lastname='$user_lastname',
	user_tel='$user_tel'
	WHERE user_id=$user_id";

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
	echo "window.location = 'user.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'user.php'; ";
	echo "</script>";
}
?>