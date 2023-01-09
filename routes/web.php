<?php

use App\DataTables\ItemDataTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function (ItemDataTable $itemDataTable) {
    return $itemDataTable->render('item.index',[$itemDataTable]);
});

// Route::get('ajax-pagination',array('as'=>'pagination','uses'=>'HomeController@ajaxPagination'));
// Route::get('ajax-pagination',[HomeController::class,'ajaxPagination']);

