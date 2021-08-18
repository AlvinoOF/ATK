<!doctype html>
<html lang="en" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Sucofindo">
	<meta name="Keywords" content="Sucofindo" />

	<!-- Title -->
	<title> GREEN ASSET PROTECTION SYSTEM (GAPS) </title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/logo/gaps.ico" />

	<!-- Icons css -->
	<link href="<?= base_url(); ?>/assets/main/css/icons.css" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="<?= base_url(); ?>/assets/main/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--  Custom Scroll bar-->
	<link href="<?= base_url(); ?>/assets/main/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--  Left-Sidebar css -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/main/css/sidemenu1.css">

	<!--- Style css --->
	<link href="<?= base_url(); ?>/assets/main/css/style.css" rel="stylesheet">

	<!--- Dark-mode css --->
	<link href="<?= base_url(); ?>/assets/main/css/style-dark.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="<?= base_url(); ?>/assets/main/css/skin-modes.css" rel="stylesheet" />

	<!--- Animations css-->
	<link href="<?= base_url(); ?>/assets/main/css/animate.css" rel="stylesheet">

	<!-- JQuery min js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Bundle js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body class="main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="<?= base_url(); ?>/assets/main/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="#"><img src="<?= base_url(); ?>/assets/logo/gaps.png" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="#"><img src="<?= base_url(); ?>/assets/logo/gaps.png" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="#"><img src="<?= base_url(); ?>/assets/logo/gaps2.png" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="#"><img src="<?= base_url(); ?>/assets/logo/gaps2.png" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0"><?= user()->username; ?></h4>
						</div>
					</div>
				</div>

				<?= $this->include('templates/menu'); ?>
			</div>
		</aside>
		<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="<?= base_url('user/dashboard'); ?>"><img src="<?= base_url(); ?>/assets/logo/gaps.png" class="logo-1" alt="logo"></a>
							<a href="<?= base_url('user/dashboard'); ?>"><img src="<?= base_url(); ?>/assets/logo/gaps.png" class="dark-logo-1" alt="logo"></a>
							<a href="<?= base_url('user/dashboard'); ?>"><img src="<?= base_url(); ?>/assets/logo/gaps2.png" class="logo-2" alt="logo"></a>
							<a href="<?= base_url('user/dashboard'); ?>"><img src="<?= base_url(); ?>/assets/logo/gaps2.png" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">

						</div>
					</div>
					<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-link" id="bs-example-navbar-collapse-1">
								<form class="navbar-form" role="search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-default nav-link resp-btn">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
													<circle cx="11" cy="11" r="8"></circle>
													<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
												</svg>
											</button>
										</span>
									</div>
								</form>
							</div>
							<div class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg><span class=" pulse"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary text-left">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications</h6>
											<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 20 unread Notifications</p>
									</div>
									<div class="main-notification-list Notification-scroll">
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-pink">
												<i class="la la-file-alt text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New files available</h5>
												<div class="notification-subtext">10 hour ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3" href="#">
											<div class="notifyimg bg-purple">
												<i class="la la-gem text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Updates Available</h5>
												<div class="notification-subtext">2 days ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-success">
												<i class="la la-shopping-basket text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<div class="notification-subtext">1 hour ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-warning">
												<i class="la la-envelope-open text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New review received</h5>
												<div class="notification-subtext">1 day ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-danger">
												<i class="la la-user-check text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">22 verified registrations</h5>
												<div class="notification-subtext">2 hour ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-primary">
												<i class="la la-check-circle text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Project has been approved</h5>
												<div class="notification-subtext">4 hour ago</div>
											</div>
											<div class="ml-auto">
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
										<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
									</svg></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class=""></div>
											<div class="ml-3 my-auto">
												<h6><?= user()->username; ?></h6>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Edit Profile</a>
									<a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="bx bx-log-out"></i> Logout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->
			<!-- container -->
			<div class="container-fluid">

				<!-- Begin Page Content -->
				<?= $this->renderSection('page-content'); ?>
				<!-- /.container-fluid -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span>Copyright © 2021 <a href="https://sbuindustri.com/home/index.php">PT. SUCOFINDO</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

	<!-- Ionicons js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>/assets/main/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Sticky js -->
	<script src="<?= base_url(); ?>/assets/main/js/sticky.js"></script>

	<!-- eva-icons js -->
	<script src="<?= base_url(); ?>/assets/main/js/eva-icons.min.js"></script>

	<!-- Rating js-->
	<script src="<?= base_url(); ?>/assets/main/plugins/rating/jquery.rating-stars.js"></script>
	<script src="<?= base_url(); ?>/assets/main/plugins/rating/jquery.barrating.js"></script>

	<!-- Custom Scroll bar Js-->
	<script src="<?= base_url(); ?>/assets/main/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Sidebar js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/side-menu/sidemenu.js"></script>

	<!-- Right-sidebar js -->
	<script src="<?= base_url(); ?>/assets/main/plugins/sidebar/sidebar.js"></script>
	<script src="<?= base_url(); ?>/assets/main/plugins/sidebar/sidebar-custom.js"></script>

	<!-- custom js -->
	<script src="<?= base_url(); ?>/assets/main/js/custom.js"></script>

</body>

</html>