<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
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
    <div class="bg-white rounded-2xl shadow-md p-10 max-w-lg w-full text-center">
        <h2 class="text-2xl font-semibold mb-4">Thank You!</h2>
        <p class="text-gray-600">Your response has been recorded. Thank you for participating in the survey.</p>
    </div>
</main>

</body>
</html>
