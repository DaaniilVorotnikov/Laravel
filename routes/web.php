<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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


// // Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/about', [ProductsController::class, 'about']);

// // Pattern is integer
// Route::get('/products/{name}/{id}', 
//     [ProductsController::class, 'show']) -> where([
//         'name' => '[a-zA-Z]+',
//         'id' => '[0-9]+'
//     ]);

Route::get('/products',
[ProductsController::class, 'index'])->name('products');

//Before Laravel 8
//Route::get('/products', 'ProductsController@index');


//Route that sends back
// Route::get('/', function () {
//     return view('home');
// });

// //Route to users - string
// Route::get('/users', function (){
//     return 'Welcome to the users page';
// });

// //Route to users - Array
// Route::get('/users', function(){
//     return ['PHP', 'HTML', 'Laravel'];
// });

// Route::get('/users', function(){
//     return response() -> json([
//         'name' => 'Dany',
//         'course' => 'Laravel Beginners To Advanced'
//     ]);
// });


// Route::get('/users', function(){
//     return redirect('home');
// });


//firstproject.com == /
//firstproject.com/users == /users 