<?php include('hder.php'); //css ?>
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-6">
        <h4>::จัดการข้อมูลประเภทการส่ง::
          <a href="send_type.php?act=add" class="btn btn-primary"> +ข้อมูล </a>
        </h4>
       <?php 

       $act = (isset($_GET['act']) ? $_GET['act'] : '');

       if($act=='add'){
        include('send_type_form_add.php');
       }elseif($act=='edit'){
        include('send_type_form_edit.php');
       }else{
        include('send_type_list.php');
       }   
       ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>