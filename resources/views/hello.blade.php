<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>hello it's me</h1>
    <a href="{{ route('student.details') }}">Student</a>
    <a href="{{route('profile', ['id' => 1, 'photos' => 'yes'])}}">User</a>
    <a href="{{route('admin.users')}}">Admin.user</a>
    <a href="{{route('aws')}}">aws</a>
</body>

</html>