<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('groups.index') }}">Groups</a></li>
            <li><a href="{{ route('students.index') }}">Student</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
