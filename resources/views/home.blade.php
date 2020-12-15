@extends('layouts.app')

@section('content')
@include('component.header')
@include('Konten.landing')

@include('auth.login')
@include('auth.register')


@endsection
@section('style')
@include('stylebody.styleHome')
@endsection