<?php include('hder.php'); //css ?>
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
     
        <?php
        $act = $_GET['act'];
        if($act=='showslip'){
             echo '<div class="col-md-10">';
              include('pay_detail.php');
               echo '<p align="center"> <button onclick="window.print();">พิมพ์</button></p>';
             echo '</div>';
        }elseif($act=='m'){
            echo '<div class="col-md-4">';
            include('report_list_m.php');
             echo '<p align="center"> <button onclick="window.print();">พิมพ์</button></p>';
            echo '</div>';
        }elseif($act=='y'){
           echo '<div class="col-md-4">';
            include('report_list_y.php');
             echo '<p align="center"> <button onclick="window.print();">พิมพ์</button></p>';
            echo '</div>';
        }else{
            echo '<div class="col-md-10">';
            include('report_list.php');
            echo '<p align="center"> <button onclick="window.print();">พิมพ์</button></p>';
            echo '</div>';
        }
        ?>
        
      
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>