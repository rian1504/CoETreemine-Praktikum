<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
</head>
<body>
    @foreach($data_nama as $data)
        <h1>{{ $data["nama"] }}</h1>
        <h1>{{ $data["kelas"] }}</h1>
        <br>
    @endforeach
</body>
</html>