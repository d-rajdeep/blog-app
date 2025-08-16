@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Welcome, {{ Auth::user()->name }}</h2>

    {{-- Profile Section --}}
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    Your Profile
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email ?? 'N/A' }}</p>
                    <p><strong>Total Posts:</strong> {{ $posts->count() }}</p>
                    <p><strong>Member Since:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary btn-sm">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Posts Section --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Your Blog Posts</h4>
        <a href="{{ route('post.create') }}" class="btn btn-primary">+ New Blog Post</a>
    </div>

    @if ($posts->isEmpty())
        <div class="alert alert-info">You have not written any blog posts yet.</div>
    @else
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th style="width: 200px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            @if ($post->is_approved)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending Approval</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                            @if (!$post->is_approved)
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            @endif
                            <!-- Delete Button (opens modal) -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $post->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="confirmDeleteModal{{ $post->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $post->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="confirmDeleteLabel{{ $post->id }}">Confirm Deletion</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete this post?<br>
                            <strong>{{ $post->title }}</strong>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('post.delete', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
