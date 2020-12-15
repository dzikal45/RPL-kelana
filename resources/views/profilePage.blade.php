@extends('layouts.app')

@section('content')
@include('component.header')
@include('Konten.profile')

@include('auth.login')
@include('auth.register')


@endsection
@section('style')

@endsection