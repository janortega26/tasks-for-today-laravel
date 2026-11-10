@extends('layouts.app')

@section('content')

<h2>Profile</h2>

@if($user)

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>

@else

<p>No user record found.</p>

@endif

@endsection