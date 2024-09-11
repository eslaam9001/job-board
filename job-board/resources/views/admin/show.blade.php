<!-- resources/views/admin/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('admin.index') }}" class="btn btn-primary">Back to Users</a>
</div>
@endsection
