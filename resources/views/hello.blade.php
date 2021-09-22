<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Page</title>
</head>
<body>
    <x-header data="my data" />
    <h1>Hello {{$user}}</h1>
    @if (1==1)
    <h1>oiafnsdn</h1>
    @endif
    <x-testFooter />
</body>
</html>