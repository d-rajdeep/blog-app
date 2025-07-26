<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }} | My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2>{{ $post->title }}</h2>
        <p class="text-muted">By {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</p>
        <hr>
        <p>{!! nl2br(e($post->content)) !!}</p>
        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">← Back to Home</a>
    </div>
</body>
</html>
