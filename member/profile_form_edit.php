<!-- <h4> Form แก้ไขข้อมูลส่วนตัว </h4>
<form action="profile_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-4">
      <input type="email" name="cus_email" required class="form-control" placeholder="*email" autocomplete="off" value="<?php echo $row['cus_email'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_password" required class="form-control" maxlength="10" value="<?php echo $row['cus_password'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_name" required class="form-control" value="<?php echo $row['cus_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_lastname" required class="form-control" value="<?php echo $row['cus_lastname'];?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-6">
      <textarea name="cus_address" class="form-control" required><?php echo $row['cus_address'];?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-4">
      <input type="text" name="cus_tel" required class="form-control" minlength="10" value="<?php echo $row['cus_tel'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input  type="hidden" name="cus_id" value="<?php echo $row['cus_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form> -->
<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h5 class="control-label mb-10" for="exampleCountry">แก้ไขข้อมูลส่วนตัว</h5>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<form action="profile_form_edit_db.php" method="post">

												
                                                <div class="row">
													<div class="col-lg-6">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">อีเมล</label>
														<input type="" class="form-control" name="cus_email" required="" id="exampleInputName_1" placeholder="อีเมล" value="<?php echo $row['cus_email'];?>" disabled>
													</div>
													</div>


													<div class="col-lg-6">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">รหัสผ่าน</label>
														<input type="" class="form-control" name="cus_password" required="" id="exampleInputName_1" placeholder="รหัสผ่าน" value="<?php echo $row['cus_password'];?>">
													</div>
													</div>

												</div>
												<div class="row">
													<div class="col-lg-3">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">ชื่อ</label>
														<input type="" class="form-control"name="cus_name"  required="" id="exampleInputName_1" placeholder="ชื่อ" value="<?php echo $row['cus_name'];?>">
														</div>
													</div>

													<div class="col-lg-3">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">นามสกุล</label>
														<input type="text" class="form-control" name="cus_lastname" required="" id="exampleInputName_1" placeholder="นามสกุล" value="<?php echo $row['cus_lastname'];?>">
													</div>
													</div>
													<div class="col-lg-3">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">เพศ</label>
														<div class="radio-list">
															<div class="radio-inline pl-0">
																<div class="radio radio-info">
																	<input type="radio" name="radio" id="radio1" value="option1">
																	<label for="radio1">ชาย</label>
																</div>
															</div>
															<div class="radio-inline">																
																<div class="radio radio-info">
																	<input type="radio" name="radio" id="radio2" value="option2">
																	<label for="radio2">หญิง</label>
																</div>
															</div>
														</div>
														</div>
													</div>
													
												</div>

												<div class="row">
														<div class="col-lg-3">
																<div class="form-group">
															<label class="control-label mb-10" for="exampleInputName_1">วันเกิด</label>
															<input type="date" class="form-control" required="" id="exampleInputName_1" placeholder="วันเกิด">
															</div>
														</div>

													<div class="col-lg-3">		
															<div class="form-group"> 												
														<label class="control-label mb-10" for="exampleInputName_1">เบอร์โทรศัพท์</label>
														<input type="" class="form-control" name="cus_tel" required="" id="exampleInputName_1" placeholder="เบอร์โทรศัพท์" value="<?php echo $row['cus_tel'];?>">
													</div>
													</div>

													
												</div>
												<div class="row"> 
														<div class="col-lg-4">
																<div class="form-group"> 
															<label class="control-label mb-10" for="exampleInputName_1">ที่อยู่</label>
															<input type="" class="form-control" name="cus_address" required="" id="exampleInputName_1" placeholder="ห้องเลขที่,บ้านเลขที่,ตึก,ชื่อถนน" value="<?php echo $row['cus_address'];?>">
															</div>
														</div>
												</div>
												<div class="row">
														<div class="col-lg-3">
																<div class="form-group"> 
															<label class="control-label mb-10" for="exampleInputName_1">จังหวัด</label>
															<input type="" class="form-control" name="cus_province" required="" id="exampleInputName_1" placeholder="จังหวัด" value="<?php echo $row['cus_province'];?>">
															</div>
														</div>
													<div class="col-lg-3">
															<div class="form-group"> 
														<label class="control-label mb-10" for="exampleInputName_1">อำเภอ</label>
														<input type="" class="form-control"  name="cus_amphur" required="" id="exampleInputName_1" placeholder="อำเภอ"value="<?php echo $row['cus_amphur'];?>">
														</div>
													</div>
													<div class="col-lg-3">
															<div class="form-group"> 
														<label class="control-label mb-10" for="exampleInputName_1">รหัสไปรษณี</label>
														<input type="" class="form-control" name="cus_zipcode" required="" id="exampleInputName_1" placeholder="รหัสไปรษณี"value="<?php echo $row['cus_zipcode'];?>">
													</div>
												</div>
												</div>
												
												
												<div class="row ">
													<div class=" form-group text-center ">				
                          <input  type="hidden" name="cus_id" value="<?php echo $row['cus_id'];?>">										
														<button type="submit" class="btn btn-success waves-effect" data-dismiss="modal">บันทึก</button>
														<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ยกเลิก</button>													
													</div>
												</div>

											</form>

										</div>

									</div>

								</div>


							</div>

						</div>