<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contabilitate', ['as' => 'accounting', function () {
    return view('accounting_company');
}]);

Route::get('/contabil_expert', ['as' => 'expert_accountant', function () {
    return view('expert_accountant');
}]);

Route::get('/resurse_umane_relatii_de_munca', ['as' => 'hr', function () {
    return view('hr');
}]);

Route::get('/salarizare', ['as' => 'payroll', function () {
    return view('payroll');
}]);

Route::get('/audit', ['as' => 'audit', function () {
    return view('audit');
}]);

Route::get('/infiintari_registrul_comertului', ['as' => 'startingCompany', function () {
    return view('startingCompany');
}]);

Route::get('/mentiuni_registrul_comertului', ['as' => 'modifyCompany', function () {
    return view('modifyCompany');
}]);

Route::get('/radieri_registrul_comertului', ['as' => 'dismantleCompany', function () {
    return view('dismantleCompany');
}]);

Route::get('/cariere', ['as' => 'careers', function () {
    return view('careers');
}]);

Route::get('/contact', ['as' => 'contact', function () {
    return view('contact');
}]);

Route::post('service_request', 'UtilsController@requestService')->name('service_request');

