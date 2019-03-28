<h4> Form เพิ่มธนาคาร </h4>
<form action="bank_form_add_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อเจ้าของบัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_name" required class="form-control" autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เลขที่บัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_number" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ประเภทบัญชี :
    </div>
    <div class="col-sm-4">
      <input type="text" name="account_type" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อธนาคาร :
    </div>
    <div class="col-sm-4">
      <input type="text" name="bank_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
    </div>
  </div>
</form>