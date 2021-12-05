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
    {{$client}}

    <form action="/clients/{{ $client->id }}" method="POST">
    
        @csrf
        @method('DELETE')
        <button class="bg-red-500 tracking-wide ml-5 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
    </form>
</body>

</html>