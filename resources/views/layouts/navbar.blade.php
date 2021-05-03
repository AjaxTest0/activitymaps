        <nav class="navbar navbar-expand-md navbar-light shadow-sm cc-bg-gray">
            <div class="container text-white">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/icon/logow.png') }}" height="100%" width="100%">
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
                            <li class="nav-item ">
                                <a class="nav-link text-white font-weight-bold" href="/home">New Map Record</a>
                            </li>
                        @endif
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white font-weight-bold" href="/index">Map Record</a>
                            </li>
                        @endauth
                    </ul>
                            
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- Nav Menu --}}
                        <li class="nav-item ">
                            <a class="nav-link text-white active font-weight-bold mx-2" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold mx-2" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold ml-2 mr-5" href="/contact">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold mx-1 text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold mx-1 text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown cc-blue">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white cc-blue" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="cc-blue">
                                   {{ Auth::user()->name }}
                                   </span> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right cc-bg-gray" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item cc-blue" href="{{ route('logout') }}"
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