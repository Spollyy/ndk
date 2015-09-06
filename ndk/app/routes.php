<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('backend.login');
});
Route::get('/meow/main', array('as' => 'main', 'uses' => 'AdminController@getTitle'));

Route::get('/meow/vacancy', array('as'=>'showVacancy', 'uses' => 'AdminController@getVacancys'));
Route::get('/meow/vacancy/create', array('as'=>'createVacancy', 'uses' => 'AdminController@getCreateVacancy'));
Route::post('/meow/vacancy/create', array('as'=>'pcreateVacancy', 'uses' => 'AdminController@postCreateVacancy'));
Route::get('/meow/vacancy/update/{id}', array('as'=>'updateVacancy', 'uses' => 'AdminController@getUpdateVacancy'));
Route::put('/meow/vacancy/update/{id}', array('as'=>'pupdateVacancy', 'uses' => 'AdminController@putUpdateVacancy'));
Route::delete('/meow/vacancy/delete{id}', array('as'=>'deleteVacancy', 'uses' => 'AdminController@deleteVacancy'));

Route::get('/meow/project', array('as'=>'showProject', 'uses' => 'AdminController@getProjects'));
Route::get('/meow/project/create', array('as'=>'createProject', 'uses' => 'AdminController@getCreateProject'));
Route::post('/meow/project/create', array('as'=>'pcreateProject', 'uses' => 'AdminController@postCreateProject'));
Route::get('/meow/project/update/{id}', array('as'=>'updateProject', 'uses' => 'AdminController@getUpdateProject'));
Route::put('/meow/project/update/{id}', array('as'=>'pupdateProject', 'uses' => 'AdminController@putUpdateProject'));
Route::delete('/meow/project/delete{id}', array('as'=>'deleteProject', 'uses' => 'AdminController@deleteProject'));

Route::get('/meow/page', array('as'=>'showPage', 'uses' => 'AdminController@getPages'));
Route::get('/meow/page/create', array('as'=>'createPage', 'uses' => 'AdminController@getCreatePage'));
Route::post('/meow/page/create', array('as'=>'pcreatePage', 'uses' => 'AdminController@postCreatePage'));
Route::get('/meow/page/update/{id}', array('as'=>'updatePage', 'uses' => 'AdminController@getUpdatePage'));
Route::put('/meow/page/update/{id}', array('as'=>'pupdatePage', 'uses' => 'AdminController@putUpdatePage'));
Route::delete('/meow/page/delete{id}', array('as'=>'deletePage', 'uses' => 'AdminController@deletePage'));

Route::get('/meow/service', array('as'=>'showService', 'uses' => 'AdminController@getServices'));
Route::get('/meow/service/create', array('as'=>'createService', 'uses' => 'AdminController@getCreateService'));
Route::post('/meow/service/create', array('as'=>'pcreateService', 'uses' => 'AdminController@postCreateService'));
Route::get('/meow/service/update/{id}', array('as'=>'updateService', 'uses' => 'AdminController@getUpdateService'));
Route::put('/meow/service/update/{id}', array('as'=>'pupdateService', 'uses' => 'AdminController@putUpdateService'));
Route::delete('/meow/service/delete{id}', array('as'=>'deleteService', 'uses' => 'AdminController@deleteService'));

Route::get('/meow/news', array('as'=>'showNews', 'uses' => 'AdminController@getNews'));
Route::get('/meow/news/create', array('as'=>'createNews', 'uses' => 'AdminController@getCreateNews'));
Route::post('/meow/news/create', array('as'=>'pcreateNews', 'uses' => 'AdminController@postCreateNews'));
Route::get('/meow/news/update/{id}', array('as'=>'updateNews', 'uses' => 'AdminController@getUpdateNews'));
Route::put('/meow/news/update/{id}', array('as'=>'pupdateNews', 'uses' => 'AdminController@putUpdateNews'));
Route::delete('/meow/news/delete{id}', array('as'=>'deleteNews', 'uses' => 'AdminController@deleteNews'));