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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login-admin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register-admin');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::get('/home', 'HomeController@index')->name('dashboard-member');
Route::get('/admin', 'AdminController@index')->name('dashboard-admin');

Route::prefix('/admin/members')->group(function () {
Route::get('/', 'AdminController@AdminMembersForm') ->name('members-admin');
Route::DELETE('/destroy/{user}', 'AdminController@destroy')->name('members-destroy');
});

Route::resource('admin/books', 'BooksController');
Route::resource('admin/borrow', 'BorrowsController');
Route::get('member/books', 'HomeController@booksAvailable')->name('member-books');
Route::get('member/books/show/{show}', 'HomeController@show')->name('member-show-book');

Route::get('contact', 'ContactFormController@create')->name('contact-create');
Route::post('contact', 'ContactFormController@store')->name('contact-store');





