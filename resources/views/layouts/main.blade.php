<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col bg-green-50">
<div class="nav flex justify-around items-center p-4 bg-yellow-100 shadow-md">
    <a href="{{route("home")}}" class="text-gray-800 font-semibold hover:text-gray-600">Teacher Dashboard</a>
</div>
    @yield('main-section')
</body>
</html>