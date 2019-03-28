<!-- start form -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-1"></div>
    <div class="col-xs-12 col-md-11">
      <h3> :: Form Register ::</h3>
    </div>
    <div class="col-xs-12 col-md-1"></div>
    <div class="col-xs-12 col-md-10">
      <form action="signup_form_db.php" method="post" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-2 control-label">
            Username :
          </div>
          <div class="col-sm-4">
            <input type="email" name="cus_email" required class="form-control" placeholder="*email" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            Password :
          </div>
          <div class="col-sm-4">
            <input type="password" name="cus_password" required class="form-control" maxlength="10">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            ชื่อ :
          </div>
          <div class="col-sm-4">
            <input type="text" name="cus_name" required class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            นามสกุล :
          </div>
          <div class="col-sm-4">
            <input type="text" name="cus_lastname" required class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            ที่อยู่ :
          </div>
          <div class="col-sm-6">
            <textarea name="cus_address" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            เบอร์โทร :
          </div>
          <div class="col-sm-4">
            <input type="text" name="cus_tel" required class="form-control" minlength="10">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end form -->