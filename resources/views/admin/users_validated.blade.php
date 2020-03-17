@extends('layouts.dashboard_admin')
@section('title', 'Users')

@section('content')
    <div class="row">    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Validated Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url("admin/user/unvalidate/{id}") }}" role="button">Unvalidate</a> 
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