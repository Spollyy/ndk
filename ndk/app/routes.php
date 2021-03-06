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
Route::get('vacancy', array('as' => 'vacancy', 'uses' => 'HomeController@getVacancys' ));
Route::get('news', ['as' => 'news', 'uses' => 'HomeController@getNews']);
Route::get('news/{url}', ['as' => 'post', 'uses' => 'HomeController@getPost']);

Route::get('/meow/main', array('as' => 'main', 'uses' => 'AdminController@getTitle'));

Route::get('/meow/vacancy', array('as'=>'showVacancy', 'uses' => 'AdminController@getVacancys'));
Route::get('/meow/vacancy/create', array('as'=>'createVacancy', 'uses' => 'AdminController@getCreateVacancy'));
Route::post('/meow/vacancy/create', array('as'=>'pcreateVacancy', 'uses' => 'AdminController@postCreateVacancy'));
Route::get('/meow/vacancy/update/{id}', array('as'=>'updateVacancy', 'uses' => 'AdminController@getUpdateVacancy'));
Route::put('/meow/vacancy/update/{id}', array('as'=>'pupdateVacancy', 'uses' => 'AdminController@putUpdateVacancy'));
Route::delete('/meow/vacancy/delete{id}', array('as'=>'deleteVacancy', 'uses' => 'AdminController@deleteVacancy'));

Route::get('/meow/page/main', ['as' => 'updateMain', 'uses' => 'AdminController@getUpdateMain']);
Route::put('/meow/page/main', ['as' => 'pupdateMain', 'uses' => 'AdminController@postUpdateMain']);

Route::get('/meow/page/contact', ['as' => 'updateContact', 'uses' => 'AdminController@getUpdateContact']);
Route::put('/meow/page/contact', ['as' => 'pupdateContact', 'uses' => 'AdminController@postUpdateContact']);

Route::get('/meow/page/npage', ['as' => 'updateNPage', 'uses' => 'AdminController@getUpdateNPage']);
Route::put('/meow/page/npage', ['as' => 'pupdateNPage', 'uses' => 'AdminController@postUpdateNPage']);

Route::get('/meow/page/spage', ['as' => 'updateSPage', 'uses' => 'AdminController@getUpdateSPage']);
Route::put('/meow/page/spage', ['as' => 'pupdateSPage', 'uses' => 'AdminController@postUpdateSPage']);

Route::get('/meow/page/ppage', ['as' => 'updatePPage', 'uses' => 'AdminController@getUpdatePPage']);
Route::put('/meow/page/ppage', ['as' => 'pupdatePPage', 'uses' => 'AdminController@postUpdatePPage']);

Route::get('/meow/page/tpage', ['as' => 'updateTPage', 'uses' => 'AdminController@getUpdateTPage']);
Route::put('/meow/page/tpage', ['as' => 'pupdateTPage', 'uses' => 'AdminController@postUpdateTPage']);

Route::get('/meow/page/stpage', ['as' => 'updateStPage', 'uses' => 'AdminController@getUpdateStPage']);
Route::put('/meow/page/stpage', ['as' => 'pupdateStPage', 'uses' => 'AdminController@postUpdateStPage']);

Route::get('/meow/page/vpage', ['as' => 'updateVPage', 'uses' => 'AdminController@getUpdateVPage']);
Route::put('/meow/page/vpage', ['as' => 'pupdateVPage', 'uses' => 'AdminController@postUpdateVPage']);


Route::get('/meow/project', array('as'=>'showProject', 'uses' => 'AdminController@getProjects'));
Route::get('/meow/project/create', array('as'=>'createProject', 'uses' => 'AdminController@getCreateProject'));
Route::post('/meow/project/create', array('as'=>'pcreateProject', 'uses' => 'AdminController@postCreateProject'));
Route::get('/meow/project/update/{id}', array('as'=>'updateProject', 'uses' => 'AdminController@getUpdateProject'));
Route::put('/meow/project/update/{id}', array('as'=>'pupdateProject', 'uses' => 'AdminController@putUpdateProject'));
Route::delete('/meow/project/delete{id}', array('as'=>'deleteProject', 'uses' => 'AdminController@deleteProject'));

Route::get('/meow/standart', array('as'=>'showStandart', 'uses' => 'AdminController@getStandarts'));
Route::get('/meow/standart/create', array('as'=>'createStandart', 'uses' => 'AdminController@getCreateStandart'));
Route::post('/meow/standart/create', array('as'=>'pcreateStandart', 'uses' => 'AdminController@postCreateStandart'));
Route::get('/meow/standart/update/{id}', array('as'=>'updateStandart', 'uses' => 'AdminController@getUpdateStandart'));
Route::put('/meow/standart/update/{id}', array('as'=>'pupdateStandart', 'uses' => 'AdminController@putUpdateStandart'));
Route::delete('/meow/standart/delete{id}', array('as'=>'deleteStandart', 'uses' => 'AdminController@deleteStandart'));

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

Route::get('/meow/scat', array('as'=>'showSCat', 'uses' => 'AdminController@getSCat'));
Route::get('/meow/scat/create', array('as'=>'createSCat', 'uses' => 'AdminController@getCreateSCat'));
Route::post('/meow/scat/create', array('as'=>'pcreateSCat', 'uses' => 'AdminController@postCreateSCat'));
Route::get('/meow/scat/update/{id}', array('as'=>'updateSCat', 'uses' => 'AdminController@getUpdateSCat'));
Route::put('/meow/scat/update/{id}', array('as'=>'pupdateSCat', 'uses' => 'AdminController@putUpdateSCat'));
Route::delete('/meow/scat/delete{id}', array('as'=>'deleteSCat', 'uses' => 'AdminController@deleteSCat'));

Route::get('/meow/tcat', array('as'=>'showTCat', 'uses' => 'AdminController@getTCat'));
Route::get('/meow/tcat/create', array('as'=>'createTCat', 'uses' => 'AdminController@getCreateTCat'));
Route::post('/meow/tcat/create', array('as'=>'pcreateTCat', 'uses' => 'AdminController@postCreateTCat'));
Route::get('/meow/tcat/update/{id}', array('as'=>'updateTCat', 'uses' => 'AdminController@getUpdateTCat'));
Route::put('/meow/tcat/update/{id}', array('as'=>'pupdateTCat', 'uses' => 'AdminController@putUpdateTCat'));
Route::delete('/meow/tcat/delete{id}', array('as'=>'deleteTCat', 'uses' => 'AdminController@deleteTCat'));

Route::get('/meow/tech', array('as'=>'showTech', 'uses' => 'AdminController@getTechs'));
Route::get('/meow/tech/create', array('as'=>'createTech', 'uses' => 'AdminController@getCreateTech'));
Route::post('/meow/tech/create', array('as'=>'pcreateTech', 'uses' => 'AdminController@postCreateTech'));
Route::get('/meow/tech/update/{id}', array('as'=>'updateTech', 'uses' => 'AdminController@getUpdateTech'));
Route::put('/meow/tech/update/{id}', array('as'=>'pupdateTech', 'uses' => 'AdminController@putUpdateTech'));
Route::delete('/meow/tech/delete{id}', array('as'=>'deleteTech', 'uses' => 'AdminController@deleteTech'));