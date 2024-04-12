<!-- resources/views/posts/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="center tables">
<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary return">Discard & Return</a>
</form>
</body>
</html>