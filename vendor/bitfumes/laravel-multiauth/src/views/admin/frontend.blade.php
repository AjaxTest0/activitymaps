@extends('multiauth::layouts.app') 
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card m-5 p-5 cc-bg-blue">
                <div class="card p-3">
                    {{$frontend->id}}
                    <form method="post" action="/frontend/{{$frontend->id}}">
                        @csrf
                        <div class="form-group row">

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="home_tab">Home Tab 1</label>
                                    <textarea id="home_tab" class="form-control" name="home_tab" rows="3">{{ $frontend->home_tab_1 }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="home_tab_2">Home Tab 2</label>
                                    <textarea id="home_tab_2" class="form-control" name="home_tab_2" rows="3">{{ $frontend->home_tab_2 }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="our_history">Our history</label>
                                    <textarea id="our_history" class="form-control" name="our_history" rows="3">{{ $frontend->our_history }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="our_skill">Our skill</label>
                                    <textarea id="our_skill" class="form-control" name="our_skill" rows="3">{{ $frontend->our_skill }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="our_biography">Our biography</label>
                                    <textarea id="our_biography" class="form-control" name="our_biography" rows="3">{{ $frontend->our_biography }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="facebook_link">Facebook </label>
                                    <textarea id="facebook_link" class="form-control" name="facebook_link" rows="3">{{ $frontend->facebook_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter </label>
                                    <textarea id="twitter_link" class="form-control" name="twitter_link" rows="3">{{ $frontend->twitter_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="google_link">Google </label>
                                    <textarea id="google_link" class="form-control" name="google_link" rows="3">{{ $frontend->google_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="linkedin_link">Linkedin </label>
                                    <textarea id="linkedin_link" class="form-control" name="linkedin_link" rows="3">{{ $frontend->linkedin_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="youtube_link">Youtube</label>
                                    <textarea id="youtube_link" class="form-control" name="youtube_link" rows="3">{{ $frontend->youtube_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="instagram_link">Instagram</label>
                                    <textarea id="instagram_link" class="form-control" name="instagram_link" rows="3">{{ $frontend->instagram_link }}</textarea>
                                </div>
                            </div>
                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="pinterest_link">Pinterest</label>
                                    <textarea id="pinterest_link" class="form-control" name="pinterest_link" rows="3">{{ $frontend->pinterest_link }}</textarea>
                                </div>
                            </div>

                            <div class="col-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="aboutus">About us</label>
                                    <textarea id="aboutus" class="form-control" name="aboutus" rows="3">{{ $frontend->aboutus }}</textarea>
                                </div>
                            </div>

                        </div>
                        {{--  @method('put')  --}}
                        {{ method_field('PUT')}}
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection