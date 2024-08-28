<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <!-- Include Bootstrap or Tailwind CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Post Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['body'] }}</p>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
