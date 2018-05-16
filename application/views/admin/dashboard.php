<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url() ?>images/favicon.ico">

	<title>Crypto Admin - Distribution Countdown</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- flipclock-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor_components/FlipClock-master/compiled/flipclock.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="<?= base_url() ?>css/skins/_all-skins.css">
	
	<link rel="stylesheet" href="<?= base_url() ?>css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="hold-transition skin-yellow sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="<?= base_url()?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<b class="logo-mini">
					<span class="light-logo">
						<img src="<?= base_url() ?>images/logo-light.png" alt="logo">
					</span>
					<span class="dark-logo">
						<img src="<?= base_url() ?>images/logo-dark.png" alt="logo">
					</span>
				</b>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">
					<img src="<?= base_url() ?>images/logo-light-text.png" alt="logo" class="light-logo">
					<img src="<?= base_url() ?>images/logo-dark-text.png" alt="logo" class="dark-logo">
				</span>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">



						<!-- Messages -->
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="mdi mdi-email"></i>
							</a>
							<ul class="dropdown-menu scale-up">
								<li class="header">You have 5 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu inner-content-div">
										<li>
											<!-- start message -->
											<a href="#">
												<div class="pull-left">
													<img src="<?= base_url() ?>images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
												</div>
												<div class="mail-contnet">
													<h4>
														Lorem Ipsum
														<small>
															<i class="fa fa-clock-o"></i> 15 mins</small>
													</h4>
													<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
												</div>
											</a>
										</li>
										<!-- end message -->
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?= base_url() ?>images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
												</div>
												<div class="mail-contnet">
													<h4>
														Nullam tempor
														<small>
															<i class="fa fa-clock-o"></i> 4 hours</small>
													</h4>
													<span>Curabitur facilisis erat quis metus congue viverra.</span>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?= base_url() ?>images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
												</div>
												<div class="mail-contnet">
													<h4>
														Proin venenatis
														<small>
															<i class="fa fa-clock-o"></i> Today</small>
													</h4>
													<span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?= base_url() ?>images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
												</div>
												<div class="mail-contnet">
													<h4>
														Praesent suscipit
														<small>
															<i class="fa fa-clock-o"></i> Yesterday</small>
													</h4>
													<span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?= base_url() ?>images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
												</div>
												<div class="mail-contnet">
													<h4>
														Donec tempor
														<small>
															<i class="fa fa-clock-o"></i> 2 days</small>
													</h4>
													<span>Praesent vitae tellus eget nibh lacinia pretium.</span>
												</div>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">See all e-Mails</a>
								</li>
							</ul>
						</li>
						<!-- Notifications -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="mdi mdi-bell"></i>
							</a>
							<ul class="dropdown-menu scale-up">
								<li class="header">You have 1 notification(s)</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu inner-content-div">

										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> Your order has been placed
											</a>
										</li>

									</ul>
								</li>
								<li class="footer">
									<a href="#">View all</a>
								</li>
							</ul>
						</li>
						<!-- Tasks -->

						<!-- User Account -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?= base_url() ?>images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
							</a>
							<ul class="dropdown-menu scale-up">
								<!-- User image -->
								<li class="user-header">
									<img src="<?= base_url() ?>images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

									<p>
										Yew Yang
										<small class="mb-5">yewyang@cysoft.co</small>
										<a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row no-gutters">
										<div class="col-12 text-left">
											<a href="#">
												<i class="ion ion-person"></i> My Profile</a>
										</div>
										<div class="col-12 text-left">
											<a href="#">
												<i class="ion ion-email-unread"></i> Inbox</a>
										</div>
										<div class="col-12 text-left">
											<a href="#">
												<i class="ion ion-settings"></i> Setting</a>
										</div>
										<div role="separator" class="divider col-12"></div>
										<div class="col-12 text-left">
											<a href="#">
												<i class="ti-settings"></i> Account Setting</a>
										</div>
										<div role="separator" class="divider col-12"></div>
										<div class="col-12 text-left">
											<a href="#">
												<i class="fa fa-power-off"></i> Logout</a>
										</div>
									</div>
									<!-- /.row -->
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar">
								<i class="fa fa-cog fa-spin"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="ulogo">
						<a href="<?= base_url() ?>">
							<!-- logo for regular state and mobile devices -->
							<span>GAMBOL</span>
						</a>
					</div>
					<div class="image">
						<img src="<?= base_url() ?>images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
					</div>
					<div class="info">
						<p>yewyang@cysoft.co</p>
						<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings">
							<i class="ion ion-gear-b"></i>
						</a>
						<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email">
							<i class="ion ion-android-mail"></i>
						</a>
						<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout">
							<i class="ion ion-power"></i>
						</a>
					</div>
				</div>

				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="nav-devider"></li>
					<li class="header nav-small-cap">PERSONAL</li>

					<li class="treeview active">
						<a href="#">
							<i class="icon-compass"></i>
							<span>Initial Coin Offering</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?= base_url() ?>">Countdown</a>
							</li>
							<li>
								<a href="pages/ico/ico-roadmap-timeline.html">Roadmap/Timeline</a>
							</li>
							<li>
								<a href="pages/ico/ico-progress.html">Progress Bar</a>
							</li>
							<li>
								<a href="pages/ico/ico-details.html">Details</a>
							</li>
							<li>
								<a href="pages/ico/ico-listing.html">ICO Listing</a>
							</li>
							<li>
								<a href="pages/ico/ico-filter.html">ICO Listing - Filters</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="currency-ex/exchange.html">
							<i class="icon-refresh"></i>
							<span>Currency Exchange</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
					</li>



				</ul>
			</section>
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Distribution Countdown
				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">
							<i class="fa fa-dashboard"></i> Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Initial Coin Offering</a>
					</li>
					<li class="breadcrumb-item active">Distribution Countdown</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-12">
						<h1 class="page-header text-center">
							The
							<span class="text-bold">Revolution</span> In Virtual
							<span class="text-bold">Gaming</span>
							<br>
							<p class="font-size-18 mb-0">Join the action now and get free airdrop.</p>
						</h1>
						<!-- Default box -->
						<div class="box box-dark bg-hexagons-white">
							<div class="box-body">
								<h5 class="text-white text-center">Distribution Ends In:</h5>
								<div class="countdownv2_holder text-center mb-50 mt-20">
									<div class="clock"></div>
								</div>
								<div class="text-center">
									<a href="#" class="btn btn-warning">BUY TOKENS</a>
								</div>
								<h6 class="text-white text-left mb-2">Midcap
									<span class="text-bold">in 489 days</span>
								</h6>
								<div class="progress mb-2">
									<div class="progress-bar progress-bar-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="text-left pl-2">58$</span>
									</div>
								</div>
								<h6 class="text-white text-right no-margin">Hardcap</h6>
								<ul class="flexbox flex-justified text-center my-10">
									<li class="br-1">
										<div class="font-size-20 text-primary">Total Tokens:
											<span class="text-bold">123.0122</span>
										</div>
									</li>

									<li class="br-1">
										<div class="font-size-20 text-info">Tokens In Circulation:
											<span class="text-bold">5603.3011</span>
										</div>
									</li>

									<li>
										<div class="font-size-20 text-yellow">Token Price:
											<span class="text-bold">$1.0023</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->


		<footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Purchase Now</a>
					</li>
				</ul>
			</div>

		</footer>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="nav-item">
					<a href="#control-sidebar-home-tab" data-toggle="tab">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li class="nav-item">
					<a href="#control-sidebar-settings-tab" data-toggle="tab">
						<i class="fa fa-cog fa-spin"></i>
					</a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Admin Birthday</h4>

									<p>Will be July 24th</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-user bg-yellow"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

									<p>New Email : jhone_doe@demo.com</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

									<p>disha@demo.com</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-file-code-o bg-green"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Code Change</h4>

									<p>Execution time 15 Days</p>
								</div>
							</a>
						</li>
					</ul>
					<!-- /.control-sidebar-menu -->

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Web Design
									<span class="label label-danger pull-right">40%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 40%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Update Data
									<span class="label label-success pull-right">75%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-success" style="width: 75%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Order Process
									<span class="label label-warning pull-right">89%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-warning" style="width: 89%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Development
									<span class="label label-primary pull-right">72%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-primary" style="width: 72%"></div>
								</div>
							</a>
						</li>
					</ul>
					<!-- /.control-sidebar-menu -->

				</div>
				<!-- /.tab-pane -->
				<!-- Stats tab content -->
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>

						<div class="form-group">
							<input type="checkbox" id="report_panel" class="chk-col-grey">
							<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

							<p>
								general settings information
							</p>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<input type="checkbox" id="allow_mail" class="chk-col-grey">
							<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

							<p>
								Other sets of options are available
							</p>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<input type="checkbox" id="expose_author" class="chk-col-grey">
							<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

							<p>
								Allow the user to show his name in blog posts
							</p>
						</div>
						<!-- /.form-group -->

						<h3 class="control-sidebar-heading">Chat Settings</h3>

						<div class="form-group">
							<input type="checkbox" id="show_me_online" class="chk-col-grey">
							<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<input type="checkbox" id="off_notifications" class="chk-col-grey">
							<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<label class="control-sidebar-subheading">
								<a href="javascript:void(0)" class="text-red margin-r-5">
									<i class="fa fa-trash-o"></i>
								</a>
								Delete chat history
							</label>
						</div>
						<!-- /.form-group -->
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="<?= base_url() ?>assets/vendor_components/jquery/dist/jquery.min.js"></script>

	<!-- popper -->
	<script src="<?= base_url() ?>assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="<?= base_url() ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- SlimScroll -->
	<script src="<?= base_url() ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

	<!-- FastClick -->
	<script src="<?= base_url() ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- FastClick -->
	<script src="<?= base_url() ?>assets/vendor_components/FlipClock-master/compiled/flipclock.min.js"></script>

	<!-- Crypto_Admin App -->
	<script src="<?= base_url() ?>js/template.js"></script>

	<!-- Crypto_Admin for demo purposes -->
	<script src="<?= base_url() ?>js/demo.js"></script>

	<!-- Crypto_Admin for demo purposes -->
	<script src="<?= base_url() ?>js/pages/countdown.js"></script>


</body>

</html>
