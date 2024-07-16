<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard2</title>
</head>

<body>
    <h1>Dashboard 2</h1>
    @php
            $records = Session::get('uid');
            echo $records->name . '<br>';
            echo "<a href='dashboard1'>Dashboard1</a>";
          echo "<br>";
            echo "<a href='logout'>Logout</a>";
        
    @endphp
</body>

</html>
