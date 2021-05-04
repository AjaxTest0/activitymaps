@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5 p-5 cc-bg-blue">
            <div class="card">
                <div class="card-header">
                    <span class="text-muted font-weight-bold">User List</span>
                    <span class="float-right">
                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success">New User</a>
                    </span>
                </div>
                <div class="card-body">
                    @include('multiauth::message')
                    <ul class="list-group">
                        @foreach ($admins as $admin)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span style="width:35% ;">
                                {{ $admin->name }}    
                                </span>
                                <span class="badge" style="width:15% ;">
                                        @foreach ($admin->roles as $role)
                                            <span class="badge-warning badge-pill ml-2">
                                                {{ $role->name }}
                                            </span> 
                                        @endforeach
                                </span>
                                <span style="width:15% ;">
                                    {{ $admin->active? 'Active' : 'Inactive' }}
                                </span>
                                <div class="float-right" style="width:35% ;">
                                    <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                        @csrf @method('delete')
                                    </form>

                                    <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a>
                                </div>
                            </li>
                        @endforeach @if($admins->count()==0)
                        <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                        @endif
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection