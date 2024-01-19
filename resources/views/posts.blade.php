<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post View</title>
<link rel="stylesheet" href="/app.css">
    <!-- Add some basic styles for better presentation -->
 
</head>
<body>

    @foreach ($posts as $post)
        <a href="{{ url('/post', $post->id) }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <a href="/categories/{{$post->category->slug}}"><h3>{{$post->category->name}}</h3></a>
    @endforeach

</body>
</html>
