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
// $querys = "
// SELECT * FROM send_type WHERE send_id=$_GET[s]"
// or die("Error:" . mysqli_error());
// $results = mysqli_query($condb, $querys);
// $rows = mysqli_fetch_array($results);
// extract($rows);
//print_r($rows);
$auction_id = $_GET['auction_id'];
$querys = "
SELECT *
FROM  orders as o
INNER JOIN send_type  as s ON  o.send_id=s.send_id
INNER JOIN auction as a ON o.auction_id=a.auction_id
INNER JOIN productstatus as t ON a.productstatus_id=t.productstatus_id
INNER JOIN account as c ON o.account_id=c.account_id
ORDER BY o.ord_id DESC"
or die("Error:" . mysqli_error());
$results = mysqli_query($condb, $querys);
$rowsl = mysqli_fetch_array($results);
extract($rowsl);
//print_r($rowsl);
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
      .'รอส่งสินค้า'
      
    ."</td> ";
  echo "</tr>";
  }
echo "</table>";
?>
<hr>
<div style="background-color: #c9ecf2; padding: 20px;">
  <h4>แสดงข้อมูลการชำระเงินค่าสินค้า</h4>
  <form class="form-horizontal" method="post" action="pay_save_upload.php" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-sm-2">
        <b>คุณเลือกวิธีส่งสินค้า</b>
      </div>
      <div class="col-sm-3">
        <b> <?php echo $rowsl['send_name'];?> </b>
        <br>
        + ค่าส่ง   <?php echo $rowsl['send_rate'];?>    บาท
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>ยอดที่ชำระ</b>
      </div>
      <div class="col-sm-3">
        <font color="red">
        <b><?php echo number_format($rowsl['trans_price'],2);?> บาท </b>
        </font>
      </div>
    </div>
        <div class="form-group">
      <div class="col-sm-2">
        <b>ธนาคาร</b>
      </div>
      <div class="col-sm-3">
        <font color="red">
        <b><?php echo $rowsl['bank_name'];?> เลขบ/ช <?php echo $rowsl['account_number'];?>  </b>
        </font>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>สลิป</b>
      </div>
      <div class="col-sm-3">
        <img src="../slip/<?php echo $rowsl['slip_file'];?>" width="300px">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>สถานะ</b>
      </div>
      <div class="col-sm-5">
        <font color="red">
          <b>
         <?php echo $rowsl['status'];?>
         </b>
       </font>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2">
        <b>รหัสพัสดุ</b>
      </div>
      <div class="col-sm-5">
        <font color="red">
          <b>
         <?php echo $rowsl['tracking_id'];?>
       </b>
     </font>
      </div>
    </div>
  </form>
</div>