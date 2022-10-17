<?php
use Illuminate\Support\Facades\Route;
/* new get */
Route::get('/categories/search', [App\Http\Controllers\PostsController::class, 'search'])->name('search');
Route::get('/categories/{categories}', [App\Http\Controllers\PostsController::class, 'categories'])->name('post.categories');
Route::get('/categories/{categories}/{categories2}', [App\Http\Controllers\PostsController::class, 'categories2'])->name('post.categorie');

Route::get('/favorite/myfavorite', [App\Http\Controllers\FavController::class, 'favorite'])->name('other.fav');
Route::get('/control', [App\Http\Controllers\ControlController::class, 'index'])->name('other.control');
Route::get('/order', [App\Http\Controllers\BasketController::class, 'order'])->name('other.order');
Route::get('/finalorder', [App\Http\Controllers\ControlController::class, 'order'])->name('other.finalorder');
Route::get('/deletedOrder', [App\Http\Controllers\ControlController::class, 'deletedOrder'])->name('other.deletedOrder');
Route::get('/completeOrder', [App\Http\Controllers\ControlController::class, 'completeOrder'])->name('other.completeOrder');
Route::get('/waitingOrder', [App\Http\Controllers\ControlController::class, 'waitingOrder'])->name('other.waitingOrder');
/* basket */
Route::get('/basket', [App\Http\Controllers\BasketController::class, 'basket'])->name('other.basket');
Route::delete('/basket/{id}',[App\Http\Controllers\BasketController::class, 'destroy'])->name('other.destroy');
/* ajax */
Route::delete('/ajaxdel/{id}',[App\Http\Controllers\AjaxController::class, 'destroy']);
Route::post('/order',  [App\Http\Controllers\OrderController::class, 'order']);
Route::post('/coupon',  [App\Http\Controllers\CouponController::class, 'coupon']);
Route::post('/addcoupon',  [App\Http\Controllers\CouponController::class, 'addcoupon']);
Route::get('/couponview',  [App\Http\Controllers\CouponController::class, 'couponview'])->name('couponview');

Route::post('/rating',  [App\Http\Controllers\StarsController::class, 'rating']);
Route::post('/ajax/{id}',  [App\Http\Controllers\AjaxController::class, 'store']);
Route::post('/ajax2/{id}',  [App\Http\Controllers\AjaxController::class, 'CheckAddandDelete']);
Route::post('/check/{id}',  [App\Http\Controllers\AjaxController::class, 'checkbasket']);




Route::post('/addeditdelete/{id}',  [App\Http\Controllers\ControlController::class, 'addeditdelete'])->name('addeditdelete');



/* fav */
Route::post('/ajaxfav/{id}',  [App\Http\Controllers\AjaxController::class, 'storefav']);
Route::delete('/ajaxdelfav/{id}',[App\Http\Controllers\AjaxController::class, 'destroyfav']);
Route::delete('/fav/{id}',[App\Http\Controllers\FavController::class, 'destroy'])->name('fav.destroy');
Route::post('/ajax2fav/{id}',  [App\Http\Controllers\AjaxController::class, 'CheckAddandDeletefav']);
/* search */
Route::post('/search', [App\Http\Controllers\AjaxController::class, 'search']);
/*  get old */
Route::get('/', function () {
  //  return view('welcome');
  return redirect('/post');
});
Route::get('/post', [App\Http\Controllers\PostsController::class, 'index'])->name('post.index');
/* Route::get('/search', [App\Http\Controllers\OtherController::class, 'search_view'])->name('other.search');
 */
Route::get('/create',[App\Http\Controllers\PostsController::class, 'create'])->name('post.create')->middleware('auth');
Route::get('/post/{id}',[App\Http\Controllers\PostsController::class, 'show'])->name('post.show');
/* oprations old */
Route::post('/post/{id}',[App\Http\Controllers\PostsController::class, 'update'])->name('post.update')->middleware('auth');
Route::post('/post',[App\Http\Controllers\PostsController::class, 'store'])->name('post.store');
Route::delete('/post/{id}',[App\Http\Controllers\PostsController::class, 'destroy'])->name('post.destroy');
//Route::group(['middleware' => ['admin']], function () {
Route::get('/post/edit/{id}',[App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
//->middleware('admin');
//});
/* auth */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');