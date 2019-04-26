<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//exit();<?php
$query = "SELECT * FROM unit" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);
 
$id=$_GET['ID'];
$sql = "
SELECT p.*,u.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
WHERE p.product_id=$id ";
$result2 = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);
?>
<h4> Form แก้ไขสินค้า  </h4>
<form action="mb_product_form_edit.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อสินค้า :
    </div>
    <div class="col-sm-7">
      <input type="text" name="product_name" required class="form-control" value="<?php echo $row['product_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รายละเอียด:
    </div>
    <div class="col-sm-10">
      <textarea name="product_detail" class="form-control" required id="editor"><?php echo $row['product_detail'];?></textarea>
    </div>
  </div>
<!--   <div class="form-group">
    <div class="col-sm-2 control-label">
      ราคา :
    </div>
    <div class="col-sm-2">
      <input type="number" name="product_price" required class="form-control" value="<?php // echo $row['product_price'];?>">
    </div>
    <div class="col-sm-1">
      บาท
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-sm-2 control-label">
      หน่วย :
    </div>
    <div class="col-sm-4">
      <select name="unit_id" class="form-control" required>
        <option value="<?php echo $row["unit_id"];?>"><?php echo $row["unit_detail"];?></option>
        <option value="">-เลือกข้อมูล-</option>
        <?php foreach($result as $results){?>
        <option value="<?php echo $results["unit_id"];?>"><?php echo $results["unit_detail"];?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ภาพสินค้า :
    </div>
    <div class="col-sm-4">
      <br/>
      ภาพเก่า 
      <br/>
      <img src="../<?php echo $row['product_photo'];?>" width="300px">
      <br/>
      เลือกใหม่ <br/>
      <br/>
      <input type="file" name="product_photo"   class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
      <input type="hidden" name="product_photo2" value="<?php echo $row['product_photo'];?>">
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>
<script>
initSample();
</script>
<?php
mysqli_close($condb);
?>

	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	$product_name = $_POST["product_name"];
	$product_price = $_POST["product_price"];
	$unit_id = $_POST["unit_id"];
	$product_detail = $_POST["product_detail"];
	$product_photo2 = $_POST["product_photo2"];
	$product_id = $_POST["product_id"];
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
	}else{
		$newname=$product_photo2;
	}

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "UPDATE detailproduct SET 
	 
	product_name='$product_name',
	product_price='$product_price',
	unit_id='$unit_id',
	product_detail='$product_detail',
	product_photo='$path_link'
	WHERE product_id=$product_id";

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
	echo "window.location = 'product.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'product.php'; ";
	echo "</script>";
}
?>