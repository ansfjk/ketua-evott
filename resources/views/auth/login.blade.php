
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Votely</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
  <div class="bg-white rounded-2xl shadow-lg p-10 w-96">
    <h2 class="text-center text-lg font-semibold mb-6">Login</h2>

    <form>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input type="email" id="email" class="w-full px-4 py-2 rounded-md bg-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div class="mb-6">
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <input type="password" id="password" class="w-full px-4 py-2 rounded-md bg-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <button type="submit" class="w-full bg-blue-800 hover:bg-blue-900 text-white py-2 rounded-md transition-colors mb-2">
        Submit
      </button>

      <p class="text-center text-sm text-gray-600 hover:underline cursor-pointer">Forgot Password ?</p>
    </form>

    <div class="mt-10 flex flex-col items-center">
      <img src="{{asset('storage/asset/logo-teks-bawah.jpg')}}" alt="Logo" class="w-20 h-20 mb-1" />
    </div>
  </div>
</body>
</html>
