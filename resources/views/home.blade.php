@extends('layouts.main')
@push('title')
    <title>Home Page</title>
@endpush
@section('main-section')
    <h1 style="color: brown">@lang('lang.welcome') @if(session()->has('username')){{session('username')}}@else guest @endif</h1>
    <h3><a href="{{url('/ur')}}">Urdu</a> <a href="{{url('/hi')}}">Hindi</a> <a href="{{url('/rus')}}">Russian</a></h3>


@endsection