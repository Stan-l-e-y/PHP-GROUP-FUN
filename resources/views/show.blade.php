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
    <div class="mt-10 ml-5"><a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">Add Client</a></div>
    <br>
    <br>
    <br>
    {{$client}}

    {{$client->company_name}}
    <br>
    <br>
    <br>
    {{$notif}}
    <br>
    <br>
    <br>
    @foreach ($client->notifications as $notifi)

    {{$notifi}}

    @endforeach
</body>

</html>