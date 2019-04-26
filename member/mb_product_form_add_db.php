<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();
	
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	$product_name = $_POST["product_name"];
	$product_price = 0;//$_POST["product_price"];
	$unit_id = $_POST["unit_id"];
	$product_detail = $_POST["product_detail"];
	$cus_id_user=$_POST["cus_id_user"];

	$product_photo = (isset($_POST['product_photo']) ? $_POST['product_photo'] : '');
	$upload=$_FILES['product_photo']['name'];
	if($upload !='') { 
		//โฟลเดอร์ที่เก็บไฟล์
		$path="../pimg/";
		//ตัวขื่อกับนามสกุลภาพออกจากกัน
		$type = strrchr($_FILES['product_photo']['name'],".");
		//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="pimg/".$newname;
		//คัดลอกไฟล์ไปยังโฟลเดอร์
		move_uploaded_file($_FILES['product_photo']['tmp_name'],$path_copy);  
	}

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO detailproduct
	(product_name,product_price,unit_id,product_detail,product_photo,product_customerid)
	VALUES
	('$product_name','$product_price','$unit_id','$product_detail','$path_link','$cus_id_user')";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	//exit;

 
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'addproduct.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'addproduct.php'; ";
	echo "</script>";
}
?>