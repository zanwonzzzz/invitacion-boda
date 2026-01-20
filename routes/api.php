<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitadosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
Route::get('/invitados', [InvitadosController::class, 'Invitados']);

Route::get('/numero/{id}', [InvitadosController::class, 'NumeroContemplados']);

Route::put('/confirmacion/{id}', [InvitadosController::class, 'Confirmacion']);

Route::put('/no-confirmacion/{id}', [InvitadosController::class, 'NoAsistencia']);