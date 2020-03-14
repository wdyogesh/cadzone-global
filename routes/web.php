<?php
use Illuminate\Support\Str;

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
Route::get('/admin-password', function () {
    // return Hash::make('password');
    return Str::slug('My Awesome Title', '-');

    $array = array("one", "two", "three", "four", "five", "six");
    echo $array[array_rand($array, 1)];

});

Route::get('api/get-state-list/{country}', 'APIController@getStateList');
Route::get('api/get-city-list/{state}', 'APIController@getCityList');
Route::get('api/country-and-codes/{country}', 'APIController@countrycodes');

Route::get('/', 'HomeController@index');

Route::get('/about-us', 'HomeController@about');

Route::get('/our-services', 'HomeController@service');

Route::get('/our-services/{services}', 'HomeController@serviceDetails')->name('service.details');

Route::get('/news', 'HomeController@news');

Route::get('/career', 'HomeController@career');

Route::get('/news-details/{news}', 'HomeController@newsDetails')->name('news.details');

Route::get('/projects', 'HomeController@project');

Route::get('/projects-details', 'HomeController@projectDetails');

// Contact-form Saving
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::post('/contact-us', 'HomeController@store')->name('contact');

/*  Auth login details  */
Auth::routes();

Route::prefix('/admin')->middleware('is_admin')->group(function () {

    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::get('/applicants', 'Admin\ApplicationController@getList');
    Route::get('/applicants/{id}/details', 'Admin\ApplicationController@details');

    Route::get('/contact', 'Admin\ContactController@index');

    Route::prefix('/company')->group(function () {
        Route::get('', 'Admin\CompanyController@index')->name('company-list');
        Route::get('/create', 'Admin\CompanyController@create')->name('create-company');
        Route::post('/create', 'Admin\CompanyController@store')->name('store-company');
        Route::get('/{company}/show', 'Admin\CompanyController@show')->name('company.show');
        Route::get('/{company}', 'Admin\CompanyController@destroy')->name('company.delete');
        Route::get('/{company}/edit', 'Admin\CompanyController@edit')->name('company.edit');
        Route::put('/{company}/update', 'Admin\CompanyController@update')->name('company.update');
    });

    Route::prefix('/Employee')->group(function () {
        Route::get('/', 'Admin\EmployeeController@index')->name('employee.list');
        Route::get('/hr', 'Admin\EmployeeController@hr')->name('employee.hrList');
        Route::get('/create', 'Admin\EmployeeController@create')->name('employee.create');
        Route::post('/store', 'Admin\EmployeeController@store')->name('employee.store');
        Route::get('/{employee}/show', 'Admin\EmployeeController@show')->name('employee.show');
        Route::get('/{employee}/edit', 'Admin\EmployeeController@edit')->name('employee.edit');
        Route::get('/{employee}/upload-docs', 'Admin\EmployeeController@uploadDoc')->name('employee.uploadDoc');
        Route::put('/{employee}/update', 'Admin\EmployeeController@update')->name('employee.update');
        Route::post('/{employee}/doUpload', 'Admin\EmployeeController@doUpload')->name('employee.doUpload');
        Route::get('/{employee}/delete', 'Admin\EmployeeController@destroy')->name('employee.delete');
    });

    Route::prefix('/services')->group(function () {
        Route::get('/', 'Admin\ServiceController@index')->name('services.index');
        Route::get('/create', 'Admin\ServiceController@create')->name('services.create');
        Route::get('/{service}/show', 'Admin\ServiceController@show')->name('services.show');
        Route::post('/store', 'Admin\ServiceController@store')->name('services.store');
        Route::get('/{service}/edit', 'Admin\ServiceController@edit')->name('services.edit');
        Route::put('/{service}/update', 'Admin\ServiceController@update')->name('services.update');
        Route::get('/{service}/delete', 'Admin\ServiceController@destroy')->name('services.delete');

    });

    Route::prefix('/news')->group(function () {
        Route::get('/', 'Admin\NewsController@index')->name('news.index');
        Route::get('/create', 'Admin\NewsController@create')->name('news.create');
        Route::get('/{news}/show', 'Admin\NewsController@show')->name('news.show');
        Route::post('/store', 'Admin\NewsController@store')->name('news.store');
        Route::get('/{news}/edit', 'Admin\NewsController@edit')->name('news.edit');
        Route::put('/{news}/update', 'Admin\NewsController@update')->name('news.update');
        Route::get('/{news}/delete', 'Admin\NewsController@destroy')->name('news.delete');

    });

    Route::prefix('/newsboard')->group(function () {
        Route::get('/', 'Admin\NewsBoardsController@index')->name('newsBoard.index');
        Route::get('/create', 'Admin\NewsBoardsController@create')->name('newsBoard.create');
        Route::get('/{newsboard}/show', 'Admin\NewsBoardsController@show')->name('newsBoard.show');
        Route::post('/store', 'Admin\NewsBoardsController@store')->name('newsBoard.store');
        Route::get('/{newsboard}/edit', 'Admin\NewsBoardsController@edit')->name('newsBoard.edit');
        Route::put('/{newsboard}/update', 'Admin\NewsBoardsController@update')->name('newsBoard.update');
        Route::get('/{newsboard}/delete', 'Admin\NewsBoardsController@destroy')->name('newsBoard.delete');

    });

});

// User Routes goes here after login goes here

Route::prefix('/employee')->group(function () {

    Route::get('/', 'Employee\EmployeController@index')->name('employee');

    Route::get('/my-profile', 'Employee\EmployeController@myProfile')->name('employee-profile');

    Route::get('/work-history', 'Employee\WorkHistoryController@index')->name('workHistory.index');

});

Route::prefix('/hr')->group(function () {

    Route::get('/', 'Hr\HrController@index')->name('hr');

    Route::get('/my-profile', 'Hr\HrController@myProfile')->name('hr-profile');

    Route::get('/work-history', 'Hr\WorkHistoryController@index')->name('workHistory.index');

    Route::prefix('/Employee')->group(function () {
        Route::get('/', 'Hr\EmployeeController@index')->name('employee.list');
        Route::get('/hr', 'Hr\EmployeeController@hr')->name('employee.hrList');
        Route::get('/create', 'Hr\EmployeeController@create')->name('employee.create');
        Route::post('/store', 'Hr\EmployeeController@store')->name('employee.store');
        Route::get('/{employee}/show', 'Hr\EmployeeController@show')->name('employee.show');
        Route::get('/{employee}/edit', 'Hr\EmployeeController@edit')->name('employee.edit');
        Route::get('/{employee}/upload-docs', 'Hr\EmployeeController@uploadDoc')->name('employee.uploadDoc');
        Route::put('/{employee}/update', 'Hr\EmployeeController@update')->name('employee.update');
        Route::post('/{employee}/doUpload', 'Hr\EmployeeController@doUpload')->name('employee.doUpload');
        Route::get('/{employee}/delete', 'Hr\EmployeeController@destroy')->name('employee.delete');
    });

    Route::prefix('/newsboard')->group(function () {
        Route::get('/', 'Hr\NewsBoardsController@index')->name('newsBoard.index');
        Route::get('/create', 'Hr\NewsBoardsController@create')->name('newsBoard.create');
        Route::get('/{newsboard}/show', 'Hr\NewsBoardsController@show')->name('newsBoard.show');
        Route::post('/store', 'Hr\NewsBoardsController@store')->name('newsBoard.store');
        Route::get('/{newsboard}/edit', 'Hr\NewsBoardsController@edit')->name('newsBoard.edit');
        Route::put('/{newsboard}/update', 'Hr\NewsBoardsController@update')->name('newsBoard.update');
        Route::get('/{newsboard}/delete', 'Hr\NewsBoardsController@destroy')->name('newsBoard.delete');

    });

});

Route::post('/doLogin', 'Auth\LoginController@doLogin')->name('doLogin');
