<?php

if(!isset($_COOKIE["username"])){
	header("location:../index.php");
}
?>



<!--begin::Header-->
<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-stack">
							<!--begin::Brو-->
							<div class="d-flex align-items-center me-5">
								<!--begin::کناری toggle-->
								<div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3" id="kt_aside_toggle">
									<i class="ki-duotone ki-abstract-14 fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::کناری  toggle-->
								<!--begin::Logo-->
								<a href="index.html">
									<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-25px h-lg-30px" />
								</a>
								<!--end::Logo-->
								<!--begin::Nav-->
								<span class="d-none d-md-inline" style="color: white;margin: 0px 3vw;font-size: 1.2rem;"> انبار داری انباربان </span>
								
								<!--end::Nav-->
							</div>
							<!--end::Brو-->
							<!--begin::بالاbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::جستجو-->
							
								<!--begin::user-->
								<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
									<!--begin::کاربر info-->
									<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::نام-->
										<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
											<span class="text-muted fs-8 fw-semibold lh-1 mb-1"><?php
															echo $_COOKIE["username"];
														?></span>
											<span class="text-white fs-8 fw-bold lh-1">Admin</span>
										</div>
										<!--end::نام-->
										<!--begin::Symbol-->
										<div class="symbol symbol-30px symbol-md-40px">
											<img src="assets/media/avatars/300-1.jpg" alt="image" />
										</div>
										<!--end::Symbol-->
									</div>
									<!--end::کاربر info-->
									<!--begin::کاربر account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::کاربرname-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">
														<?php
															echo $_COOKIE["username"];
														?>
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"> ادمین</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
													<?php
															include_once "./control/users.php";
															$userdata=users($_COOKIE["username"]);
															while($userdatarow=$userdata->fetch_assoc()){
																echo $userdatarow["email"];
															}


													?>
													</a>
												</div>
												<!--end::کاربرname-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										
									
										
										<!--begin::Menu item-->
										
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
								
									
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../index.php?exit=true" class="menu-link px-5 text-danger">خروج</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::کاربر account menu-->
								</div>
								<!--end::کاربر -->
							</div>
							<!--end::بالاbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->