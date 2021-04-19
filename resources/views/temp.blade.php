                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @auth
                    {{ __('You are logged in!') }}
                    @else
                        You Need To 
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endauth