
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
        <h4>::รายการชนะประมูล::
         
        </h4>
        <?php 
			 if($cus_id !=''){
			 	 include('mb_win_list_m.php');
			 }else{
			 	echo  '<p align="center"> -ต้อง Login เท่านั้น </p>';
			 }
			 ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>