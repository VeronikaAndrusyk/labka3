<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('accounting', AccountingController::class);
//Секція Route::resource('accounting', 'AccountingController'); - цей
// маршрут визначає RESTful-маршрут для ресурсу 'accounting'. Він
// автоматично визначає маршрути для стандартних дій управління ресурсом,
// таких як створення, отримання, оновлення та видалення.
