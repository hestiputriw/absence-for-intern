@extends('layouts.dashboard_admin')
@section('title', 'Update Profile')

@section('content')
    @if ($errors->any())
            <div class="alert alert-primary" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Update User Profile </h5>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/user/update/') . "/" . $user->id }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" disabled="" placeholder="Company" value="Seven Media Tech">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" value="{{ $user->username }}" name="username">
                            </div>
                        </div>
                        <div class="col-md-5 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{ $user->address }}" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" value="{{ $user->phone }}" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control" value="{{ $user->institute }}" name="institute">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection