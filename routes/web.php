<?php

use App\Http\Controllers\TesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\KelasController;

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

<<<<<<< HEAD
Route::get("/kelas", [KelasController::class, "kelas"]);

Route::get("/class", [ClassController::class, "class"]);
=======
Route::get("/tes", [TesController::class, "alia"]);
>>>>>>> fee5df1ff70335201f8eb36411abfd24b7155238
