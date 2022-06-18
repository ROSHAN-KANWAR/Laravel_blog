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
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Blogpage;
use App\Http\Controllers\Aboutpage;
use App\Http\Controllers\admin\addpostcontro;
use App\Http\Controllers\admin\catecontro;
use App\Http\Controllers\admin\comcontroo;
use App\Http\Controllers\admin\contact;
use App\Http\Controllers\admin\detailpro;
use App\Http\Controllers\Contactpage;
use App\Http\Controllers\admin\homecontro;
use App\Http\Controllers\admin\paycontro;
use App\Http\Controllers\admin\postcontro;
use App\Http\Controllers\admin\usercontro;
use App\Http\Controllers\blogview;
use App\Http\Controllers\Premium;
use App\Http\Controllers\RazorpayController;


  //searchpage home
  Route::get('/searchpage' ,[Homepage::class ,'Searched'])->name('search');
  // Home page url

//blogview link external links
Route::get('/searchlink/{category}' ,[blogview::class ,'Searchedlink'])->name('searchlink');


Route::get('/' ,[Homepage::class ,'Index'])->name('index');
//Blog page url
Route::get('/blogsection' ,[Blogpage::class ,'Blogsection'])->name('blogsection');
// blog view urls
Route::get('/blogview/{Categoty_name}/{slug_url}',[blogview::class ,'BLogView'])->name('blogview');
Route::post('blogsection/blogview/savecomment/',[blogview::class ,'CommentSave'])->name('commentsave');
//Aboutus  page urls
Route::get('/aboutsus' ,[Aboutpage::class ,'Aboutus'])->name('aboutus');
// contact page urls
Route::get('/contactus' ,[Contactpage::class ,'Contactus'])->name('contactus');
Route::post('/contactus' ,[Contactpage::class ,'SaveContact'])->name('contactsave');



// admin dashboard urls
Route::middleware(['auth' ,'verified'])->group(function(){
    Route::get('/main_dashboard' ,[homecontro::class ,'Homeadmin'])->name('homeadmin');
    Route::get('/post_show' ,[postcontro::class ,'Postshow'])->name('postshow');
    Route::get('/postedit/{id}',[postcontro::class,'Postedit'])->name('postedit');
    Route::put('/postedit/{id}',[postcontro::class,'Postupdate'])->name('postedits');
    Route::get('/postdel/{id}',[postcontro::class,'Postdes'])->name('postdel');
    Route::get('/pay_show' ,[paycontro::class ,'Payshow'])->name('payshow');
    Route::get('/user_show' ,[usercontro::class ,'Usershow'])->name('usershow');
    Route::get('/category_show' ,[catecontro::class ,'Cateshow'])->name('cateshow');
    Route::get('/delete/{id}',[catecontro::class,'destroy'])->name('delete');
    Route::get('/comment_show' ,[comcontroo::class ,'Comshow'])->name('comshow');
    Route::get('/comdel/{id}' ,[comcontroo::class ,'Commdes'])->name('comdes');
    Route::get('/comapprove/{id}' ,[comcontroo::class ,'Commappro'])->name('comdess');
    Route::get('/contact_show' ,[contact::class ,'Contact'])->name('contact');
    Route::get('/contactdel/{id}' ,[contact::class ,'Contactdes'])->name('condes');
  
    Route::get('/addpost',[addpostcontro::class ,'AddPost'])->name('addpost');
    Route::post('/uploadpost' ,[addpostcontro::class ,'UploadPost'])->name('uploadpost');
    Route::get('/detailprofile',[detailpro::class ,'Detailshow'])->name('detailshow');
   // Route::get('/mailue',[detailpro::class ,'Send_test'])->name('mailu');
   
    

// User dashboard urls
Route::get('/post_show_all' ,[postcontro::class ,'Postshowall'])->name('postshowall');

//premium accpunt
 
Route::get('/paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazor');
Route::post('/payment', [RazorpayController::class,'payment'])->name('payment');


// profile photo
Route::post('/Changeprofile' ,[detailpro::class ,'ProfilePhoto'])->name('prophoto');
});

// admin dashboard urls


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
