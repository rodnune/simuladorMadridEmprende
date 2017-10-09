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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/micuenta', 'MiCuentaController@index')->name('micuenta');
Route::get('/micuenta/ok', 'MiCuentaController@micuentaOk')->name('micuentaOk');
Route::post('/micuenta/update/{id}', 'MiCuentaController@update')->name('update');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


/**Rutas plan de empresa**/
Route::get('/newPlanEmpresa', 'PlanEmpresaController@newPlanEmpresa')->name('newPlanEmpresa');
Route::post('/savePlanEmpresa', 'PlanEmpresaController@savePlanEmpresa')->name('savePlanEmpresa');
Route::get('/editPlanEmpresa/{id}', 'PlanEmpresaController@editPlanEmpresa')->name('editPlanEmpresa');
Route::post('/updatePlanEmpresa/{id}', 'PlanEmpresaController@updatePlanEmpresa')->name('updatePlanEmpresa');
Route::get('/selectPlanEmpresa/{id}', 'PlanEmpresaController@selectPlanEmpresa')->name('selectPlanEmpresa');
Route::get('/deletePlanEmpresa/{id}', 'PlanEmpresaController@deletePlanEmpresa')->name('deletePlanEmpresa');


/**Rutas datos previos**/
Route::get('/newDatosPrevios/{id}', 'DatosPreviosController@newDatosPrevios')->name('newDatosPrevios');
Route::post('/saveDatosPrevios','DatosPreviosController@saveDatosPrevios')->name('saveDatosPrevios');
Route::get('/editDatosPrevios/{id}', 'DatosPreviosController@editDatosPrevios')->name('editDatosPrevios');
Route::post('/updateDatosPrevios','DatosPreviosController@updateDatosPrevios')->name('updateDatosPrevios');
Route::delete('/deleteDatosPrevios','DatosPreviosController@deleteDatosPrevios')->name('deleteDatosPrevios');



/**Rutas añadir o borrar socios a plan de empresa**/
Route::get('/newSocio/{id}','SociosController@newSocio')->name('newSocio');
Route::post('/saveSocio','SociosController@saveSocio')->name('saveSocio');
Route::post('/deleteSocio','SociosController@deleteSocio')->name('deleteSocio');


/**Rutas plan de marketing**/
Route::get('/plan-de-marketing/{id}', 'PlanDeMarketingController@planDeMarketing');
Route::get('/edit-plan-de-marketing/{id}', 'PlanDeMarketingController@editPlanDeMarketing');
Route::post('/save-plan-de-marketing/{id}','PlanDeMarketingController@savePlanDeMarketing');
Route::post('/update-plan-de-marketing/{id}','PlanDeMarketingController@updatePlanDeMarketing');

/**Rutas plan de operaciones**/
Route::get('/plan-de-operaciones/{id}', 'PlanDeOperacionesController@planDeOperaciones');
Route::get('/edit-plan-de-operaciones/{id}', 'PlanDeOperacionesController@editPlanDeOperaciones');
Route::post('/save-plan-de-operaciones/{id}','PlanDeOperacionesController@savePlanDeOperaciones');
Route::post('/update-plan-de-operaciones/{id}','PlanDeOperacionesController@updatePlanDeOperaciones');
