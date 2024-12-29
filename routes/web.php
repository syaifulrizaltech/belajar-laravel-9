<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentContoller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
//     return 9*9;
// });

// Route::get('/contact', function(){
//     return view('contact', ['name' => 'M. Saiful Rizal', 'phone' => '08123456789']);
// });

// cara simpel
// Route::view('/contact', 'contact', ['name' => 'M. Saiful Rizal', 'phone' => '08123456789']);

// Redirect mendefinisikan rute yang mengalihkan ke URI lain
// Route::redirect('/contact', '/contact-us');
// end


// Parameter mengambil segmen URI dalam rute Anda. Misalnya, Anda mungkin perlu mengambil ID pengguna dari URL. 
// Route::get('/product', function(){
//     return 'product';
// });

// Route::get('/product/{id}', function($id){
//     // return 'Ini Adalah Product Dengan ID ' .$id;
//     return view('product.detail', ['id' => $id]);
// });
// end


// Prefix dapat digunakan untuk memberi awalan pada setiap rute dalam grup dengan URI tertentu.
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
//     Route::get('/profil-admin', function(){
//         return 'Profil Admin';
//     });
    
//     Route::get('/about-admin', function(){
//         return 'About Admin';
//     });
    
//     Route::get('/contact-admin', function(){
//         return 'Contact Admin';asd
//     });
// });
// end

Route::get('/', function () {
    return view('home', [
        'name' => 'M. Saiful Rizal', 
        'role' => 'man',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

Route::get('/students', [StudentContoller::class, 'index']);