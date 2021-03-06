<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BrandController;
use App\Http\Controllers\Home\ChannelController;
use App\Http\Controllers\Home\CmsController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\CustomerController;
use App\Http\Controllers\Home\DigitalController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\LocalizationController;
use App\Http\Controllers\Home\PageController;
use App\Http\Controllers\Home\PostController;
use App\Http\Controllers\Home\WebsiteController;
use Illuminate\Support\Facades\Auth;
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
Route::get('info', function() { phpinfo(); });

Route::get('', [HomeController::class, 'index'])->name('index');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about-us');
Route::get('{news}/{post:slug}', [PostController::class, 'detail'])->where('news', 'news|tin-tuc');
Route::get('tin-tuc', [PostController::class, 'index'])->where('news', 'news|tin-tuc')->name('list-post');
Route::get('lien-he', [ContactController::class, 'index'])->where('contact', 'contact|lien-he')->name('index-contact');
Route::get('dich-vu/{parentSlug}/{subSlug}', [HomeController::class, 'services'])->name('service-detail');;
Route::post('/lien-he', [ContactController::class, 'createContact'])->where('contact', 'contact|lien-he')->name('create-contact');

Route::post('cms', [CmsController::class, 'index']);

Route::get('{locale}', [LocalizationController::class, 'set'])->name('locale')->where('locale', 'en|vi');
Route::get('{provider}/login', [LoginController::class, 'redirectToProvider'])->name('social');
Route::get('{provider}/callback', [LoginController::class, 'handleProviderCallback']);
Auth::routes(['register' => false, 'reset' => false, 'verify' => true]);

Route::fallback(function () {
    return redirect('/');
});

// Route::get('key', [ChanelController::class, 'getKey']);
