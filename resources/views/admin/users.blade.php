@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">All Users</h2>

        @if ($users->isEmpty())
            <div class="alert alert-info">No registered users found.</div>
        @else
            <table class="table table-bordered table-striped shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Total Posts</th>
                        <th>Registered On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->posts_count }}</td>
                            <td>{{ $user->created_at->format('d M, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.user.posts', $user->id) }}" class="btn btn-info btn-sm">View
                                    Posts</a>
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="confirmDelete({{ $user->id }}, '{{ $user->name }}')">
                                    Remove User
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <form id="deleteUserForm" method="POST" action="{{ route('admin.user.delete') }}" style="display:none;">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" id="deleteUserId">
    </form>

    <script>
        function confirmDelete(id, name) {
            if (confirm(`Are you sure you want to remove user "${name}"? This action cannot be undone.`)) {
                document.getElementById('deleteUserId').value = id;
                document.getElementById('deleteUserForm').submit();
            }
        }
    </script>
@endsection
