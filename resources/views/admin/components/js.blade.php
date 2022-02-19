  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admin') }}/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin') }}/js/dashboard.js"></script>
  <script src="{{ asset('admin') }}/js/data-table.js"></script>
  <script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->



  <script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript"></script>
  <script>
      var text_max = 120;
      $('#count_message').html('0 / ' + text_max);

      $('#desc').keyup(function() {
          var text_length = $('#desc').val().length;
          var text_remaining = text_max - text_length;

          $('#count_message').html(text_length + ' / ' + text_max);
      });
  </script>
  <script>
      ClassicEditor
          .create(document.querySelector('#editor'))
          .then(editor => {
              console.log(editor);
          })
          .catch(error => {
              console.error(error);
          });
      ClassicEditor
          .create(document.querySelector('#editor1'))
          .then(editor => {
              console.log(editor);
          })
          .catch(error => {
              console.error(error);
          });
      ClassicEditor
          .create(document.querySelector('#editor2'))
          .then(editor => {
              console.log(editor);
          })
          .catch(error => {
              console.error(error);
          });
  </script>

  @stack('js')
