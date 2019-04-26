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
        <h4> ยินดีต้อนรับคุณ <font color="blue"><?php echo $cus_name;?></font> </h4> 
        <input type="hidden"name="cus_id_add" value="<?php echo $cus_cus_email;?>">
       
        <hr>
        <h4>รายการชนะประมูล</h4>
     
        <?php 
   
        // $account_cus_id1=$account_cus_id;
        $act = $_GET['act'];
        if($act=='pay'){
          include('win_detail.php');
        }elseif ($act=='upload') {
          include('win_detail2.php');
        }elseif ($act=='showslip') {
          include('win_detail3.php');
        }else{
        include('win_list.php');
      }
        ?>
        
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>