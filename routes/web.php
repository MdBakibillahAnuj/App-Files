<?php

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\FrontendLogout;
use App\Http\Controllers\Frontend\PageControllerroller;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;


//Route::get('/', function () {
//    return view('frontend.index');
//});

//Frontend Pages routes
Route::get('/', [PageControllerroller::class,'indexHome'])->name('view.home');
Route::get('/all-menu', [PageControllerroller::class,'allMenu'])->name('view.menu');
Route::get('/about', [PageControllerroller::class,'aboutUs'])->name('view.about');
Route::get('/contact', [PageControllerroller::class,'contactUs'])->name('view.contact');
Route::get('/reservation', [PageControllerroller::class,'reserveTable'])->name('view.reservation');



// logout frontend
  Route::get('/logout',[FrontendLogout::class,'logout'])->name('logout');

//   admin logout
Route::get('/logout',[LogoutController::class,'logout'])->name('admin.logout');

Route::group(['prefix'=> 'admin', 'middleware'=>['admin']], function(){

    //  Category by admin
    Route::get('/category-view',[CategoryController::class,'View'])->name('view.category');
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::post('/store-category',[CategoryController::class,'storeCategory'])->name('store.category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update.category');
    Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');


    // food all route
    Route::get('/food-view',[FoodController::class,'viewFood'])->name('view.food');
    Route::get('/food-add',[FoodController::class,'addFood'])->name('add.food');
    Route::post('/food-store',[FoodController::class,'storeFood'])->name('store.food');
    Route::get('/edit-food/{id}',[FoodController::class,'editFood'])->name('edit.food');
    Route::post('/update-food/{id}',[FoodController::class,'updateFood'])->name('update.food');
    Route::get('/delete-food/{id}',[FoodController::class,'deleteFood'])->name('delete.food');



    // service all route
    Route::get('/service-view',[ServiceController::class,'viewService'])->name('view.service');
    Route::get('/service-add',[ServiceController::class,'addService'])->name('add.service');
    Route::post('/service-store',[ServiceController::class,'storeService'])->name('store.service');
    Route::get('/edit-service/{id}',[ServiceController::class,'editService'])->name('edit.service');
    Route::post('/update-service/{id}',[ServiceController::class,'updateService'])->name('update.service');
    Route::get('/delete-service/{id}',[ServiceController::class,'deleteService'])->name('delete.service');


    // Table all route
    Route::get('table-view', [TableController::class, 'viewTable'])->name('view.table');
    Route::get('table-add', [TableController::class, 'addTable'])->name('add.table');
    Route::post('table-store', [TableController::class, 'storeTable'])->name('store.table');
    Route::get('/edit-table/{id}',[TableController::class,'editTable'])->name('edit.table');
    Route::post('/update-table/{id}',[TableController::class,'updateTable'])->name('update.table');
    Route::get('/delete-table/{id}',[TableController::class,'deleteTable'])->name('delete.table');

});

//Reservation route
Route::get('/reserve-view', [ReservationController::class, 'viewReserve'])->name('view.reserve');
Route::get('/reserve-add', [ReservationController::class, 'addReserve'])->name('add.reserve');
Route::post('/reserve-store', [ReservationController::class, 'storeReserve'])->name('store.reserve');
Route::get('/edit-reserve/{id}', [ReservationController::class, 'editReserve'])->name('edit.reserve');
Route::post('/update-reserve/{id}', [ReservationController::class, 'updateReserve'])->name('update.reserve');
Route::get('/delete-reserve/{id}', [ReservationController::class, 'deleteReserve'])->name('delete.reserve');



// Cart all route
Route::get('/cart/product/view/{id}',[CartController::class,'ModalCartView'])->name('modalCart.productView');
Route::post('/cart/modal/insert',[CartController::class,'ModalCartInsert'])->name('insert.into.cart');
Route::get('/cart/remove/{id}',[CartController::class,'CartRemove'])->name('cart.remove');
Route::get('/cart/show',[CartController::class,'ShowCart'])->name('cart.show');
Route::post('/cart/update/item',[CartController::class,'CartItemUpdate'])->name('update.cartItem');
Route::get('/user/checkout',[CartController::class,'CheckOut'])->name('user.checkout');


















Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');



Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
