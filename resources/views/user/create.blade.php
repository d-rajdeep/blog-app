@extends('layouts.app') {{-- Optional: Only if using layouts --}}

@section('content')
<div class="container mt-5">
    <h2>Create New Blog Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea class="form-control" name="content" rows="5" placeholder="Write your blog here..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit for Review</button>
    </form>
</div>
@endsection
