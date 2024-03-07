<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malam</title>
</head>
<body>
    @foreach($data_nama as $data)
    <p>{{  $data ["nama"]  }}</p>
    <p>{{  $data ["bulan"]  }}</p>
    @endforeach
</body>
</html>