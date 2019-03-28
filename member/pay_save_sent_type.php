<meta charset="utf-8">
<?php 
include('../condb.php'); 
    $cus_id = $_POST["cus_id"];
	$auction_id = $_POST["auction_id"];
	//$send_id = $_POST["send_id"];
    $trans_price = $_POST['trans_price'];
	        $send_id = $_POST['send_id'];  // value ที่ส่งมา
            $send_id_explode = explode('-', $send_id);   // ขั้นด้วย '-
            $send_id = $send_id_explode[0];
            $send_rate = $send_id_explode[1];




$totalprice = ($trans_price + $send_rate);


// echo $totalprice;



// exit;



//เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO  orders
(
cus_id,
auction_id,
send_id,
send_rate,
trans_price
)
VALUES
(
'$cus_id',
'$auction_id',
'$send_id',
'$send_rate',
'$totalprice'
)
";

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
	//echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'index.php?act=upload&auction_id=$auction_id&s=$send_id&sr=$send_rate&pt=$totalprice&do=uploadslip'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'index.php?act=upload&auction_id=$auction_id'; ";
	echo "</script>";
}
?>

 