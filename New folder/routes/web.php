<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\slideshowcontroller;
use App\Http\Controllers\serviecontroller;
use App\Http\Controllers\propertycontroller;

use App\Http\Controllers\teamcontroller;

use App\Http\Controllers\contactcontroller;

use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\singlepagecontroller;   

use App\Http\Controllers\propertygridcontroller;   
use App\Http\Controllers\contactpagecontroller;    
use App\Http\Controllers\aboutcontroller;   
use App\Http\Controllers\aboutpagecontroller;    
use App\Http\Controllers\servicepagecontroller;  
use App\Http\Controllers\sendmessagecontroller;
use App\Http\Controllers\showmessage;   
use App\Http\Controllers\serachcontroller;   
use App\Http\Controllers\sitedescriptioncontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\translatecontroller;
use App\Http\Controllers\sendcommentcontroller;  
use App\Http\Controllers\admincommentcontroller;
use App\Http\Controllers\servcontroller;
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




//Route::get('/Arp', function () {
  //  return view('BICTSOFT.index');
//});







Route::get('/blog-grid', function () {
    return view('BICTSOFT.blog-grid');
});




Route::get('/blog-single', function () {
    return view('BICTSOFT.blog-single');
});

Route::get('/loginpro', function () {
 return view('whatsapp');
});




Route::get('/', [indexcontroller::class, 'index']);
Route::get('/property-single/{id}', [singlepagecontroller::class, 'index']);
Route::get('/property-grid', [propertygridcontroller::class, 'index']);
Route::get('/contactpage', [contactpagecontroller::class, 'index'])->name('BICTSOFT.contact');
Route::get('/aboutpage', [aboutpagecontroller::class, 'index']);
Route::get('/servicepage/{id}', [servicepagecontroller::class, 'index']);
Route::post('/sendmessagepage', [sendmessagecontroller::class, 'index'])->name('sendmessagepage');




Route::resource('sendmcomment', sendcommentcontroller::class)->name('*', 'sendmcomment');







Route::any('/serachpage', [serachcontroller::class, 'index'])->name('serachpage');
Route::get('/locale/{locale}', [translatecontroller::class, 'index'])->name('locale');






Auth::routes(['verify' => true]);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')->middleware('Is_Admin');
//Route::resource('/admin/books', Usercontroller::class)->name('books')->middleware('Is_Admin');

//Route::resource('books', BooksController::class)->name('*','books');

//Route::middleware(['Auth'])->group(function(){

Route::resource('/CRUD', CRUD::class)->middleware('Is_Admin');

Route::resource('slideshow', slideshowcontroller::class)->middleware('Is_Admin');

Route::resource('service', serviecontroller::class)->middleware('Is_Admin');

Route::resource('property', propertycontroller::class)->middleware('Is_Admin');

Route::resource('team', teamcontroller::class)->middleware('Is_Admin');

Route::resource('contact', contactcontroller::class)->middleware('Is_Admin');

Route::resource('about', aboutcontroller::class)->middleware('Is_Admin');
Route::get('showmessage', [showmessage::class, 'index'])->middleware('Is_Admin');
Route::get('dltmessage/{id}', [showmessage::class, 'delete'])->name('dltmessage')->middleware('Is_Admin');



Route::resource('showcomment', admincommentcontroller::class)->middleware('Is_Admin');

Route::get('users/export/', [UsersController::class, 'export']);
Route::post('users/import/', [UsersController::class, 'import']);

Route::get('logout', [indexcontroller::class, 'logout']);


Route::resource('sitedescription', sitedescriptioncontroller::class)->middleware('Is_Admin');


Route::resource('serv', servcontroller::class)->middleware('Is_Admin');


//});

//Route::resource('Latest_properties', Latest_propertiescontroller::class);
