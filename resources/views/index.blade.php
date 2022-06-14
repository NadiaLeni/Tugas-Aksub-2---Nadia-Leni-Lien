<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Inventory</title>
</head>
<body>
    <div class="Heading">
        <h1>List Barang</h1>
        <a href="{{route('inventory.add')}}" class="add" type="submit">Tambah Barang</a>
    </div>

    <div class="List">
        <h1>Berikut List Barang</h1>
        
        <div class="listbarang">
            @foreach ($inventories as $inventory)
            <div class="card">
                <h3>{{$inventory->title}} - <a href="{{"/{$inventory->category_id}/show"}}">{{$inventory->category->name}}</a></h3>
                <p>Banyak barang: {{$inventory->amount}}</p>
                <div class="tombol">
                    <form method="post" action="{{route('inventory.delete', ['id' => $inventory->id])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="hapus">Hapus</button>
                    </form>
                    <a href="{{route('inventory.edit', ['id' => $inventory->id])}}" class="edit">Edit</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>