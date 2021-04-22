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

                    Carbon\Carbon::parse($map->from)->format('Y/m/d')


                                                    <div class="modal fade" id="myModal{{ $key }}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title">{{ $map->type }}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <!-- Modal body -->
                                          <div class="modal-body">
                                            <div><b>Proponent:</b> {{ $map->proponent }}</div>
                                            <div><b>From:</b> {{ $map->from }}</div>
                                            <div><b>To:</b> {{ $map->to }}</div>
                                            <div><b>Description:</b> {{ $map->description }}</div>
                                            <div>{{ $map->latitude }},{{ $map->longitude }} <b><i class="fas fa-map-marker-alt"></i></b></div>
                                          </div>

                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>


                                data-toggle="modal" data-target="#myModal{{ $key }}" onclick="zoom({{ $map->latitude }},{{ $map->longitude }})"