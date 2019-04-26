<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>ผู้ใช้งาน</title>
	<meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
	<link href="../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />

	<!-- vector map CSS -->
	<link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css" />

	<!-- Calendar CSS -->
	<link href="../vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" />

	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="../dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
	<div class="wrapper  theme-5-active pimary-color-blue">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top" >
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index1.php">

                            <span class="brand-text">E</span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i
                        class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
                    href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
                <form id="search_form" role="search" class="top-nav-search collapse pull-left">

                </form>

            </div>
            <div  class="mobile-only-nav pull-right">
            
            </div>
           
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                       <li>
                            <a id="open_right_sidebar" href="#"><i class="fa fa-comment"></i></a>
                        </li>                
                    <li class="dropdown auth-drp">
                            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                            <!-- <span class="user-online-status"></span> -->
                        </a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>ข้อมูลส่วนตัว</span></a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="login.php"><i class="zmdi zmdi-power"></i><span>ออกจากระบบ</span></a>
                            </li>
                        </ul>
                      
                    </li>
                </ul>
            </div>
        </nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="index1.php" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left "><img src="./dist/img/icons8-home-50.png" width="20" class="mr-20">
							<span class="right-nav-text " style="font-size:18px"> หน้าแรก</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
					</ul>
				</li>
				<li>
					<a class="" href="profile.html" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left "><img src="./dist/img/iconsuser.png" width="20" class="mr-20">
							<span class="right-nav-text " style="font-size:18px"> ผู้ใช้งาน</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
					</ul>
				</li>
				<li>
					<a href="add-Products.html" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left "><img src="../dist/img/iconmaket.png" width="20" class="mr-20">
							<span class="right-nav-text " style="font-size:18px"> ลงขาย</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
					</ul>
				</li>
				<li>
					<a href="basket.html" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left "><img src="./dist/img/iconssell.png" width="20" class="mr-20">
							<span class="right-nav-text " style="font-size:18px"> ตะกร้า</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
					</ul>
				</li>
				<li>
					<a href="Paymenthistory.html" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left "><img src="./dist/img/iconsประวัติ-50.png" width="20" class="mr-20">
							<span class="right-nav-text " style="font-size:18px"> ประวัติการชำระเงิน</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
					</ul>
				</li>
		

			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
				<ul class="right-sidebar">
					<li>
						<div class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="chat_tab_btn"
									 href="#chat_tab">chat</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div id="chat_tab" class="tab-pane fade active in" role="tabpanel"></div>
								<div class="chat-cmplt-wrap chat-box-slide">
									<div class="chat-box-wrap">
		
										<form role="search" class="chat-search pl-15 pr-15 pb-15">
											<div class="input-group">
												<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
												<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
												</span>
											</div>
										</form>
		
										<div id="chat_list_scroll" style="height: 355px;">
											<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
												<div class="nicescroll-bar" style="overflow: hidden; width: auto; height: 100%;">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">
																<a href="javascript:void(0)">
																	<div id="chat">
																		
																	</div>
																</a>
															</div>
														</li>
													</ul>
		
												</div>
												<div class="slimScrollBar" style="background: rgb(135, 135, 135); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 317.636px;"></div>
												<div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
											</div>
										</div>
		
									</div>
									<div class="recent-chat-box-wrap">
										<div class="recent-chat-wrap">
											<div class="panel-heading ma-0">
												<div class="goto-back">
													<a id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
														<i class="zmdi zmdi-chevron-left"></i>
													</a>
													<span class="inline-block txt-dark">ryan</span>
													<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="panel-wrapper collapse in">
												<div class="panel-body pa-0">
													<div class="chat-content" style="height: 346px;">
														<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
															<ul class="nicescroll-bar pt-20" style="overflow: hidden; width: auto; height: 100%;">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left" src="dist/img/user.png" alt="user">
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left" src="dist/img/user.png" alt="user">
																		<div class="msg pull-left">
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-grey">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
															</ul>
															<div class="slimScrollBar" style="background: rgb(135, 135, 135); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 275.209px;"></div>
															<div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
														</div>
													</div>
													<div class="input-group">
														<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
														<div class="input-group-btn emojis">
															<div class="dropup">
																<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-mood"></i></button>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="javascript:void(0)">Action</a></li>
																	<li><a href="javascript:void(0)">Another action</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0)">Separated link</a></li>
																</ul>
															</div>
														</div>
														<div class="input-group-btn attachment">
															<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																<input type="file" class="upload">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
		
							<div id="messages_tab" class="tab-pane fade" role="tabpanel">
								<div class="message-box-wrap">
									<div class="msg-search">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">messages</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap" style="height: 406px;">
										<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
											<div class="streamline message-box nicescroll-bar" style="overflow: hidden; width: auto; height: 100%;">
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
															<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet,
																consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
															<span class="inline-block font-11  pull-right message-time">1 Feb</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Pogody theme support</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
															<span class="inline-block font-11  pull-right message-time">31 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Congratulations from design nominees</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
															<span class="inline-block font-11  pull-right message-time">29 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest item support message</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../dist/img/user4.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
															<span class="inline-block font-11  pull-right message-time">27 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Help with beavis contact form</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
															<span class="inline-block font-11  pull-right message-time">19 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Your uploaded theme is been selected</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar">
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
															<span class="inline-block font-11  pull-right message-time">13 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject"> A new rating has been received</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
																adipisci velit</p>
														</div>
													</div>
												</a>
											</div>
											<div class="slimScrollBar" style="background: rgb(135, 135, 135); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 264.584px;"></div>
											<div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div id="todo_tab" class="tab-pane fade" role="tabpanel">
								<div class="todo-box-wrap">
									<div class="add-todo">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">todo list</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap" style="height: 406px;">
										<!-- Todo-List -->
										<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
											<ul class="todo-list nicescroll-bar" style="overflow: hidden; width: auto; height: 100%;">
												<li class="todo-item">
													<div class="checkbox checkbox-default">
														<input type="checkbox" id="checkbox01">
														<label for="checkbox01">Record The First Episode</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-pink">
														<input type="checkbox" id="checkbox02">
														<label for="checkbox02">Prepare The Conference Schedule</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-warning">
														<input type="checkbox" id="checkbox03" checked="">
														<label for="checkbox03">Decide The Live Discussion Time</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-success">
														<input type="checkbox" id="checkbox04" checked="">
														<label for="checkbox04">Prepare For The Next Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-danger">
														<input type="checkbox" id="checkbox05" checked="">
														<label for="checkbox05">Finish Up AngularJs Tutorial</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-purple">
														<input type="checkbox" id="checkbox06" checked="">
														<label for="checkbox06">Finish Infinity Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr">
												</li>
											</ul>
											<div class="slimScrollBar" style="background: rgb(135, 135, 135); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div>
											<div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
										</div>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
		
						</div>
					</li>
				</ul>
			</div>
		<!-- /Right Sidebar Menu -->



		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid pt-25">

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-xs-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body  pa-0">
									<div class="profile-box">
										<div class="profile-cover-pic">
											<div class="fileupload btn btn-default">
												<span class="btn-text">แก้ไข</span>
												<input class="upload" type="file">
											</div>
											<div class="profile-image-overlay"></div>
										</div>
										<div class="profile-info text-center">
											<div class="profile-img-wrap">
												<img class="inline-block mb-10" src="dist/img/mock1.jpg" alt="user" />
												<div class="fileupload btn btn-default">
													<span class="btn-text">แก้ไข</span>
													<input class="upload" type="file">
												</div>
											</div>

										</div>
										<div class="social-info">

											<button class="btn btn-primary btn-block  btn-anim mt-30" data-toggle="modal" ><i
												 class="fa fa-pencil"></i><span class="btn-text">เปลี่ยนรูปโปรไฟล</span></button>
											<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
											 aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h5 class="modal-title" id="myModalLabel">เปลี่ยนรูปโปรไฟล</h5>
														</div>
														<div class="modal-body">
															<!-- Row -->
															<div class="row">
																<div class="col-lg-12">

																	<div class="panel-wrapper collapse in">
																		<div class="panel-body pa-10">
																			<div class="col-sm-12 col-xs-12">
																				<div class="form-wrap">
																					<form action="#">
																						<div class="form-body overflow-hide">
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputuname_1">Name</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-user"></i></div>
																									<input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																									<input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-phone"></i></div>
																									<input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-lock"></i></div>
																									<input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd"
																									 value="password">
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10">Gender</label>
																								<div>
																									<div class="radio">
																										<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
																										<label for="radio_1">
																											M
																										</label>
																									</div>
																									<div class="radio">
																										<input type="radio" name="radio1" id="radio_2" value="option2">
																										<label for="radio_2">
																											F
																										</label>
																									</div>
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10">Country</label>
																								<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																									<option value="Category 1">USA</option>
																									<option value="Category 2">Austrailia</option>
																									<option value="Category 3">India</option>
																									<option value="Category 4">UK</option>
																								</select>
																							</div>
																						</div>
																						<div class="form-actions mt-10">
																							<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
																						</div>
																					</form>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
														<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
													</div>


													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-9 col-xs-12">

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
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="อีเมล">
													</div>
													</div>


													<div class="col-lg-6">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">รหัสผ่าน</label>
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="รหัสผ่าน">
													</div>
													</div>

												</div>
												<div class="row">
													<div class="col-lg-3">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">ชื่อ</label>
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="ชื่อ">
														</div>
													</div>

													<div class="col-lg-3">
															<div class="form-group">
														<label class="control-label mb-10" for="exampleInputName_1">นามสกุล</label>
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="นามสกุล">
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
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="เบอร์โทรศัพท์">
													</div>
													</div>

													
												</div>
												<div class="row"> 
														<div class="col-lg-4">
																<div class="form-group"> 
															<label class="control-label mb-10" for="exampleInputName_1">ที่อยู่</label>
															<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="ห้องเลขที่,บ้านเลขที่,ตึก,ชื่อถนน">
															</div>
														</div>
												</div>
												<div class="row">
														<div class="col-lg-3">
																<div class="form-group"> 
															<label class="control-label mb-10" for="exampleInputName_1">จังหวัด</label>
															<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="จังหวัด">
															</div>
														</div>
													<div class="col-lg-3">
															<div class="form-group"> 
														<label class="control-label mb-10" for="exampleInputName_1">อำเภอ</label>
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="อำเภอ">
														</div>
													</div>

													

													<div class="col-lg-3">
															<div class="form-group"> 
														<label class="control-label mb-10" for="exampleInputName_1">รหัสไปรษณี</label>
														<input type="" class="form-control" required="" id="exampleInputName_1" placeholder="รหัสไปรษณี">
													</div>
												</div>
												</div>
												
												
												<div class="row ">
													<div class=" form-group text-center ">														
														<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">บันทึก</button>
														<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ยกเลิก</button>													
													</div>
												</div>

											</form>

										</div>

									</div>

								</div>


							</div>

						</div>



					</div>
				</div>
				<!-- /Row -->



			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Elmer. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Vector Maps JavaScript -->
	<script src="../vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="../vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../dist/js/vectormap-data.js"></script>

	<!-- Calender JavaScripts -->
	<script src="../vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="../vendors/jquery-ui.min.js"></script>
	<script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="../dist/js/fullcalendar-data.js"></script>

	<!-- Counter Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="../dist/js/jquery.slimscroll.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="../dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

	<script src="../vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
	<script src="../dist/js/skills-counter-data.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="../vendors/bower_components/raphael/raphael.min.js"></script>
	<script src="../vendors/bower_components/morris.js/morris.min.js"></script>
	<script src="../dist/js/morris-data.js"></script>

	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<!-- Gallery JavaScript -->
	<script src="../dist/js/isotope.js"></script>
	<script src="../dist/js/lightgallery-all.js"></script>
	<script src="../dist/js/froogaloop2.min.js"></script>
	<script src="../dist/js/gallery-data.js"></script>

	<!-- twitter JavaScript -->
	<script src="dist/js/twitterFetcher.js"></script>

	<!-- Spectragram JavaScript -->
	<script src="../dist/js/spectragram.min.js"></script>

	<!-- Init JavaScript -->
	<script src="../dist/js/init.js"></script>
	<script src="../dist/js/widgets-data.js"></script>
	<script src="../chat/chat.js"></script>

</body>

</html>