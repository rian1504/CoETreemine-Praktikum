<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->


<body>
    <div class="kontainer">
        <div class="halaman-login">
            <div class="judul">
                <h1>Masuk ke Akun Anda</h1>
            </div>
            <form action="../database/login.php" method="POST" class="form-login-daftar">
                <div class="input-kontainer">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-kontainer">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
               
                <button type="submit">Masuk</button>
                <p>Tidak Punya Akun? <a href="../pembeli/daftar.php"><span>Buat Akun</span></a></p>
            </form>
        </div>
    </div>

</body>
</html>