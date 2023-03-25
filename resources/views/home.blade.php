@extends('layouts.app')

@section('content')
    <top-nav :role=" {{ $userRoles }}"></top-nav>
    <home/>
@endsection
