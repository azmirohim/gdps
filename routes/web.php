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



Route::view('/', 'page.index')->name('index');
Route::view('/about', 'page.about')->name('about');
Route::view('/contact', 'page.contact')->name('contact');
Route::view('/service', 'page.service')->name('service');
Route::view('/detil', 'page.detailvacancy')->name('detil');
Route::view('/email','page.emailku')->name('email');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/internship', 'InternController@internship')->name('internship');
Route::post('/submitint', 'InternController@submitint')->name('submitint');

Route::get('/form', 'FormController@form')->name('form');
Route::get('/bankdata', 'FormController@bank')->name('bank');
Route::get('/formint', 'FormController@formint')->name('formint');
Route::post('/submit', 'FormController@submit')->name('submit');
Route::post('/submitint', 'FormController@submitint')->name('submitint');

Route::get('/admin-index', 'PostController@index')->name('admin.dash');

// Route::get('/admin-index', 'PdfController@index')->name('admin.dash');


Route::get('/admin-index/cari', 'PostController@cari');




Route::get('/admin-detail/{formRecruit}', 'PostController@detail')->name('admin.detail');
Route::delete('delete/{formRecruit}', 'PostController@delete')->name('delete');
Route::get('admin/file/{file}/download', 'PostController@download')->name('file.download');
Route::get('admin/file/{file}/downloadcv', 'PostController@downloadcv')->name('file.downloadcv');
Route::get('admin/file/{file}/downloadktp', 'PostController@downloadktp')->name('file.downloadktp');
Route::get('admin/file/{file}/downloadprop', 'PostController@downloadprop')->name('file.downloadprop');
Route::get('admin-register', 'AdminController@admin')->name('admin-register');
Route::get('admin-register/edit/{id}','AdminController@edit')->name('admin-edit');
Route::get('admin-register/hapus/{id}','AdminController@delete')->name('admin-delete');
Route::post('/admin-regiter/update','AdminController@update');

Route::post('/lupaa', 'PelamarController@lupapass')->name('lupapas');
Route::get('/lupa-pass', 'PelamarController@showlupa')->name('lupapass');

Route::get('/vacancy', 'UservacancyController@uservacancy')->name('vacancy');
Route::get('/vacancyy', 'UservacancyController@register')->name('vacancyy');
Route::get('/vacancy/detail/{judul}', 'UservacancyController@detilvac')->name('detilvac');
Route::post('/registrasi', 'PelamarController@lamar')->name('lamar');
Route::post('/lupa-password', 'PelamarController@lupa')->name('lupa');
Route::get('/logon', 'PelamarController@logon')->name('logon');
Route::get('/bank', 'PelamarController@bank')->name('bank');
Route::get('/logonint', 'PelamarController@logonint')->name('logonint');
Route::get('/verify', 'PelamarController@verify')->name('verify');

Route::get('/admin-vacancy', 'AdmvacancyController@admVacancy')->name('admin.vacancy');
Route::view('/tambah','adminPage.tambahvacancy')->name('tambah');
Route::post('/submit-vacancy', 'AdmvacancyController@submitvac')->name('submitvac');
Route::get('/admin-vacancy/edit/{id}', 'AdmvacancyController@editvac')->name('editvac');
Route::get('/admin-vacancy/hapus/{id}', 'AdmvacancyController@hapusvac')->name('hapusvac');
Route::post('/admin-vacancy/update','AdmvacancyController@update');



Route::get('/admin-index/excel', 'PostController@excel');
Route::get('/admin-index/pdf', 'PostController@pdf');
