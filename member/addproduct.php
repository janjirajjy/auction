<?php include('hder.php'); //css ?>
<script src="../ckeditor/ckeditor.js"></script>
  <script src="../ckeditor/samples/js/sample.js"></script>
  <link rel="stylesheet" href="../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <h4>::จัดการสินค้า::
          <a href="addproduct.php?act=add" class="btn btn-info"> +ข้อมูล </a> 
          <a href="addproduct.php?act=openlist" class="btn btn-success"> รายเปิดประมูล </a>
        </h4>
       <?php 
       $act = (isset($_GET['act']) ? $_GET['act'] : '');

        if($act=='add'){
          include('mb_product_form_add.php');
        }elseif($act=='edit'){
          include('mb_product_form_edit.php');
        }elseif($act=='open'){
          include('mb_product_form_open.php');
        }elseif($act=='openedit'){
          include('mb_product_form_open_edit.php');
        }elseif($act=='openlist'){
          include('mb_product_form_open_list.php');
        }else{
          include('mb_product_form_list.php');
        }
       ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>