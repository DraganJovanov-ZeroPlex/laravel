<?php

use App\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/primitive-bind', 'BooksController@primitiveBind');

Route::get('/books', 'BooksController@index')->name('books.index');
Route::get('/books/read', 'BooksController@read')->name('books.read');


Route::get('/employee/yearly-salary', function() {
    return collect(Employee::$employeeRepository)->pluck('salary')->sum();
});

Route::match(['get', 'post'], '/employee/average-yearly-salary', 'EmployeeController@averageSalary');

Route::redirect('/average', '/employee/average-yearly-salary');

Route::get('employee/{id}/salary', function($id) {
    return Employee::find($id)['salary'];
});



Route::namespace('Subscribers')->group(function(){

    Route::get('subscribers', 'SubscriberController@index')->name('subscribers.index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Single action controllers
Route::get('promo1/', 'Promo1Controller');
Route::get('promo2/', 'Promo2Controller');

//Resource controller
Route::resource('loans', 'LoansController');