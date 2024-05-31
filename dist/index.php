<?php

if(!isset($_COOKIE["username"])){
	header("location:../index.php");
}
?>
<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
	<!--begin::Head-->
	
<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo14/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 10:55:28 GMT -->
<head><base #href=""/>
		<title>نرم افزار حسابداری کوکی</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now و get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="مترونیک - پنل ادمین بوت استراپ Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, روبی روی ریل, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin داشبورد Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="ساتراس وب | مترونیک" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mوatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">

		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getآیتم("data-bs-theme") !== null ) { themeMode = localStorage.getآیتم("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<?php
					include_once "./pages/topmenu.php";



					?>
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column-fluid">

					<!--begin::کناری-->
					<?php
					include_once "./pages/leftmenu.php";
					?>
					<!--end::کناری-->

























						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Row-->
								<div class="row g-5 g-lg-10" style="justify-content: center;">
									
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Row-->
										<div class="row g-5 g-lg-10">
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">
												<!--begin::Tiles Widget 1-->
												<div class="card h-150px bgi-no-repeat bgi-size-cover h-150px mb-5 mb-lg-10" style="background-image:url('./images/model.jpg')">
													<!--begin::Body-->
													<div class="card-body p-6 text-center ">
														<!--begin::Title-->
														<a href="#" class="text-black text-hover-primary fw-bold fs-1 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">لادانا بیوتی </a>
														<!--end::Title-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Tiles Widget 1-->
												<!--begin::Tiles Widget 5-->
												<a href="#" class="card bg-body h-150px"style="margin: 1vh;">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between">
														<i class="ki-duotone ki-element-11 text-dark fs-2hx ms-n1 flex-grow-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
														<div class="d-flex flex-column">
															<div class="text-dark fw-bold fs-1 mb-0 mt-5">
																<?php
																	include_once "./control/Customers.php";
																	
																	$customersnum=Customersnum();
																	echo $customersnum->num_rows;
																?>
															</div>
															<div class="text-muted fw-semibold fs-6">تعداد مشتریان </div>
														</div>
													</div>
													<!--end::Body-->
												</a>
												<a href="#" class="card bg-body h-150px" style="margin: 1vh;">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between" >
														<i class="ki-duotone ki-element-11 text-dark fs-2hx ms-n1 flex-grow-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
														<div class="d-flex flex-column">
															<div class="text-dark fw-bold fs-1 mb-0 mt-5">
																<?php
																	include_once "./control/products.php";
																	
																	$customersnum=productsnum();
																	echo $customersnum->num_rows;
																?>
															</div>
															<div class="text-muted fw-semibold fs-6">تعداد محصولات </div>
														</div>
													</div>
													<!--end::Body-->
												</a>
												<!--end::Tiles Widget 5-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">
												<!--begin::مخلوط Widget 3-->
												<div class="card h-100 bgi-no-repeat bgi-size-cover h-lg-100" style="background-image:url('./images/model2.jpg')">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between">
														<!--begin::Title-->
														<div class="text-white fw-bold fs-2">
														<h2 class="fw-bold text-white mb-2"> مدیریت کاربران</h2>با اپلیکیشن</div>
														<!--end::Title-->
														<!--begin::Link-->
														<a href='./allcustomers.php' class="text-warning fw-semibold" >مدیریت کاربران 
														<i class="ki-duotone ki-arrow-right fs-2 text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
														</i></a>
														<!--end::Link-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::مخلوط Widget 3-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Tiles Widget 2-->
										<div class="card h-175px bgi-no-repeat bgi-size-contain h-200px mb-5 mb-lg-10" style="background-color: #1B283F; background-position: right; background-image:url('assets/media/svg/misc/taieri.svg')">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column justify-content-between">
												<!--begin::Title-->
												<h2 class="text-white fw-bold mb-5">
													<span class="lh-lg">ایده های ناب
													<br />برای نرم افزارهای شما</span>
												</h2>
												<!--end::Title-->
												<!--begin::Actions-->
												<div class="m-0">
													<a href='#' class="btn btn-danger fw-semibold px-6 py-3"> اطلاعات بیشتر</a>
												</div>
												<!--begin::Actions-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tiles Widget 2-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							
								
							</div>
							<!--end::Post-->
							<!--begin::Footer-->
							<div class="footer py-4 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2024&copy;</span>
									<a href="#" target="_blank" class="text-gray-800 text-hover-info fs-3 ">کوکی دولوپرز </a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
							
								<!--end::Menu-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content wrapper-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::کشوs-->
		
	
		
		<!--end::Scrolltop-->
		
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/index.html";</script>
		<!--begin::Global Javascript Bundle(mوatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/index.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/map.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="../../../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::سفارشی Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::سفارشی Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo14/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 10:56:44 GMT -->
</html>