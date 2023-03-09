<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('Pages/index');
});
Route::get('/about', function () {
    return view('Pages/About');
});
Route::get('/AccountPage', function () {
    return view('Pages/AccountPage');
});
Route::get('/blog', function () {
    return view('Pages/blog');
});
Route::get('/cart', function () {
    return view('Pages/cart');
});
Route::get('/checkout', function () {
    return view('Pages/checkout');
});
Route::get('/contact', function () {
    return view('Pages/contact');
});
Route::get('/emptycart', function () {
    return view('Pages/emptycart');
});
Route::get('/errorpage', function () {
    return view('Pages/errorpage');
});
Route::get('/loginn', function () {
    return view('Pages/login');
});
Route::get('/privacyPolicy', function () {
    return view('Pages/privacyPolicy');
});
Route::get('/produitDetails', function () {
    return view('Pages/produitDetails');
});
Route::get('/shop', function () {
    return view('Pages/shop');
});
Route::get('/shopCategories', function () {
    return view('Pages/shopCategories');
});
Route::get('/thankyou', function () {
    return view('Pages/thankyou');
});
Route::get('/wishlist', function () {
    return view('Pages/wishlist');
});
Route::get('/SingleBlog1', function () {
    return view('Pages/SingleBlogPages/SingleBlog1');
});
Route::get('/SingleBlog2', function () {
    return view('Pages/SingleBlogPages/SingleBlog2');
});
Route::get('/SingleBlog3', function () {
    return view('Pages/SingleBlogPages/SingleBlog3');
});
Route::get('/SingleBlog4', function () {
    return view('Pages/SingleBlogPages/SingleBlog4');
});
Route::get('/SingleBlog5', function () {
    return view('Pages/SingleBlogPages/SingleBlog5');
});
Route::get('/SingleBlog6', function () {
    return view('Pages/SingleBlogPages/SingleBlog6');
});
Route::get('/SingleBlog7', function () {
    return view('Pages/SingleBlogPages/SingleBlog7');
});
Route::get('/SingleBlog8', function () {
    return view('Pages/SingleBlogPages/SingleBlog8');
});
Route::get('/SingleBlog9', function () {
    return view('Pages/SingleBlogPages/SingleBlog9');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
