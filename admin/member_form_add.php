<h4> Form เพิ่มสมาชิก </h4>
<form action="member_form_add_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_username" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-4">
      <input type="password" name="m_password" required class="form-control">
    </div>
  </div>
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
  <div class="form-group">
    <div class="col-sm-2 control-label">
      name :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      lname :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_lname" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      email :
    </div>
    <div class="col-sm-6">
      <input type="email" name="m_email" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      phone :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_phone" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
    </div>
  </div>
</form>