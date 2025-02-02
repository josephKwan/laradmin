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

use App\Models\System\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(url('page/customer'));
});

Route::group([
    'middleware' => 'auth'
], function ($router) {
    
    $router->post('/api/tencent/textTranslate', 'Api\TencentController@textTranslate');
    
    // $router->group(['middleware' => ['role:admin']], function($router) {});
    $router->resource('/page', 'System\PageController');
    foreach (Page::all(['url']) as $key => $page) {
        $key = explode('/',$page->url);
        if (isset($key[0]) && isset($key[1]) && $key[0] == 'page') {
            $router->resource('model/'.$key[1], 'System\ModelController');
            $router->get('search/'.$key[1], 'System\ModelController@search');
        }
    }
    $router->resource('/user', 'Auth\UserController');
    $router->resource('/role', 'Auth\RoleController');
    $router->resource('/permission', 'Auth\PermissionController');
    $router->resource('/report','DashController');
    Route::get('/tasks/show/{id}', 'taskController@show');
    Route::get('/', 'ArticleController@index');
    $router->resource('/customer', 'CustomerController');
    Route::get('/settings', 'UserController@index');
    Route::post('/settings', 'UserController@update');
    
    
    
});

Auth::routes();
