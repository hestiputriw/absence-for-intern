@extends('layouts.dashboard_admin')
@section('title', 'Violations')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Violations of People</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Violation Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->violations->last()->violation_date }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ url("admin/presence/violations") .'/'. $user->id }}" role="button">Access</a> 
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>1</td>
                                    <td>Adikara Rudi </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url("admin/presence/violations/access") }}" role="button">Access</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Vera Uyainah </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url("admin/presence/violations/access") }}" role="button">Access</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Gasti Yuliarti </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url("admin/presence/violations/access") }}" role="button">Access</a> 
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection