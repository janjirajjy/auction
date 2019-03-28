<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();



	$user_username = $_POST["user_username"];
	$user_password = $_POST["user_passwords"];
	$user_name = $_POST["user_name"];
	$user_lastname = $_POST["user_lastname"];
	$user_tel = $_POST["user_tel"];

	$check = "SELECT  user_username FROM user  WHERE user_username = '$user_username' ";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";

    }else{



	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO user
	(
	user_username,
	user_password,
	user_name,
	user_lastname,
	user_tel
	)
	VALUES
	(
	'$user_username',
	'$user_password',
	'$user_name',
	'$user_lastname',
	'$user_tel'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;

}
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'user.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'user.php'; ";
	echo "</script>";
}
?>