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
        <hr>
        <h4>ประวัติการเข้าประมูล</h4>
        <a href="bid.php?act=add" class="btn btn-info">รายการที่ชนะการประมูล</a> 
        <a href="bid.php?act=openlist" class="btn btn-success"> รายการที่แพ้การประมูล</a>
        <?php 
         $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if($act=='add'){
          include('bid_list.php');
        }else{
          include('bid_list.php');
        }
        ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>