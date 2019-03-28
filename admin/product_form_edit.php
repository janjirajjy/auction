<?php
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
<form action="product_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
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