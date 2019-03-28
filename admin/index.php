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
        <h3 align="center"> Admin Page ยินดีต้อนรับคุณ 
          <font color="blue"> <?php echo $user_name;?> 
        </font>
      </h3> 
        <hr>
        <?php include('product_open_list.php'); ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>