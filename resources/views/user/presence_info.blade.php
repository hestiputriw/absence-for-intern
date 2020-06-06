@extends('layouts.dashboard_user')
@section('title', 'Information of Presence')

@section('content')
<div class="wrapper">
    <div class="main section-light-gray">
        {{-- Section 1 --}}
        <div class="section text-center landing-section mt-md-4">
            <div class="container tim-container">
                <div class="row">
                    <div class="text-center">
                        <div class="col">
                            <p>
                                {{ Auth::user()->name }}<br>
                                <i class="fa fa-university"></i> {{ Auth::user()->institute }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Section 1 --}}

        {{-- Section 2 --}}
        <div class="section text-center landing-section">
            <div class="container tim-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="card-title">Your Presence Record</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>#</th>
                                            <th>Presence In</th>
                                            <th>Presence Out</th>
                                        </thead>
                                        <tbody class="table-mar">
                                            @foreach ($presences as $key => $presence)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $presence->time_in }}</td>
                                                <td>{{ $presence->time_out }}</td>
                                                {{-- <td>{{ $presence->time_out }}</td> --}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Section 2 --}}

    </div>
</div>
@endsection
