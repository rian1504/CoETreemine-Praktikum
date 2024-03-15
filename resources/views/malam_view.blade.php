<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malam</title>
</head>
<body>
   @foreach ($data_barang as $data)
   <p>{{ $data ["nama"] }}</p>
   <p>{{ $data ["merk"] }}</p>
   @endforeach
</body>
</html>