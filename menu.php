<!-- start menu -->
<style type="text/css">
#navcolor{
background-color: #0c89d1;
}
#navlink a:link {
color: #FFFFFF;
}
#navlink a:visited {
color: #FFFFFF;
}
.navbar-default .navbar-brand {
color: #FFFFFF;
}

</style>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <nav class="navbar navbar-default" id="navcolor">
        <div class="container-fluid">
        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">หน้าหลัก</a>
          </div>
       
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="navlink" style="float:right">
              <li><a href="cart.php">รถเข็น</a></li>
              <!-- <li><a href="about.php">เกี่ยวกับ</a></li> -->
              <!-- <li><a href="index.php">ประมูล</a></li> -->
              <li><a href="win.php">ชนะประมูล</a></li>
              <!-- <li><a href="bank.php">การชำระเงิน</a></li> -->
              <li><a href="signup.php">สมัครสมาชิก</a></li>
              
              <?php if($m_id!=''){
              echo '<li><a href="member/">
                <span class="glyphicon glyphicon-user"> </span>'
              .' '.$cus_name .' - Profile</a>
            </li>';
            echo '<li><a href="logout.php">
              <span class="glyphicon glyphicon-off"> </span>
            Logout</a>
          </li>';
          }else{
          echo '<li><a href="login.php">
            <span class="glyphicon glyphicon-user"> </span>
          เข้าสู่ระบบ</a>
        </li>';
        }?>
      </ul>
      </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</div>
</div>
<!-- end menu -->