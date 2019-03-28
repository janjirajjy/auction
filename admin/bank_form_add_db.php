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
	

	$check = "SELECT  account_number FROM account  WHERE account_number = '$account_number' ";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";

    }else{

	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO account
	(
	account_name,
	account_number,
	account_type,
	bank_name
	)
	VALUES
	(
	'$account_name',
	'$account_number',
	'$account_type',
	'$bank_name'
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
	echo "window.location = 'bank.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'bank.php'; ";
	echo "</script>";
}
?>