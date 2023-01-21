<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ArticulosController;
use App\Http\Controllers\Admin\SolicitudProcesoController;

Route::get('admin', [HomeController::class, 'index']);

Route::resource('admin/articulos', ArticulosController::class)->names('admin.articulos');

Route::resource('admin/solicitud', SolicitudProcesoController::class)->names('admin.solicitud');