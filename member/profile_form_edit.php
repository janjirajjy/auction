<h4> Form แก้ไขข้อมูลส่วนตัว </h4>
<form action="profile_form_edit_db.php" method="post" class="form-horizontal">
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