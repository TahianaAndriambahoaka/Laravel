<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Page</title>
</head>
<body>
    <form action="traitementForm" method="POST">
        @csrf
        <label>Login</label>&nbsp<input type="text" name="login" placeholder="login"/><br><br>
        <label>Password</label>&nbsp<input type="password" name="password" placeholder="password"/><br><br>
        <button type="sumit">Login</button>
    </form>
</body>
</html>