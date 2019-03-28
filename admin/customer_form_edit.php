<?php 
$id=$_GET['ID'];
$sql = "SELECT * FROM customer WHERE cus_id=$id ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
// echo '<pre>';
// print_r($row);
// echo '</pre>';
?>
<h4> Form แก้ไขสมาชิก </h4>
<form action="customer_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Status :
    </div>
    <div class="col-sm-3">
       <select name="cus_status" class="form-control" required>
         <option value="<?php echo $row['cus_status'];?>"><?php echo $row['cus_status'];?></option>
         <option value="">-เลือกใหม่-</option>
         <option value="BAN">-BAN-</option>
         <option value="ONLINE">-ONLINE-</option>
       </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-4">
      <input type="email" name="cus_email" required class="form-control" placeholder="*email" autocomplete="off" value="<?php echo $row['cus_email'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_password" required class="form-control" maxlength="10" value="<?php echo $row['cus_password'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_name" required class="form-control" value="<?php echo $row['cus_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_lastname" required class="form-control" value="<?php echo $row['cus_lastname'];?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-6">
      <textarea name="cus_address" class="form-control" required><?php echo $row['cus_address'];?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_tel" required class="form-control" minlength="10" value="<?php echo $row['cus_tel'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input  type="hidden" name="cus_id" value="<?php echo $row['cus_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>