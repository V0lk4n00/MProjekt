<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>
<h1>Admin Login</h1>

@if ($errors->any())
    <p>{{ $errors->first('email') }}</p>
@endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
