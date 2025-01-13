<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;

Route::prefix('admin')->middleware('auth:admin', 'role:super-admin|admin')->group(function () {
    //admin.dashboard
    Route::resource('permissions',PermissionController::class);
    
    Route::resource('roles', RoleController::class);
    
    Route::get('roles/{id}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{id}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.update-permissions');

    Route::resource('users',AdminUserController::class);

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    //Website route
    Route::resource('property',PropertyController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('about',AboutController::class);
    Route::resource('news',NewsController::class);
    Route::resource('agent',AgentController::class);
    Route::resource('partner',PartnerController::class);
   
});

Route::middleware('auth:admin')->group(function() {
    //Setting Route
    Route::prefix('setting')->group(function () {
        Route::resource('seo', SeoController::class)->only(['index', 'update']);
        Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
        Route::resource('website', SettingController::class)->only(['index', 'update']);
        Route::resource('page', PageController::class);
    });
});

