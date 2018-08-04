
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="http://www.goldvirtual.com.br">Gold Virtual Airlines</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.1.1 
      <?php echo "<b> - Database: </b>" . Sql::DBNAME ; ?>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/portal/res/lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/portal/res/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/portal/res/lte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/portal/res/lte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/portal/res/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/portal/res/lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/portal/res/lte/plugins/knob/jquery.knob.js"></script>
<!-- validator -->
<script src="/portal/res/lte/plugins/bootstrap/js/validator.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/portal/res/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/portal/res/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/portal/res/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/portal/res/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/portal/res/lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/portal/res/lte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/portal/res/lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/portal/res/lte/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/portal/res/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/portal/res/lte/plugins/datatables/dataTables.bootstrap4.js"></script>


<script>
  $(function () {
    $('#tbConsulta').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#tbConsultaSemOrdenacao').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });

</script>
</body>
</html>