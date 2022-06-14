<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <div class="heading">
        <h1>List Barang</h1>
    </div>
    <div class="List">
        @foreach ($inventories as $inventory)
        <p>{{$inventory->title}}</p>
        @endforeach
    </div>
</body>
</html>