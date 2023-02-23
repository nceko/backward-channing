<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>MBCCIA</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Pendaftaran Untuk Pengguna Baru</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Tulis Kembali Password Anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar Pengguna Baru</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
	  <hr>

      	<span>Sudah memiliki akun ?
        	<a href="<?= base_url('login') ?>">Masuk</a>
		</span>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
