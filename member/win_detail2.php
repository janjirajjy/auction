<?php

$query = "
SELECT p.*,u.*,a.*,c.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id
INNER JOIN customer as c  ON a.cus_id=c.cus_id
WHERE a.auction_status=1
AND a.cus_id=$cus_id
AND a.auction_id=$_GET[auction_id]
ORDER BY p.product_id ASC"
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);
//sent type

$querys = "
SELECT * FROM send_type WHERE send_id=$_GET[s]"
or die("Error:" . mysqli_error());
$results = mysqli_query($condb, $querys);
$rows = mysqli_fetch_array($results);
extract($rows);

//print_r($rows);


//bank




echo "<table  class='table table-bordered table-hover'>";
  //หัวข้อตาราง
  echo "
  <thead>
    <tr align='center' class='danger'>
      <th width='5%'><center>รหัส</center></th>
      <th width='10%'>ภาพ</th>
      <th width='30%'>ชื่อสินค้า</th>
      <th width='10%'><center>ราคาชนะประมูล</center></th>
      <th width='10%'>สถานะ</th>
    </tr>
  </thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td align='center'>" .$row["auction_id"] .'.'."</td> ";
    echo "<td>"."<img src='../".$row['product_photo']."' width='100%'>"."</td>";
    echo "<td>"
      .$row["product_name"]
      .' จำนวน '
      .$row["auction_amount"].' '.$row["unit_detail"]
      .'<br>'
      .'<font color="blue">'
      .'เปิด '
      .date('d/m/Y',strtotime($row["auction_startdate"]))
      .'</font>'
      .' , '
      .'<font color="red">'
      .' ปิด '
      .date('d/m/Y H:i:s',strtotime($row["auction_end"]))
      .'</font>'
    ."</td> ";
    echo "<td align='right'><b>" .number_format($row["product_price_bid"],2) .  "</b></td> ";
    echo "<td>"
      .'รอชำระเงิน'
      
    ."</td> ";
  echo "</tr>";
  $account_cus_id = $row["product_customerid"];
  
  }
echo "</table>";

//sent type
$queryb = "
SELECT * FROM account WHERE account_cus_email='$account_cus_id'" 
or die("Error:" . mysqli_error());
$resultb = mysqli_query($condb, $queryb); 
?>
<hr>
<div style="background-color: #c9ecf2; padding: 20px;">
  <h4>ฟอร์มชำระเงินค่าสินค้า >> <font color="red">  อัพโหลดสลิปหลักฐานการชำระเงิน </font></h4>
  <form class="form-horizontal" method="post" action="pay_save_upload.php" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-sm-2">
        <b>คุณเลือกวิธีส่งสินค้า</b>
      </div>
      <div class="col-sm-3">
        <b> <?php echo $rows['send_name'];?> </b>
        <br>
        + ค่าส่ง   <?php echo $rows['send_rate'];?>    บาท
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>ยอดที่ต้องชำระ</b>
      </div>
      <div class="col-sm-3">
        <font color="red">
        <b><?php echo $_GET['pt'];?>  บาท </b>
      </font>
      </div>
    </div>
      <div class="form-group">
    <div class="col-sm-2">
       <b>ธนาคารที่โอนเงิน</b>
    </div>
    <div class="col-sm-5">    
      <br>
      <?php 
       while($row = mysqli_fetch_array($resultb)) { ?>

       <input type="radio" name="account_id" value="<?php echo  $row['account_id'];?>" required>
         ธนาคาร :  <?php echo  $row['bank_name'];?> , 
         เลขบ/ช : <?php echo  $row['account_number'];?><br>
       <?php  } ?>
    </div>
  </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>อัพโหลดสลิป</b>
      </div>
      <div class="col-sm-3">
        <input type="file" name="slip_file" required class="form-control">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
    <div class="col-sm-1">
      <input type="hidden" name="auction_id" value="<?php echo $_GET['auction_id'];?>">
      <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยัน');">บันทึก</button>
    </div>
  </div>
</form>
</div>