<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles-responsive.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="post" role="search">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-logout">Logout</button>
    </form>

    <h1>Welcome {{ Auth::user()->full_name }}</h1>
</body>
</html>
