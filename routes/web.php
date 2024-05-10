<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/wc', function () {
    return view('welcome');

});

//Start of Frontend Routes

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirect']);

Route::post('/table_reservation', [HomeController::class,'table_reservation']);//Store Table Reservation Form

Route::post('/add_to_cart/{id}', [HomeController::class,'add_to_cart']);//Store Add to Cart Form

Route::get('/show_cart/{id}', [HomeController::class,'show_cart']);// Show Cart Items

Route::get('/remove_cart_item/{id}', [HomeController::class,'remove_cart_item']);//Remove Cart Items

Route::post('/order_con_details', [HomeController::class,'order_con_details']);//Store Add to Cart Form


// End of Frontend Routes
// =========================================================================
// Start Admin Routes

Route::get('/view_users', [AdminController::class, 'users']); //todo Users

Route::get('/delete_user/{id}', [AdminController::class,'delete_user']); //todo Delete Users

Route::get('/view_food_menus', [AdminController::class, 'food_menu']); //todo Food Menus

Route::post('/upload_food_menu', [AdminController::class,'upload_food_menu']);//todo Store Food Menus Form

Route::get('/delete_food_menu/{id}', [AdminController::class,'delete_food_menu']); //todo Delete Food Menu Items

Route::get('/edit_food_menu/{id}', [AdminController::class,'edit_food_menu']); //todo Edit Food Menu Items

Route::post('/update_food_menu/{id}', [AdminController::class,'update_food_menu']);//todo Update and Store Food Menus Form

Route::get('/view_reservations', [AdminController::class, 'reservation']); //todo Reservations

Route::get('/view_chefs', [AdminController::class, 'chefs']); //todo Chefs

Route::post('/upload_chef', [AdminController::class,'upload_chef']);//todo Store Chefs Info Form

Route::get('/delete_chef/{id}', [AdminController::class,'delete_chef']); //todo Delete Chef

Route::get('/edit_chef/{id}', [AdminController::class,'edit_chef']); //todo Edit Chef Info

Route::post('/update_chef/{id}', [AdminController::class,'update_chef']);//todo Update and Store Chef Info Form

Route::get('/view_orders', [AdminController::class, 'orders']); //todo Orders

Route::get('/delete_order/{id}', [AdminController::class,'delete_order']); //todo Delete Order

Route::get('/search', [AdminController::class, 'search']); //todo Search Form





// End of Admin Routes

// ==============================================================================

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
