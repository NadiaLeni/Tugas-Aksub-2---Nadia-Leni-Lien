<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <div class="addproduct">
        <div class="heading">
            <h1>Buat Barang Baru</h1>
        </div>
        <div class="createform">
            <form method="POST" action="{{route('inventory.create')}}">
                @csrf
                <div class="satu">
                    <label for="title">Nama Barang</label>
                    <input type="text" id="title" name="title">
                </div>
                <div class="dua">
                    <label for="amount">Banyak Barang</label>
                    <input type="number" id="amount" name="amount">
                </div>
                <div class="tiga">
                    <label for="name">Kategori</label>
                    <select name="category_id" id="name">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="tombol" value="KIRIM">
            </form>
        </div>
    </div>
</body>
</html>