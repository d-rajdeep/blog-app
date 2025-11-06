@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>{{ $post->title }}</h2>
    <p><strong>Status:</strong> @if ($post->is_approved)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending Approval</span>
                            @endif</p>
    <hr>
    <div>
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>
@endsection
