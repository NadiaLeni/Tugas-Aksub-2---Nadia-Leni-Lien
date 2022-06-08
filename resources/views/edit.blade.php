<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <div class="addproduct">
        <div class="heading">
            <h1>Edit Barang</h1>
        </div>
        <div class="createform">
            <form method="POST" action="{{route('inventory.update', ['id' => $id])}}">
                @csrf
                @method('patch')
                <div class="satu">
                    <label for="title">Nama Barang</label>
                    <input type="text" id="title" name="title" value="{{$inventory->title}}">
                </div>
                <div class="dua">
                    <label for="amount">Banyak Barang</label>
                    <input type="number" id="amount" name="amount" value="{{$inventory->amount}}">
                </div>
                <input type="submit" class="tombol" value="KIRIM">
            </form>
        </div>
    </div>
</body>
</html>