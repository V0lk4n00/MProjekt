<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow">
    <div class="w-full px-6 py-4 flex justify-between items-center">
        <span class="flex-1"></span>
        <a href="{{ route('index') }}" class="text-xl font-bold tracking-wide hover:text-blue-600 transition">Audio Quality Survey</a>
        <div class="flex-1"></div>
    </div>
</nav>

<main class="flex items-center justify-center mt-20">
    <div class="bg-white rounded-2xl shadow-md p-10 max-w-md w-full">
        <h2 class="text-2xl font-semibold mb-6">Admin Login</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded-xl mb-6">
                {{ $errors->first('email') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" name="password"
                       class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-xl transition">
                Login
            </button>
        </form>
    </div>
</main>

</body>
</html>
