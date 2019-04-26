<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();



	$account_name = $_POST["account_name"];
	$account_number = $_POST["account_number"];
	$account_type = $_POST["account_type"];
	$bank_name = $_POST["bank_name"];
	$account_id = $_POST['account_id'];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE account SET 
	account_name='$account_name',
	account_number='$account_number',
	account_type='$account_type',
	bank_name='$bank_name'
	WHERE  account_id=$account_id";

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
	echo "window.location = 'mb_bank.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'mb_bank.php'; ";
	echo "</script>";
}
?>