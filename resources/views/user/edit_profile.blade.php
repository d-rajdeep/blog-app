@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Profile</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
        </div>
        <div class="mb-3">
            <label>Email Id</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        </div>
        <hr>
        <h5>Change Password</h5>
        <div class="mb-3">
            <label>New Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
