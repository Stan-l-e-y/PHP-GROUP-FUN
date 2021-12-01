<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>
    @foreach($posts as $post)
    <h2 class="text-xl font-bold text-gray-900">{{$post->title}}</h2>

    <p></p>
    @endforeach
    {{dd(Auth::user())}}
</body>

</html>