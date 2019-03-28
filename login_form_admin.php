<!-- start form -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-2"></div>
    <div class="col-xs-12 col-md-10">
      <form action="chklogin_a.php" method="post" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-2 control-label">
          </div>
          <div class="col-sm-4">
            <h3 align="center"> :: FORM LOGIN ADMIN::</h3>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            Username :
          </div>
          <div class="col-sm-4">
            <input type="text" name="user_username" required class="form-control" placeholder="username" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2 control-label">
            Password :
          </div>
          <div class="col-sm-4">
            <input type="password" name="user_password" required class="form-control" maxlength="10" placeholder="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end form -->