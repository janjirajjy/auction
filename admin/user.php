<?php include('hder.php'); //css ?>
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <h4>::จัดการข้อมูลเจ้าของร้าน::
          <a href="user.php?act=add" class="btn btn-primary"> +ข้อมูล</a>
        </h4>
       <?php 

       $act = (isset($_GET['act']) ? $_GET['act'] : '');

       if($act=='add'){
        include('user_form_add.php');
      }elseif($act=='edit'){
        include('user_form_edit.php');
       }else{
        include('user_list.php');
       }   
       ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>