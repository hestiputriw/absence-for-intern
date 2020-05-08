@extends('layouts.dashboard_host')
@section('title', 'Presence In')

@section('content')
    {{-- {{ $qrcode }} --}}
    {!! QrCode::size(300)->generate($randomletter) !!}
@endsection