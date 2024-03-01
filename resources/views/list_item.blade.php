<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST ITEM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">LIST ITEM BARANG</h1>
    <div class="container mt-3">
        <div class="row justify-content-center">
            @foreach($dataBarang as $data)
            <div class="card mx-2 mt-2" style="width: 18rem;">
                <img src="image/portofolio/{{ $data['gambar'] }}" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <p class="card-text">{{ $data['nama_barang'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>