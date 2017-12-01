<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar has-shadow">
        <div class="container">
          <div class="navbar-brand">
            <a href="{{ route('home') }}" class="navbar-item is-paddingless brand-item">
              <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
            </a>

            <button class="button navbar-burger">
              <span></span>
              <span></span>
              <span></span>
           </button>
          </div>

          <div class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
              <a class="navbar-item is-tab is-hidden-mobile">Discuss</a>
              <a class="navbar-item is-tab is-hidden-mobile">Share</a>
            </div>

            <div class="navbar-end nav-menu" style="overflow: visible">
              @if (!Auth::guest())
                <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
              @else
                <button class="navbar-item is-aligned-right is-tab is-open dropdown">
                  Hi Dude <span class="icon"><i class="fa fa-caret-down"></i></span>

                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">
                        <span class="icon">
                          <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                        </span>Profile
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="icon">
                          <i class="fa fa-fw fa-bell m-r-5"></i>
                        </span>Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="icon">
                          <i class="fa fa-fw fa-cog m-r-5"></i>
                        </span>Manage
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="icon">
                          <i class="fa fa-fw fa-sign-out m-r-5"></i>
                        </span>Logout
                      </a>
                    </li>
                  </ul>
                </button>
              @endif
            </div>
          </div>
        </div>
      </nav>
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
