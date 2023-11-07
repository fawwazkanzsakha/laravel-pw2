<?php
use App\Http\Controllers\fakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('fakultas',fakultasController::class);
Route::resource('prodi',ProdiController::class);
Route::resource('mahasiswa',MahasiswaController::class);


Route::get('/test',function(){
   return "test";
});

//Route::get('test', function() {
    //return "halo";
//});

// Route::get('/mhs',function(){
//     $data =[
//         ["npm" => 2226250080,"nama"=> "Fawwaz"],
//         ["npm" => 2226250088,"nama"=> "Ahmad"]
//     ];
//     return view('mahasiswa.index')->with('mahasiswa',$data);
// });
