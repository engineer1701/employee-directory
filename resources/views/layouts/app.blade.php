<!DOCTYPE html>
<html>
<head>
    <title>Employee Directory</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        nav { background: #333; padding: 10px; margin-bottom: 20px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #333; color: white; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('employees.index') }}">Employee Directory</a>
        <a href="{{ route('employees.create') }}">Add Employee</a>
    </nav>
    @yield('content')
</body>
</html>