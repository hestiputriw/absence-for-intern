@extends('layouts.dashboard_admin')
@section('title', 'Violation Logs')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Log of Violations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Description</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td> Desc</td>
                                    </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>1</td>
                                    <td>Adikara Rudi</td>
                                    <td>16 March 2020</td>
                                    <td>Hasn't presence out.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Vera Uyainah</td>
                                    <td>16 March 2020</td>
                                    <td>Hasn't presence out.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Gasti Yuliarti</td>
                                    <td>16 March 2020</td>
                                    <td>Hasn't presence out.</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection