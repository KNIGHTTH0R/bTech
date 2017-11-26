@extends('layouts.home')

@section('title') Home @endsection

@section('main')

    @include('pages.home.tunel')
    @include('pages.home.how-its-work')

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection