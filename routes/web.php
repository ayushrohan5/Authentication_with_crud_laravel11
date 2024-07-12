<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;



Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::group(['prefix' =>'account'], function(){
   
    Route::group(['middleware' =>'guest'], function(){
        
        Route::get('login',[LoginController::class,'index'])->name('account.login');
        Route::get('register',[LoginController::class,'register'])->name('account.register'); 
        Route::post('process-register',[LoginController::class,'processRegister'])->name('account.processRegister');
        Route::post('authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware' =>'auth'], function(){

        Route::get('logout',[LoginController::class,'logout'])->name('account.logout');
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('account.dashboard');
        // routes/web.php



    });
});

 Route::get('register',[LoginController::class,'register'])->name('account.register');

Route::get('resetpass', [ResetPasswordController::class,'showResetForm'])->name('resetpass');
Route::post('reset', [ResetPasswordController::class, 'reset'])->name('password.reset');
Route::get('update/{token}', [ResetPasswordController::class,'showResetForm2']);
Route::post('updatepass', [ResetPasswordController::class, 'updatepass'])->name('password.update');
Route::get('userprofile', [Dashboardcontroller::class,'showuserprofile'])->name('userprofile');
Route::get('/delet/{id}',[DashboardController::class,'deleteUser']);
Route::get('/updateuser/{id}',[DashboardController::class,'loadEditForm'])->name('updateuser');
Route::post('/updateuser/{id}',[DashboardController::class,'EditUser'])->name('EditUser');
Route::get('Adduser',[DashboardController::class,'Adduser'])->name('Adduser');
Route::post('process-adduser',[DashboardController::class,'processadduser'])->name('process-adduser');
Route::get('/viewuser/{id}',[DashboardController::class, 'viewUser']);
Route::get('permissions', [PermissionController::class,'ViewPermission'])->name('permissions');
Route::get('addpermissions', [PermissionController::class,'viewAddPermission'])->name('addpermissions');
Route::post('addPermission', [PermissionController::class, 'storePermission'])->name('permissions.store');
Route::get('/deletee/{id}',[PermissionController::class,'deletePermission']);
Route::get('/permissions/{id}',[PermissionController::class,'ViewEditPermission'])->name('EditPermissions');
Route::post('/permissions/{id}',[PermissionController::class, 'EditPermission'])->name('EditPermission');

Route::get('roles', [RolesController::class,'ViewRoles'])->name('roles');
Route::get('addroles', [RolesController::class,'viewAddRoles'])->name('addroles');
Route::post('addroles', [RolesController::class, 'storeroles'])->name('roles.store');
Route::get('/delete/{id}',[RolesController::class,'deleteroles']);
Route::get('/roles/{id}',[RolesController::class,'ViewEditRoles'])->name('EditRoles');
Route::post('/roles/{id}',[RolesController::class, 'EditRoles'])->name('EditRoles');
Route::get('/roless/{id}',[RolesController::class,'activeRoles']);
Route::get('/active-permissions/{id}',[PermissionController::class,'activePermissions']);