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
    <h1 class="text-center">LIST ITEM BARANG</h1>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="image/pcb1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $barang["barang1"] }}</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin: 0 50px;">
                <img src="image/pcb4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $barang["barang2"] }}</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="image/pcb3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $barang["barang3"] }}</p>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>