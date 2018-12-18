<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-dark navbar-expand">
		<a class="navbar-brand" href="/">
    <img src="/image/spirit.svg" width="100" alt="">
  </a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
      @guest
            <li class="nav-item">

              <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
            </li>
      @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="/auth/register">{{ __('DAFTAR') }}</a>
                    </li>
            @endif
        @else
        <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">{{ __('DASHBOARD') }}</a>
              
            </li>
       <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-transform: uppercase;">
       {{Auth::user()->namaBelakang }} <span class="caret"></span>
        </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
	</nav>
@yield('content')
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script type="text/javascript">
  $('#confirm').modal('show'); 
</script>
</body>
</html>