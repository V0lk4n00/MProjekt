<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Console</title>
</head>
<body>
<h1>Survey Responses</h1>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

@if ($responses->isEmpty())
    <p>No responses yet.</p>
@else
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Row 1</th>
            <th>Row 2</th>
            <th>Row 3</th>
            <th>Row 4</th>
            <th>Row 5</th>
            <th>Submitted at</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($responses as $response)
            <tr>
                <td>{{ $response->id }}</td>
                <td>{{ $response->row_1 == 1 ? 'A' : 'B' }}</td>
                <td>{{ $response->row_2 == 1 ? 'A' : 'B' }}</td>
                <td>{{ $response->row_3 == 1 ? 'A' : 'B' }}</td>
                <td>{{ $response->row_4 == 1 ? 'A' : 'B' }}</td>
                <td>{{ $response->row_5 == 1 ? 'A' : 'B' }}</td>
                <td>{{ $response->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
</body>
</html>
