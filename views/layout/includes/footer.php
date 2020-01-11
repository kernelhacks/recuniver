<footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo BASE_URL?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo BASE_URL?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo BASE_URL?>plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo BASE_URL?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="<?php echo BASE_URL?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo BASE_URL?>dist/js/demo.js"></script>
    <script src="<?php echo BASE_URL?>dist/js/pages/dashboard3.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo BASE_URL?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo BASE_URL?>dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
</body></html>
