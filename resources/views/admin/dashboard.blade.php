@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Admin Dashboard</h2>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>

    <div class="card shadow-sm p-4">
        <h5>Welcome, Admin</h5>
        <p>Use the panel to manage users and approve blog posts.</p>
        <a href="{{ route('admin.users') }}" class="btn btn-primary">Manage Users</a>
    </div>
</div>
@endsection
