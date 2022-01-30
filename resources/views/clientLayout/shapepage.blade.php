<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('selectshape')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="police">Police</label>
        <select name="police" id="police-select">
            <option value="timesNewRman">Times New Rman</option>
            <option value="arial">Arial</option>
            <option value="calibri">Calibri</option>
            <option value="cambria">Cambria</option>
        </select>
    </div>

    <div>
        <label for="taille">Taille de police:</label>
        <select name="taille" id="select-taille">
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>
    </div>

    <div>
        <label for="interligne">Interligne</label>
        <select name="interligne" id="select-interligne">
            <option value="1.25">1.25</option>
            <option value="1.5">1.5</option>
            <option value="1.75">1.75</option>
            <option value="2">2</option>
        </select>
    </div>
   <input type="submit">
</form>
</body>
</html>