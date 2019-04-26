<?php
$query = "
SELECT p.*,u.*,a.*,c.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id
INNER JOIN customer as c  ON a.cus_id=c.cus_id 
WHERE a.auction_status=1
AND a.cus_id=$cus_id
AND a.auction_id=$_GET[id]
ORDER BY p.product_id ASC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

//sent type
$querys = "
SELECT * FROM send_type" 
or die("Error:" . mysqli_error());
$results = mysqli_query($condb, $querys); 



echo "<table  class='table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>รหัส</center></th>
<th width='10%'>ภาพ</th>
<th width='30%'>ชื่อสินค้า</th>
<th width='10%'><center>ราคาที่ต้องชำระ</center></th>
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
 
}
echo "</table>";

?>
<hr>

<div style="background-color: #c9ecf2; padding: 20px;">
  <h4>ฟอร์มชำระเงินค่าสินค้า >> <font color="red">  เลือกวิธีส่งสินค้า </font></h4>
<form class="form-horizontal" method="post" action="pay_save_sent_type.php">
  <div class="form-group">
    <div class="col-sm-2  control-label">
       <b>วิธีส่งสินค้า</b>
    </div>
    <div class="col-sm-3">    
      <br>
      <?php 
       while($row = mysqli_fetch_array($results)) { ?>

       <input type="radio" name="send_id" value="<?php echo  $row['send_id'];?>-<?php echo  $row['send_rate'];?>" required>
         <?php echo  $row['send_name'];?> +  <?php echo  $row['send_rate'];?><br>
       <?php  } ?>
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="auction_id" value="<?php echo $_GET['id'];?>">
      <input type="hidden" name="cus_id" value="<?php echo $cus_id;?>">
      <input type="hidden" name="trans_price" value="<?php echo $_GET['p'];?>">
     <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยัน');">บันทึก</button>
    </div>
  </div>
</form>
</div>