<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1px>
    <tr>
       <th>Type de document</th>
        <th>titre du document</th>
        <th>description</th>
        <th>view</th>
        <th>Download</th>
    </tr>
    @foreach($data as $data)    
    <tr>
        <td>{{$data->filetype}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td><a href="{{url('/view',$data->id)}}">view</a></td>
        <td><a href="{{url('/download',$data->file)}}">Download</a></td>
    </tr>
    @endforeach

    </table>


</body>
</html>