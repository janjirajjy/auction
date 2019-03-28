<?php
$query = "SELECT * FROM unit" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$id=$_GET['ID'];
$sql = "
SELECT p.*,u.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
WHERE p.product_id=$id ";
$result2 = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);
?>
<h4> Form เปิดการประมูลสินค้า </h4>
<form action="product_form_open_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อสินค้า :
    </div>
    <div class="col-sm-7">
      <input type="text" name="auction_product" required class="form-control" value="<?php echo $row['product_name'];?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ราคาต้นทุน :
    </div>
    <div class="col-sm-2">
      <input type="number" name="product_price" required class="form-control">
    </div>
    <div class="col-sm-1">
      บาท
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ราคา/bid :
    </div>
    <div class="col-sm-2">
      <input type="number" name="auction_price" required class="form-control">
    </div>
    <div class="col-sm-1">
      บาท
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      วันที่เริ่มประมูล :
    </div>
    <div class="col-sm-3">
      <input type="date" name="auction_startdate" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      วันปิดการประมูล :
    </div>
    <div class="col-sm-3">
      <input type="date" name="auction_enddate" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เวลาที่ปิด :
    </div>
    <div class="col-sm-2">
      <input type="time" name="auction_endtime" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>
<script>
initSample();
</script>
<?php
mysqli_close($condb);
?>