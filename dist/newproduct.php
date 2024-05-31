
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
					<!--begin::Header-->
					<?php
					include_once "./pages/topmenu.php";



					?>
					<!--end::Header-->
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column-fluid" style="justify-content: center;" >
					<!--begin::کناری-->
					<?php
					include_once "./pages/leftmenu.php";
					?>
						<!--end::کناری-->
                        <div class="container">
								<!--begin::تماس با ما-->
								<div class="card">
									<!--begin::Body-->
									<div class="card-body p-lg-17">
										<!--begin::Row-->
										<div class="row mb-3">
											<!--begin::Col-->
											<div class="pe-lg-10">
												<!--begin::Form-->
												<form action="./control/newproduct.php" class="form mb-15" method="POST" id="kt_contact_form">
													<h1 class="fw-bold text-info mb-9 text-center">ثبت محصول جدید</h1>
													<?php
														if(isset($_GET["error"])){
															echo '<h1 class="fw-bold text-center text-danger mb-9 ">* ثبت با مشکل مواجه شد *</h1>';
														}elseif(isset($_GET["success"])){
															echo '<h1 class="fw-bold text-center text-success mb-9 ">* محصول جدید با موفقیت اضافه شد *</h1>';

														}

													?>

													<!--begin::Input group-->
													<div class="row mb-5">
														<!--begin::Col-->
														<div class="fv-row">
															<!--begin::Tags-->
															<label class="fs-5 fw-semibold mb-2">نام محصول</label>
															<!--end::Tags-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid border border-primary"  name="name">
															<!--end::Input-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6 fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">قیمت خرید</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid border border-primary" name="priceofproduct">
															<!--end::Input-->
														</div>
                                                        <div class="col-md-6 fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">هزینه بسته بندی </label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid  border border-primary" placeholder name="priceofpacking">
															<!--end::Input-->
														</div>
                                                        <div class="col-md-6 fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">هزینه حمل و نقل</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid border border-primary" placeholder name="priceoftransportation">
															<!--end::Input-->
														</div>
                                                        <div class="col-md-6 fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">هزینه های اضافی</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid  border border-primary" placeholder name="extraprices">
															<!--end::Input-->
														</div>
                                                        <div class="col-md-6 fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">موجودی</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid  border border-primary" placeholder name="inventory">
															<!--end::Input-->
														</div>
                                                        <div class="col-md-6 fv-row mt-3">
                                                            
															<!--end::Tags-->
                                                         
															<label class="fs-5 fw-semibold mb-2">تاریخ خرید</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="date" name="dateofbuying" class="form-control form-control-solid  border border-primary" >
															<!--end::Input-->
														</div>
                                                        <div class="fv-row mt-3">
															<!--end::Tags-->
															<label class="fs-5 fw-semibold mb-2">دسته بندی</label>
															<!--end::Tags-->
															<!--end::Input-->
															<input type="text" class="form-control form-control-solid  border border-primary" placeholder name="category">
															<!--end::Input-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->								
													<!--begin::ثبت-->
													<input type="submit" class="btn btn-primary"  name="submit" value="ثبت محصول">
													
													<!--end::ثبت-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Row-->

										
										<!--end::کارت-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::تماس با ما-->
							</div>











<script>var hostUrl = "assets/index.html";</script>
		<!--begin::Global Javascript Bundle(mوatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="./personaljs/dateinpersian.js"></script>
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
</body>
	<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo14/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 10:56:44 GMT -->
</html>