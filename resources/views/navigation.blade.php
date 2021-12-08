<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="h-screen mt-10">
    <div class="flex items-center justify-between md:flex-col">
        <div class="flex h-28 md:w-1/6 self-end">
            @auth
            <div class="mr-5 ">Welcome, <span class="font-bold">{{ auth()->user()->first_name }}</span></div>
            <div>
                <form action="/logout" method="POST" class="font-semibold text-blue-500">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
            @endauth
        </div>
        <div class="mb-1/12 font-bold text-xl">Navigation Bar</div>
        <div class="bg-gray-500 bg-opacity-25 flex flex-col h-auto items-center w-1/6 rounded-md border-solid border-gray-400 border-2">
            <a href="/clients" class="bg-blue-500 hover:bg-blue-700 px-10 text-white font-bold py-2 rounded mt-10">Client Manager</a>
            <a href="/notifications" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10 ">Notification Manager</a>
            <a href="/clientnotifications" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10 ">Client Event Manager</a>
            <a href="/users" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10 mb-10">Emplyoee Manager</a>
        </div>
    </div>

    @if (session()->has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 8000)" x-show="show" class="fixed bottom-5 right-5 bg-blue-500 py-2 px-4 rounded-xl text-sm">
          <p>{{ session('success') }}</p>
          
        </div>
      @endif
</body>

</html>