<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Runners | App</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<div class="header-left">
				<a href="index.html" class="logo logo-small">
					<img src="assets/img/logo-icon.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>

			<ul class="nav user-menu">
				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="far fa-bell"></i>  <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Thomas Herzberg have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">15 Sep 2020 10:20 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Matthew Garcia have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">13 Sep 2020 03:56 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								
							
							
								
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="admin-notification.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="assets/img/logo-icon.png" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-logo">
				<a href="index.html">
					<img src="assets/img/logo-icon.png" class="img-fluid" alt="">
				</a>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active">
							<a href='{!!url("/")!!}'><i class="fas fa-columns"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a  href= '{!!url("categories")!!}'><i class="fas fa-layer-group"></i> <span>Categories</span></a>
						</li>
						<li>
							<a  href= '{!!url("runners")!!}'><i class="fab fa-buffer"></i> <span>Runners</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Categories</h3>
						</div>
						<div class="col-auto text-right">
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div><br />
                            @endif
							{{-- <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
								<i class="fas fa-filter"></i>
							</a> --}}
                            <a href="#addCategoryModal"  data-toggle="modal" data-toggle="tooltip" title="Add Category" class="btn btn-primary add-button ml-3">
                                <i class="fas fa-plus"></i>
                            </a>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<!-- Search Filter -->
				<!--<div class="card filter-card" id="filter_inputs">
					<div class="card-body pb-0">
						<form action="#" method="post">
							<div class="row filter-row">
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Category</label>
										<select class="form-control select">
											<option>Select category</option>
											<option>Automobile</option>
											<option>Construction</option>
											<option>Interior</option>
											<option>Cleaning</option>
											<option>Electrical</option>
											<option>Carpentry</option>
											<option>Computer</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>From Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>To Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>-->
				<!-- /Search Filter -->

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0 datatable">
										<thead>
											<tr>
												<th>Category Id</th>
                                                <th>Category Name </th>
												
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>

											@foreach($categories as $cats)
											<tr>
												
                                            <td>{{$cats->categoryId}}</td>
												<td>{{$cats->categoryName}}</td>
                                                
                                               
												<td class="text-right">
													<a href="edit-category.html" class="btn btn-sm bg-success-light mr-2">	<i class="far fa-edit mr-1"></i> Edit</a>
												</td>
												
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
            <!-- Edit Modal HTML -->
            <div id="addCategoryModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <form method="post" action="{{url('create_category')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="modal-header">
                                <h4 class="modal-title">Add Categories</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">


                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Category Name</label>
                                            <input class="form-control" id="category" name="category" type="text">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label>Category Image</label>
                                            <input class="form-control" name="image" id="image" type="file">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Add Category">
                                    </div>


                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>




	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/bootstrapValidator.min.html"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>
