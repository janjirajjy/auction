<meta charset="utf-8">
<?php
//condb
include('condb.php'); 
	$cus_email = $_POST["cus_email"];
	$cus_password = $_POST["cus_password"];
	$cus_name = $_POST["cus_name"];
	$cus_lastname = $_POST["cus_lastname"];
	$cus_tel = $_POST["cus_tel"];
	$cus_address = $_POST["cus_address"];


	$check = "SELECT  cus_email FROM customer  WHERE cus_email = '$cus_email' ";
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
	$sql = "INSERT INTO customer
	(
	cus_email,
	cus_password,
	cus_name,
	cus_lastname,
	cus_tel,
	cus_address
	)
	VALUES
	(
	'$cus_email',
	'$cus_password',
	'$cus_name',
	'$cus_lastname',
	'$cus_tel',
	'$cus_address'
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
	echo "alert('สมัครสมาชิกสำเร็จ กรุณา Login เข้าใช้งานระบบ');";
	echo "window.location = 'login.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'signup.php'; ";
	echo "</script>";
}
?>