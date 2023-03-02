  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand Logo -->
  	<a href="#" class="brand-link">
  		<img src="<?= base_url('static/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  		<span class="brand-text font-weight-light">MBCCIA</span>
  	</a>

  	<!-- Sidebar -->
  	<div class="sidebar">
  		<!-- Sidebar user (optional) -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<div class="image">
  				<img src="<?= base_url('static/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="Profile Pengguna">
  			</div>
  			<div class="info">
  				<a href="#" class="d-block">Nama Pengguna</a>
  			</div>
  		</div>

  		<!-- Sidebar Menu -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<nav class="mt-2">
  				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  					<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  					<li class="nav-item">
  						<a href="<?= site_url('home') ?>" class="nav-link">
  							<i class="nav-icon fas fa-tachometer-alt"></i>
  							<p>
  								Home
  							</p>
  						</a>
  					</li>
  					<li class="nav-header">Pengguna</li>
  					<li class="nav-item">
  						<a href="<?= site_url('user/management') ?>" class="nav-link">
  							<i class="nav-icon fas fa-user"></i>
  							<p>
  								Pengguna MBCCIA
  							</p>
  						</a>
  					</li>
  					<li class="nav-header">Konsultasi</li>
  					<li class="nav-item">
  						<a href="<?= site_url('konsultasi/kerusakan') ?>" class="nav-link">
  							<i class="nav-icon fas fa-question"></i><i class="fa-solid "></i>
  							<p>
  								Konsultasi Kerusakan
  							</p>
  						</a>
  					</li>
  					<li class="nav-header">Kerusakan dan Gejala</li>
  					<li class="nav-item">
  						<a href="#" class="nav-link">
  							<i class="nav-icon fas fa-database"></i>
  							<p>
  								Data
  								<i class="right fas fa-angle-left"></i>
  							</p>
  						</a>
  						<ul class="nav nav-treeview">
  							<li class="nav-item">
  								<a href="#" class="nav-link">
  									<i class="far fa-circle nav-icon"></i>
  									<p>Kerusakan</p>
  								</a>
  							</li>
  							<li class="nav-item">
  								<a href="#" class="nav-link">
  									<i class="far fa-circle nav-icon"></i>
  									<p>Permasalahan</p>
  								</a>
  							</li>
  							<li class="nav-item">
  								<a href="#" class="nav-link">
  									<i class="far fa-circle nav-icon"></i>
  									<p>Pengaturan Nilai </p>
  								</a>
  							</li>
  						</ul>
  					</li>
  					<li class="nav-header">About Us</li>
  					<li class="nav-item">
  						<a href="<?= site_url('/user/management') ?>" class="nav-link">
  							<i class="nav-icon fas fa-address-card"></i>
  							<p>
  								About MBCCIA Apps
  							</p>
  						</a>
  					</li>
  				</ul>
  			</nav>
  		</div>
  		<!-- /.sidebar-menu -->

  		<!-- Profile and Logout -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  				<li class="nav-item">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-user-edit"></i>
  						<p>
  							Profile
  						</p>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a href="<?= site_url('/user/management') ?>" class="nav-link">
  						<i class="nav-icon fas fa-sign-out-alt"></i>
  						<p>
  							Keluar
  						</p>
  					</a>
  				</li>
  			</ul>
  		</div>
  	</div>
  	<!-- /.sidebar -->
  </aside>
