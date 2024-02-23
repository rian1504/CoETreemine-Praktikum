<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

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

</div>
