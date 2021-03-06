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

Route::get('/about', function () {
    return view('siteinfo');
});

Route::get('/aboutfolder', function () {
    return view('kansio.siteinfo');
});

Route::get('/contact1', 'ContactController@showinfo');
Route::get('/contact2', 'ContactController@returninfo');

Route::get('/person', 'ContactController@showperson');
Route::get('/listpersons', 'ContactController@listpersons');

Route::get('/layout', function () {
    return view('child');
});

Route::get('/omalaravel', function () {
    return view('omaleiska');
});

Route::get('/do_shopping', function () {
    return view('doShopping');
});

Route::get('/basket_content', function () {
    return view('basketContent');
});

Route::get('/customers', 'CustomerController@index');

Route::get('/customers/create', 'CustomerController@create');

Route::post('/customers', 'CustomerController@store')->name('insert');

Route::get('/customers/{id}', 'CustomerController@show');

Route::get('/customers/{id}/edit', 'CustomerController@edit');

Route::patch('/customers/{id}', 'CustomerController@update');

Route::delete('/customers/{id}', 'CustomerController@destroy');

Route::get('/testausta', 'ContactController@test')->name('test');

Route::get('/hakupalvelu', function () {
    return view('search');
});

Route::get('/search', 'HakuController@search');

Route::get('studentjson', 'StudentController@studentjson');
Route::get('coursejson', 'StudentController@coursejson');

Route::get('student', 'StudentController@studentlist');
Route::get('course', 'StudentController@courselist');

Route::get('studentincourses', 'StudentController@studentincourses');

Route::get('studentcredits', 'StudentController@studentcredits');
Route::get('coursecredits', 'StudentController@coursecredits');

Route::get('/studentform', 'StudentController@studentform');
Route::post('/storestudent','StudentController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function() {
    // your routes
    Route::get('users', 'UserController@list_all');
    Route::get('harkat', 'HarkkaController@list_all');
});

//Route::get('users', 'UserController@list_all');

//Route::get('harkat', 'HarkkaController@list_all');

//Route::get('/pscores', 'KyselyController@list_personal_scores');
Route::get('/pscores', [
    'middleware' => 'auth',
    'uses' => 'KyselyController@list_personal_scores'
]);

// Lomake tiedoston lataamiseksi
Route::get('upload', 'CsvController@create');

// toiminto tiedoston rivien lis????miseksi tietokantaan
Route::post('csvsaved', 'CsvController@store');

Route::get('authproblem', 'HomeController@problem');