        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #4a494a">
            <div class="container-fluid text-white">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/icon/activityMapLogo.png') }}" height="50" width="70">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- @auth -->
                        <!-- @if(Auth::user()->role_id == 1) -->
                            
                        <!-- @endif -->
                    <!-- @endauth     -->

                    <ul class="navbar-nav">
                        @if(Illuminate\Support\Facades\Auth::check())
                            @if(Auth::user()->roles->first()->name == 'user')
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/home">New Map Record</a>
                                </li>
                            @endif
                        @endif
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/index">Map Record</a>
                            </li>
                        @endauth
                    </ul>
                            
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- Nav Menu --}}
                        <li class="nav-item ">
                            <a class="nav-link text-white active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contact">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #46b4e3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #46b4e3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>