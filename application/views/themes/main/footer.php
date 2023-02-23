
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
<script src="<?= base_url('static/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('static/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
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
