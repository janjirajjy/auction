<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();



	$m_username = $_POST["m_username"];
	$m_password = $_POST["m_password"];
	$m_fname = $_POST["m_fname"];
	$m_name = $_POST["m_name"];
	$m_lname = $_POST["m_lname"];
	$m_email = $_POST["m_email"];
	$m_phone = $_POST["m_phone"];


	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_member
	(
	m_username,
	m_password,
	m_fname,
	m_name,
	m_lname,
	m_email,
	m_phone
	)
	VALUES
	(
	'$m_username',
	'$m_password',
	'$m_fname',
	'$m_name',
	'$m_lname',
	'$m_email',
	'$m_phone'
	)";

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
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>