
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('admin') }}/{{ asset('admin') }}/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/select2.min.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="{{ asset('admin') }}/image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="#" class="header__logo">
				<img src="{{ asset('admin') }}/img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.html" class="sidebar__logo">
			<img src="{{ asset('admin') }}/img/logo.svg" alt="Site_logo">
		</a>
		<!-- end sidebar logo -->

		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<a href="{{ route('profile') }}">
					<img src="{{ asset('admin') }}/img/user.svg" alt="">
				</a>
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>{{ Auth::user()->name }}</p>
			</div>

			<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="sidebar__user-btn">
				<i class="icon ion-ios-log-out"></i>
			</a>
			<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>

		</div>

		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.html" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Catalog</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="{{ route('profile') }}" class="sidebar__nav-link"><i class="ion-person"></i> <span>Profile</span></a>
				</li>

				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenu">
						<li><a href="add-item.html">Add item</a></li>
						<li><a href="edit-user.html">Edit user</a></li>
						<li><a href="signin.html">Sign in</a></li>
						<li><a href="signup.html">Sign up</a></li>
						<li><a href="forgot.html">Forgot password</a></li>
						<li><a href="404.html">404 page</a></li>
					</ul>
				</li>
				<!-- end collapse -->
				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenus" role="button" aria-expanded="false" aria-controls="collapseMenus"><i class="icon ion-ios-contacts"></i> <span>Users</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenus">
						<li><a href="add-item.html">Add Users</a></li>
						<li><a href="add-item.html">All Users</a></li>
						<li><a href="edit-user.html">Pendind user</a></li>
					</ul>
				</li>
				<!-- end collapse -->


				<li class="sidebar__nav-item">
					<a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="../main/index.html" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to HotFlix</span></a>
				</li>
			</ul>
		</div>
		<!-- end sidebar nav -->

		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© Shopispeed, 2020—{{ date('Y') }}. <br>Create by <a href="https://mahafujarafat.com" target="_blank">Pro Rakib</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>

						<a href="add-item.html" class="main__title-link">add item</a>
					</div>
				</div>
				<!-- end main title -->


@yield('content')


			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="{{ asset('admin') }}/js/jquery-3.5.1.min.js"></script>
	<script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('admin') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('admin') }}/js/jquery.mousewheel.min.js"></script>
	<script src="{{ asset('admin') }}/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="{{ asset('admin') }}/js/select2.min.js"></script>
	<script src="{{ asset('admin') }}/js/admin.js"></script>
</body>
</html>
