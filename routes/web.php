<?php

use App\Http\Controllers\Frontpages;
use Illuminate\Support\Facades\Route;

Route::group(
   [
       'prefix' => LaravelLocalization::setLocale(),
       'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
   ], function(){
Route::get('omnia', function () {
   return view('test');
});
 Route::get('/',[Frontpages::class,'home'])->name('home');
 Route::get('doctors',[Frontpages::class,'doctors'])->name('doctors');
 Route::get('services',[Frontpages::class,'services'])->name('services');
 Route::get('pages',[Frontpages::class,'pages'])->name('pages');
 Route::get('blog',[Frontpages::class,'blog'])->name('blog');
 Route::get('error',[Frontpages::class,'error'])->name('error');
 Route::get('contact',[Frontpages::class,'contact'])->name('contact');
});