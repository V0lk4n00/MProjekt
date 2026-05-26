<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Console</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow">
    <div class="w-full px-6 py-4 flex justify-between items-center">
        <span class="flex-1"></span>
        <a href="{{ route('index') }}" class="text-xl font-bold tracking-wide hover:text-blue-600 transition">Audio Quality Survey</a>
        <div class="flex-1 flex justify-end">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="text-sm bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium px-4 py-2 rounded-lg transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="max-w-5xl mx-auto mt-12 px-4">
    <h2 class="text-2xl font-semibold mb-6">Survey Responses</h2>

    @if ($responses->isEmpty())
        <div class="bg-white rounded-2xl shadow-md p-8 text-center text-gray-500">
            No responses yet.
        </div>
    @else
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Row 1</th>
                    <th class="px-6 py-4">Row 2</th>
                    <th class="px-6 py-4">Row 3</th>
                    <th class="px-6 py-4">Row 4</th>
                    <th class="px-6 py-4">Row 5</th>
                    <th class="px-6 py-4">Submitted at</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                @foreach ($responses as $response)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $response->id }}</td>
                        <td class="px-6 py-4">{{ $response->row_1 == 1 ? '1' : '2' }}</td>
                        <td class="px-6 py-4">{{ $response->row_2 == 1 ? '1' : '2' }}</td>
                        <td class="px-6 py-4">{{ $response->row_3 == 1 ? '1' : '2' }}</td>
                        <td class="px-6 py-4">{{ $response->row_4 == 1 ? '1' : '2' }}</td>
                        <td class="px-6 py-4">{{ $response->row_5 == 1 ? '1' : '2' }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $response->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
</main>

</body>
</html>
