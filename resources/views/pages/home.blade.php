@extends('layouts.home')

@section('title')
    Home
@stop

@section('main')

    @include('pages.home.tunel')

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection