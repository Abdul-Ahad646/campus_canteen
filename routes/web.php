<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\FronEndCategoryController;
use App\Http\Controllers\AddCardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;


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

//forntend

Route::get('/', function () {
    return view('welcome');
})->name('home_page');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


 Route::get('/dashboard', [FronEndCategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {
    Route::get('/category/product/{id}', [FronEndCategoryController::class, 'seeProduct'])->name('category.filter');
    Route::post('add/card/store', [AddCardController::class, 'store'])->name('add.card.store');
    Route::get('addcard/delete/{id}', [AddCardController::class, 'delete'])->name('addcard.delete');
    Route::get('product-order', [AddCardController::class, 'checkout'])->name('product.checkout');
});
Route::get('/product_category', function () {
    return redirect->view('dashboard');
})->middleware(['auth', 'verified'])->name('product_category');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//forntend end


// admin side


Route::get('admin',function(){
    return view('admin/dashboard');
})->name('admin/dashboard');
//product

Route::get('/create', [ProductController::class, 'create'])->name('admin.create');
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.index');
Route::post('/admin/product', [ProductController::class, 'store'])->name('admin.store');
Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.edit');
Route::put('/admin/product/{product}/update', [ProductController::class, 'update'])->name('admin.update');
Route::delete('/admin/product/{product}/destroy', [ProductController::class, 'destroy'])->name('admin.destroy');

//category
Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::post('/admin/category', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{category}/update', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy');


//order
Route::get('/admin/order-list', [OrderListController::class, 'list'])->name('admin.order.list');




//admin side end
// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END