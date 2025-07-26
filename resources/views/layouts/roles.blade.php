@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Role-based Access</h1>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Role Assignment Form --}}
    <div class="card mb-4">
        <div class="card-header"><b>Assign Role to User</b></div>
        <div class="card-body">
            <form action="{{ route('user.assignRole') }}" method="POST">
             @csrf

            <div class="mb-3">
                    <label for="email" class="form-label">User Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">User Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Select Role</label>
                    <select name="role" class="form-select" required>
                        <option value="">-- Select Role --</option>
                        <option value="player">Player</option>
                        <option value="coach">Coach</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Assign Role</button>
            </form>
        </div>
    </div>

    {{-- Existing Roles Table --}}
    <h4>Existing Role Assignments</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Assigned Role</th>
            </tr>
        </thead>
        <tbody>
            {{-- Example static content; replace with dynamic roles --}}
            <tr>
                <td>john@example.com</td>
                <td>Coach</td>
            </tr>
            <tr>
                <td>alice@example.com</td>
                <td>Admin</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
