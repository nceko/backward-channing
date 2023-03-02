
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Beta Version</b>
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="">MBCCIA</a>.</strong> Bisa Lebih Baik.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('static/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('static/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('static/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('static/plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('static/dist/js/adminlte.min.js') ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>
</body>
</html>
