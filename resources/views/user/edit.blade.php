@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Blog Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Fix the following issues:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea class="form-control" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Post</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
