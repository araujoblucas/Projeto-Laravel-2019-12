<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<form action="{{route('post_login')}}" method="post">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit">

    <br>

    @foreach ($errors->all() as $message)
        {{
            $message
        }}
    @endforeach


</form>
</body>
</html>
