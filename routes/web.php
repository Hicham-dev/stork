<?php

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

Route::domain('admin.stork.com')->group(function () {
    Route::get('/', function () {
        return view('backoffice.admin.dashboard');
    });

    Route::get('/authentification', function () {
        return view('backoffice.admin.login');
    });

    Route::get('/livraisons', function () {
        return view('backoffice.admin.delivary.all');
    });

    Route::get('/livraisons/collectee', function () {
        return view('backoffice.admin.delivary.collected');
    });

    Route::get('/livraisons/en-preparation', function () {
        return view('backoffice.admin.delivary.preparing');
    });

    Route::get('/livraisons/preparee', function () {
        return view('backoffice.admin.delivary.prepared');
    });

    Route::get('/livraisons/en-attente-de-livraison', function () {
        return view('backoffice.admin.delivary.waiting_to_be_delivered');
    });

    Route::get('/livraisons/en-cours-de-livraison', function () {
        return view('backoffice.admin.delivary.delivering');
    });

    Route::get('/livraisons/livree', function () {
        return view('backoffice.admin.delivary.delivered');
    });

    Route::get('/livraisons/en-retour', function () {
        return view('backoffice.admin.delivary.returning');
    });

    Route::get('/livraisons/en-attente-de-retour', function () {
        return view('backoffice.admin.delivary.waiting_to_be_returned');
    });

    Route::get('/livraisons/retournee', function () {
        return view('backoffice.admin.delivary.returned');
    });

    Route::prefix('agences')->group(function () {
        Route::get('/', function () {
            return view('backoffice.admin.agencies.all');
        });

        Route::get('/entrepots', function () {
            return view('backoffice.admin.agencies.warehouses');
        });
    });
});

Route::domain('agence.stork.com')->group(function () {
    Route::get('/', function () {
        return 'agence';
    });
});

Route::get('/', function () {
    return view('welcome');
});
