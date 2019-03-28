<?php 
$id=$_GET['ID'];
$sql = "SELECT * FROM productstatus WHERE productstatus_id=$id ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขสถานะสินค้า </h4>
<form action="productstatus_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-4 control-label">
      ชื่อสถานะ :
    </div>
    <div class="col-sm-7">
      <input type="text" name="status" required class="form-control" value="<?php echo $row['status'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="productstatus_id" value="<?php echo $row['productstatus_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>