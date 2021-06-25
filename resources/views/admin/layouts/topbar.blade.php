<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">
	<button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle"> 
		<i class="fa fa-bars"></i>
	</button>
	<ul class="ml-auto navbar-nav">
		<li class="mx-1 nav-item p-3">
			<a href="{{ route('home') }}" title="view website">
			</a>
		</li>
		
		<div class="topbar-divider d-none d-sm-block"></div>
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
				<span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
				<img class="img-profile rounded-circle" width="80" src={{asset("assets/images/demo/avatar.png")}}>
			</a>
			<div class="shadow dropdown-menu dropdown-menu-right animated--grow-in text-center" aria-labelledby="userDropdown">
				<div class="dropdown-divider"></div>
				<a class="dropdown-item bg-primary p-1 text-white" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"> 
					<i class="fas fa-power-off"></i>
					Log Out</a>
			</div>
		</li>
	</ul>
</nav>