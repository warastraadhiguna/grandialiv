





  <footer class="main-footer">
    <strong>Copyright &copy; {{ date("Y") }}<a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> --}}

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{ URL::to('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()
  })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })  
</script>
<script>
  $(function () {
    $("#example1").DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],"responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'print',
            'pdfHtml5'
        ],
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": false,        
    } );
    
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })    
});

</script>
</body>
</html>
