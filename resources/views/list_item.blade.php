<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">LIST ITEM</h1>
    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <img src="image/pcb1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $barang["barang1"] }}</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/pcb2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $barang["barang2"] }}</p>
            </div>
        </div>
    </div>
</body>

</html>