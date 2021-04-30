        <div class="col-lg-6 col-md-12 float-right">
          <div class="card m-5 px-5 pt-5 pb-4" style="background-color:  #46b4e3">
            <div class="card">
              <h2 class="text-center text-muted m-2">Login</h2>
              <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0 text-center" >
                            <div class="col-12">
                                <button type="submit" class="btn col-12 text-white" style="background-color:  #46b4e3">
                                    {{ __('Login') }}
                                </button>
{{--                               @if (Route::has('password.request'))
                                <a class="btn btn-link text-muted col-12" href="{{ route('password.request') }}">
                                  <u>  {{ __('Lost Your Password?') }} </u>
                                </a>
                              @endif --}}
                            </div>
                        </div>

                    </form>
              </div>
            </div>
            <div class="col-12 p-1 text-center text-white">
              Don't Have an account?
              <a class="text-white" href="{{ route('register') }}"><u> Sign Up here! </u></a> 
            </div>
          </div>
        </div>