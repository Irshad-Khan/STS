<!DOCTYPE html>
<html lang="en">
 <head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   @include('layouts.partials.head')
   <script>
       $(document).ready(function(){
        setTimeout(function() {
    $('.flash-message').remove();
}, 3000);
});
   </script>
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
