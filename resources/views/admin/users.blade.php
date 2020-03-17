@extends('layouts.dashboard_admin')
@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> All Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Institute</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>Oud-Turnhout</td>
                                    <td>
                                        <a href="{{ url("admin/user/update/{id}") }}">
                                            <i class="fa fa-pencil-square text-primary fa-2x"></i>
                                        </a> 
                                        &emsp;
                                        <a href="{{ url("admin/user/delete/{id}") }}">
                                            <i class="fa fa-trash text-primary fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection