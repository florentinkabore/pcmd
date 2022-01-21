<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('uploadfile')}}" method="post" enctype="multipart/form-data">
        @csrf
    <select name="filetype" id="select-filetype">
        <option value="curriculum-vitae">curriculum-vitae</option>
        <option value="memoire">memoire</option>
        <option value="lettre_motivation">lettre_de_motivation</option>
        <option value="demande_aide">demande_aide</option>
    </select>
    <input type="text" name="name" placeholder="product name">
    <input type="text" name="description" placeholder="product description">
    <input type="file" name="file" placeholder="choose file">
    <input type="submit" >
    </form>
</body>
</html>