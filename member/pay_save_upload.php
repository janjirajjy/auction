<meta charset="utf-8">
<?php 
include('../condb.php'); 


	$auction_id = $_POST["auction_id"];
	$account_id = $_POST['account_id'];
	 
// exit;

   $pay_date = date('Y-m-d H:i:s');

    $date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	$slip_file = (isset($_POST['slip_file']) ? $_POST['slip_file'] : '');
	$upload=$_FILES['slip_file']['name'];
	if($upload !='') { 
		//โฟลเดอร์ที่เก็บไฟล์
		$path="../slip/";
		//ตัวขื่อกับนามสกุลภาพออกจากกัน
		$type = strrchr($_FILES['slip_file']['name'],".");
		//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
		$newname ='slip'.$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../slip/".$newname;
		//คัดลอกไฟล์ไปยังโฟลเดอร์
		move_uploaded_file($_FILES['slip_file']['tmp_name'],$path_copy);  
	}

$sql = "UPDATE  orders SET 
slip_file='$newname',
pay_date='$pay_date',
account_id=$account_id
WHERE auction_id=$auction_id
";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;


//update status auction pay slip
$sql2 = "UPDATE   auction SET 
productstatus_id=2
WHERE auction_id=$auction_id
";
$result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

 
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'index.php?act=showslip&auction_id=$auction_id'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'index.php?act=showslip&auction_id=$auction_id'; ";
	echo "</script>";
}
?>

 