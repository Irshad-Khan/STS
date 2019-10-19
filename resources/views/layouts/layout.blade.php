<!DOCTYPE html>
<html lang="en">
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script>
// Data Table Script
$(document).ready(function() {
    $('table').DataTable();
} );
</script>
@include('layouts.partials.head')
  
 </head>
 <body>
@include('layouts.partials.nav')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))

          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      </div> <!-- end .flash-message -->
@yield('content')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')
 </body>
</html>
