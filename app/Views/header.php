<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 21:09:10 GMT -->

<head>
	<meta charset="utf-8" />
	<title>HUD | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/app.min.css" rel="stylesheet" />


	<link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />

</head>

<body>



	<div id="app" class="app">

		<div id="header" class="app-header">

			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>


			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>


			<div class="brand">
				<a href="<?php echo base_url('/inicio') ?>" class="brand-logo">
					<span class="brand-img">
						<span class="brand-img-text text-theme">AI</span>
					</span>
					<span class="brand-text">AI-ML</span>
				</a>
			</div>


			<div class="menu">
				<div class="menu-item dropdown">
					<!-- <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
									<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
									</a> -->
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<!-- <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
												<div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
												</a> -->
					<div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">INBOX</div>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">DISK DRIVE</div>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">CALENDAR</div>
								</a>
							</div>
						</div>
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">TERMINAL</div>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">SETTINGS</div>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">LIBRARY</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<!-- <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
										<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
										<div class="menu-badge bg-theme"></div>
										</a> -->
					<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
						<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
						<div class="dropdown-divider mt-1"></div>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px">
								<i class="bi bi-bag text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">NEW ORDER RECEIVED ($1,299)</div>
								<div class="small">JUST NOW</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-person-circle text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">3 NEW ACCOUNT CREATED</div>
								<div class="small">2 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-gear text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">SETUP COMPLETED</div>
								<div class="small">3 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-grid text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">WIDGET INSTALLATION DONE</div>
								<div class="small">5 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-credit-card text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">PAYMENT METHOD ENABLED</div>
								<div class="small">10 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<hr class="bg-white-transparent-5 mb-0 mt-2" />
						<div class="py-10px mb-n2 text-center">
							<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="assets/img/user/profile.jpg" height="60px" />
						</div>
						<div class="menu-text d-sm-block d-none"><span><?= session('usuario') ?></span></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
						<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('/perfil') ?>">PERFIL<i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
						<!-- <a class="dropdown-item d-flex align-items-center" href="#">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
					<a class="dropdown-item d-flex align-items-center" href="#">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
					<a class="dropdown-item d-flex align-items-center" href="#">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a> -->
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('/salir') ?>">SALIR <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
					</div>
				</div>
			</div>


			<form class="menu-search" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>

		</div>


		<div id="sidebar" class="app-sidebar">

			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

				<div class="menu">
					<div class="menu-header">Menu</div>
					<div class="menu-item active">
						<a  href="<?php echo base_url('/inicio') ?>"  class="menu-link">
							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
							<span class="menu-text">HOME</span>
						</a>
					</div>
					<div class="menu-divider"></div>

					<div class="menu-item">
						<a  href="<?php echo base_url('/clientes') ?>"  class="menu-link">
							<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
							<span class="menu-text">Clientes</span>
						</a>
					</div> 
					<!-- 	-->


					<!-- MENU CON LISTADO -->
					<!-- 	<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="bi bi-collection"></i></span>
							<span class="menu-text">Pages</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="page_scrum_board.html" class="menu-link">
									<span class="menu-text">Scrum Board</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_products.html" class="menu-link">
									<span class="menu-text">Products</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_orders.html" class="menu-link">
									<span class="menu-text">Orders</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_gallery.html" class="menu-link">
									<span class="menu-text">Gallery</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_search_results.html" class="menu-link">
									<span class="menu-text">Search Results</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_coming_soon.html" class="menu-link">
									<span class="menu-text">Coming Soon Page</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_404_error.html" class="menu-link">
									<span class="menu-text">404 Error Page</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_login.html" class="menu-link">
									<span class="menu-text">Login</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_register.html" class="menu-link">
									<span class="menu-text">Register</span>
								</a>
							</div>
						</div>
					</div> -->
					<?php if (session('rol') == 'sistemas') { ?>
						<div class="menu-divider"></div>
						<div class="menu-header">SISTEMAS</div>
						<div class="menu-item">
							<a href="<?php echo base_url('/usuarios') ?>" class="menu-link">
								<span class="menu-icon"><i class="bi bi-people"></i></span>
								<span class="menu-text">USUARIOS</span>
							</a>
						</div>

						<div class="menu-item">
							<a href="<?php echo base_url('/settings') ?>" class="menu-link">
								<span class="menu-icon"><i class="bi bi-gear"></i></span>
								<span class="menu-text">CONFIGURACION</span>
							</a>
						</div>
					<?php } ?>
				</div>

			</div>

		</div>


		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>



		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


		<div class="app-theme-panel">
			<div class="app-theme-panel-container">
				<a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
				<div class="app-theme-panel-content">
					<div class="small fw-bold text-white mb-1">Theme Color</div>
					<div class="card mb-3">

						<div class="card-body p-2">

							<div class="app-theme-list">
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
								<div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
								<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
							</div>

						</div>


						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>

					</div>
					<div class="small fw-bold text-white mb-1">Theme Cover</div>
					<div class="card">

						<div class="card-body p-2">

							<div class="app-theme-cover">
								<div class="app-theme-cover-item active">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
								</div>
								<div class="app-theme-cover-item">
									<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
								</div>
							</div>

						</div>


						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>

	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/vendor.min.js" type="4300b5c898cd575308165a4f-text/javascript"></script>
	<script src="assets/js/app.min.js" type="4300b5c898cd575308165a4f-text/javascript"></script>

	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4300b5c898cd575308165a4f-|49" defer=""></script>
	<script src="assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="d2e5da86ab03acce7fcb6270-text/javascript"></script>
	<script src="assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="d2e5da86ab03acce7fcb6270-text/javascript"></script>
	<script src="assets/plugins/apexcharts/dist/apexcharts.min.js" type="d2e5da86ab03acce7fcb6270-text/javascript"></script>
	<script src="assets/js/demo/dashboard.demo.js" type="d2e5da86ab03acce7fcb6270-text/javascript"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="d2e5da86ab03acce7fcb6270-text/javascript">
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');
	</script>

</body>

<!-- Mirrored from seantheme.com/hud/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 21:09:30 GMT -->

</html>