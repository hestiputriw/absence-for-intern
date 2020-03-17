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
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection