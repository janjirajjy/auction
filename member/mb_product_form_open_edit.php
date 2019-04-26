<?php
//unit
$query = "SELECT * FROM unit" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

//auction
$id=$_GET['ID'];
$sql = "
SELECT *
FROM  auction as a  
LEFT JOIN detailproduct as p   ON a.product_id=a.product_id
LEFT JOIN unit as u  ON p.unit_id=u.unit_id
WHERE a.auction_id=$id ";
$result2 = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);
// echo $sql;
// echo '<pre>';
// print_r($row);
// echo '</pre>';

?>
<h4> Form แก้ไขการเปิดการประมูลสินค้า </h4>
<form action="mb_product_form_open_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <div class="col-sm-2 control-label">
            ชื่อสินค้า :
        </div>
        <div class="col-sm-7">
            <input type="text" name="auction_product" required class="form-control"
                value="<?php echo $row['product_name'];?>" disabled>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 control-label">
            ราคาต้นทุน :
        </div>
        <div class="col-sm-2">
            <input type="number" name="product_price" required class="form-control"
                value="<?php echo $row['product_price'];?>" disabled>
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
            <input type="number" name="auction_price" required class="form-control"
                value="<?php echo $row['auction_price'];?>">
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
            <input type="date" name="auction_startdate" required class="form-control"
                value="<?php echo $row['auction_startdate'];?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 control-label">
            วันปิดการประมูล :
        </div>
        <div class="col-sm-3">
            <input type="date" name="auction_enddate" required class="form-control"
                value="<?php echo $row['auction_enddate'];?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 control-label">
            เวลาที่ปิด :
        </div>
        <div class="col-sm-2">
            <input type="time" name="auction_endtime" required class="form-control"
                value="<?php echo $row['auction_endtime'];?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-4">
            <input type="hidden" name="auction_id" value="<?php echo $row['auction_id'];?>">
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