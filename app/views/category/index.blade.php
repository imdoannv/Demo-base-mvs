<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr >
            <td>ID</td>
            <td>Tên Danh Mục</td>

        </tr>

        @foreach($categories as $pr)
        <tr>
            <td> {{$pr -> id}}</td>
            <td>{{$pr ->tendm}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>
