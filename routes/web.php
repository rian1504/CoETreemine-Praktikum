<?php

use App\Http\Controllers\LaptopController;
use App\Http\Controllers\MalamController;
use App\Http\Controllers\TesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\KikiController;
use App\Http\Controllers\AliaController;
use App\Http\Controllers\SarahController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\VelaController;
use App\Http\Controllers\KakakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/welcome', function () {
    return view("welcome");
});
Route::get('users/{id}', function ($id) {
    return "User dengan ID " . $id;
});
Route::prefix("admin")->group(function () {
    Route::get("/dashboard", function () {
        return "Admin Dashboard";
    });

    Route::get("/users", function () {
        return "Admin Users";
    });
});
// Route::get("/listbarang/{id}/{nama}", function ($id, $nama) {
//     return view("list_barang", compact("id", "nama"));
// });
Route::get("/listbarang/{id}/{nama}", [ListBarangController::class, "tampilkan"]);


Route::get("/login", [LoginController::class, "index"]);


Route::get("/harga", [HargaController::class, "tes"]);

Route::get("/kelas", [KelasController::class, "kelas"]);

Route::get("/class", [ClassController::class, "class"]);

Route::get("/mahasiswa", [KikiController::class, "kiki"]);
Route::get("/alia", [AliaController::class, "alia"]);
Route::get("/sarah", [SarahController::class, "sarah"]);

Route::get("/malam", [MalamController::class, "malam"]);

Route::get("/laptop", [LaptopController::class, "laptop"]);

Route::get("/host", [HostController::class, "host"]);

Route::get("/pagi", [VelaController::class, "pagi"]);

Route::get("/kakak", [KakakController::class, "kakak"]);