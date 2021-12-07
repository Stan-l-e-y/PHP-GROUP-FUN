
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="h-screen mt-10">
    <div class="flex items-center justify-between md:flex-col">
        <div class="flex h-28 md:w-1/6 self-end">
            <div class="mr-5">Username</div>
            <div>Log Out</div>
        </div>
        <div class="max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">

                <div class="mb-6">
                  <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                  <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>
                  @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ message }}</p>
                  @enderror
                </div>
                
            </form>
        </div>
    </div>
</body>

</html>
