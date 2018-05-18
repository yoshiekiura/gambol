<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url() ?>images/favicon.ico">

	<title>Gambol</title>

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

	<link rel="stylesheet" href="<?= base_url() ?>css/gambol.css">

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
							<li>
								<a href="<?= base_url() ?>ico/countdown">Countdown</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/buy_token">Buy Tokens</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/transfer_token">Transfer Tokens</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/timeline">Roadmap/Timeline</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/progress">Progress Bar</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/details">Details</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/listing">ICO Listing</a>
							</li>
							<li>
								<a href="<?= base_url() ?>ico/listing_filter">ICO Listing - Filters</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
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
