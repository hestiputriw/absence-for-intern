@extends('layouts.dashboard_host')
@section('title', 'Presence Out')

@section('content')
    {!! QrCode::size(300)->generate($randomletter) !!}
@endsection