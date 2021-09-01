<?php

use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', function(){
    return view('admin.dashboard');
});
Route::group(['middleware'=> ['auth']],function(){

Route::get('manage-roles', [RolePermissionController::class, 'index'])->name('assignrole');
Route::get('manage-permissions', [RolePermissionController::class, 'createPermissions'])->name('createpermissions');
Route::get('assign-user-role', [RolePermissionController::class, 'assignUserRole'])->name('assignuserrole');
Route::post('add-permission', [RolePermissionController::class, 'savePermission'])->name('savepermission');

Route::post('add-new-role', [RolePermissionController::class, 'saveRole'])->name('saverole');

Route::get('add-new-user', [RolePermissionController::class, 'addNewUser'])->name('add-new-user');
Route::resource('manage-user',UserController::class);
});



