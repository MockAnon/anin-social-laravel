@section('custom-script')
  <!-- <script src="jquery-3.4.0.min.js"></script> -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          alert("Settings page was loaded");
      });
  </script>
@stop