@extends('layouts.app')

@section('pageTitle')
    Dashboard
@endsection

@section('content')
    <div class="bg-white shadow rounded p-6">You currently have {{ $usersCount }} user(s)</div>
@endsection