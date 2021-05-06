@extends('multiauth::layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <div class="card m-5 p-5 cc-bg-blue">
                        <div class="card">
                        <div class="display-4 text-dark text-center font-weight-bold">Event Locations</div>
                        <hr>
                        @if(Auth::user()->roles->first()->name == 'super')
                        <form action="/maps/export/" method="get">
                            @csrf
                            <div class="clearfix pr-3">
                                <span class="float-right">
                                    <button class="btn btn-outline-primary" href="{{url('maps/export/')}}">Export All Maps</button>
                                </span>
                            </div>
                        </form>
                        @endif
                        <hr>
                        <div class="card-body">
                            @include('includes.datatable')
                        </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection