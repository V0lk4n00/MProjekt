<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Quality Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow">
    <div class="w-full px-6 py-4 flex justify-between items-center">
        <span class="flex-1"></span>
        <a href="{{ route('index') }}" class="text-xl font-bold tracking-wide hover:text-blue-600 transition">Audio Quality Survey</a>
        <div class="flex-1 flex justify-end">
            <a href="{{ route('admin.index') }}" class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium px-4 py-2 rounded-lg transition">Admin</a>
        </div>
    </div>
</nav>

<main class="flex items-center justify-center mt-20">
    <div class="bg-white rounded-2xl shadow-md p-10 max-w-lg w-full">
        <h2 class="text-2xl font-semibold mb-4">
            Welcome
        </h2>
        <p class="text-gray-600 mb-4">
            Before you begin, please read the following instructions:
        </p>
        <ul class="list-disc list-inside text-gray-600 space-y-2 mb-8">
            <li>You will listen to 5 pairs of audio samples.</li>
            <li>For each pair, select which sample sounds better to you.</li>
            <li>Use headphones for the best experience.</li>
            <li>You can only submit the survey once.</li>
        </ul>
        <a href="{{ route('survey') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-xl transition">
            Start Survey
        </a>
    </div>
</main>

</body>
</html>
