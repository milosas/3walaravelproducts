<?php

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
//
// Route::get('/ate', function () {
//     return view('welcome');
// });
//
//
// Route::get('/', function () {
//     return view('welcome');
// });
//
//
// Route::get('/kontaktai', function () {
//     return '<h1>Kontaktu puslapis</h1> <h2> Kontaktai </h2><h2> Kontaktai </h2><h2> Kontaktai </h2>';
// })->name('kontaktai');
//
// Route::resource('product', 'ProductController');

Auth::routes();
Route::get('/','ProductController@main')->name('main.page');
Route::get('/oneproduct','ProductController@oneproduct')->name('oneproduct.page');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allcategories', 'CategoryController@index')->name('categories.page');
Route::get('/allcompanies', 'CompanyController@index')->name('companies.page')->middleware('admin');
Route::get('/allcompanies/{company}', 'CompanyController@show')->name('companies.company')->middleware('admin');
Route::delete('/allcompanies/{id}', 'CompanyController@delete')->name('companiesdelete.page')->middleware('admin');

Route::get('/addproduct','ProductController@addproduct')->name('products.create')->middleware('admin');
Route::get('/VISIproduktai','ProductController@allproducts')->name('products.page');
Route::post('/VISIproduktai','ProductController@store')->name('products.store')->middleware('admin');
Route::get('/VISIproduktai/{product}', 'ProductController@show')->name('singleproduct.page');
Route::put('/VISIproduktai/{product}/update','ProductController@update')->name('products.update')->middleware('admin');
Route::get('/daug', function (){
  $company = App\Company::find(6);
  foreach ($company->products as $product) {
    echo '<li>'.$product->name.'</li>';
  }
});
Route::get('/VISIproduktai/{product}/edit','ProductController@edit')->name('product.edit')->middleware('admin');
Route::delete('/VISIproduktai/{product}','ProductController@delete')->name('product.delete')->middleware('admin');
