<h4> Form เพิ่มเจ้าของร้าน </h4>
<form action="user_form_add_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-4">
      <input type="text" name="user_username" required class="form-control" autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-4">
      <input type="password" name="user_passwords" required class="form-control" maxlength="10">
    </div>
  </div>
  <?php /*
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Fname :
    </div>
    <div class="col-sm-2">
      <select name="m_fname" class="form-control" required>
        <option value="">-เลือกข้อมูล-</option>
        <option value="นาย">-นาย-</option>
        <option value="นาง">-นาง-</option>
        <option value="นางสาว">-นางสาว-</option> 
      </select>
    </div>
  </div>
  */?>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="user_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="user_lastname" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-6">
      <input type="text" name="user_tel" required class="form-control" minlength="10">
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