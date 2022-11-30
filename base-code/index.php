<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
		<!-- Begin::your code -->

		<div class="container-fluid">
			<!-- header -->
			<div class="navbar navbar-expand-lg bg-custom-primary">
				<div class="col">
					<div class="container" style="margin-top:10px; margin-bottom:10px;">
						<ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold">
    						<li class="breadcrumb-item pe-3 text-dark "> Preview</li>
    						<li class="breadcrumb-item pe-3"><span class="badge badge-light-success svg-icon bi bi-grid-fill">Approved</span></li>
						</ol>
					</div>
				</div>
				<div class="col">
					<div class="container" style="margin-top:10px; margin-bottom:10px;">
						<ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold">
    						<li class="breadcrumb-item pe-3 text-dark">Activity</li>
						</ol>
					</div>
				</div>
			</div>

			<!-- content -->
			<div class="row">
				<div class="col bg-secondary bg-opacity-15">
					<div class="container bg-secondary" style="margin-top:10px; margin-bottom:10px;">
						<div class="card shadow-sm">
							<div class="card-header">
								<div class="card-title">
									<ul class="pagination">
										<li class="page-item previous disabled"><a href="#" class="page-link"><i                            class="previous"></i></a></li>
										<li class="page-item "><a href="#" class="page-link"><i class="bi bi-facebook fs-3x"></i></a></li>
										<li class="page-item active"><a href="#" class="page-link"><i class="bi bi-instagram fs-3x"></i></a></li>
										<li class="page-item "><a href="#" class="page-link"><i class="bi bi-github fs-3x"></i></a></li>
										<li class="page-item "><a href="#" class="page-link"><i class="bi bi-twitter fs-3x"></i></a></li>
										<li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
									</ul>
                        		</div>
							</div>
							<div class="card-body">
							<img src="media/image.png" class="img-fluid" alt="Responsive image">
							<p>jhsadbjhjfhejsahrjkbdhcnjkcfa</p>
							</div>
							<div class="card-footer">
								<div class="symbol symbol-50px">
									<div class="form-floating">
										<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
											<option selected>Batesa enterprise limited</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<label for="floatingSelect">Select Client</label>
									</div>
									<br>
									<div class="form-floating">
										<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
											<option selected>Social Media</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<label for="floatingSelect">Content Type</label>
									</div>
									<br>
									<div class="text-dark">
										<p>Selected Social: </p>
									</div>
									<ul class="pagination">
										<li class="page-item previous disabled"><a href="#" class="page-link"><i                            class="previous"></i></a></li>
										<li class="page-item "><a href="#" class="page-link"><img src="assets/media/avatars/300-6.jpg" alt=""/></a></li>
										<li class="page-item active"><a href="#" class="page-link"><img src="assets/media/avatars/300-6.jpg" alt=""/></a></li>
										<li class="page-item "><a href="#" class="page-link"><img src="assets/media/avatars/300-6.jpg" alt=""/></i></a></li>
										<li class="page-item "><a href="#" class="page-link"><img src="assets/media/avatars/300-6.jpg" alt=""/></a></li><img src="assets/media/avatars/300-6.jpg" alt=""/>
										<li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
										</ul>
										<br>
										<br>
									<div class="text-dark">
									<p> Scheduled for: </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
							<p class="text-primary"><span class="text-dark">Campaign:</span> This is our moment</p>
							</div>
						</div>
					</div>
				</div>


				<div class="col bg-primary bg-opacity-10">

				<div class="container">
					<br/>

					<!-- anather card -->
					<div class="row bg-white post">
						<div class="col-sm-2">
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="col-sm-4">
								<select class="form-select form-select-transparent" aria-label="Select example">
									<option>To Everyone</option>
									<option value="1">To only Agency</option>
								</select>
							</div>

							<div class="input-group input-group-solid mb-5">
								<textarea class="form-control" aria-label="With textarea"></textarea>
							</div>
						</div>
						<div class="col-sm-12">
							controls
						</div>
					</div>











					<!-- anather mini card -->
					<div class="row mini-card-custom">
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<p class="">
									<span class="text-primary">Makula Francis:</span>
									<span>Updated scheduling from</span>
									<span class="text-dark">2nd/jun/2022</span> to
									<span class="text-dark">23rd/jun/2022</span>
								</p>
								
								<div class="card-toolbar">
									<span class="text-grey-500">2 hours ago</span>
								</div>
							</div>
						</div>
					</div>

					<!-- anather card -->
					<div class="row">
						<div class="col-sm-2">
							<!-- put image here -->
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h3 class="card-title">Makula Francis <span class="badge badge-secondary">Updated</span></h3>
									
									<div class="card-toolbar text-primary">
										2 days ago
									</div>
								</div>
								<div class="card-body">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="Reply..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
									<span class="input-group-text" id="basic-addon2">
									<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor"/>
										<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor"/>
										</svg>
									</span>
									</span>
								</div>
								</div>
							</div>
						</div>
					</div>

					<!-- anather mini card -->
					<div class="row mini-card-custom">
						<div class="card">
						<div class="card-header">
							<p class="">
							<span class="text-primary">Makula Francis:</span>
							<span>Updated scheduling from</span>
							<span class="text-dark">2nd/jun/2022</span> to
							<span class="text-dark">23rd/jun/2022</span>
							</p>
							
							<div class="card-toolbar">
								<span class="text-grey-500">2 hours ago</span>
							</div>
						</div>
						</div>
					</div>


					<!-- anather card -->
					<div class="row">
						<div class="col-sm-2">
							<!-- put image here -->
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h3 class="card-title">Makula Francis <span class="badge badge-secondary">Updated</span></h3>
									
									<div class="card-toolbar text-primary">
										2 days ago
									</div>
								</div>
								<div class="card-body">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="Reply..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
									<span class="input-group-text" id="basic-addon2">
									<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor"/>
										<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor"/>
										</svg>
									</span>
									</span>
								</div>
								</div>
							</div>
						</div>
					</div>



					<!-- anather card -->
					<div class="row custome-card">
						<div class="col-sm-2">
							<!-- put image here -->
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h3 class="card-title">Grace Logan <span class="badge badge-warning">Edited Caption</span></h3>
									
									<div class="card-toolbar text-primary">
										3 hours ago
									</div>
								</div>
								<div class="card-body custom-card-body">
									<!-- start the content  -->
									<div class="d-flex flex-column pe-0 pe-sm-10">
										<span class="text-dark">The alert component can be used to highlight certain parts of your page for higher content visibility. The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
									</div>

									<br/>

									<button class="btn bg-primary bg-opacity-15 me-5">
									<span class="svg-icon svg-icon-muted svg-icon-2hx svg-icon-primary"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor"/>
										<path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor"/>
										</svg>
									</span>
										<span class="badge badge-lg text-primary">3</span>
									</button>

									<button class="btn me-5">
										<i class="fa-solid fa-heart text-danger fs-1"></i>
										<span class="badge badge-lg text-dark">12</span>
									</button>


									<!-- anather card -->
									<div class="row custome-card">
										<div class="col-sm-2">
											<!-- put image here -->
											<div class="custom-avatar">
												<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
											</div>
										</div>
										<div class="col-sm-10 custom-card-nested">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Mr. Andersson</h3>
													
													<div class="card-toolbar text-primary">
														3 hours ago
													</div>
												</div>
												<div class="card-body custom-card-body">
													<span class="text-dark">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
												</div>
											</div>
										</div>
									</div>

									<!-- anather card -->
									<div class="row">
										<div class="col-sm-2">
											<!-- put image here -->
											<div class="custom-avatar">
												<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
											</div>
										</div>
										<div class="col-sm-10 custom-card-nested">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Makula Francis</h3>
													
													<div class="card-toolbar text-primary">
														3 hours ago
													</div>
												</div>
												<div class="card-body custom-card-body">
													<span class="text-dark">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
												</div>
											</div>
										</div>
									</div>



									<!-- end the content -->									
								
									<br/>
									<div class="input-group mb-5">
										<input type="text" class="form-control" placeholder="Reply..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
										<span class="input-group-text" id="basic-addon2">
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor"/>
											<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor"/>
											</svg>
										</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>



					<!-- anather card -->
					<div class="row custome-card">
						<div class="col-sm-2">
							<!-- put image here -->
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h3 class="card-title">Grace Logan <span class="badge badge-warning">Edited Caption</span></h3>
									
									<div class="card-toolbar text-primary">
										3 hours ago
									</div>
								</div>
								<div class="card-body custom-card-body">
									<!-- start the content  -->


									<div class="alert alert-success bg-light d-flex align-items-center p-5">
										<div class="d-flex flex-column pe-0 pe-sm-10">
											<h6 class="alert-title text-success fw-semibold">Revised Default</h6>
											<span class="text-dark">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
										</div>
									</div>


									<div class="alert alert-success alert-custom-orange bg-light d-flex align-items-center p-5">
										<div class="d-flex flex-column pe-0 pe-sm-10">
											<h6 class="alert-title alert-text-orange fw-semibold">Revised Default</h6>
											<span class="text-muted">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
										</div>
									</div>


									<div class="alert alert-success bg-light d-flex align-items-center p-5">
										<div class="d-flex flex-column pe-0 pe-sm-10">
											<h6 class="alert-title text-success fw-semibold">Revised Twitter</h6>
											<span class="text-dark">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
										</div>
									</div>


									<div class="alert alert-success alert-custom-orange bg-light d-flex align-items-center p-5">
										<div class="d-flex flex-column pe-0 pe-sm-10">
											<h6 class="alert-title alert-text-orange fw-semibold">Revised Default</h6>
											<span class="text-muted">The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
										</div>
									</div>



									<!-- end the content -->

									<div class="input-group mb-5">
										<input type="text" class="form-control" placeholder="Reply..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
										<span class="input-group-text" id="basic-addon2">
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor"/>
											<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor"/>
											</svg>
										</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- anather card -->
					<div class="row">
						<div class="col-sm-2">
							<div class="custom-avatar">
								<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFBODE1tAh7t4yyI5DugwhpMXlxdxxb2n_Vbqz-GJuIXdMSceNEcfRyv3KOkz8KpugWA&usqp=CAU' class="img-thumbnail">
							</div>
						</div>
						<div class="col-sm-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h3 class="card-title">Makula Francis <span class="badge badge-secondary">Created</span></h3>
									
									<div class="card-toolbar text-primary">
										2 days ago
									</div>
								</div>
								<div class="card-body">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="Reply..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
									<span class="input-group-text" id="basic-addon2">
									<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor"/>
										<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor"/>
										</svg>
									</span>
									</span>
								</div>
								</div>
							</div>
						</div>
					</div>

					<br/>
				</div>
				</div>


			</div>

			<!-- footer -->
			<div class="row footer fixed-fixed  bg-custom-primary" style="padding-top:10px; padding-bottom:10px;">
				<div class="col">
					<div class="contaigner">
						<a href="#" class="btn btn-icon-dark btn-custom-footer btn-text-dark"><span class="svg-icon bi bi-grid-fill"><svg></svg></span>Delete</a>
						<a href="#" class="btn btn-icon-dark btn-custom-footer btn-text-dark"><span class="svg-icon bi bi-grid-fill"><svg>...</svg></span>Show</a>

						<a href="#" class=" float-left btn btn-icon-dark btn-custom-footer btn-text-dark"><span class="svg-icon bi bi-grid-fill"><svg>...</svg></span>UNDO APPROVE</a>
						<a href="#" class=" float-right btn btn-icon-dark btn-custom-footer-orange btn-text-dark"><span class="svg-icon bi bi-grid-fill"><svg>...</svg></span>Edit</a>


					</div>
				</div>
				<div class="col">
					<div class="containger">
						<div class="input-group mb-5">
							<input type="text" class="form-control" placeholder="Add a comment..." aria-label="Recipient's username" aria-describedby="basic-addon2"/>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
