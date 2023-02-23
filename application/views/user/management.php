  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1>Management Pengguna</h1>
  				</div>
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="#">Home</a></li>
  						<li class="breadcrumb-item active">Management Pengguna</li>
  					</ol>
  				</div>
  			</div>
  		</div><!-- /.container-fluid -->
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-12">
  					<div class="card">
  						<div class="card-header">
  							<div class="card-tools">
  								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-user">
  									<i class="fas fa-plus"></i>
  									Tambah Pengguna Baru
  								</button>
  							</div>
  						</div>
  						<!-- /.card-header -->
  						<div class="card-body">
  							<table id="user_datas" class="table table-bordered table-striped" data-url="<?= site_url('user/management/fetch') ?>">
  								<thead>
  									<tr>
  										<th>Email</th>
  										<th>Nama</th>
  										<th>Peranan</th>
  										<th>Status</th>
  										<th>Aksi</th>
  									</tr>
  								</thead>
  							</table>
  						</div>
  						<!-- /.card-body -->
  					</div>
  					<!-- /.card -->
  				</div>
  				<!-- /.col -->
  			</div>
  			<!-- /.row -->
  		</div>
  		<!-- /.container-fluid -->
  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="new-user">
  	<div class="modal-dialog modal-lg">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Pengguna Baru</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>
  			<form class="form-horizontal" action="<?= site_url('user/management/new') ?>" method="POST">
  				<div class="modal-body">
  					<div class="card-body">
  						<div class="form-group row">
  							<label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
  							<div class="col-sm-8">
  								<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
  							</div>
  						</div>
  						<div class="form-group row">
  							<label for="email" class="col-sm-4 col-form-label">Email</label>
  							<div class="col-sm-8">
  								<input type="email" class="form-control" id="email" placeholder="Email Pengguna" name="email">
  							</div>
  						</div>
  						<div class="form-group row">
  							<label for="role" class="col-sm-4 col-form-label">Peranan Pengguna</label>
  							<div class="col-sm-8">
  								<div class="form-check">
  									<div class="row">
  										<div class="col-sm-4">
  											<input class="form-check-input" type="radio" name="role" id="role" value="1">
  											<label class="form-check-label">Admin</label>
  										</div>
  										<div class="col-sm-4">
  											<input class="form-check-input" type="radio" name="role" id="role" value="2">
  											<label class="form-check-label">Pengguna Umum</label>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  						<div class="form-group row">
  							<label for="password" class="col-sm-4 col-form-label">Kata Sandi</label>
  							<div class="col-sm-8">
  								<input type="password" class="form-control" id="password" placeholder="Kata Sandi" name="password">
  							</div>
  						</div>
  						<div class="form-group row">
  							<label for="password_repeat" class="col-sm-4 col-form-label">Ulangi Kata Sandi</label>
  							<div class="col-sm-8">
  								<input type="password" class="form-control" id="password_repeat" placeholder="Ulangi Kata Sandi" name="password_repeat">
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="modal-footer justify-content-left">
  					<button type="submit" class="btn btn-primary">Simpan</button>
  				</div>
  			</form>
  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <script type="text/javascript">
  	$('.Success').click(function() {
  		toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  	});
  	$('.Error').click(function() {
  		toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  	});
  </script>
