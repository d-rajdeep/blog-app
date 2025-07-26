@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>{{ $post->title }}</h2>
    <p><strong>Status:</strong> {{ $post->is_published ? 'Published' : 'Pending' }}</p>
    <hr>
    <div>
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>
@endsection
