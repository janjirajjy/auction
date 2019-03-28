<?php
$query = "SELECT * FROM unit" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);
?>
<h4> Form เพิ่มสินค้า  </h4>
<form action="product_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อสินค้า :
    </div>
    <div class="col-sm-7">
      <input type="text" name="product_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รายละเอียด:
    </div>
    <div class="col-sm-10">
      <textarea name="product_detail" class="form-control" required id="editor"></textarea>
    </div>
  </div>
<!--   <div class="form-group">
    <div class="col-sm-2 control-label">
      ราคา :
    </div>
    <div class="col-sm-2">
      <input type="number" name="product_price" required class="form-control">
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
      <input type="file" name="product_photo" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
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