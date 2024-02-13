<?php

use spizian\wizardtube\Controllers\InstallDatabaseController;
use spizian\wizardtube\Controllers\InstallFinishController;
use spizian\wizardtube\Controllers\InstallFolderController;
use spizian\wizardtube\Controllers\InstallLicenseController;
use spizian\wizardtube\Controllers\InstallIndexController;
use spizian\wizardtube\Controllers\InstallKeysController;
use spizian\wizardtube\Controllers\InstallMigrationsController;
use spizian\wizardtube\Controllers\InstallServerController;
use spizian\wizardtube\Controllers\InstallSetDatabaseController;
use spizian\wizardtube\Controllers\InstallSetKeysController;
use spizian\wizardtube\Controllers\InstallSetMigrationsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'install',
    'namespace' => 'spizian\wizardtube\Controllers',
    'middleware' => ['web', 'installer']
], static function () {
    Route::get('/', ['as' => 'install.index', 'uses' => InstallIndexController::class]);
    Route::get('/server', ['as' => 'install.server', 'uses' => InstallServerController::class]);
    Route::get('/folders', ['as' => 'install.folders', 'uses' => InstallFolderController::class]);
    Route::get('/license', ['as' => 'install.license', 'uses' => InstallLicenseController::class]);
    Route::post('/license', ['as' => 'install.license', 'uses' => InstallLicenseController::class]);
    Route::get('/database', ['as' => 'install.database', 'uses' => InstallDatabaseController::class]);
    Route::post('/database', ['uses' => InstallSetDatabaseController::class]);
    Route::get('/migrations', ['as' => 'install.migrations', 'uses' => InstallMigrationsController::class]);
    Route::post('/migrations', ['as' => 'install.migrations', 'uses' => InstallSetMigrationsController::class]);
    Route::get('/keys', ['as' => 'install.keys', 'uses' => InstallKeysController::class]);
    Route::post('/keys', ['as' => 'install.keys', 'uses' => InstallSetKeysController::class]);
    Route::get('/finish', ['as' => 'install.finish', 'uses' => InstallFinishController::class]);
});
