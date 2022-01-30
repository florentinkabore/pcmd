<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shape</title>
</head>
<body>
    <table border=1px>
    <tr>
        <th>police</th>
        <th>taille-police</th>
        <th>interligne</th>
        
    </tr>
    @foreach($data as $data)    
    <tr>
        <td>{{$data->police}}</td>
        <td>{{$data->taille}}</td>
        <td>{{$data->interligne}}</td>
        
    </tr>
    @endforeach

    </table>


</body>
</html>