
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
		<title>قالب مدیریتی مترونیک با 50 دمو جذاب</title>
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
						<div class="col-xl-6 mb-5 mb-xl-10" style="    justify-content: center;width: 70vw;">
											<!--begin::جداول Widget 3-->
											<div class="card h-xl-100">
											<style>
													.searchpro {
														margin-top: 1vh;
														padding-top: 2vh;
														display: flex; 
														flex-direction: row;
														justify-content: space-around;
													}
													.searchpro label{
														color: #000;
														font-size: 1.2rem;
													}
													.searchpro input{
														width: 40vw;
														height: 4vh;
														border-radius: 25px;
													}
													.hidecontent{
														display: none;
													}
												</style>
												<div class="searchpro ">
													<label for="search-pr">جست و  جو در مشتریان</label>

													<input type="text" class="form-control" data-search-box >
												</div>
												<!--begin::Header-->
												<div class="card-header border-0 pt-5 ">
												<h3 class="card-title align-items-start flex-column ">
													<span class="card-label fw-bold fs-3 mb-1 "> محصولات</span>
													<?php
														if(isset($_GET["success"])){
															echo '<span class="card-label fw-bold fs-1 mb-1 text-success text-center"> حذف با موفقیت انجام شد</span>';
														}elseif(isset($_GET["error"])){
															echo '<span class="card-label fw-bold fs-3 mb-1 text-danger"> حذف با مشکل مواجه شد  </span>';

														}
													?>
													<div class="text-info fw-bold mb-0 mt-5">
														تعداد مشتریان :
																<?php
																	include_once "./control/Customers.php";
																	
																	$customersnum=Customersnum();
																	echo $customersnum->num_rows;
																?>
															</div>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<style>
															
														.table-striped tbody tr:nth-of-type(even) td {
														background-color: #faaada;
														}
														
													</style>
													<table class="table align-middle gs-0 gy-3 table-bordered table-striped border-dark align-middle gs-0 gy-3" id="mytable">
														<!--begin::Table head-->
														<thead>
															
															<tr class="text-center text-success fs-4">
																
																<th class="">نام مشتری</th>
																<th class="">تلفن</th>
																<th class="">آدرس </th>
																<th class="">حذف </th>
																
																

															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<?php
																$showcustomers=showcustomers();
																while($showcustomersrow=$showcustomers->fetch_assoc()){

																
															?>
															<tr class="text-center">
																
																<td>
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">
																		<?php
																			echo $showcustomersrow["name"];
																		?>
																	</a>
																</td>
																<td class=" fw-bold">
																<?php
																		echo $showcustomersrow["phone"];
																?>
																</td>
																<td class=" fw-bold">
																	<?php
																		echo $showcustomersrow["address"];
																	?>
																	
																</td>
																<td class=" fw-bold">
																<?php
																		$customerid=$showcustomersrow["Id"];
																?>
																	<a href ="<?php echo "./control/deletecustomers.php?customerid=".$customerid; ?> ">
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label bg-light-success">
																				<i class="ki-duotone ki-basket fs-2x text-danger">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																				</i>
																			</span>
																		</div>
																	</a>
																	
																</td>
																
															</tr>
															<?php
																}
															?>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Table container-->
											</div>
											<!--begin::Body-->
										</div>
										<!--end::جداول Widget 3-->
									</div>








<!-- lawliet personal js -->
<script src="./prjs/customerssearch.js"></script>
<!-- lawliet personal js -->



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
</body>
	<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo14/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 10:56:44 GMT -->
</html>