<?php

?>


<!doctype html>
<html lang="ru">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

	<!--plugins-->
	<link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<!-- <link rel="stylesheet" href="assets/css/dark-theme.css" /> -->
	<!-- <link rel="stylesheet" href="assets/css/semi-dark.css" /> -->
	<!-- <link rel="stylesheet" href="assets/css/header-colors.css" /> -->
	<link rel="stylesheet" href="assets/css/my_app.css">

	<!-- jQ -->
	<script defer src="assets/js/my_app.js"></script>

	<script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<title>Проект</title>

	<style>
		/* custom */

		/*  */
		:root {
			--index: calc(1vw + 1vh);
		}

		/*  */
		a {
			cursor: pointer;
		}

		.top_nav__list {
			display: flex;
			justify-content: center;

		}

		.top_nav__item {
			list-style: none;
		}

		.top_nav__item:not(:last-child) {
			margin-right: 5px;
		}

		.top_nav__item {
			color: white;
			padding: 3px 6px 3px 6px;
			cursor: pointer;
			transition: color .2s ease-in-out;
		}

		.top_nav__item-link:hover {
			color: red;
		}

		.menu_font_size {
			font-size: calc(var(--index) * .7);
		}

		.full-search-bar {
			height: auto;
		}


		.nav_left_active {
			background-color: #ffffff47;
		}

		.parent-icon {
			margin-right: calc(var(--index) * .8) !important;
		}

		.card-body__loader {
			min-height: 70vh;
		}

		.carousel-inner {
			height: 300px !important;
		}

		.carousel-item {
			height: 100%;
		}

		.carousel-item img {
			filter: brightness(0.8);
			object-fit: cover;
			height: 100%;
		}

		.carousel-caption {
			bottom: 2.25rem !important;
		}

		.about-icon-size {
			font-size: calc(var(--index) * 1.9);
		}

		@media (max-width: 3980px) {
			.menu_font_size {
				font-size: calc(var(--index) * .7);
			}
		}

		@media (max-width: 1024px) {
			.menu_font_size {
				font-size: calc(var(--index) * 1);
			}
		}
	</style>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dashtrans</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>

			<!--navigation left-->
			<ul class="metismenu" id="menu_left">

				<li>
					<a id="finance_page" class="nav_left_link">
						<div class="parent-icon">
							<i class="fadeIn animated bx bx-dollar-circle"></i>
						</div>
						<div class="menu-title">Финансы</div>
					</a>
				</li>

				<!-- item start -->
				<li>
					<a id="partner_page" class="nav_left_link">
						<div class="parent-icon"><i class="fadeIn animated bx bx-detail"></i>
						</div>
						<div class="menu-title">Партнёры</div>
					</a>
				</li>
				<!-- item stop -->

				<!-- item start -->
				<li>
					<a id="business_page" class="nav_left_link">
						<div class="parent-icon"><i class="fadeIn animated bx bx-detail"></i>
						</div>
						<div class="menu-title">Бизнес</div>
					</a>
				</li>
				<!-- item stop -->

				<!-- item start -->
				<li>
					<a id="faq_page" class="nav_left_link">
						<div class="parent-icon"><i class="fadeIn animated bx bx-detail"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<!-- item stop -->

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<!-- верхнее меню здесь в див -->

						<ul class="nav nav-pills" id="menu_top">
							<li class="nav-item">
								<a id="nav_general" href="#" class="nav-link menu_font_size active"><i class="bx bx-home-alt me-1"></i>Главная</a>
							</li>
							<li class="nav-item">
								<a id="nav_marketing" href="#" class="nav-link menu_font_size"><i class="bx bx-category-alt me-1"></i>Маркетинг</a>
							</li>
							<li class="nav-item">
								<a id="nav_vebinars" href="#" class="nav-link menu_font_size"><i class="bx bx-microphone me-1"></i>Вебинары</a>
							</li>
							<li class="nav-item">
								<a id="nav_about" href="#" class="nav-link menu_font_size"><i class="bx bx-user me-1"></i>О нас</a>
							</li>

						</ul>
						<span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>

					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#"> <i class="fadeIn animated bx bx-menu-alt-right"></i>
								</a>
							</li>
							<li class="d-none nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="d-none nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret
										position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time
																float-end">14 Sec
															ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2
															min
															ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
															min
															ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time
																float-end">28 min
															ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time
																float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time
																float-end">5 hrs
															ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time
																float-end">1 day
															ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time
																float-end">2 weeks
															ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="d-none nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret
										position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time
																float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time
																float-end">14
															sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time
																float-end">8 min
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time
																float-end">15
															min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22
															min
															ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time
																float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time
																float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time
																float-end">6 hrs
															ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time
																float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time
																float-end">2 days
															ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time
																float-end">5 days
															ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle
								dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://sun9-67.userapi.com/impf/qatvzD9xwO2QXfCDccOOO5tpAUgrqwv7Dz29ng/kfcGaFI_2Us.jpg?size=1280x960&quality=96&sign=62ee0c5adce758c716a8c78d1cfcbfdb&type=album" class="user-img" alt="user avatar" style="object-fit:cover;">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Бондаренко Эд</p>
								<p class="designattion mb-0">Gold</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a id="profile_page" class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Профиль</span>
								</a>
							</li>
							<li class="d-none">
								<a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Настройки</span>
								</a>
							</li>
							<li><a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#partnerLink"><i class='bx bx-home-circle'></i><span>Партнерская ссылка</span></a>
							</li>
							<li class="d-none"><a class="dropdown-item" href="javascript:;"><i class='bx
											bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li class="d-none"><a class="dropdown-item" href="javascript:;"><i class='bx
											bx-download'></i><span>Downloads</span></a>
							</li>
							<li class="d-none">
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx
											bx-log-out-circle'></i><span>Выйти</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="modal fade" id="partnerLink" tabindex="-1" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Партнерская ссылка для регистрации нового клиента</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
						</div>
						<div class="modal-body">
							<p id="partnerLink__text">https://bootstrap-4.ru/7777777</p>
							<input style="background-color: transparent; color: transparent; border:none;position:absolute; top:0; left:0; margin-left:-150%" type="text" id="partnerLink__link">
						</div>
						<div class="modal-footer">
							<button id="linkCopyBtn" type="button" class="btn btn-primary">Копировать</button>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<div class="lobibox-notify-wrapper top right"></div>
		</header>
		<!--end header -->

		<!--notification js -->
		<script defer src="assets/plugins/notifications/js/lobibox.min.js"></script>
		<script defer src="assets/plugins/notifications/js/notifications.min.js"></script>
		<script defer src="assets/plugins/notifications/js/notification-custom-script.js"></script>