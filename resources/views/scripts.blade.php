
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"type="text/javascript"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('assets/dist/js/demo.js')}}"type="text/javascript"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"type="text/javascript"></script>
<!-- jVectorMap -->
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"type="text/javascript"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"type="text/javascript"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"type="text/javascript"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{asset('assets/plugins/chartjs-old/Chart.min.js')}}"type="text/javascript"></script>
<script src="{{asset('js/app.js') }}" type="text/javascript" ></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('assets/dist/js/pages/dashboard2.js')}}"type="text/javascript"></script>

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"type="text/javascript"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"type="text/javascript"></script>
<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.js')}}"type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"type="text/javascript"></script>
<!-- FastClick -->
<script src="{{asset('assets/plugins/fastclick/fastclick.js')}}"type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"type="text/javascript"></script>
<!-- page script -->

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>




@stack('scripts')
