<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$data->name}}
    {{$data->description}}

    <iframe height="600" width="600" src="/assets/{{$data->file}}"></iframe>
</body>
</html>