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
    <div class="border border-gray-200 p-6 rounded-xl max-w-sm mx-auto mt-10">
        <form action="/clients" method="POST">
        
        <div class="mb-6">
            <label for="first_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">First Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="first_name" id="first_name" required>
            @error('first_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="last_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Last Name</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="last_name" id="last_name" required>
          @error('last_name')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="company_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Company Name</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="company_name" id="company_name" required>
          @error('company_name')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>
        
        <div class="mb-6">
          <label for="business_number" class="block mb-2 uppercase font-bold text-xs text-gray-700">Business Number</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="business_number" id="business_number" required>
          @error('business_number')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>
        
        <div class="mb-6">
          <label for="phone_number" class="block mb-2 uppercase font-bold text-xs text-gray-700">Phone Number</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="phone_number" id="phone_number" required>
          @error('phone_number')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>
        
        <div class="mb-6">
          <label for="cell_number" class="block mb-2 uppercase font-bold text-xs text-gray-700">Cell Number</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="cell_number" id="cell_number" required>
          @error('cell_number')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="carrier" class="block mb-2 uppercase font-bold text-xs text-gray-700">carrier</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="carrier" id="carrier" required>
          @error('carrier')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>
        
        <div class="mb-6">
          <label for="hst_number" class="block mb-2 uppercase font-bold text-xs text-gray-700">HST number</label>
          <input type="text" class="border border-gray-400 p-2 w-1/4" name="hst_number" id="hst_number" required>
          @error('hst_number')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>
        
        <div class="mb-6">
          <label for="website" class="block mb-2 uppercase font-bold text-xs text-gray-700">website</label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="website" id="website" required placeholder="www.example-website.com">
          @error('website')
            <p class="text-red-500 text-xs mt-2">{{ message }}</p>
          @enderror
        </div>

        <div class="mb-6">
            <label for="status" class="block mb-2 uppercase font-bold text-xs text-gray-700">status</label>
            <span class=" mr-1 uppercase font-bold text-xs text-green-500">Active</span><input type="radio" id="active" name="status" value="Active">
            <span class=" ml-5 mr-1 uppercase font-bold text-xs text-red-500">Inactive</span><input type="radio" id="inactive" name="status" value="Inactive">
            @error('status')
              <p class="text-red-500 text-xs mt-2">{{ message }}</p>
            @enderror
          </div>
        
        <div class="mb-1">
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-3 shadow-lg rounded hover:shadow">Submit</button>
        </div>
        
        </form>
    </div>
    <div class="mt-10 mb-10 mx-auto max-w-sm pl-6"><a href="/clients" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Go Back</a></div>
</body>

</html>