<?php 
$id=$_GET['ID'];
$sql = "SELECT * FROM send_type WHERE send_id=$id ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขประเภทการส่ง </h4>
<form action="send_type_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-4 control-label">
      ชื่อประเภท :
    </div>
    <div class="col-sm-7">
      <input type="text" name="send_name" required class="form-control" value="<?php echo $row['send_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="send_id" value="<?php echo $row['send_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>