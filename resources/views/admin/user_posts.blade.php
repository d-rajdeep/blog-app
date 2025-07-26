@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Posts by {{ $user->name }}</h3>

    @if ($user->posts->isEmpty())
        <div class="alert alert-info">This user has not submitted any blog posts yet.</div>
    @else
        <table class="table table-bordered shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Approved</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            @if ($post->is_approved)
                                <span class="badge bg-success">Approved</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending</span>
                            @endif
                        </td>
                        <td>{{ $post->created_at->format('d M, Y') }}</td>
                        <td>
                            <!-- View Button -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewPostModal{{ $post->id }}">View</button>

                            <!-- Approve Button -->
                            @if (!$post->is_approved)
                                <form action="{{ route('admin.post.verify', $post->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                </form>
                            @else
                                <span class="text-muted">No action needed</span>
                            @endif
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="viewPostModal{{ $post->id }}" tabindex="-1" aria-labelledby="viewPostModalLabel{{ $post->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="viewPostModalLabel{{ $post->id }}">{{ $post->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            {!! nl2br(e($post->content)) !!}
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
