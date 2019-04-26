<?php 
$id=$_GET['ID'];
$sql = "SELECT * FROM account WHERE account_id=$id ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขธนาคาร </h4>
<form action="mb_bank_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อเจ้าของบัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_name" required class="form-control" autocomplete="off" value="<?php echo $row['account_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เลขที่บัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_number" required class="form-control" value="<?php echo $row['account_number'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ประเภทบัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_type" required class="form-control" value="<?php echo $row['account_type'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อธนาคาร :
    </div>
    <div class="col-sm-4">
      <input type="text" name="bank_name" required class="form-control" value="<?php echo $row['bank_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="account_id"  value="<?php echo $row['account_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>