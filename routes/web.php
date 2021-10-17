<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Models\Anggota; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('anggota', 'AppController');

Route::get('/dashboard', function () {
    $data['anggotas'] = Anggota::paginate(4); //anggota = ke view
    return view('dashboard', $data);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
